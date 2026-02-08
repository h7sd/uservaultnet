<?php $__env->startSection('pageContent'); ?>
    <div class="mb-6">
        <?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/storage.show_title')).' ('.e($diskId).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/storage.show_title')).' ('.e($diskId).')']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $attributes = $__attributesOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__attributesOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $component = $__componentOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__componentOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala0d557e3724c5fce9b68a89fabd8740f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0d557e3724c5fce9b68a89fabd8740f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-desc','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-desc'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('admin/storage.show_desc')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0d557e3724c5fce9b68a89fabd8740f)): ?>
<?php $attributes = $__attributesOriginala0d557e3724c5fce9b68a89fabd8740f; ?>
<?php unset($__attributesOriginala0d557e3724c5fce9b68a89fabd8740f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0d557e3724c5fce9b68a89fabd8740f)): ?>
<?php $component = $__componentOriginala0d557e3724c5fce9b68a89fabd8740f; ?>
<?php unset($__componentOriginala0d557e3724c5fce9b68a89fabd8740f); ?>
<?php endif; ?>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/storage.metrics.image.title')).'','desc' => ''.e(__('admin/storage.metrics.image.description')).'','value' => ''.e(file_size_format($diskStats['image']['content_size'])).'','iconName' => 'image-05']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/storage.metrics.image.title')).'','desc' => ''.e(__('admin/storage.metrics.image.description')).'','value' => ''.e(file_size_format($diskStats['image']['content_size'])).'','iconName' => 'image-05']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $attributes = $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $component = $__componentOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/storage.metrics.video.title')).'','desc' => ''.e(__('admin/storage.metrics.video.description')).'','value' => ''.e(file_size_format($diskStats['video']['content_size'])).'','iconName' => 'video-recorder']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/storage.metrics.video.title')).'','desc' => ''.e(__('admin/storage.metrics.video.description')).'','value' => ''.e(file_size_format($diskStats['video']['content_size'])).'','iconName' => 'video-recorder']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $attributes = $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $component = $__componentOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/storage.metrics.audio.title')).'','desc' => ''.e(__('admin/storage.metrics.audio.description')).'','value' => ''.e(file_size_format($diskStats['audio']['content_size'])).'','iconName' => 'recording-03']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/storage.metrics.audio.title')).'','desc' => ''.e(__('admin/storage.metrics.audio.description')).'','value' => ''.e(file_size_format($diskStats['audio']['content_size'])).'','iconName' => 'recording-03']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $attributes = $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $component = $__componentOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/storage.metrics.document.title')).'','desc' => ''.e(__('admin/storage.metrics.document.description')).'','value' => ''.e(file_size_format($diskStats['document']['content_size'])).'','iconName' => 'file-attachment-05']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/storage.metrics.document.title')).'','desc' => ''.e(__('admin/storage.metrics.document.description')).'','value' => ''.e(file_size_format($diskStats['document']['content_size'])).'','iconName' => 'file-attachment-05']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $attributes = $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__attributesOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b)): ?>
<?php $component = $__componentOriginalc24de16d363bfa628600a8a76a8ed40b; ?>
<?php unset($__componentOriginalc24de16d363bfa628600a8a76a8ed40b); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/storage/show/index.blade.php ENDPATH**/ ?>