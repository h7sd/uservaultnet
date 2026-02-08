<?php $__env->startSection('pageContent'); ?>
<div class="mb-4">
	<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/market.show_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/market.show_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
		<?php echo e(__('admin/market.show_desc')); ?>

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

<div x-data="alpineComponent">
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
			<?php if (isset($component)) { $__componentOriginal35d6c1241efe5dfa5731e9d0c415a7d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d6c1241efe5dfa5731e9d0c415a7d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.product','data' => ['productData' => $productData]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['productData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productData)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d6c1241efe5dfa5731e9d0c415a7d0)): ?>
<?php $attributes = $__attributesOriginal35d6c1241efe5dfa5731e9d0c415a7d0; ?>
<?php unset($__attributesOriginal35d6c1241efe5dfa5731e9d0c415a7d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d6c1241efe5dfa5731e9d0c415a7d0)): ?>
<?php $component = $__componentOriginal35d6c1241efe5dfa5731e9d0c415a7d0; ?>
<?php unset($__componentOriginal35d6c1241efe5dfa5731e9d0c415a7d0); ?>
<?php endif; ?>
		 <?php $__env->endSlot(); ?>
		<div class="mb-8">
			<?php if (isset($component)) { $__componentOriginal2016ae1bcaa40f1629bc761824687796 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2016ae1bcaa40f1629bc761824687796 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.header','data' => ['avatarUrl' => ''.e($productData->user->avatar_url).'','name' => ''.e($productData->user->name).'','caption' => ''.e($productData->user->caption).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['avatarUrl' => ''.e($productData->user->avatar_url).'','name' => ''.e($productData->user->name).'','caption' => ''.e($productData->user->caption).'']); ?>

				 <?php $__env->slot('controlOptions', null, []); ?> 
					<?php if (isset($component)) { $__componentOriginal668cc583c7067932f1709d7859acffd8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal668cc583c7067932f1709d7859acffd8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
						 <?php $__env->slot('dropdownButton', null, []); ?> 
							<span class="opacity-50 hover:opacity-100">
								<?php if (isset($component)) { $__componentOriginal5480584177209bfba6caa2164974332c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5480584177209bfba6caa2164974332c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5480584177209bfba6caa2164974332c)): ?>
<?php $attributes = $__attributesOriginal5480584177209bfba6caa2164974332c; ?>
<?php unset($__attributesOriginal5480584177209bfba6caa2164974332c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5480584177209bfba6caa2164974332c)): ?>
<?php $component = $__componentOriginal5480584177209bfba6caa2164974332c; ?>
<?php unset($__componentOriginal5480584177209bfba6caa2164974332c); ?>
<?php endif; ?>
							</span>
						 <?php $__env->endSlot(); ?>

						<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','href' => ''.e($productData->user->profile_url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.user.view_profile')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => ''.e($productData->user->profile_url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.user.view_profile')).'']); ?>
							 <?php $__env->slot('itemIcon', null, []); ?> 
								<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'line','name' => 'user-02']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'line','name' => 'user-02']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $attributes = $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $component = $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
						<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','href' => ''.e($productData->url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.product.view_product')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => ''.e($productData->url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.product.view_product')).'']); ?>
							 <?php $__env->slot('itemIcon', null, []); ?> 
								<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'line','name' => 'arrow-up-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'line','name' => 'arrow-up-right']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $attributes = $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $component = $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>

						<?php if($productData->approval->isPending()): ?>
							<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['xOn:click' => 'approveProduct','itemText' => ''.e(__('admin/dd.product.approve')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => 'approveProduct','itemText' => ''.e(__('admin/dd.product.approve')).'']); ?>
								 <?php $__env->slot('itemIcon', null, []); ?> 
									<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'line','name' => 'shield-tick']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'line','name' => 'shield-tick']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
								 <?php $__env->endSlot(); ?>
							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $attributes = $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $component = $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
							<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['danger' => true,'xOn:click' => 'rejectProduct','itemText' => ''.e(__('admin/dd.product.reject')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['danger' => true,'x-on:click' => 'rejectProduct','itemText' => ''.e(__('admin/dd.product.reject')).'']); ?>
								 <?php $__env->slot('itemIcon', null, []); ?> 
									<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'solid','name' => 'slash-circle-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'solid','name' => 'slash-circle-01']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
								 <?php $__env->endSlot(); ?>
							 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $attributes = $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $component = $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
						<?php endif; ?>
						<?php if (isset($component)) { $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $attributes = $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $component = $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
						<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','danger' => true,'xOn:click' => 'deleteProduct','itemText' => ''.e(__('admin/dd.product.delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','danger' => true,'x-on:click' => 'deleteProduct','itemText' => ''.e(__('admin/dd.product.delete')).'']); ?>
							 <?php $__env->slot('itemIcon', null, []); ?> 
								<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'line','name' => 'trash-04']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'line','name' => 'trash-04']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $attributes = $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423)): ?>
