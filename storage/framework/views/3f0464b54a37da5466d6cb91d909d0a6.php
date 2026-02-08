<?php if (isset($component)) { $__componentOriginal67b993cc2e6e25b4af2f2867678201e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67b993cc2e6e25b4af2f2867678201e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('cardHeader', null, []); ?> 
        <a href="<?php echo e(route('business.ads.show', ['adId' => $adData->id])); ?>" class="block">
            <img class="w-full" src="<?php echo e($adData->preview_image_url); ?>" alt="Image">
        </a>
     <?php $__env->endSlot(); ?>
    <div class="mb-4">
        <?php if (isset($component)) { $__componentOriginale01a42519d101c41fc2623c8017545a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale01a42519d101c41fc2623c8017545a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.content','data' => ['content' => ''.e($adData->content).'','link' => ''.e(route('business.ads.show', ['adId' => $adData->id])).'','title' => ''.e($adData->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e($adData->content).'','link' => ''.e(route('business.ads.show', ['adId' => $adData->id])).'','title' => ''.e($adData->title).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale01a42519d101c41fc2623c8017545a8)): ?>
<?php $attributes = $__attributesOriginale01a42519d101c41fc2623c8017545a8; ?>
<?php unset($__attributesOriginale01a42519d101c41fc2623c8017545a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale01a42519d101c41fc2623c8017545a8)): ?>
<?php $component = $__componentOriginale01a42519d101c41fc2623c8017545a8; ?>
<?php unset($__componentOriginale01a42519d101c41fc2623c8017545a8); ?>
<?php endif; ?>
    </div>
    
    <div class="flex flex-col gap-1 mb-6">
        <?php if($adData->approval->isPending()): ?>
            <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($adData->approval->label()).' '.e($adData->approval->emoji()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($adData->approval->label()).' '.e($adData->approval->emoji()).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($adData->status->label()).' '.e($adData->status->emoji()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($adData->status->label()).' '.e($adData->status->emoji()).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('business/ads.spent', ['amount' => $adData->formatted_spent_budget, 'total' => $adData->formatted_total_budget])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('business/ads.spent', ['amount' => $adData->formatted_spent_budget, 'total' => $adData->formatted_total_budget])).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => 'ID '.e($adData->formatted_id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'ID '.e($adData->formatted_id).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('labels.views')).' '.e($adData->formatted_views_count).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('labels.views')).' '.e($adData->formatted_views_count).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
    </div>

    <div class="block">
        <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('business/ads.ad_from', ['date' => $adData->created_at->getFormatted()])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('business/ads.ad_from', ['date' => $adData->created_at->getFormatted()])).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $attributes = $__attributesOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__attributesOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70514311ba7e94c12b0172130bb77223)): ?>
<?php $component = $__componentOriginal70514311ba7e94c12b0172130bb77223; ?>
<?php unset($__componentOriginal70514311ba7e94c12b0172130bb77223); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67b993cc2e6e25b4af2f2867678201e8)): ?>
<?php $attributes = $__attributesOriginal67b993cc2e6e25b4af2f2867678201e8; ?>
<?php unset($__attributesOriginal67b993cc2e6e25b4af2f2867678201e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67b993cc2e6e25b4af2f2867678201e8)): ?>
<?php $component = $__componentOriginal67b993cc2e6e25b4af2f2867678201e8; ?>
<?php unset($__componentOriginal67b993cc2e6e25b4af2f2867678201e8); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/business/ads/parts/index/ad-card.blade.php ENDPATH**/ ?>