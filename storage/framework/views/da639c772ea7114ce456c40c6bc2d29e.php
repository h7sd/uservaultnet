<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'title' => null,
	'caption' => null,
	'captionTitle' => null,
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
	'title' => null,
	'caption' => null,
	'captionTitle' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex justify-between">
	<div class="leading-none">
		<h4 class="text-par-n font-medium text-lab-pr2">
			<?php echo e($title); ?>

		</h4>
	</div>
	<?php if($caption): ?>
		<div class="leading-none text-right">
			<?php if($captionTitle): ?>
				<h6 class="text-par-n text-lab-pr2 font-medium mb-1.5">
					<?php echo e($captionTitle); ?>

				</h6>
			<?php endif; ?>

			<p class="text-cap-l text-lab-sc">
				<?php echo e($caption); ?>

			</p>
		</div>
	<?php endif; ?>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/title.blade.php ENDPATH**/ ?>