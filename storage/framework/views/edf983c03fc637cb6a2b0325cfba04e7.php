<!--[if BLOCK]><![endif]--><?php if(count($activeSocialDrivers)): ?>
    <div class="flex flex-col gap-3 mb-6">
        <?php
            $primaryOptions = ($showAllSocialOptions == true) ? collect($activeSocialDrivers)->all() : collect($activeSocialDrivers)->take(4);
        ?>

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $primaryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal1eec4baba05cbf598ca8008dfae8664c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1eec4baba05cbf598ca8008dfae8664c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.social.button','data' => ['href' => ''.e($driver['meta']['url']).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.social.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($driver['meta']['url']).'']); ?>
                 <?php $__env->slot('iconSlot', null, []); ?> 
                    <img class="w-full" src="<?php echo e($driver['meta']['logo']); ?>" alt="Logo">
                 <?php $__env->endSlot(); ?>
                <?php echo e(__('auth.login_with', ['provider_name' => $driver['meta']['name'] ])); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1eec4baba05cbf598ca8008dfae8664c)): ?>
<?php $attributes = $__attributesOriginal1eec4baba05cbf598ca8008dfae8664c; ?>
<?php unset($__attributesOriginal1eec4baba05cbf598ca8008dfae8664c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1eec4baba05cbf598ca8008dfae8664c)): ?>
<?php $component = $__componentOriginal1eec4baba05cbf598ca8008dfae8664c; ?>
<?php unset($__componentOriginal1eec4baba05cbf598ca8008dfae8664c); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!--[if BLOCK]><![endif]--><?php if(count($activeSocialDrivers) > 4 && empty($showAllSocialOptions)): ?>
            <button type="button" class="border border-edge-sc rounded-md w-full" wire:click="showAllSocialLoginOptions" wire:loading.attr="disabled">
                <span class="flex w-full h-14 items-center justify-center gap-1">
                    <span class="text-center text-lab-pr2 text-par-m font-medium">
                        <?php echo e(__('auth.other_options')); ?>

                    </span>
                    <span class="size-icon text-lab-pr2">
                        <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'chevron-down','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-down','type' => 'solid']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                    </span>
                </span>
            </button>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="mb-6">
        <?php if (isset($component)) { $__componentOriginal1b4b9bf07be9e09412a04f86f56db797 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b4b9bf07be9e09412a04f86f56db797 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.form.auth-options-div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.form.auth-options-div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b4b9bf07be9e09412a04f86f56db797)): ?>
<?php $attributes = $__attributesOriginal1b4b9bf07be9e09412a04f86f56db797; ?>
<?php unset($__attributesOriginal1b4b9bf07be9e09412a04f86f56db797); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b4b9bf07be9e09412a04f86f56db797)): ?>
<?php $component = $__componentOriginal1b4b9bf07be9e09412a04f86f56db797; ?>
<?php unset($__componentOriginal1b4b9bf07be9e09412a04f86f56db797); ?>
<?php endif; ?>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/www.uservault.net/resources/views/livewire/user/auth/parts/social-buttons.blade.php ENDPATH**/ ?>