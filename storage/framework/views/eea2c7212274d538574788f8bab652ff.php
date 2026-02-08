<?php $__env->startSection('pageContent'); ?>
	<div class="mb-4">
        <?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ' '.e(__('admin/reports.show_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ' '.e(__('admin/reports.show_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
            <?php echo e(__('admin/reports.show_desc')); ?>

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
				<?php if($reportData->type->isPost()): ?>
					<?php if (isset($component)) { $__componentOriginal55d9dbd7c0514a899981eaf3e0b5d508 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal55d9dbd7c0514a899981eaf3e0b5d508 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.publication','data' => ['postData' => $reportData->reportable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.publication'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['postData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reportData->reportable)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal55d9dbd7c0514a899981eaf3e0b5d508)): ?>
<?php $attributes = $__attributesOriginal55d9dbd7c0514a899981eaf3e0b5d508; ?>
<?php unset($__attributesOriginal55d9dbd7c0514a899981eaf3e0b5d508); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal55d9dbd7c0514a899981eaf3e0b5d508)): ?>
<?php $component = $__componentOriginal55d9dbd7c0514a899981eaf3e0b5d508; ?>
<?php unset($__componentOriginal55d9dbd7c0514a899981eaf3e0b5d508); ?>
<?php endif; ?>
				<?php elseif($reportData->type->isUser()): ?>
					<?php if (isset($component)) { $__componentOriginal6314127bcd1afc0e76dfef0b3d568b2a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6314127bcd1afc0e76dfef0b3d568b2a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.user','data' => ['userData' => $reportData->reportable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['userData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reportData->reportable)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6314127bcd1afc0e76dfef0b3d568b2a)): ?>
<?php $attributes = $__attributesOriginal6314127bcd1afc0e76dfef0b3d568b2a; ?>
<?php unset($__attributesOriginal6314127bcd1afc0e76dfef0b3d568b2a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6314127bcd1afc0e76dfef0b3d568b2a)): ?>
<?php $component = $__componentOriginal6314127bcd1afc0e76dfef0b3d568b2a; ?>
<?php unset($__componentOriginal6314127bcd1afc0e76dfef0b3d568b2a); ?>
<?php endif; ?>
				<?php elseif($reportData->type->isGroup()): ?>
					<?php if (isset($component)) { $__componentOriginalf2eba7565aae9eb981782e32d08927e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2eba7565aae9eb981782e32d08927e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.group','data' => ['groupData' => $reportData->reportable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['groupData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reportData->reportable)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2eba7565aae9eb981782e32d08927e9)): ?>
