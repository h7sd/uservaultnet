<?php $__env->startSection('pageContent'); ?>
	<div class="mb-8">
		<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/config.email_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/config.email_settings')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
			<?php echo e(__('admin/config.email_settings_desc')); ?>

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

	<div class="mb-4">
		<?php if (isset($component)) { $__componentOriginal8d8e08b0b06f3ed962e1890c005d9649 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tabs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			<?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $tab == 'email','href' => ''.e(route('admin.config.email')).'','textLabel' => ''.e(__('admin/sidebar.email_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab == 'email'),'href' => ''.e(route('admin.config.email')).'','textLabel' => ''.e(__('admin/sidebar.email_settings')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $tab == 'testing','href' => ''.e(route('admin.config.email', ['tab' => 'testing'])).'','textLabel' => ''.e(__('admin/config.tabs.email_testing')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab == 'testing'),'href' => ''.e(route('admin.config.email', ['tab' => 'testing'])).'','textLabel' => ''.e(__('admin/config.tabs.email_testing')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649)): ?>
<?php $attributes = $__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649; ?>
<?php unset($__attributesOriginal8d8e08b0b06f3ed962e1890c005d9649); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d8e08b0b06f3ed962e1890c005d9649)): ?>
<?php $component = $__componentOriginal8d8e08b0b06f3ed962e1890c005d9649; ?>
<?php unset($__componentOriginal8d8e08b0b06f3ed962e1890c005d9649); ?>
<?php endif; ?>
	</div>
	<?php if($tab == 'email'): ?>
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
			<?php echo $__env->make('admin::config.email.parts.config', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
	<?php elseif($tab == 'testing'): ?>
		<?php if (isset($component)) { $__componentOriginaldca661202cb23fae4e0511047891ce96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldca661202cb23fae4e0511047891ce96 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.content','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			<?php echo $__env->make('admin::config.email.parts.testing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldca661202cb23fae4e0511047891ce96)): ?>
<?php $attributes = $__attributesOriginaldca661202cb23fae4e0511047891ce96; ?>
<?php unset($__attributesOriginaldca661202cb23fae4e0511047891ce96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldca661202cb23fae4e0511047891ce96)): ?>
<?php $component = $__componentOriginaldca661202cb23fae4e0511047891ce96; ?>
<?php unset($__componentOriginaldca661202cb23fae4e0511047891ce96); ?>
<?php endif; ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/email/index.blade.php ENDPATH**/ ?>