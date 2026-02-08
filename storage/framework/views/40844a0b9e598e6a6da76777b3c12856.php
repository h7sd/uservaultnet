<div>
    <form method="POST" wire:submit.prevent="submitForm">
        <div class="mb-6">
            <?php if (isset($component)) { $__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.parts.form-header','data' => ['title' => ''.e(__('auth.new_password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.parts.form-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('auth.new_password')).'']); ?>

                 <?php $__env->slot('caption', null, []); ?> 
                    <?php echo e(__('auth.new_password_helper')); ?>

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
        
        <div class="block">
            <?php if (isset($component)) { $__componentOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.user-card','data' => ['userData' => $userData]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.user-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['userData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($userData)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2)): ?>
<?php $attributes = $__attributesOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2; ?>
<?php unset($__attributesOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2)): ?>
<?php $component = $__componentOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2; ?>
<?php unset($__componentOriginal6a1f0d894db1ba42a9c0ed0fdd7bc5f2); ?>
<?php endif; ?>
            
            <div class="mb-3">
                <div class="mt-3">
                    <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['name' => 'newPassword','isPassword' => true,'wire:model.trim' => 'newPassword','placeholder' => ''.e(__('auth.enter_new_password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newPassword','isPassword' => true,'wire:model.trim' => 'newPassword','placeholder' => ''.e(__('auth.enter_new_password')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
                </div>
                <?php if (isset($component)) { $__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(__('auth.password_strength_helper', ['min_length' => config('user.password_min')])); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67)): ?>
<?php $attributes = $__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67; ?>
<?php unset($__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67)): ?>
<?php $component = $__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67; ?>
<?php unset($__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('labels.continue')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('labels.continue')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
                <a href="<?php echo e(route('user.auth.index')); ?>" class="block">
                    <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('auth.back_to_login')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('auth.back_to_login')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
                </a>
            </div>

            <?php echo $__env->make('livewire.user.auth.parts.agreement', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </form>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/livewire/user/auth/reset-form.blade.php ENDPATH**/ ?>