<?php $component = $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423; ?>
<?php unset($__componentOriginal8ebfcb1ab4c7900b3fff763111e17423); ?>
<?php endif; ?>
					 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal668cc583c7067932f1709d7859acffd8)): ?>
<?php $attributes = $__attributesOriginal668cc583c7067932f1709d7859acffd8; ?>
<?php unset($__attributesOriginal668cc583c7067932f1709d7859acffd8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal668cc583c7067932f1709d7859acffd8)): ?>
<?php $component = $__componentOriginal668cc583c7067932f1709d7859acffd8; ?>
<?php unset($__componentOriginal668cc583c7067932f1709d7859acffd8); ?>
<?php endif; ?>
				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2016ae1bcaa40f1629bc761824687796)): ?>
<?php $attributes = $__attributesOriginal2016ae1bcaa40f1629bc761824687796; ?>
<?php unset($__attributesOriginal2016ae1bcaa40f1629bc761824687796); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2016ae1bcaa40f1629bc761824687796)): ?>
<?php $component = $__componentOriginal2016ae1bcaa40f1629bc761824687796; ?>
<?php unset($__componentOriginal2016ae1bcaa40f1629bc761824687796); ?>
<?php endif; ?>
		</div>
		<div class="mb-4">
			<?php if (isset($component)) { $__componentOriginal6b435005e039a8c69512775c3a84f37f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b435005e039a8c69512775c3a84f37f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.title','data' => ['title' => ''.e(__('admin/market.about_product')).'','caption' => ''.e($productData->created_at->getFormatted()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/market.about_product')).'','caption' => ''.e($productData->created_at->getFormatted()).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b435005e039a8c69512775c3a84f37f)): ?>
