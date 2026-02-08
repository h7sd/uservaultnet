<?php $__env->startSection('headerButtons'); ?>
    <?php if (isset($component)) { $__componentOriginal643a64700a9a96cf551790e8c341fc30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643a64700a9a96cf551790e8c341fc30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header-btn','data' => ['link' => ''.e(route('admin.cache.reset')).'','btnText' => ''.e(__('admin/labels.reset_cache')).'','iconName' => 'data','iconType' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.cache.reset')).'','btnText' => ''.e(__('admin/labels.reset_cache')).'','iconName' => 'data','iconType' => 'solid']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $attributes = $__attributesOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__attributesOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $component = $__componentOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__componentOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageContent'); ?>
    <div class="mb-6">
        <?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/dashboard.title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/dashboard.title')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
            <?php echo e(__('admin/dashboard.desc')); ?>

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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="<?php echo e(route('admin.users.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.users.title')).'','desc' => ''.e(__('admin/dashboard.metrics.users.description')).'','value' => ''.e($metrics['users']).'','iconName' => 'users-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.users.title')).'','desc' => ''.e(__('admin/dashboard.metrics.users.description')).'','value' => ''.e($metrics['users']).'','iconName' => 'users-01']); ?>
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
        </a>
        <a href="<?php echo e(route('admin.posts.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.publications.title')).'','desc' => ''.e(__('admin/dashboard.metrics.publications.description')).'','value' => ''.e($metrics['publications']).'','iconName' => 'layout-alt-04']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.publications.title')).'','desc' => ''.e(__('admin/dashboard.metrics.publications.description')).'','value' => ''.e($metrics['publications']).'','iconName' => 'layout-alt-04']); ?>
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
        </a>
        <a href="<?php echo e(route('admin.market.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.products.title')).'','desc' => ''.e(__('admin/dashboard.metrics.products.description')).'','value' => ''.e($metrics['products']).'','iconName' => 'shopping-bag-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.products.title')).'','desc' => ''.e(__('admin/dashboard.metrics.products.description')).'','value' => ''.e($metrics['products']).'','iconName' => 'shopping-bag-01']); ?>
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
        </a>

        <a href="<?php echo e(route('admin.jobs.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.jobs.title')).'','desc' => ''.e(__('admin/dashboard.metrics.jobs.description')).'','value' => ''.e($metrics['jobs']).'','iconName' => 'briefcase-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.jobs.title')).'','desc' => ''.e(__('admin/dashboard.metrics.jobs.description')).'','value' => ''.e($metrics['jobs']).'','iconName' => 'briefcase-01']); ?>
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
        </a>
        <a href="<?php echo e(route('admin.ads.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.advertising.title')).'','desc' => ''.e(__('admin/dashboard.metrics.advertising.description')).'','value' => ''.e($metrics['advertising']).'','iconName' => 'announcement-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.advertising.title')).'','desc' => ''.e(__('admin/dashboard.metrics.advertising.description')).'','value' => ''.e($metrics['advertising']).'','iconName' => 'announcement-01']); ?>
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
        </a>
        <a href="<?php echo e(route('admin.stories.index')); ?>">
            <?php if (isset($component)) { $__componentOriginalc24de16d363bfa628600a8a76a8ed40b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc24de16d363bfa628600a8a76a8ed40b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metric.card','data' => ['title' => ''.e(__('admin/dashboard.metrics.stories.title')).'','desc' => ''.e(__('admin/dashboard.metrics.stories.description')).'','value' => ''.e($metrics['stories']).'','iconName' => 'phone-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metric.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/dashboard.metrics.stories.title')).'','desc' => ''.e(__('admin/dashboard.metrics.stories.description')).'','value' => ''.e($metrics['stories']).'','iconName' => 'phone-01']); ?>
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
        </a>
    </div>

    <?php if (isset($component)) { $__componentOriginalb2544d60214bfb4c8e1ac542caf8f7c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2544d60214bfb4c8e1ac542caf8f7c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info.cache-notice','data' => ['ttl' => config('cache.ttl.admin_metrics')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info.cache-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ttl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('cache.ttl.admin_metrics'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb2544d60214bfb4c8e1ac542caf8f7c5)): ?>
<?php $attributes = $__attributesOriginalb2544d60214bfb4c8e1ac542caf8f7c5; ?>
<?php unset($__attributesOriginalb2544d60214bfb4c8e1ac542caf8f7c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb2544d60214bfb4c8e1ac542caf8f7c5)): ?>
<?php $component = $__componentOriginalb2544d60214bfb4c8e1ac542caf8f7c5; ?>
<?php unset($__componentOriginalb2544d60214bfb4c8e1ac542caf8f7c5); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/dash/index.blade.php ENDPATH**/ ?>