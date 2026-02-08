<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'active' => false,
	'textLabel' => '',
	'link' => ''
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
	'active' => false,
	'textLabel' => '',
	'link' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<a <?php echo e($attributes); ?> class="rounded-full px-5 py-4.5 leading-zero cursor-pointer <?php echo e($active ? 'bg-lab-pr2 text-bg-pr' : 'bg-badge-pr text-lab-pr2'); ?>">
	<span class="text-par-n font-medium">
		<?php echo e($textLabel); ?>

	</span>
</a><?php /**PATH /var/www/www.uservault.net/resources/views/components/tabs/tab-item.blade.php ENDPATH**/ ?>