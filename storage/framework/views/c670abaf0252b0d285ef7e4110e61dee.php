<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['jobData']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['jobData']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<div class="p-4">
		<div class="mb-4">
			<h4 class="text-lab-pr2 text-par-l font-semibold mb-2">
				<?php echo e($jobData->title); ?>

			</h4>
			<p class="text-lab-sc text-par-s">
				<?php echo e($jobData->overview); ?>

			</p>

			<?php if($jobData->is_remote): ?>
				<p class="text-lab-sc text-par-s mt-3">
					<?php echo e(__('business/jobs.remote_work')); ?>

				</p>
			<?php else: ?>
				<p class="text-lab-sc text-par-s mt-3 line-clamp-2">
					<span class="inline-block size-icon-x-small align-middle text-lab-tr">
						<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['type' => 'solid','name' => 'marker-pin-01']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'solid','name' => 'marker-pin-01']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
					</span>
					<?php echo e($jobData->location); ?>

				</p>
			<?php endif; ?>
			<p class="text-lab-sc text-par-s mt-2">
				<?php echo e($jobData->type->label()); ?>, <?php echo e($jobData->created_at->getCalendar()); ?>

			</p>
		</div>
		<a href="<?php echo e($jobData->url); ?>" target="_blank">
			<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['size' => 'sm','width' => 'w-full','type' => 'button','btnText' => ''.e(__('business/dd.job.open_job')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','width' => 'w-full','type' => 'button','btnText' => ''.e(__('business/dd.job.open_job')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
		</a>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/previews/job.blade.php ENDPATH**/ ?>