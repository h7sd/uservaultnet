<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title><?php echo e(config('app.name')); ?></title>

        <?php echo $__env->make('layouts.parts.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('layouts.parts.favicons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')([
            'resources/js/spa/apps/mobile/bootstrap/application.js',
            config('assets.fonts.sans'),
            config('assets.fonts.mono')
        ]); ?>

        <?php if(theme_name() == 'dark'): ?>
            <link rel="stylesheet" href="<?php echo e(asset('build/assets/mobile-main-dark.css')); ?>?v=<?php echo e($buildNumber); ?>">
        <?php else: ?>
            <?php echo app('Illuminate\Foundation\Vite')('resources/css/spa/apps/mobile/main.css'); ?>
        <?php endif; ?>

        <?php echo $__env->make('layouts.spa.apps.parts.pwa', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginal1f5ae490621951db08fd897dfbda9a5b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f5ae490621951db08fd897dfbda9a5b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.device-switcher.mobile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('device-switcher.mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f5ae490621951db08fd897dfbda9a5b)): ?>
<?php $attributes = $__attributesOriginal1f5ae490621951db08fd897dfbda9a5b; ?>
<?php unset($__attributesOriginal1f5ae490621951db08fd897dfbda9a5b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f5ae490621951db08fd897dfbda9a5b)): ?>
<?php $component = $__componentOriginal1f5ae490621951db08fd897dfbda9a5b; ?>
<?php unset($__componentOriginal1f5ae490621951db08fd897dfbda9a5b); ?>
<?php endif; ?>

        <?php echo $__env->yieldContent('pageContent'); ?>

        <?php echo $__env->make('layouts.spa.apps.parts.embeds', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </body>
</html>
<?php /**PATH /var/www/www.uservault.net/resources/views/layouts/spa/apps/mobile/index.blade.php ENDPATH**/ ?>