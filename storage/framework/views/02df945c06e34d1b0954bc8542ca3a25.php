<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name')); ?></title>

        <?php echo $__env->make('layouts.parts.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>        
        <?php echo $__env->make('layouts.parts.favicons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')([
            'resources/js/admin/main.js',
            'resources/js/mpa/rich.editor.js',
            config('assets.fonts.sans'),
            config('assets.fonts.mono')
        ]); ?>

        <?php if(theme_name() == 'dark'): ?>
            <link rel="stylesheet" href="<?php echo e(asset('build/assets/admin-main-dark.css')); ?>?v=<?php echo e($buildNumber); ?>">
        <?php else: ?>
            <?php echo app('Illuminate\Foundation\Vite')('resources/css/admin/main.css'); ?>
            <?php echo app('Illuminate\Foundation\Vite')('resources/css/mpa/rich.editor.css'); ?>
        <?php endif; ?>

        <?php echo $__env->yieldPushContent('styles'); ?>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>

    <body class="<?php echo \Illuminate\Support\Arr::toCssClasses(['pt-24 pb-6', (theme_name() == 'dark' ? 'bg-black' : 'bg-fill-fv')]); ?>">
        <?php if(theme_name() == 'light'): ?>
            <img src="<?php echo e(asset('assets/backgrounds/modal-bg.png')); ?>" alt="Background" class="fixed user-select-none pointer-events-none opacity-50 w-full inset-0 -z-10">
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal27ace535957143cef069f9d3d7f387f4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27ace535957143cef069f9d3d7f387f4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo $__env->make('adminLayout::parts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
            <?php echo $__env->make('adminLayout::parts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php if (isset($component)) { $__componentOriginala766c2d312d6f7864fe218e2500d2bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala766c2d312d6f7864fe218e2500d2bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.container','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="px-8">
                    <?php if (isset($component)) { $__componentOriginala395c15724b790e809b7ef87265c623c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala395c15724b790e809b7ef87265c623c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.messages.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('messages.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala395c15724b790e809b7ef87265c623c)): ?>
<?php $attributes = $__attributesOriginala395c15724b790e809b7ef87265c623c; ?>
<?php unset($__attributesOriginala395c15724b790e809b7ef87265c623c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala395c15724b790e809b7ef87265c623c)): ?>
<?php $component = $__componentOriginala395c15724b790e809b7ef87265c623c; ?>
<?php unset($__componentOriginala395c15724b790e809b7ef87265c623c); ?>
<?php endif; ?>
                </div>
                <div class="app-min-vh px-8">
                    <?php echo $__env->yieldContent('pageContent'); ?>
                </div>

                <div class="fixed bg-bg-pr border-t border-bord-tr bottom-0 right-0 left-sidebar-width px-16 h-6 flex items-center">
                    <span class="block text-lab-sc text-cap-s"><?php echo e(__('admin/info.you_are_admin')); ?></span>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $attributes = $__attributesOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $component = $__componentOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__componentOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
    
            <?php if (isset($component)) { $__componentOriginalb4326bb522174e7b1c0c08f926a38b90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4326bb522174e7b1c0c08f926a38b90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.confirm.confirm','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.confirm.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4326bb522174e7b1c0c08f926a38b90)): ?>
<?php $attributes = $__attributesOriginalb4326bb522174e7b1c0c08f926a38b90; ?>
<?php unset($__attributesOriginalb4326bb522174e7b1c0c08f926a38b90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4326bb522174e7b1c0c08f926a38b90)): ?>
<?php $component = $__componentOriginalb4326bb522174e7b1c0c08f926a38b90; ?>
<?php unset($__componentOriginalb4326bb522174e7b1c0c08f926a38b90); ?>
<?php endif; ?>
            
            
            <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27ace535957143cef069f9d3d7f387f4)): ?>
<?php $attributes = $__attributesOriginal27ace535957143cef069f9d3d7f387f4; ?>
<?php unset($__attributesOriginal27ace535957143cef069f9d3d7f387f4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27ace535957143cef069f9d3d7f387f4)): ?>
<?php $component = $__componentOriginal27ace535957143cef069f9d3d7f387f4; ?>
<?php unset($__componentOriginal27ace535957143cef069f9d3d7f387f4); ?>
<?php endif; ?>
    </body>
</html><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/admin/index.blade.php ENDPATH**/ ?>