<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'value' => null,
	'color' => 'text-lab-sc',
	'tag' => 'p',
	'rightAlign' => false
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
	'value' => null,
	'color' => 'text-lab-sc',
	'tag' => 'p',
	'rightAlign' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<<?php echo e($tag); ?> class="block text-par-s truncate <?php echo e($color); ?> <?php echo e($rightAlign ? 'text-right' : 'text-left'); ?>" <?php echo e($attributes); ?>>
	<?php echo e($value); ?>

</<?php echo e($tag); ?>><?php /**PATH /var/www/www.uservault.net/resources/views/components/cards/timeline/value.blade.php ENDPATH**/ ?>