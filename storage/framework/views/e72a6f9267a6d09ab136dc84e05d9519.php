<div>
    <form method="POST" wire:submit.prevent="submitForm">
        <div class="mb-6">
            <?php if (isset($component)) { $__componentOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf2fd1aa04e08d1b5ff5cfc3e37b9f99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.parts.form-header','data' => ['title' => ''.e(__('auth.linker_login.title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.parts.form-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('auth.linker_login.title')).'']); ?>
                 <?php $__env->slot('icon', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'user-right-01','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'user-right-01','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
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
                    <?php echo e(__('auth.linker_login.caption', ['app_name' => config('app.name')])); ?>

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
            <div class="mb-3">
                <!--[if BLOCK]><![endif]--><?php if($loginStep == 2): ?>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['name' => 'authCreds.login','wire:model.trim' => 'authCreds.login','placeholder' => ''.e(__('auth.login_or_email')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'authCreds.login','wire:model.trim' => 'authCreds.login','placeholder' => ''.e(__('auth.login_or_email')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
                
                <!--[if BLOCK]><![endif]--><?php if($loginStep == 2): ?>
                    <div class="mt-3">
                        <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['name' => 'authCreds.password','isPassword' => true,'wire:model.trim' => 'authCreds.password','placeholder' => ''.e(__('auth.enter_password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'authCreds.password','isPassword' => true,'wire:model.trim' => 'authCreds.password','placeholder' => ''.e(__('auth.enter_password')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('auth.linker_login.button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','wire:loading.attr' => 'disabled','type' => 'submit','btnText' => ''.e(__('auth.linker_login.button')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
                <a href="<?php echo e(route('user.desktop.index')); ?>" class="block">
                    <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('labels.back_to_home')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','variant' => 'link','btnText' => ''.e(__('labels.back_to_home')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
</div><?php /**PATH /var/www/www.uservault.net/resources/views/livewire/user/linker/linker-form.blade.php ENDPATH**/ ?>