

<?php $__env->startSection('email_content'); ?>
    <?php if (isset($component)) { $__componentOriginalfbebc8c339e890e7377ac4e32b230550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbebc8c339e890e7377ac4e32b230550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e($data['title']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbebc8c339e890e7377ac4e32b230550)): ?>
<?php $attributes = $__attributesOriginalfbebc8c339e890e7377ac4e32b230550; ?>
<?php unset($__attributesOriginalfbebc8c339e890e7377ac4e32b230550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbebc8c339e890e7377ac4e32b230550)): ?>
<?php $component = $__componentOriginalfbebc8c339e890e7377ac4e32b230550; ?>
<?php unset($__componentOriginalfbebc8c339e890e7377ac4e32b230550); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal92e71f3842f727ec27a55e8225d764cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e71f3842f727ec27a55e8225d764cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.spacer','data' => ['space' => '12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['space' => '12']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $attributes = $__attributesOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $component = $__componentOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__componentOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <b><?php echo e($data['subTitle']); ?></b>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e($data['description']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal92e71f3842f727ec27a55e8225d764cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e71f3842f727ec27a55e8225d764cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.spacer','data' => ['space' => '32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['space' => '32']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $attributes = $__attributesOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $component = $__componentOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__componentOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal7a29dec1dc82b12f5945841b2b947e88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a29dec1dc82b12f5945841b2b947e88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.code','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.code'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($data['code']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a29dec1dc82b12f5945841b2b947e88)): ?>
<?php $attributes = $__attributesOriginal7a29dec1dc82b12f5945841b2b947e88; ?>
<?php unset($__attributesOriginal7a29dec1dc82b12f5945841b2b947e88); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a29dec1dc82b12f5945841b2b947e88)): ?>
<?php $component = $__componentOriginal7a29dec1dc82b12f5945841b2b947e88; ?>
<?php unset($__componentOriginal7a29dec1dc82b12f5945841b2b947e88); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal92e71f3842f727ec27a55e8225d764cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e71f3842f727ec27a55e8225d764cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.spacer','data' => ['space' => '4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['space' => '4']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $attributes = $__attributesOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $component = $__componentOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__componentOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e($data['ignoreEmail']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal92e71f3842f727ec27a55e8225d764cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e71f3842f727ec27a55e8225d764cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.spacer','data' => ['space' => '32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['space' => '32']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $attributes = $__attributesOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $component = $__componentOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__componentOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(__('email.keep_best_experience', ['app_name' => config('app.name')])); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal92e71f3842f727ec27a55e8225d764cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e71f3842f727ec27a55e8225d764cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.spacer','data' => ['space' => '12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['space' => '12']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $attributes = $__attributesOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__attributesOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e71f3842f727ec27a55e8225d764cd)): ?>
<?php $component = $__componentOriginal92e71f3842f727ec27a55e8225d764cd; ?>
<?php unset($__componentOriginal92e71f3842f727ec27a55e8225d764cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.par','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.par'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(__('email.regards')); ?>,
        <?php echo e(__('email.team_caption', ['app_name' => config('app.name')])); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $attributes = $__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__attributesOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd)): ?>
<?php $component = $__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd; ?>
<?php unset($__componentOriginale81f6d2cb085b95fc96a43bc86c4b4cd); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/emails/user/auth/registration-code.blade.php ENDPATH**/ ?>