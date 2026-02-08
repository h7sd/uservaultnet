<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'avatarUrl' => '',
	'name' => '',
	'caption' => ''
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
	'avatarUrl' => '',
	'name' => '',
	'caption' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex items-center">
	<div class="shrink-0">
		<?php if (isset($component)) { $__componentOriginal1a48be24b5ec8fd2b53c53431953dcdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a48be24b5ec8fd2b53c53431953dcdf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.general.avatars.avatar-small','data' => ['avatarUrl' => $avatarUrl]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('general.avatars.avatar-small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['avatarUrl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatarUrl)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a48be24b5ec8fd2b53c53431953dcdf)): ?>
<?php $attributes = $__attributesOriginal1a48be24b5ec8fd2b53c53431953dcdf; ?>
<?php unset($__attributesOriginal1a48be24b5ec8fd2b53c53431953dcdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a48be24b5ec8fd2b53c53431953dcdf)): ?>
<?php $component = $__componentOriginal1a48be24b5ec8fd2b53c53431953dcdf; ?>
<?php unset($__componentOriginal1a48be24b5ec8fd2b53c53431953dcdf); ?>
<?php endif; ?>
	</div>
	<div class="flex-1 ml-2 mr-4 overflow-hidden leading-snug">
		<h5 class="text-par-m text-lab-pr2 font-semibold truncate">
			<?php echo e($name); ?>

		</h5>
		<?php if($caption): ?>
			<span class="text-cap-l text-lab-sc block">
				<?php echo e($caption); ?>

			</span>
		<?php endif; ?>
	</div>

	<?php if(isset($controlOptions)): ?>
		<div class="shrink-0">
			<?php echo $controlOptions; ?>

		</div>
	<?php endif; ?>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/header.blade.php ENDPATH**/ ?>