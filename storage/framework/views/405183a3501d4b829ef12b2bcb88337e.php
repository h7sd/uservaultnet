<?php $__env->startSection('pageContent'); ?>
    <div id="colibriplus-desktop-app">
        <?php if (! (config('app.hide_author_attribution'))): ?>
            <?php echo $__env->make('apps.spa.devnote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.spa.apps.desktop.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/spa/desktop/index.blade.php ENDPATH**/ ?>