<?php $attributes = $__attributesOriginal6b435005e039a8c69512775c3a84f37f; ?>
<?php unset($__attributesOriginal6b435005e039a8c69512775c3a84f37f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b435005e039a8c69512775c3a84f37f)): ?>
<?php $component = $__componentOriginal6b435005e039a8c69512775c3a84f37f; ?>
<?php unset($__componentOriginal6b435005e039a8c69512775c3a84f37f); ?>
<?php endif; ?>
		</div>
		<div class="mb-6">
			<?php if (isset($component)) { $__componentOriginal38c52f025154a2103dd9f3527bb1ad8a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38c52f025154a2103dd9f3527bb1ad8a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter.counter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter.counter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter.counter-item','data' => ['counterValue' => ''.e($productData->formatted_price).'','captionText' => ''.e(__('labels.price')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter.counter-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['counterValue' => ''.e($productData->formatted_price).'','captionText' => ''.e(__('labels.price')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $attributes = $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $component = $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter.counter-item','data' => ['counterValue' => ''.e($productData->views_count).'','captionText' => ''.e(__('labels.views')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter.counter-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['counterValue' => ''.e($productData->views_count).'','captionText' => ''.e(__('labels.views')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $attributes = $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $component = $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter.counter-item','data' => ['counterValue' => ''.e($productData->contacts_count).'','captionText' => ''.e(__('labels.contacts_count')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter.counter-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['counterValue' => ''.e($productData->contacts_count).'','captionText' => ''.e(__('labels.contacts_count')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $attributes = $__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__attributesOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47)): ?>
<?php $component = $__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47; ?>
<?php unset($__componentOriginal3c45f3cb213ca77b4e50dd08bd178c47); ?>
<?php endif; ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38c52f025154a2103dd9f3527bb1ad8a)): ?>
<?php $attributes = $__attributesOriginal38c52f025154a2103dd9f3527bb1ad8a; ?>
<?php unset($__attributesOriginal38c52f025154a2103dd9f3527bb1ad8a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38c52f025154a2103dd9f3527bb1ad8a)): ?>
<?php $component = $__componentOriginal38c52f025154a2103dd9f3527bb1ad8a; ?>
<?php unset($__componentOriginal38c52f025154a2103dd9f3527bb1ad8a); ?>
<?php endif; ?>
		</div>
		<div class="mb-6">
			<?php if (isset($component)) { $__componentOriginal63d5ed2ccff6ed9763e9f1fa849dd095 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal63d5ed2ccff6ed9763e9f1fa849dd095 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.seller')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<a href="<?php echo e(route('admin.users.show', $productData->user->id)); ?>" target="_blank" class="underline">
							<?php echo e($productData->user->name); ?>

						</a>
					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.approval')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->approval->label()); ?> <?php echo e($productData->approval->emoji()); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.status')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->status->label()); ?> <?php echo e($productData->status->emoji()); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.product_type')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->type->label()); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.discount')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						-<?php echo e($productData->formatted_discount_amount); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.category')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->category_name); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.rating')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e(empty($productData->rating) ? __('labels.no_ratings') : $productData->rating); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.condition')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->condition->label()); ?> <?php echo e($productData->condition->emoji()); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginale4311450d630636c6d4dbbe3e3245908 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4311450d630636c6d4dbbe3e3245908 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.line-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('line-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					 <?php $__env->slot('labelText', null, []); ?> 
						<?php echo e(__('table.labels.stock_quantity')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($productData->stock_quantity); ?>

					 <?php $__env->endSlot(); ?>
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $attributes = $__attributesOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__attributesOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4311450d630636c6d4dbbe3e3245908)): ?>
<?php $component = $__componentOriginale4311450d630636c6d4dbbe3e3245908; ?>
<?php unset($__componentOriginale4311450d630636c6d4dbbe3e3245908); ?>
<?php endif; ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal63d5ed2ccff6ed9763e9f1fa849dd095)): ?>
<?php $attributes = $__attributesOriginal63d5ed2ccff6ed9763e9f1fa849dd095; ?>
<?php unset($__attributesOriginal63d5ed2ccff6ed9763e9f1fa849dd095); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63d5ed2ccff6ed9763e9f1fa849dd095)): ?>
<?php $component = $__componentOriginal63d5ed2ccff6ed9763e9f1fa849dd095; ?>
<?php unset($__componentOriginal63d5ed2ccff6ed9763e9f1fa849dd095); ?>
<?php endif; ?>
		</div>

		<div class="mb-4">
			<?php if (isset($component)) { $__componentOriginal6b435005e039a8c69512775c3a84f37f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b435005e039a8c69512775c3a84f37f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.title','data' => ['title' => ''.e(__('labels.additional_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('labels.additional_info')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b435005e039a8c69512775c3a84f37f)): ?>
