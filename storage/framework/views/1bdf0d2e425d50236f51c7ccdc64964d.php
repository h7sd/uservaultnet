<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'title' => null,
	'content' => null,
	'link' => null
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
	'content' => null,
	'link' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<h5 class="text-title-3 text-lab-pr leading-tight mb-2 font-bold hover:text-brand-900 transition-all ease-linear">
	<a href="<?php echo e($link); ?>">
		<?php echo e($title ?? ''); ?>

	</a>
</h5>
<p class="text-par-n text-lab-sc">
	<?php echo e($content); ?>

</p><?php /**PATH /var/www/www.uservault.net/resources/views/components/cards/timeline/content.blade.php ENDPATH**/ ?>