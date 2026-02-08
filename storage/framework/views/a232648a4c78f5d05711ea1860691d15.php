<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'name' => '',
	'description' => '',
	'value' => '',
	'copyable' => true
]));

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

foreach (array_filter(([
	'name' => '',
	'description' => '',
	'value' => '',
	'copyable' => true
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="block">
	<div class="mb-2">
		<h4 class="text-par-m font-light text-lab-pr3 font-mono mb-0.5">
			<?php echo e($name); ?>

		</h4>
		<?php if($description): ?>
			<p class="text-par-s text-lab-sc">
				<?php echo $description; ?>

			</p>
		<?php endif; ?>
	</div>
	<?php if (isset($component)) { $__componentOriginal0d847ba36e2753628aa5c2876a4dde89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0d847ba36e2753628aa5c2876a4dde89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.code','data' => ['copyable' => $copyable]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('code'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['copyable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($copyable)]); ?><?php echo e($value); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0d847ba36e2753628aa5c2876a4dde89)): ?>
<?php $attributes = $__attributesOriginal0d847ba36e2753628aa5c2876a4dde89; ?>
<?php unset($__attributesOriginal0d847ba36e2753628aa5c2876a4dde89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d847ba36e2753628aa5c2876a4dde89)): ?>
<?php $component = $__componentOriginal0d847ba36e2753628aa5c2876a4dde89; ?>
<?php unset($__componentOriginal0d847ba36e2753628aa5c2876a4dde89); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/config/env.blade.php ENDPATH**/ ?>