<?php $attributes = $__attributesOriginal6b435005e039a8c69512775c3a84f37f; ?>
<?php unset($__attributesOriginal6b435005e039a8c69512775c3a84f37f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b435005e039a8c69512775c3a84f37f)): ?>
<?php $component = $__componentOriginal6b435005e039a8c69512775c3a84f37f; ?>
<?php unset($__componentOriginal6b435005e039a8c69512775c3a84f37f); ?>
<?php endif; ?>
		</div>

		<?php if (isset($component)) { $__componentOriginale45412f66d6fff0d35012416c061fcb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale45412f66d6fff0d35012416c061fcb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			<?php if (isset($component)) { $__componentOriginal135b358cec0372e6dda692b340923f7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b358cec0372e6dda692b340923f7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php $__env->slot('labelText', null, []); ?> 
					#ID
				 <?php $__env->endSlot(); ?>
				 <?php $__env->slot('labelValue', null, []); ?> 
					<?php echo e($productData->id); ?>

				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $attributes = $__attributesOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__attributesOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $component = $__componentOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__componentOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal135b358cec0372e6dda692b340923f7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b358cec0372e6dda692b340923f7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php $__env->slot('labelText', null, []); ?> 
					<?php echo e(__('table.labels.created_at')); ?>

				 <?php $__env->endSlot(); ?>
				 <?php $__env->slot('labelValue', null, []); ?> 
					<?php echo e($productData->created_at->getFormatted()); ?>

				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $attributes = $__attributesOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__attributesOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $component = $__componentOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__componentOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal135b358cec0372e6dda692b340923f7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b358cec0372e6dda692b340923f7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php $__env->slot('labelText', null, []); ?> 
					<?php echo e(__('table.labels.last_contacted_at')); ?>

				 <?php $__env->endSlot(); ?>
				 <?php $__env->slot('labelValue', null, []); ?> 
					<?php if($productData->last_contacted_at): ?>
						<?php echo e($productData->last_contacted_at->getFormatted()); ?>

					<?php else: ?>
						<?php echo e(__('labels.never')); ?>

					<?php endif; ?>
				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $attributes = $__attributesOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__attributesOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $component = $__componentOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__componentOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal135b358cec0372e6dda692b340923f7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b358cec0372e6dda692b340923f7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php $__env->slot('labelText', null, []); ?> 
					<?php echo e(__('table.labels.bookmarks')); ?>

				 <?php $__env->endSlot(); ?>
				 <?php $__env->slot('labelValue', null, []); ?> 
					<?php echo e($productData->bookmarks_count); ?>

				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $attributes = $__attributesOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__attributesOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $component = $__componentOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__componentOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
			<?php if (isset($component)) { $__componentOriginal135b358cec0372e6dda692b340923f7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal135b358cec0372e6dda692b340923f7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.striped-table.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('striped-table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				 <?php $__env->slot('labelText', null, []); ?> 
					<?php echo e(__('table.labels.reviews')); ?>

				 <?php $__env->endSlot(); ?>
				 <?php $__env->slot('labelValue', null, []); ?> 
					<?php echo e($productData->reviews_count); ?>

				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $attributes = $__attributesOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__attributesOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal135b358cec0372e6dda692b340923f7a)): ?>
<?php $component = $__componentOriginal135b358cec0372e6dda692b340923f7a; ?>
<?php unset($__componentOriginal135b358cec0372e6dda692b340923f7a); ?>
<?php endif; ?>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale45412f66d6fff0d35012416c061fcb5)): ?>
<?php $attributes = $__attributesOriginale45412f66d6fff0d35012416c061fcb5; ?>
<?php unset($__attributesOriginale45412f66d6fff0d35012416c061fcb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale45412f66d6fff0d35012416c061fcb5)): ?>
<?php $component = $__componentOriginale45412f66d6fff0d35012416c061fcb5; ?>
<?php unset($__componentOriginale45412f66d6fff0d35012416c061fcb5); ?>
<?php endif; ?>
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
</div>
<script>
	window.addEventListener('alpine:init', () => {
		Alpine.data('alpineComponent', () => {
			return {
				deleteProduct: () => {
					Alpine.store('confirmModal').open({
						title: "<?php echo e(__('admin/prompt.delete_product.title')); ?>",
						desc: "<?php echo e(__('admin/prompt.delete_product.description')); ?>",
						formAction: "<?php echo e(route('admin.market.destroy', $productData->id)); ?>"
					});
				},
				approveProduct: () => {
					Alpine.store('confirmModal').open({
						title: "<?php echo e(__('admin/prompt.approve_product.title')); ?>",
						desc: "<?php echo e(__('admin/prompt.approve_product.description')); ?>",
						formAction: "<?php echo e(route('admin.market.approve', $productData->id)); ?>",
						confirmButtonText: "<?php echo e(__('admin/prompt.approve_product.confirm_btn_text')); ?>"
					});
				},
				rejectProduct: () => {
					Alpine.store('confirmModal').open({
						title: "<?php echo e(__('admin/prompt.reject_product.title')); ?>",
						desc: "<?php echo e(__('admin/prompt.reject_product.description')); ?>",
						formAction: "<?php echo e(route('admin.market.reject', $productData->id)); ?>",
						confirmButtonText: "<?php echo e(__('admin/prompt.reject_product.confirm_btn_text')); ?>"
					});
				}
			}
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/market/show/index.blade.php ENDPATH**/ ?>