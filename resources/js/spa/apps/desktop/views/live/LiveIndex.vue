<template>
    <div class="mt-top-offset block">
        <div class="mb-6">
            <PageTitle v-bind:hasBack="true" v-bind:titleText="$t('labels.live_stream')"></PageTitle>
        </div>
        <div class="min-w-content w-content">
            <div v-if="loading" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <div v-for="i in 8" v-bind:key="i" class="space-y-3 animate-pulse">
                    <div class="aspect-video bg-secondary rounded-xl"></div>
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-secondary"></div>
                        <div class="flex-1 space-y-2">
                            <div class="h-4 bg-secondary rounded w-3/4"></div>
                            <div class="h-3 bg-secondary rounded w-1/2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else-if="liveStreams.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <router-link 
                    v-for="stream in liveStreams" 
                    v-bind:key="stream.id"
                    v-bind:to="{ name: 'stream_view', params: { id: stream.id } }"
                    class="block group"
                >
                    <div class="relative aspect-video bg-secondary rounded-xl overflow-hidden mb-3">
                        <img 
                            v-if="stream.thumbnail_url" 
                            v-bind:src="stream.thumbnail_url" 
                            alt="Stream thumbnail" 
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute top-2 left-2 px-2 py-1 bg-red-600 text-white text-xs font-bold rounded">
                            LIVE
                        </div>
                        <div class="absolute bottom-2 left-2 px-2 py-1 bg-black/60 text-white text-xs rounded">
                            {{ stream.viewer_count }} viewers
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <img 
                            v-if="stream.user && stream.user.avatar_url" 
                            v-bind:src="stream.user.avatar_url" 
                            alt="Streamer" 
                            class="w-10 h-10 rounded-full object-cover"
                        />
                        <div v-else class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-lg font-bold text-white">
                            {{ getUserInitial(stream.user) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold truncate group-hover:text-primary transition text-white">{{ stream.title }}</h3>
                            <p class="text-sm text-gray-300 truncate">{{ getUserName(stream.user) }}</p>
                            <p class="text-xs text-gray-400">{{ stream.category || 'Just Chatting' }}</p>
                        </div>
                    </div>
                </router-link>
            </div>

            <div v-else class="flex flex-col items-center justify-center py-24 text-center">
                <div class="w-20 h-20 rounded-full bg-secondary flex items-center justify-center mb-6">
                    <SvgIcon name="video-recorder" type="solid" class="w-8 h-8 text-gray-400"></SvgIcon>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-white">No Live Streams</h2>
                <p class="text-gray-300 max-w-sm">
                    No one is streaming right now. Check back later!
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent, ref, onMounted } from 'vue';
    import axios from 'axios';
    
    import PageTitle from '@D/components/layout/PageTitle.vue';

    export default defineComponent({
        components: {
            PageTitle: PageTitle
        },
        setup() {
            const liveStreams = ref([]);
            const loading = ref(true);

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

            const fetchLiveStreams = async () => {
                try {
                    console.log('Fetching live streams from /api/streams...');
                    const response = await axios.get('/api/streams');
                    console.log('Live streams response:', response.data);
                    liveStreams.value = response.data.data || [];
                    console.log('Live streams count:', liveStreams.value.length);
                } catch (error) {
                    console.error('Error fetching live streams:', error);
                    console.error('Error details:', error.response);
                } finally {
                    loading.value = false;
                }
            };

            onMounted(() => {
                fetchLiveStreams();
                
                const interval = setInterval(fetchLiveStreams, 30000);
                return () => clearInterval(interval);
            });

            return {
                liveStreams,
                loading,
                getUserInitial,
                getUserName
            };
        }
    });
</script>