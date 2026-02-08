<?php if(config('pwa.enabled')): ?>
	<link rel="manifest" href="<?php echo e(asset('pwa/manifest.json')); ?>">
	<script src="<?php echo e(asset('pwa/service-worker.js')); ?>"></script>

	<script>
		if ('serviceWorker' in navigator) {
			window.addEventListener('load', () => {
				navigator.serviceWorker.register('/pwa/service-worker.js').then((reg) => {
					console.log('Service worker registered');
				}).catch((err) => {
					console.error('Service worker error');
				});
			});
		}
	</script>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/spa/apps/parts/pwa.blade.php ENDPATH**/ ?>