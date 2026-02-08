<?php $__env->startSection('pageContent'); ?>
	<div class="mb-4">
		<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/page.edit_title')).' ('.e(__('admin/page.static_pages.' . $pageName . '.title')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/page.edit_title')).' ('.e(__('admin/page.static_pages.' . $pageName . '.title')).')']); ?> <?php echo $__env->renderComponent(); ?>
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
			<?php echo e(__('admin/page.edit_desc')); ?>

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
			<?php $__currentLoopData = $appLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if (isset($component)) { $__componentOriginal2e39a1329676bcef4b016137b52114fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e39a1329676bcef4b016137b52114fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs.tab-item','data' => ['active' => $localeData->alpha_2_code == $selectedLocale,'href' => ''.e(route('admin.pages.edit', ['pageName' => $pageName, 'locale' => $localeData->alpha_2_code])).'','textLabel' => ''.e($localeData->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs.tab-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($localeData->alpha_2_code == $selectedLocale),'href' => ''.e(route('admin.pages.edit', ['pageName' => $pageName, 'locale' => $localeData->alpha_2_code])).'','textLabel' => ''.e($localeData->name).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $attributes = $__attributesOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__attributesOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e39a1329676bcef4b016137b52114fe)): ?>
<?php $component = $__componentOriginal2e39a1329676bcef4b016137b52114fe; ?>
<?php unset($__componentOriginal2e39a1329676bcef4b016137b52114fe); ?>
<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
		<form action="<?php echo e(route('admin.pages.store')); ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="page_name" value="<?php echo e($pageName); ?>">
			<input type="hidden" name="locale" value="<?php echo e($selectedLocale); ?>">
			<input type="hidden" name="content" value="<?php echo e($pageContent); ?>" id="rich-editor-content">

			<?php if($errors->any()): ?>
				<div class="mb-4">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if (isset($component)) { $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.valerr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.valerr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
							<?php echo e($error); ?>

						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $attributes = $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $component = $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>

			<div class="mb-4">
				<div id="rich-editor" class="text-lab-pr2" style="height: 500px;">
					<?php echo $pageContent; ?>

				</div>
			</div>

			<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['width' => 'w-full','type' => 'submit','btnText' => ''.e(__('admin/page.form.submit_button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => 'w-full','type' => 'submit','btnText' => ''.e(__('admin/page.form.submit_button')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
		</form>
		 <?php $__env->slot('sideContent', null, []); ?> 
			<?php if (isset($component)) { $__componentOriginal73f6ccb023142fef9b0f39eb062e3050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f6ccb023142fef9b0f39eb062e3050 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f6ccb023142fef9b0f39eb062e3050)): ?>
<?php $attributes = $__attributesOriginal73f6ccb023142fef9b0f39eb062e3050; ?>
<?php unset($__attributesOriginal73f6ccb023142fef9b0f39eb062e3050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f6ccb023142fef9b0f39eb062e3050)): ?>
<?php $component = $__componentOriginal73f6ccb023142fef9b0f39eb062e3050; ?>
<?php unset($__componentOriginal73f6ccb023142fef9b0f39eb062e3050); ?>
<?php endif; ?>
		 <?php $__env->endSlot(); ?>
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
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/pages/edit/index.blade.php ENDPATH**/ ?>