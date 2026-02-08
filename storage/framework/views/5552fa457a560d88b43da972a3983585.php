<?php $__env->startSection('pageContent'); ?>
	<div class="mb-4">
		<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/config.notifications_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/config.notifications_settings')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $attributes = $__attributesOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__attributesOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $component = $__componentOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__componentOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
		<?php if (isset($component)) { $__componentOriginala0d557e3724c5fce9b68a89fabd8740f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0d557e3724c5fce9b68a89fabd8740f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-desc','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-desc'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			<?php echo e(__('admin/config.notifications_settings_desc')); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0d557e3724c5fce9b68a89fabd8740f)): ?>
<?php $attributes = $__attributesOriginala0d557e3724c5fce9b68a89fabd8740f; ?>
<?php unset($__attributesOriginala0d557e3724c5fce9b68a89fabd8740f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0d557e3724c5fce9b68a89fabd8740f)): ?>
<?php $component = $__componentOriginala0d557e3724c5fce9b68a89fabd8740f; ?>
<?php unset($__componentOriginala0d557e3724c5fce9b68a89fabd8740f); ?>
<?php endif; ?>
	</div>

	<?php if (isset($component)) { $__componentOriginal2a2b019f98c6751001fca5f657bc6739 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2b019f98c6751001fca5f657bc6739 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sided-content','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sided-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
		 <?php $__env->slot('sideContent', null, []); ?> 
			<?php if (isset($component)) { $__componentOriginal4c9d91498f1c3fe5e8b113decbe297e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c9d91498f1c3fe5e8b113decbe297e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.readonly-notice','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.readonly-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c9d91498f1c3fe5e8b113decbe297e1)): ?>
<?php $attributes = $__attributesOriginal4c9d91498f1c3fe5e8b113decbe297e1; ?>
<?php unset($__attributesOriginal4c9d91498f1c3fe5e8b113decbe297e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c9d91498f1c3fe5e8b113decbe297e1)): ?>
<?php $component = $__componentOriginal4c9d91498f1c3fe5e8b113decbe297e1; ?>
<?php unset($__componentOriginal4c9d91498f1c3fe5e8b113decbe297e1); ?>
<?php endif; ?>
		 <?php $__env->endSlot(); ?>

		<div class="flex flex-col gap-6">
			<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'NOTIFICATIONS_EMAIL_ENABLED','description' => ''.e(__('admin/config.captions.notifications_email_enabled')).'','value' => ''.e(config('notifications.email.enabled')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'NOTIFICATIONS_EMAIL_ENABLED','description' => ''.e(__('admin/config.captions.notifications_email_enabled')).'','value' => ''.e(config('notifications.email.enabled')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

			<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'NOTIFICATIONS_BROADCAST_ENABLED','description' => ''.e(__('admin/config.captions.notifications_broadcast_enabled')).'','value' => ''.e(config('notifications.broadcast.enabled')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'NOTIFICATIONS_BROADCAST_ENABLED','description' => ''.e(__('admin/config.captions.notifications_broadcast_enabled')).'','value' => ''.e(config('notifications.broadcast.enabled')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
		</div>
	 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2b019f98c6751001fca5f657bc6739)): ?>
<?php $attributes = $__attributesOriginal2a2b019f98c6751001fca5f657bc6739; ?>
<?php unset($__attributesOriginal2a2b019f98c6751001fca5f657bc6739); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2b019f98c6751001fca5f657bc6739)): ?>
<?php $component = $__componentOriginal2a2b019f98c6751001fca5f657bc6739; ?>
<?php unset($__componentOriginal2a2b019f98c6751001fca5f657bc6739); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/notifications/index.blade.php ENDPATH**/ ?>