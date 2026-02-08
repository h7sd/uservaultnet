<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'href' => '#',
	'name' => '',
	'caption' => '',
	'avatar' => '',
	'tag' => 'a',
	'footer' => '',
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
	'href' => '#',
	'name' => '',
	'caption' => '',
	'avatar' => '',
	'tag' => 'a',
	'footer' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="w-full relative">
	<div class="flex gap-2.5 items-center">
		<div class="size-small-avatar overflow-hidden rounded-full border border-bord-pr">
			<img src="<?php echo e($avatar); ?>" alt="Image">
		</div>
		<div class="flex-1 leading-tight">
			<h2 class="text-par-m font-bold text-lab-pr">
				<?php echo e($name); ?>

			</h2>
			<p class="text-lab-sc text-par-s">
				<?php echo e($caption); ?>

			</p>
		</div>
	</div>

	<?php if($footer): ?>
		<?php echo e($footer); ?>

	<?php endif; ?>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/sidebar/user-card.blade.php ENDPATH**/ ?>