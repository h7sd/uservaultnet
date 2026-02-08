<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title><?php echo e(config('app.name')); ?></title>

        <?php echo $__env->make('layouts.parts.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('layouts.parts.favicons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')([
            'resources/js/spa/apps/desktop/bootstrap/application.js',
            config('assets.fonts.sans'),
            config('assets.fonts.mono')
        ]); ?>

        <?php if(theme_name() == 'dark'): ?>
            <link rel="stylesheet" href="<?php echo e(asset('build/assets/desktop-main-dark.css')); ?>?v=<?php echo e($buildNumber); ?>">
        <?php else: ?>
            <?php echo app('Illuminate\Foundation\Vite')('resources/css/spa/apps/desktop/main.css'); ?>
        <?php endif; ?>

        <?php echo $__env->make('layouts.spa.apps.parts.pwa', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </head>
    <body class="font-sans antialiased bg-bg-pr min-w-[1200px]">
        <?php if (isset($component)) { $__componentOriginalbd5620ae532b08139727335188c333d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd5620ae532b08139727335188c333d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.device-switcher.desktop','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('device-switcher.desktop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd5620ae532b08139727335188c333d2)): ?>
<?php $attributes = $__attributesOriginalbd5620ae532b08139727335188c333d2; ?>
<?php unset($__attributesOriginalbd5620ae532b08139727335188c333d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd5620ae532b08139727335188c333d2)): ?>
<?php $component = $__componentOriginalbd5620ae532b08139727335188c333d2; ?>
<?php unset($__componentOriginalbd5620ae532b08139727335188c333d2); ?>
<?php endif; ?>

        <?php echo $__env->yieldContent('pageContent'); ?>

        <?php echo $__env->make('layouts.spa.apps.parts.embeds', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </body>
</html>
<?php /**PATH /var/www/www.uservault.net/resources/views/layouts/spa/apps/desktop/index.blade.php ENDPATH**/ ?>