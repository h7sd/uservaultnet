<template>
    <div class="mt-top-offset block min-h-screen">
        <div v-if="loading" class="flex items-center justify-center min-h-[400px]">
            <div class="w-8 h-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
        </div>

        <div v-else-if="!stream" class="flex flex-col items-center justify-center py-24">
            <h1 class="text-2xl font-bold mb-2">Stream Offline</h1>
            <p class="text-muted-foreground mb-6">Dieser Stream ist momentan nicht verfügbar.</p>
            <router-link v-bind:to="{ name: 'live_index' }" class="btn btn-primary">
                Zurück zu Live Streams
            </router-link>
        </div>

        <div v-else class="flex flex-col xl:flex-row h-[calc(100vh-3.5rem)]">
            <div class="flex-1 flex flex-col min-w-0">
                <div class="relative bg-black flex-shrink-0 w-full aspect-video">
                    <HLSPlayer
                        v-if="stream && stream.hls_path"
                        v-bind:streamUrl="`https://ingest.uservault.de:8888/${stream.hls_path}/index.m3u8`"
                        v-bind:isLive="stream.is_live"
                    />
                    <div v-else class="absolute inset-0 flex items-center justify-center text-white">
                        <p>Loading stream...</p>
                    </div>
                </div>

                <div class="p-4 border-b border-border">
                    <div class="flex items-start gap-4">
                        <router-link v-bind:to="{ name: 'profile_view', params: { username: stream.user.username } }" class="flex-shrink-0">
                            <img 
                                v-if="stream.user.avatar_url" 
                                v-bind:src="stream.user.avatar_url" 
                                alt="Streamer" 
                                class="w-12 h-12 rounded-full object-cover"
                            />
                            <div v-else class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-lg font-bold text-white">
                                {{ getUserInitial(stream.user) }}
                            </div>
                        </router-link>

                        <div class="flex-1 min-w-0">
                            <h1 class="text-lg font-semibold truncate text-white">{{ stream.title }}</h1>
                            <router-link 
                                v-bind:to="{ name: 'profile_view', params: { username: stream.user.username } }"
                                class="text-primary hover:underline font-medium"
                            >
                                {{ getUserName(stream.user) }}
                            </router-link>
                            <div class="flex items-center gap-4 mt-1.5 text-xs text-gray-400">
                                <span>{{ stream.viewer_count }} viewers</span>
                                <span>{{ stream.category || 'Just Chatting' }}</span>
                            </div>
                        </div>

                        <button 
                            v-if="!isOwnStream"
                            @click="toggleFollow"
                            :disabled="followLoading"
                            class="px-4 py-2 rounded-lg font-medium transition-colors"
                            :class="isFollowing ? 'bg-gray-700 hover:bg-gray-600 text-white' : 'bg-brand-600 hover:bg-brand-700 text-white'"
                        >
                            {{ followLoading ? 'Loading...' : (isFollowing ? 'Following' : 'Follow') }}
                        </button>
                    </div>
                </div>

                <div v-if="stream.description" class="p-4">
                    <p class="text-sm text-gray-300">{{ stream.description }}</p>
                </div>
            </div>

            <!-- Live Chat Sidebar -->
            <div class="xl:w-80 flex flex-col border-l border-border bg-bg-pr2">
                <div class="p-4 border-b border-border">
                    <h2 class="text-lg font-semibold text-white">Live Chat</h2>
                </div>

                <div class="flex-1 overflow-y-auto p-4 space-y-3" ref="chatContainer">
                    <div v-for="message in chatMessages" :key="message.id" class="flex items-start gap-2">
                        <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-xs font-bold text-white flex-shrink-0">
                            {{ message.user.charAt(0).toUpperCase() }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-baseline gap-2">
                                <span class="text-sm font-medium text-primary">{{ message.user }}</span>
                                <span class="text-xs text-gray-500">{{ formatTime(message.timestamp) }}</span>
                            </div>
                            <p class="text-sm text-gray-300 break-words">{{ message.message }}</p>
                        </div>
                    </div>

                    <div v-if="chatMessages.length === 0" class="flex items-center justify-center h-full text-gray-500">
                        <p class="text-sm">No messages yet. Start the conversation!</p>
                    </div>
                </div>

                <div class="p-4 border-t border-border">
                    <form @submit.prevent="sendMessage" class="flex gap-2">
                        <input 
                            v-model="newMessage"
                            type="text" 
                            placeholder="Send a message..."
                            class="flex-1 px-3 py-2 bg-bg-pr border border-border rounded-lg text-white text-sm focus:outline-none focus:border-brand-600"
                            :disabled="!$auth.user"
                        />
                        <button 
                            type="submit"
                            :disabled="!newMessage.trim() || !$auth.user"
                            class="px-4 py-2 bg-brand-600 hover:bg-brand-700 disabled:bg-gray-700 disabled:cursor-not-allowed text-white rounded-lg font-medium transition-colors"
                        >
                            Send
                        </button>
                    </form>
                    <p v-if="!$auth.user" class="text-xs text-gray-500 mt-2">Login to chat</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent, ref, onMounted, onUnmounted, computed, nextTick } from 'vue';
    import { useRoute } from 'vue-router';
    import axios from 'axios';
    
    import HLSPlayer from '@D/components/widgets/HLSPlayer.vue';

    export default defineComponent({
        components: {
            HLSPlayer: HLSPlayer
        },
        setup() {
            const route = useRoute();
            const stream = ref(null);
            const loading = ref(true);
            const isFollowing = ref(false);
            const followLoading = ref(false);
            const chatMessages = ref([]);
            const newMessage = ref('');
            const chatContainer = ref(null);
            let echoChannel = null;

            const isOwnStream = computed(() => {
                return window.$auth?.user?.id === stream.value?.user?.id;
            });

            const getUserInitial = (user) => {
                if (!user) return 'U';
                if (user.first_name && user.first_name.length > 0) {
                    return user.first_name.charAt(0).toUpperCase();
                }
                if (user.username && user.username.length > 0) {
                    return user.username.charAt(0).toUpperCase();
                }
                return 'U';
            };

            const getUserName = (user) => {
                if (!user) return 'Unknown';
                const firstName = user.first_name || '';
                const lastName = user.last_name || '';
                const fullName = (firstName + ' ' + lastName).trim();
                return fullName || user.username || 'Unknown';
            };

            const formatTime = (timestamp) => {
                const date = new Date(timestamp);
                return date.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
            };

            const scrollChatToBottom = async () => {
                await nextTick();
                if (chatContainer.value) {
                    chatContainer.value.scrollTop = chatContainer.value.scrollHeight;
                }
            };

            const fetchChatMessages = async () => {
                try {
                    const response = await axios.get(`/api/streams/${route.params.id}/chat`);
                    chatMessages.value = response.data.data || [];
                    scrollChatToBottom();
                } catch (error) {
                    console.error('Error fetching chat:', error);
                }
            };

            const setupWebSocket = () => {
                const echoInstance = window.ColibriBRD || window.Echo;
                
                if (!echoInstance) {
                    console.warn('[StreamView] Laravel Echo not loaded');
                    return;
                }

                console.log('[StreamView] Setting up WebSocket for stream:', route.params.id);

                try {
                    echoChannel = echoInstance.channel(`stream.${route.params.id}`);
                    
                    echoChannel.listen('.message.sent', (data) => {
                        console.log('[StreamView] Received chat message:', data);
                        chatMessages.value.push({
                            id: data.id,
                            user: data.user.name,
                            message: data.message,
                            timestamp: data.timestamp
                        });
                        scrollChatToBottom();
                    });

                    console.log('[StreamView] WebSocket channel subscribed');
                } catch (error) {
                    console.error('[StreamView] WebSocket setup error:', error);
                }
            };

            const fetchStream = async () => {
                try {
                    console.log('[StreamView] Fetching stream ID:', route.params.id);
                    const response = await axios.get(`/api/streams/${route.params.id}`);
                    stream.value = response.data.data;
                    
                    console.log('[StreamView] Stream data received:', {
                        id: stream.value?.id,
                        title: stream.value?.title,
                        is_live: stream.value?.is_live,
                        hls_path: stream.value?.hls_path,
                        full_url: stream.value?.hls_path ? `https://ingest.uservault.de:8888/${stream.value.hls_path}/index.m3u8` : null
                    });
                    
                    if (stream.value?.user?.id && window.$auth?.user) {
                        checkFollowStatus();
                    }

                    // Load chat messages first, then setup WebSocket
                    try {
                        await fetchChatMessages();
                    } catch (chatError) {
                        console.error('[StreamView] Error loading chat messages:', chatError);
                    }

                    // Setup WebSocket after stream is loaded
                    try {
                        setupWebSocket();
                    } catch (wsError) {
                        console.error('[StreamView] Error setting up WebSocket:', wsError);
                    }
                } catch (error) {
                    console.error('[StreamView] Error fetching stream:', error);
                    if (error.response) {
                        console.error('[StreamView] Error response:', error.response.data);
                    }
                } finally {
                    loading.value = false;
                }
            };

            const checkFollowStatus = async () => {
                try {
                    const response = await axios.get(`/api/profile/${stream.value.user.username}`);
                    isFollowing.value = response.data.data?.relationship?.follows?.following || false;
                } catch (error) {
                    console.error('Error checking follow status:', error);
                }
            };

            const toggleFollow = async () => {
                if (!window.$auth?.user) {
                    window.$router.push({ name: 'auth_login' });
                    return;
                }

                followLoading.value = true;
                try {
                    await axios.post('/api/follows/follow/user', {
                        id: stream.value.user.id
                    });
                    isFollowing.value = !isFollowing.value;
                } catch (error) {
                    console.error('Error toggling follow:', error);
                } finally {
                    followLoading.value = false;
                }
            };

            const sendMessage = async () => {
                if (!newMessage.value.trim() || !window.$auth?.user) return;

                const messageText = newMessage.value.trim();
                newMessage.value = '';

                try {
                    const response = await axios.post(`/api/streams/${route.params.id}/chat`, {
                        message: messageText
                    });

                    chatMessages.value.push({
                        id: response.data.data.id,
                        user: response.data.data.user.name,
                        message: response.data.data.message,
                        timestamp: response.data.data.timestamp
                    });

                    scrollChatToBottom();
                } catch (error) {
                    console.error('Error sending message:', error);
                    newMessage.value = messageText;
                }
            };

            onMounted(() => {
                fetchStream();
            });

            onUnmounted(() => {
                console.log('[StreamView] Component unmounting');
                if (echoChannel) {
                    const echoInstance = window.ColibriBRD || window.Echo;
                    if (echoInstance) {
                        echoInstance.leave(`stream.${route.params.id}`);
                        console.log('[StreamView] WebSocket channel left');
                    }
                }
            });

            return {
                stream,
                loading,
                isFollowing,
                followLoading,
                isOwnStream,
                chatMessages,
                newMessage,
                chatContainer,
                getUserInitial,
                getUserName,
                formatTime,
                toggleFollow,
                sendMessage
            };
        }
    });
</script>
