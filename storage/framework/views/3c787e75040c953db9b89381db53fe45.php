<?php $__env->startSection('pageContent'); ?>
    <div>
        <div class="mb-16">
            <?php if (isset($component)) { $__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.parts.form-header','data' => ['title' => ''.e(__('labels.signup_almost_done.title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.parts.form-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('labels.signup_almost_done.title')).'']); ?>
                 <?php $__env->slot('icon', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'user-02','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'user-02','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('caption', null, []); ?> 
                    <?php echo e(__('labels.signup_almost_done.caption')); ?>

                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99)): ?>
<?php $attributes = $__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99; ?>
<?php unset($__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99)): ?>
<?php $component = $__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99; ?>
<?php unset($__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99); ?>
<?php endif; ?>
        </div>
        <div class="mb-6">
            <span class="text-lab-sc text-par-m mb-2 inline-block">
                <?php echo e(__('labels.signup_steps', ['current' => ($stepIndex + 1), 'total' => $totalSteps])); ?>

            </span>
            <div class="h-0.5 bg-fill-tr leading-none">
                <div class="h-0.5 bg-brand-900 min-w-4" style="width: <?php echo e(round((($stepIndex + 1) / $totalSteps) * 100)); ?>%;"></div>
            </div>
        </div>
        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split($stepComponentData['component'], [
            'stepIndex' => $stepIndex,
            'stepData' => $stepComponentData,
        ]);

$__html = app('livewire')->mount($__name, $__params, 'lw-870720753-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <div>
            <p class="text-par-s text-lab-sc text-center">
                <?php echo __('auth.auth_agreement', [
                    'app_name' => config('app.name'),
                    'terms_link' => route('document.terms.index'),
                    'policy_link' => route('document.privacy.index')
                ]); ?>

            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('authLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/onboarding/index.blade.php ENDPATH**/ ?>