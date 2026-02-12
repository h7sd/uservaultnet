<template>
    <div class="relative w-full h-full bg-black overflow-hidden">
        <video
            ref="videoElement"
            class="w-full h-full object-contain"
            v-bind:muted="isMuted"
            playsinline
            autoplay
        ></video>

        <div v-if="isLive" class="absolute top-4 left-4 flex items-center gap-2 z-20">
            <div class="px-2 py-1 bg-red-600 text-white text-xs font-bold rounded">
                LIVE
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent, ref, onMounted, onUnmounted, watch } from 'vue';
    import Hls from 'hls.js';

    export default defineComponent({
        props: {
            streamUrl: String,
            isLive: Boolean
        },
        setup(props) {
            const videoElement = ref(null);
            const hlsInstance = ref(null);
            const isMuted = ref(true);

            const initializeHls = () => {
                console.log('[HLSPlayer] Initializing HLS with URL:', props.streamUrl);

                if (!videoElement.value) {
                    console.error('[HLSPlayer] Video element not found');
                    return;
                }

                if (!props.streamUrl) {
                    console.error('[HLSPlayer] No stream URL provided');
                    return;
                }

                if (hlsInstance.value) {
                    console.log('[HLSPlayer] Destroying previous HLS instance');
                    hlsInstance.value.destroy();
                }

                if (Hls.isSupported()) {
                    console.log('[HLSPlayer] HLS.js is supported, creating instance');
                    
                    const hls = new Hls({
                        enableWorker: true,
                        lowLatencyMode: true,
                        debug: true,
                        xhrSetup: function(xhr, url) {
                            xhr.withCredentials = false;
                        }
                    });

                    hlsInstance.value = hls;
                    hls.loadSource(props.streamUrl);
                    hls.attachMedia(videoElement.value);

                    hls.on(Hls.Events.MANIFEST_PARSED, () => {
                        console.log('[HLSPlayer] Manifest parsed, attempting to play');
                        videoElement.value.play().catch(err => {
                            console.error('[HLSPlayer] Play failed:', err);
                        });
                    });

                    hls.on(Hls.Events.ERROR, (event, data) => {
                        console.error('[HLSPlayer] HLS Error:', data);
                        if (data.fatal) {
                            switch(data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error('[HLSPlayer] Fatal network error, trying to recover');
                                    hls.startLoad();
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error('[HLSPlayer] Fatal media error, trying to recover');
                                    hls.recoverMediaError();
                                    break;
                                default:
                                    console.error('[HLSPlayer] Cannot recover, destroying HLS');
                                    hls.destroy();
                                    break;
                            }
                        }
                    });

                    hls.on(Hls.Events.FRAG_LOADED, () => {
                        console.log('[HLSPlayer] Fragment loaded successfully');
                    });
                } else if (videoElement.value.canPlayType('application/vnd.apple.mpegurl')) {
                    console.log('[HLSPlayer] Native HLS support detected');
                    videoElement.value.src = props.streamUrl;
                    videoElement.value.play().catch(err => {
                        console.error('[HLSPlayer] Native play failed:', err);
                    });
                } else {
                    console.error('[HLSPlayer] HLS is not supported in this browser');
                }
            };

            onMounted(() => {
                console.log('[HLSPlayer] Component mounted');
                initializeHls();
            });

            onUnmounted(() => {
                console.log('[HLSPlayer] Component unmounting');
                if (hlsInstance.value) {
                    hlsInstance.value.destroy();
                }
            });

            watch(() => props.streamUrl, (newUrl) => {
                console.log('[HLSPlayer] Stream URL changed to:', newUrl);
                initializeHls();
            });

            return {
                videoElement,
                isMuted
            };
        }
    });
</script>
