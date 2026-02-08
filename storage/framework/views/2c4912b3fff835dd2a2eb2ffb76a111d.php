
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
    <div class="flex flex-col h-full">
        <div class="mb-4">
            <?php if (isset($component)) { $__componentOriginale01a42519d101c41fc2623c8017545a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale01a42519d101c41fc2623c8017545a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.content','data' => ['content' => ''.e($jobData->overview).'','link' => ''.e(route('business.jobs.show', ['jobId' => $jobData->id])).'','title' => ''.e($jobData->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e($jobData->overview).'','link' => ''.e(route('business.jobs.show', ['jobId' => $jobData->id])).'','title' => ''.e($jobData->title).'']); ?> <?php echo $__env->renderComponent(); ?>
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
            <?php if($jobData->approval->isPending()): ?>
                <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($jobData->approval->label()).' '.e($jobData->approval->emoji()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($jobData->approval->label()).' '.e($jobData->approval->emoji()).'']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($jobData->status->label()).' '.e($jobData->status->emoji()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($jobData->status->label()).' '.e($jobData->status->emoji()).'']); ?> <?php echo $__env->renderComponent(); ?>
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
    
            <?php if($jobData->is_start_income): ?>
                <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('labels.income_from', ['amount' => $jobData->formatted_income])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('labels.income_from', ['amount' => $jobData->formatted_income])).'']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('labels.income_to', ['amount' => $jobData->formatted_income])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('labels.income_to', ['amount' => $jobData->formatted_income])).'']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($jobData->category_name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($jobData->category_name).'']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($jobData->is_remote ? __('business/jobs.remote_work') : $jobData->locations).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($jobData->is_remote ? __('business/jobs.remote_work') : $jobData->locations).'']); ?> <?php echo $__env->renderComponent(); ?>
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
    
        <div class="grid grid-cols-2 gap-4 mt-auto">
            <div class="flex flex-col gap-1">
                <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e($jobData->created_at->getIso()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($jobData->created_at->getIso()).'']); ?> <?php echo $__env->renderComponent(); ?>
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
            <div class="flex flex-col gap-1">
                <?php if (isset($component)) { $__componentOriginal70514311ba7e94c12b0172130bb77223 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70514311ba7e94c12b0172130bb77223 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.timeline.value','data' => ['value' => ''.e(__('labels.views')).' '.e($jobData->views_count).'','rightAlign' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.timeline.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(__('labels.views')).' '.e($jobData->views_count).'','rightAlign' => 'true']); ?> <?php echo $__env->renderComponent(); ?>
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
        </div>
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
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/business/jobs/parts/index/job-card.blade.php ENDPATH**/ ?>