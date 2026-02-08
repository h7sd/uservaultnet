<?php $__env->startSection('pageContent'); ?>
	<div class="mb-4">
		<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/lang.create_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/lang.create_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
			<?php echo e(__('admin/lang.create_desc')); ?>

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
			<?php if (isset($component)) { $__componentOriginala3fa929be0edf256416c7f1b0ea84060 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3fa929be0edf256416c7f1b0ea84060 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.translation','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.translation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3fa929be0edf256416c7f1b0ea84060)): ?>
<?php $attributes = $__attributesOriginala3fa929be0edf256416c7f1b0ea84060; ?>
<?php unset($__attributesOriginala3fa929be0edf256416c7f1b0ea84060); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3fa929be0edf256416c7f1b0ea84060)): ?>
<?php $component = $__componentOriginala3fa929be0edf256416c7f1b0ea84060; ?>
<?php unset($__componentOriginala3fa929be0edf256416c7f1b0ea84060); ?>
<?php endif; ?>
		 <?php $__env->endSlot(); ?>
		
		<div class="block">
			<form action="<?php echo e(route('admin.lang.store')); ?>" method="POST" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('admin/lang.form.lang_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/lang.form.lang_info')).'']); ?>
					<div class="mb-6">
						<?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('admin/lang.form.name')).' *','type' => 'text','name' => 'name','value' => ''.e(old('name')).'','placeholder' => ''.e(__('admin/lang.form.name_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/lang.form.name')).' *','type' => 'text','name' => 'name','value' => ''.e(old('name')).'','placeholder' => ''.e(__('admin/lang.form.name_placeholder')).'']); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
					</div>
					<div class="mb-6">
						<?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('admin/lang.form.direction')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/lang.form.direction')).' *']); ?>
							<?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'direction','defaultValue' => 'ltr','checked' => true,'labelText' => 'LTR']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'direction','defaultValue' => 'ltr','checked' => true,'labelText' => 'LTR']); ?>
							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
							<?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'direction','defaultValue' => 'rtl','labelText' => 'RTL']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'direction','defaultValue' => 'rtl','labelText' => 'RTL']); ?>
							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $attributes = $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $component = $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>
					</div>
					<div class="mb-6">
						<?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('admin/lang.form.native_name')).' *','type' => 'text','name' => 'native_name','value' => ''.e(old('native_name')).'','placeholder' => ''.e(__('admin/lang.form.native_name_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/lang.form.native_name')).' *','type' => 'text','name' => 'native_name','value' => ''.e(old('native_name')).'','placeholder' => ''.e(__('admin/lang.form.native_name_placeholder')).'']); ?>
	
							 <?php $__env->slot('feedbackInfo', null, []); ?> 
								<?php echo e(__('admin/lang.form.native_name_helper')); ?>

							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
					</div>

					<div class="mb-6">
						<?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('admin/lang.form.alpha_2')).' *','type' => 'text','name' => 'alpha_2','value' => ''.e(old('alpha_2')).'','placeholder' => ''.e(__('admin/lang.form.alpha_2_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/lang.form.alpha_2')).' *','type' => 'text','name' => 'alpha_2','value' => ''.e(old('alpha_2')).'','placeholder' => ''.e(__('admin/lang.form.alpha_2_placeholder')).'']); ?>
	
							 <?php $__env->slot('feedbackInfo', null, []); ?> 
								<?php echo e(__('admin/lang.form.alpha_2_helper')); ?>

							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
					</div>
					<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'submit','btnText' => ''.e(__('admin/lang.form.submit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','btnText' => ''.e(__('admin/lang.form.submit')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
			</form>
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

<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/lang/create/index.blade.php ENDPATH**/ ?>