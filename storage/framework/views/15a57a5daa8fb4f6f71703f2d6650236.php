<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'value', 'iconName' => 'user', 'desc' => '', 'hasLink' => true]));

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

foreach (array_filter((['title', 'value', 'iconName' => 'user', 'desc' => '', 'hasLink' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="bg-bg-pr rounded-2xl p-6 relative group cursor-pointer smoothing hover:-translate-y-1 hover:shadow-2xl shadow-fill-qt">
	<div class="flex flex-col h-44">
		<div class="shrink-0">
			<?php if (isset($component)) { $__componentOriginal2e5598f154e79eea40d3f06e773541ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e5598f154e79eea40d3f06e773541ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon-avatar','data' => ['name' => ''.e($iconName).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon-avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($iconName).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e5598f154e79eea40d3f06e773541ff)): ?>
<?php $attributes = $__attributesOriginal2e5598f154e79eea40d3f06e773541ff; ?>
<?php unset($__attributesOriginal2e5598f154e79eea40d3f06e773541ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e5598f154e79eea40d3f06e773541ff)): ?>
<?php $component = $__componentOriginal2e5598f154e79eea40d3f06e773541ff; ?>
<?php unset($__componentOriginal2e5598f154e79eea40d3f06e773541ff); ?>
<?php endif; ?>
		</div>
		<div class="mb-8">
			<span class="text-title-3 block text-lab-pr2 font-bold mt-2"><?php echo e($title); ?></span>
			<span class="text-par-s block text-lab-sc">
				<?php echo e($desc); ?>

			</span>
		</div>
		<span class="mt-auto text-title-1 leading-none block text-lab-pr2 font-bold font-outfit tracking-tight"><?php echo e($value); ?></span>
		
		<?php if($hasLink): ?>
			<div class="absolute bottom-4 right-4 size-icon-medium text-lab-sc group-hover:text-brand-900">
				<?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'arrow-up-right','type' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrow-up-right','type' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/metric/card.blade.php ENDPATH**/ ?>