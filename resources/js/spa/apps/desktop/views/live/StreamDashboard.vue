<template>
    <div class="mt-top-offset block">
        <div class="mb-6">
            <PageTitle v-bind:hasBack="true" v-bind:titleText="'Stream Dashboard'"></PageTitle>
        </div>
        <div class="min-w-content w-content max-w-5xl mx-auto space-y-6">
            <div v-if="loading" class="flex items-center justify-center min-h-[200px]">
                <div class="w-8 h-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
            </div>

            <div v-else>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-secondary/20 rounded-xl p-4">
                        <p class="text-xs text-gray-400 mb-1">Total Streams</p>
                        <p class="text-2xl font-bold text-white">{{ stats.total_streams || 0 }}</p>
                    </div>
                    <div class="bg-secondary/20 rounded-xl p-4">
                        <p class="text-xs text-gray-400 mb-1">Total Views</p>
                        <p class="text-2xl font-bold text-white">{{ stats.total_views || 0 }}</p>
                    </div>
                    <div class="bg-secondary/20 rounded-xl p-4">
                        <p class="text-xs text-gray-400 mb-1">Peak Viewers</p>
                        <p class="text-2xl font-bold text-white">{{ stats.peak_viewers || 0 }}</p>
                    </div>
                    <div class="bg-secondary/20 rounded-xl p-4">
                        <p class="text-xs text-gray-400 mb-1">Stream Time</p>
                        <p class="text-2xl font-bold text-white">{{ formatTime(stats.total_stream_time_seconds || 0) }}</p>
                    </div>
                </div>

                <div class="bg-secondary/10 rounded-xl p-6 space-y-4">
                    <h2 class="text-lg font-semibold text-white">Stream Settings</h2>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-white">Title</label>
                        <input 
                            v-model="streamTitle" 
                            type="text" 
                            placeholder="Stream Title" 
                            class="w-full px-4 py-2 bg-background border border-border rounded-lg text-white"
                        />
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-white">Category</label>
                        <input 
                            v-model="streamCategory" 
                            type="text" 
                            placeholder="e.g. Gaming, Just Chatting" 
                            class="w-full px-4 py-2 bg-background border border-border rounded-lg text-white"
                        />
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-white">Description</label>
                        <textarea 
                            v-model="streamDescription" 
                            placeholder="What is your stream about?"
                            rows="3"
                            class="w-full px-4 py-2 bg-background border border-border rounded-lg resize-none text-white"
                        ></textarea>
                    </div>

                    <button 
                        v-on:click="saveStreamSettings" 
                        v-bind:disabled="isSaving"
                        class="btn btn-primary w-full"
                    >
                        {{ isSaving ? 'Saving...' : 'Save Settings' }}
                    </button>
                </div>

                <div class="bg-secondary/10 rounded-xl p-6 space-y-4">
                    <h2 class="text-lg font-semibold text-white">Stream Connection (OBS)</h2>

                    <div class="p-3 bg-destructive/10 rounded-lg border border-destructive/20 mb-4">
                        <p class="text-xs text-red-400">
                            ⚠️ Never share your Stream URL with others!
                        </p>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium text-white">WHIP Server URL</label>
                        <div class="flex gap-2">
                            <input 
                                v-bind:value="whipUrl" 
                                readonly 
                                class="flex-1 px-4 py-2 bg-background border border-border rounded-lg font-mono text-xs text-white"
                            />
                            <button 
                                v-on:click="copyStreamKey" 
                                class="btn btn-secondary px-4"
                            >
                                Copy
                            </button>
                        </div>
                    </div>

                    <button 
                        v-on:click="regenerateStreamKey" 
                        class="btn btn-outline w-full"
                    >
                        Generate New Stream Key
                    </button>

                    <div class="pt-4 border-t border-border/50 space-y-2">
                        <h3 class="text-sm font-semibold text-white">OBS Setup (WHIP)</h3>
                        <ol class="text-xs text-gray-300 space-y-1 list-decimal list-inside">
                            <li>Open Settings → Stream</li>
                            <li>Select "WHIP" as Service</li>
                            <li>Copy and paste WHIP Server URL above</li>
                            <li>Leave Bearer Token empty</li>
                            <li>Start streaming</li>
                        </ol>
                    </div>
                </div>
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
            const loading = ref(true);
            const isSaving = ref(false);
            const stats = ref({});
            const streamTitle = ref('');
            const streamCategory = ref('');
            const streamDescription = ref('');
            const streamKey = ref('');

            const whipUrl = ref('');

            const formatTime = (seconds) => {
                const hours = Math.floor(seconds / 3600);
                const mins = Math.floor((seconds % 3600) / 60);
                return hours > 0 ? `${hours}h ${mins}m` : `${mins}m`;
            };

            const fetchDashboardData = async () => {
                try {
                    const response = await axios.get('/api/streams/my/dashboard');
                    stats.value = response.data.stats || {};
                    streamKey.value = response.data.stream_key || '';

                    if (response.data.stream) {
                        streamTitle.value = response.data.stream.title || '';
                        streamCategory.value = response.data.stream.category || '';
                        streamDescription.value = response.data.stream.description || '';
                    }

                    whipUrl.value = `https://ingest.uservault.de/${streamKey.value}/whip`;
                } catch (error) {
                    console.error('Error fetching dashboard data:', error);
                } finally {
                    loading.value = false;
                }
            };

            const saveStreamSettings = async () => {
                isSaving.value = true;
                try {
                    await axios.post('/api/streams/start', {
                        title: streamTitle.value || 'Untitled Stream',
                        category: streamCategory.value || 'Just Chatting',
                        description: streamDescription.value
                    });
                    alert('Settings saved!');
                } catch (error) {
                    console.error('Error saving settings:', error);
                    alert('Error saving settings');
                } finally {
                    isSaving.value = false;
                }
            };

            const copyStreamKey = () => {
                navigator.clipboard.writeText(whipUrl.value);
                alert('Stream URL copied!');
            };

            const regenerateStreamKey = async () => {
                try {
                    const response = await axios.post('/api/streams/generate-key');
                    streamKey.value = response.data.stream_key;
                    whipUrl.value = `https://ingest.uservault.de/${streamKey.value}/whip`;
                    alert('New stream key generated!');
                } catch (error) {
                    console.error('Error regenerating key:', error);
                    alert('Error generating key');
                }
            };

            onMounted(() => {
                fetchDashboardData();
            });

            return {
                loading,
                isSaving,
                stats,
                streamTitle,
                streamCategory,
                streamDescription,
                whipUrl,
                formatTime,
                saveStreamSettings,
                copyStreamKey,
                regenerateStreamKey
            };
        }
    });
</script>
