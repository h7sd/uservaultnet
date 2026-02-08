<?php $__env->startSection('pageContent'); ?>
    <?php if ($__env->exists('document::author.i18n.' . app()->getLocale())) echo $__env->make('document::author.i18n.' . app()->getLocale(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('documentLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/document/author/index.blade.php ENDPATH**/ ?>