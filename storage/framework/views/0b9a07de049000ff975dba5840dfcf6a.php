<footer class="pb-4 pt-6 flex" style="min-width: 320px;">
    <div class="app-container mx-auto flex-1 px-4 md:px-8">
        <nav class="flex flex-wrap gap-2 md:gap-4">
            <a href="<?php echo e(route('document.about.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.about_project')); ?>

            </a>
            <a href="<?php echo e(route('document.help.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.help_center')); ?>

            </a>
            <a href="<?php echo e(route('document.terms.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.terms_of_use')); ?>

            </a>
            <a href="<?php echo e(route('document.privacy.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.privacy_policy')); ?>

            </a>
            <a href="<?php echo e(route('document.cookies.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.cookies_policy')); ?>

            </a>
            <a href="<?php echo e(route('document.developers.index')); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                <?php echo e(__('links.developers')); ?>

            </a>

            <?php if(theme_name() == 'dark'): ?>
                <a href="<?php echo e(route('user.theme.switch', ['theme' => 'light'])); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                    <?php echo e(__('labels.light_theme')); ?>

                </a>
            <?php else: ?>
                <a href="<?php echo e(route('user.theme.switch', ['theme' => 'dark'])); ?>" class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                    <?php echo e(__('labels.dark_theme')); ?>

                </a>
            <?php endif; ?>
        </nav>
        <div class="h-px bg-fill-pr my-4"></div>
        <div class="block md:flex flex-wrap gap-4">
            <span class="text-par-s text-lab-pr2 hover:text-brand-900 smoothing">
                Copyright © <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>

            </span>

            <div class="flex md:inline-flex items-center gap-2 ml-auto mt-3 md:mt-0">
                <a href="<?php echo e(config('app.mobile_app_links.ios')); ?>" class="h-7">
                    <?php if (isset($component)) { $__componentOriginale26480bd02e93750e8d1f8f197ce46b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale26480bd02e93750e8d1f8f197ce46b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.get-apps.cards.app-store','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('get-apps.cards.app-store'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale26480bd02e93750e8d1f8f197ce46b4)): ?>
<?php $attributes = $__attributesOriginale26480bd02e93750e8d1f8f197ce46b4; ?>
<?php unset($__attributesOriginale26480bd02e93750e8d1f8f197ce46b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale26480bd02e93750e8d1f8f197ce46b4)): ?>
<?php $component = $__componentOriginale26480bd02e93750e8d1f8f197ce46b4; ?>
<?php unset($__componentOriginale26480bd02e93750e8d1f8f197ce46b4); ?>
<?php endif; ?>
                </a>
                <a href="<?php echo e(config('app.mobile_app_links.android')); ?>" class="h-7">
                    <?php if (isset($component)) { $__componentOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.get-apps.cards.google-play','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('get-apps.cards.google-play'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857)): ?>
<?php $attributes = $__attributesOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857; ?>
<?php unset($__attributesOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857)): ?>
<?php $component = $__componentOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857; ?>
<?php unset($__componentOriginalaaf86fbe2d6ab73c7ebfd2b5cc539857); ?>
<?php endif; ?>
                </a>
            </div>
        </div>
    </div>
</footer><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/parts/footer.blade.php ENDPATH**/ ?>