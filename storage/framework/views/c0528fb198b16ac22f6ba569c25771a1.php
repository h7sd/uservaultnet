<form action="<?php echo e(route('admin.categories.upsert')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
	<input type="hidden" name="category_id" value="<?php echo e($categoryData->id); ?>">
	<input type="hidden" name="upsert_type" value="<?php echo e($upsertType); ?>">
   	<?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('admin/categories.form.category_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/categories.form.category_info')).'']); ?>
		<div class="mb-6">
			<p class="text-par-n text-lab-sc">
				<?php echo e(__('admin/categories.form.translations_helper')); ?>

			</p>
		</div>
		<?php $__currentLoopData = $appLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="mb-6">
				<?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e($localeData->name).'','type' => 'text','errorKey' => 'translations.'.e($localeData->alpha_2_code).'','name' => 'translations['.e($localeData->alpha_2_code).']','value' => ''.e(isset($categoryData->localization[$localeData->alpha_2_code]) ? $categoryData->localization[$localeData->alpha_2_code] : '').'','placeholder' => ''.e(__('admin/categories.form.name_placeholder', ['language' => $localeData->name])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e($localeData->name).'','type' => 'text','errorKey' => 'translations.'.e($localeData->alpha_2_code).'','name' => 'translations['.e($localeData->alpha_2_code).']','value' => ''.e(isset($categoryData->localization[$localeData->alpha_2_code]) ? $categoryData->localization[$localeData->alpha_2_code] : '').'','placeholder' => ''.e(__('admin/categories.form.name_placeholder', ['language' => $localeData->name])).'']); ?>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<div class="mb-6">
			<?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('admin/categories.form.type')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/categories.form.type')).' *']); ?>
				<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['checked' => $type == $categoryData->categorizable_type,'name' => 'type','defaultValue' => ''.e($type->value).'','labelText' => ''.e($type->label()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type == $categoryData->categorizable_type),'name' => 'type','defaultValue' => ''.e($type->value).'','labelText' => ''.e($type->label()).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
		<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'submit','btnText' => ''.e($upsertType == 'create' ? __('admin/categories.form.submit_button') : __('admin/categories.form.update_button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','btnText' => ''.e($upsertType == 'create' ? __('admin/categories.form.submit_button') : __('admin/categories.form.update_button')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
</form><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/categories/upsert/parts/form.blade.php ENDPATH**/ ?>