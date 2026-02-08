<div>
    <form method="POST" wire:submit.prevent="submitForm">
        <div class="mb-16">
            <div class="mb-4">
                <?php if (isset($component)) { $__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.parts.form-header','data' => ['title' => ''.e(__('auth.signup_success_message.title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.parts.form-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('auth.signup_success_message.title')).'']); ?>
                     <?php $__env->slot('icon', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'mail-01','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'mail-01','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
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
                        <?php echo e(__('auth.signup_success_message.caption', ['email_address' => $confirmationData->email])); ?>

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
            
            <?php if (isset($component)) { $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $attributes = $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $component = $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
        </div>
        
        <div class="block">
            <!--[if BLOCK]><![endif]--><?php if($emailResent): ?>
                <div class="mb-2">
                    <?php if (isset($component)) { $__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.helper-text','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
                        <?php echo e(__('auth.resend_link_success')); ?> &check;
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
            <?php else: ?>
                <div class="mb-2">
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
                        <?php echo e(__('auth.resend_link_helper')); ?>

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
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('auth.resend_link')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('auth.resend_link')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>

                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['resend-timeout'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php if (isset($component)) { $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.valerr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.valerr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($message); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $attributes = $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $component = $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <a href="<?php echo e(route('user.auth.signup')); ?>" class="block">
                    <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('auth.already_have_account')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('auth.already_have_account')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
</div><?php /**PATH /var/www/www.uservault.net/resources/views/livewire/user/auth/signup-success-form.blade.php ENDPATH**/ ?>