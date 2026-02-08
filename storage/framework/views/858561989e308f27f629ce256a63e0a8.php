<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name')); ?></title>
        
        <?php echo $__env->make('layouts.parts.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('layouts.parts.favicons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')([
            'resources/js/document/main.js',
            'resources/css/document/main.css',
            config('assets.fonts.sans'),
            config('assets.fonts.mono')
        ]); ?>

        <?php echo $__env->yieldPushContent('styles'); ?>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </head>
    <body class="bg-bg-pr pt-14">
        <div class="fixed inset-0 -z-10">
            <img class="size-full object-fill opacity-30" src="<?php echo e(asset('assets/backgrounds/default.png')); ?>" alt="Background">
        </div>

        <?php echo $__env->make('layouts.mpa.parts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="flex-col flex min-h-screen">
            <div class="flex justify-center py-12 flex-1">
                <div class="max-w-3xl px-4 md:px-8 document-container">
                    <?php echo $__env->yieldContent('pageContent'); ?>
                </div>
            </div>
            <?php echo $__env->make('layouts.mpa.parts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </body>
</html><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/document/index.blade.php ENDPATH**/ ?>