<?php $attributes = $__attributesOriginalf2eba7565aae9eb981782e32d08927e9; ?>
<?php unset($__attributesOriginalf2eba7565aae9eb981782e32d08927e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2eba7565aae9eb981782e32d08927e9)): ?>
<?php $component = $__componentOriginalf2eba7565aae9eb981782e32d08927e9; ?>
<?php unset($__componentOriginalf2eba7565aae9eb981782e32d08927e9); ?>
<?php endif; ?>
				<?php elseif($reportData->type->isStory()): ?>
					<?php if (isset($component)) { $__componentOriginal5de716443086cbd28d58c8677c0f7ff5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5de716443086cbd28d58c8677c0f7ff5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.previews.story','data' => ['storyData' => $reportData->reportable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.previews.story'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['storyData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reportData->reportable)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5de716443086cbd28d58c8677c0f7ff5)): ?>
<?php $attributes = $__attributesOriginal5de716443086cbd28d58c8677c0f7ff5; ?>
<?php unset($__attributesOriginal5de716443086cbd28d58c8677c0f7ff5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5de716443086cbd28d58c8677c0f7ff5)): ?>
<?php $component = $__componentOriginal5de716443086cbd28d58c8677c0f7ff5; ?>
<?php unset($__componentOriginal5de716443086cbd28d58c8677c0f7ff5); ?>
<?php endif; ?>
				<?php endif; ?>
			 <?php $__env->endSlot(); ?>
			<div class="mb-8">
				<?php if (isset($component)) { $__componentOriginal2016ae1bcaa40f1629bc761824687796 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2016ae1bcaa40f1629bc761824687796 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.header','data' => ['avatarUrl' => ''.e($reportData->reporter->avatar_url).'','name' => ''.e($reportData->reporter->name).'','caption' => ''.e($reportData->reporter->caption).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['avatarUrl' => ''.e($reportData->reporter->avatar_url).'','name' => ''.e($reportData->reporter->name).'','caption' => ''.e($reportData->reporter->caption).'']); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','href' => ''.e($reportData->reporter->profile_url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.user.view_profile')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => ''.e($reportData->reporter->profile_url).'','target' => '_blank','itemText' => ''.e(__('admin/dd.user.view_profile')).'']); ?>
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

							<?php if($reportData->status->isPending()): ?>
								<?php if (isset($component)) { $__componentOriginal8ebfcb1ab4c7900b3fff763111e17423 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ebfcb1ab4c7900b3fff763111e17423 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','xOn:click' => 'processedReport','itemText' => ''.e(__('admin/dd.report.processed')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','x-on:click' => 'processedReport','itemText' => ''.e(__('admin/dd.report.processed')).'']); ?>
									 <?php $__env->slot('itemIcon', null, []); ?> 
										<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'line','name' => 'check-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'line','name' => 'check-circle']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','xOn:click' => 'ignoreReport','danger' => true,'itemText' => ''.e(__('admin/dd.report.ignore')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','x-on:click' => 'ignoreReport','danger' => true,'itemText' => ''.e(__('admin/dd.report.ignore')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.dropdown.item','data' => ['tag' => 'a','xOn:click' => 'deleteReport','danger' => true,'itemText' => ''.e(__('admin/dd.report.delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','x-on:click' => 'deleteReport','danger' => true,'itemText' => ''.e(__('admin/dd.report.delete')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.title','data' => ['title' => ''.e(__('table.labels.reason')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('table.labels.reason')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
				<div class="p-4 bg-input-pr rounded-2xl">
					<h4 class="text-par-m font-medium mb-1">
						<?php echo e($reportData->reason['title']); ?>

					</h4>
					<p class="text-par-s text-lab-sc">
						<?php echo e($reportData->reason['description']); ?>

					</p>
				</div>
			</div>
			<div class="mb-4">
				<?php if (isset($component)) { $__componentOriginal6b435005e039a8c69512775c3a84f37f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b435005e039a8c69512775c3a84f37f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.title','data' => ['title' => ''.e(__('admin/reports.about_report')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/reports.about_report')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
							<?php echo e(__('table.labels.reported_by')); ?>

						 <?php $__env->endSlot(); ?>
						 <?php $__env->slot('labelValue', null, []); ?> 
							<a href="<?php echo e(route('admin.users.show', $reportData->reporter->id)); ?>" target="_blank" class="underline">
								<?php echo e($reportData->reporter->name); ?>

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
							<?php echo e(__('table.labels.content')); ?>

						 <?php $__env->endSlot(); ?>
						 <?php $__env->slot('labelValue', null, []); ?> 
							<?php echo e($reportData->type->label()); ?> <?php echo e($reportData->type->emoji()); ?>

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
							<?php echo e($reportData->status->label()); ?> <?php echo e($reportData->status->emoji()); ?>

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
						<?php echo e($reportData->id); ?>

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
						<?php echo e(__('table.labels.date')); ?>

					 <?php $__env->endSlot(); ?>
					 <?php $__env->slot('labelValue', null, []); ?> 
						<?php echo e($reportData->created_at->getFormatted()); ?>

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
					deleteReport: () => {
						Alpine.store('confirmModal').open({
							title: "<?php echo e(__('admin/prompt.delete_report.title')); ?>",
							desc: "<?php echo e(__('admin/prompt.delete_report.description')); ?>",
							formAction: "<?php echo e(route('admin.reports.delete', $reportData->id)); ?>"
						});
					},
					processedReport: () => {
						Alpine.store('confirmModal').open({
							title: "<?php echo e(__('admin/prompt.processed_report.title')); ?>",
							desc: "<?php echo e(__('admin/prompt.processed_report.description')); ?>",
							formAction: "<?php echo e(route('admin.reports.processed', $reportData->id)); ?>",
							confirmButtonText: "<?php echo e(__('admin/prompt.processed_report.confirm_btn_text')); ?>"
						});
					},
					ignoreReport: () => {
						Alpine.store('confirmModal').open({
							title: "<?php echo e(__('admin/prompt.ignore_report.title')); ?>",
							desc: "<?php echo e(__('admin/prompt.ignore_report.description')); ?>",
							formAction: "<?php echo e(route('admin.reports.ignore', $reportData->id)); ?>"
						});
					}
				}
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/reports/show/index.blade.php ENDPATH**/ ?>