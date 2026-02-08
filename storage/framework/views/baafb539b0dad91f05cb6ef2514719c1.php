<header class="fixed top-0 left-0 right-0 bg-bg-pr/80 backdrop-blur-xs" style="min-width: 320px;">
    <div class="h-14 flex justify-between px-4 md:px-8 items-center relative">
        <div class="text-lab-pr text-par-m font-medium hidden md:block">
            <?php if(auth()->guard()->guest()): ?>
                <?php echo e(__('auth.hi_there')); ?>

            <?php else: ?>
                <?php echo e(__('labels.hi_user', ['name' => me()->name])); ?>

            <?php endif; ?>
        </div>

        <a class="absolute left-half -translate-x-3.5" href="<?php echo e(route('user.desktop.index', '/')); ?>">
            <img class="h-7" src="<?php echo e($logotypeUrl); ?>" alt="Image">
        </a>

        <div class="inline-flex gap-5 text-lab-pr font-medium items-center ml-auto">
            <div x-data="{ isOpen: false }" x-on:click.away="isOpen = false" class="relative" x-cloak>
                <button class="block leading-none cursor-pointer" x-on:click="isOpen = !isOpen">
                    <span class="items-center gap-1 hidden md:flex">
                        <span class="text-par-m">
                            <?php echo e($appLanguages->getLocaleName()); ?>

                        </span>
                        <span class="size-4 shrink-0">
                            <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'chevron-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-down']); ?> <?php echo $__env->renderComponent(); ?>
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
                    <div class="inline-block md:hidden size-icon-small">
                        <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'translate-01','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'translate-01','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
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
                </button>
                <div x-show="isOpen" class="absolute top-full right-0 rounded-md overflow-hidden min-w-60 ease-in-out transition-all shadow-md z-40">
                    <div class="block bg-bg-pr/80 backdrop-blur-xs divide-y divide-fill-tr">
                        <?php $__currentLoopData = $appLanguages->getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('user.language.switch', ['lang' => $langData->alpha_2_code])); ?>" rel="nofollow" title="<?php echo e($langData->name); ?>" class="block px-4 py-2 hover:bg-fill-qt smoothing text-lab-pr2 text-par-s <?php echo e(empty($langData->current) ? '' : 'bg-fill-qt'); ?>">
                                <?php echo e($langData->name); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/parts/header.blade.php ENDPATH**/ ?>