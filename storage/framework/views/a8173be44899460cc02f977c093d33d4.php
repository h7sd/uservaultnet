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
        <?php echo e(__('email.greeting', ['user_name' => $notifiable->name])); ?>

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
        <b>
			<?php echo e($data['actor']['name']); ?>

		</b>
		<span>
			<?php echo e(__(join('.', ['notifications', $data['message_group'], $data['message_key']]), $data['message_params'])); ?>.
		</span>

		<?php if(in_array($notificationType, ['post.reacted', 'comment.reacted'])): ?>
			<img style="width: 20px; vertical-align: middle; display: inline;" src="<?php echo e(reaction_image_url($data['metadata']['reaction_unified_id'])); ?>" alt="Emoji">
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
	
	<?php if(isset($data['entity']['content'])): ?>
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
			«<?php echo e($data['entity']['content']); ?>»
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
	<?php endif; ?>

	<?php if(isset($data['entity']['preview_lqip_base64'])): ?>
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
			<img style="width: 42px; height: 42px; object-fit: cover; border-radius: 4px;" src="<?php echo e($data['entity']['preview_lqip_base64']); ?>" alt="Image">
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
	<?php endif; ?>

	<?php if(isset($destinationLink)): ?>
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
			<div style="text-align: center;">
				<?php if (isset($component)) { $__componentOriginaleb039562823c951456ef0619e85efbfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb039562823c951456ef0619e85efbfc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.emails.action','data' => ['href' => $destinationLink]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('emails.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($destinationLink)]); ?>
					<?php echo e(__('email.actions.view', locale: $locale)); ?>

				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb039562823c951456ef0619e85efbfc)): ?>
<?php $attributes = $__attributesOriginaleb039562823c951456ef0619e85efbfc; ?>
<?php unset($__attributesOriginaleb039562823c951456ef0619e85efbfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb039562823c951456ef0619e85efbfc)): ?>
<?php $component = $__componentOriginaleb039562823c951456ef0619e85efbfc; ?>
<?php unset($__componentOriginaleb039562823c951456ef0619e85efbfc); ?>
<?php endif; ?>
			</div>
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
<?php echo $__env->make('emails.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/emails/user/notifications/email-notification.blade.php ENDPATH**/ ?>