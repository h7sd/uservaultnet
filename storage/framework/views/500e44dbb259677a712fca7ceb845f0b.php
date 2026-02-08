<?php $__env->startSection('pageContent'); ?>
    <div class="mb-6">
        <div class="mb-4">
            <?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ''.e(__('business/ads.index_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ''.e(__('business/ads.index_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                <?php echo e(__('business/ads.index_desc')); ?> <a href="<?php echo e(asset(config('ads.document_links.advertising_guide'))); ?>" target="_blank" class="text-brand-900 underline"><?php echo e(__('labels.learn_more')); ?> &raquo;</a>
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
        <?php if (isset($component)) { $__componentOriginal8d8e08b0b06f3ed962e1890c005d9649 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tabs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $type == 'all','href' => ''.e(route('business.ads.index', ['type' => 'all'])).'','textLabel' => ''.e(__('business/ads.tabs.all')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type == 'all'),'href' => ''.e(route('business.ads.index', ['type' => 'all'])).'','textLabel' => ''.e(__('business/ads.tabs.all')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $type == 'active','href' => ''.e(route('business.ads.index', ['type' => 'active'])).'','textLabel' => ''.e(__('business/ads.tabs.active')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type == 'active'),'href' => ''.e(route('business.ads.index', ['type' => 'active'])).'','textLabel' => ''.e(__('business/ads.tabs.active')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $type == 'archived','href' => ''.e(route('business.ads.index', ['type' => 'archived'])).'','textLabel' => ''.e(__('business/ads.tabs.archived')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type == 'archived'),'href' => ''.e(route('business.ads.index', ['type' => 'archived'])).'','textLabel' => ''.e(__('business/ads.tabs.archived')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649)): ?>
<?php $attributes = $__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649; ?>
<?php unset($__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d8e08b0b06f3ed962e1890c005d9649)): ?>
<?php $component = $__componentOriginal8d8e08b0b06f3ed962e1890c005d9649; ?>
<?php unset($__componentOriginal8d8e08b0b06f3ed962e1890c005d9649); ?>
<?php endif; ?>
    </div>

    <?php if($adsList->isNotEmpty()): ?>
        <div class="grid grid-cols-3 gap-4">
            <?php $__currentLoopData = $adsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('business::ads.parts.index.ad-card', [
                    'adData' => $adData
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <?php if($type == 'all'): ?>
            <?php if (isset($component)) { $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-states.empty','data' => ['title' => ''.e(__('business/ads.empty_state.index_all.title')).'','desc' => ''.e(__('business/ads.empty_state.index_all.desc')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-states.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/ads.empty_state.index_all.title')).'','desc' => ''.e(__('business/ads.empty_state.index_all.desc')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $attributes = $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $component = $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
        <?php elseif($type == 'active'): ?>
            <?php if (isset($component)) { $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-states.empty','data' => ['title' => ''.e(__('business/ads.empty_state.index_active.title')).'','desc' => ''.e(__('business/ads.empty_state.index_active.desc')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-states.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/ads.empty_state.index_active.title')).'','desc' => ''.e(__('business/ads.empty_state.index_active.desc')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $attributes = $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $component = $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-states.empty','data' => ['title' => ''.e(__('business/ads.empty_state.index_archived.title')).'','desc' => ''.e(__('business/ads.empty_state.index_archived.desc')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-states.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/ads.empty_state.index_archived.title')).'','desc' => ''.e(__('business/ads.empty_state.index_archived.desc')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $attributes = $__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__attributesOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7)): ?>
<?php $component = $__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7; ?>
<?php unset($__componentOriginal3c19f50181b5a9da0801fe0b42e1a2a7); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (! ($adsList->isEmpty())): ?>
        <div class="mt-4">
            <?php echo e($adsList->onEachSide(1)->withQueryString()->links('pagination.index')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('businessLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/business/ads/index/index.blade.php ENDPATH**/ ?>