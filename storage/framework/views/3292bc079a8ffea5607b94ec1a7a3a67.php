<?php $__env->startSection('pageContent'); ?>
    <div class="w-content">
        <div class="rounded-2xl overflow-hidden">
            <div class="bg-lab-pr text-bg-pr p-6">
                <div class="mb-2">
                    <div class="size-large-avatar border-bg-sc/30 border-4 rounded-full overflow-hidden">
                        <?php if (isset($component)) { $__componentOriginale3b1800702d09db8605e2ea6bec09b0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3b1800702d09db8605e2ea6bec09b0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.general.avatars.img','data' => ['src' => ''.e(me()->avatar_url).'','class' => 'w-full','alt' => 'Avatar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('general.avatars.img'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(me()->avatar_url).'','class' => 'w-full','alt' => 'Avatar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3b1800702d09db8605e2ea6bec09b0a)): ?>
<?php $attributes = $__attributesOriginale3b1800702d09db8605e2ea6bec09b0a; ?>
<?php unset($__attributesOriginale3b1800702d09db8605e2ea6bec09b0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3b1800702d09db8605e2ea6bec09b0a)): ?>
<?php $component = $__componentOriginale3b1800702d09db8605e2ea6bec09b0a; ?>
<?php unset($__componentOriginale3b1800702d09db8605e2ea6bec09b0a); ?>
<?php endif; ?>
                    </div>
                </div>
                <h4 class="text-title-3 tracking-tighter font-medium">
                    <?php echo e(__('labels.hi_user', ['name' => me()->first_name])); ?>

                </h4>
                
                <p class="opacity-90 text-par-n">
                    <?php echo e(__('business/dashboard.welcome_title')); ?>

                </p>
            </div>
            <div class="bg-bg-pr p-6">
                <p class="text-par-n mb-3 text-lab-pr2">
                    <?php echo __('business/dashboard.about_business_account'); ?>

                </p>
                <a href="<?php echo e(config('business.links.business_account_guide')); ?>" class="text-par-s hover:underline text-brand-900">
                    <?php echo e(__('labels.learn_more')); ?> &raquo;
                </a>
            </div>
        </div>
        <div class="bg-bg-pr rounded-2xl p-6 mt-4 hover:border-brand-900 cursor-pointer smoothing">
            <a href="<?php echo e(route('document.help.index')); ?>" class="w-full flex items-center">
                <div class="flex-1 pr-6">
                    <h4 class="text-par-l tracking-tighter text-brand-900 font-medium mb-1">
                        <?php echo e(__('business/dashboard.offer_help.title')); ?>

                    </h4>
                    <p class="text-par-s text-lab-sc">
                        <?php echo e(__('business/dashboard.offer_help.desc')); ?>

                    </p>
                </div>
                <div class="shrink-0 size-6 text-lab-tr">
                    <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'help-circle','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'help-circle','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                </div>
            </a>
        </div>
    </div>

    <div class="mt-3">
        <span class="text-cap-l italic text-lab-sc">
            <?php echo e(__('business/dashboard.features_restriction_info')); ?>

        </span>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('businessLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/business/dashboard/index.blade.php ENDPATH**/ ?>