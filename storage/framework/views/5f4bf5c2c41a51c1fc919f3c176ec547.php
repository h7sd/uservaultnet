<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title><?php echo e(config('app.name')); ?></title>

        <?php echo $__env->make('layouts.parts.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('layouts.parts.favicons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')([
            config('assets.fonts.sans'),
            config('assets.fonts.mono')
        ]); ?>

        <?php if(theme_name() == 'dark'): ?>
            <link rel="stylesheet" href="<?php echo e(asset('build/assets/desktop-auth-dark.css')); ?>?v=<?php echo e($buildNumber); ?>">
        <?php else: ?>
            <?php echo app('Illuminate\Foundation\Vite')('resources/css/spa/apps/desktop/auth.css'); ?>
        <?php endif; ?>
        
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

        <?php echo $__env->yieldPushContent('styles'); ?>
    </head>
    <body class="bg-bg-pr pt-14" style="min-width: 320px;">
        <?php echo $__env->make('layouts.mpa.parts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="flex-col flex min-h-screen">
            <div class="flex justify-center py-12 md:py-24 px-4 flex-1">
                <div class="auth-content">
                    <?php echo $__env->yieldContent('pageContent'); ?>
                </div>
            </div>
            <?php echo $__env->make('layouts.mpa.parts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <?php echo $__env->yieldPushContent('scripts'); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>
</html><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/auth/index.blade.php ENDPATH**/ ?>