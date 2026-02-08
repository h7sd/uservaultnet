<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('controls', null, []); ?> 
        <?php if(route_is('business.ads.*')): ?>
            <?php if (isset($component)) { $__componentOriginal643a64700a9a96cf551790e8c341fc30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643a64700a9a96cf551790e8c341fc30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header-btn','data' => ['link' => ''.e(route('business.ads.create')).'','btnText' => ''.e(__('business/ads.create_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('business.ads.create')).'','btnText' => ''.e(__('business/ads.create_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $attributes = $__attributesOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__attributesOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $component = $__componentOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__componentOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
        <?php elseif(route_is('business.market.*')): ?>
            <?php if (isset($component)) { $__componentOriginal643a64700a9a96cf551790e8c341fc30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643a64700a9a96cf551790e8c341fc30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header-btn','data' => ['link' => ''.e(route('business.market.create')).'','btnText' => ''.e(__('business/market.create_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('business.market.create')).'','btnText' => ''.e(__('business/market.create_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $attributes = $__attributesOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__attributesOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $component = $__componentOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__componentOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
        <?php elseif(route_is('business.jobs.*')): ?>
            <?php if (isset($component)) { $__componentOriginal643a64700a9a96cf551790e8c341fc30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643a64700a9a96cf551790e8c341fc30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header-btn','data' => ['link' => ''.e(route('business.jobs.create')).'','btnText' => ''.e(__('business/jobs.create_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('business.jobs.create')).'','btnText' => ''.e(__('business/jobs.create_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $attributes = $__attributesOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__attributesOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $component = $__componentOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__componentOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
        <?php elseif(route_is('business.services.*')): ?>
            <?php if (isset($component)) { $__componentOriginal643a64700a9a96cf551790e8c341fc30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643a64700a9a96cf551790e8c341fc30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header-btn','data' => ['link' => ''.e(route('business.services.create')).'','btnText' => ''.e(__('business/services.create_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('business.services.create')).'','btnText' => ''.e(__('business/services.create_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $attributes = $__attributesOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__attributesOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643a64700a9a96cf551790e8c341fc30)): ?>
<?php $component = $__componentOriginal643a64700a9a96cf551790e8c341fc30; ?>
<?php unset($__componentOriginal643a64700a9a96cf551790e8c341fc30); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/business/parts/header.blade.php ENDPATH**/ ?>