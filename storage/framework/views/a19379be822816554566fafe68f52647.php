<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'ttl' => null
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
	'ttl' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<p class="text-par-s text-lab-sc mt-4 italic font-light">
	💿
	<?php if($ttl): ?>
		Information is updated every <?php echo e($ttl); ?> minutes. 
	<?php else: ?>
		Information is cached.
	<?php endif; ?>

	Reset the cache to see the latest data.
</p><?php /**PATH /var/www/www.uservault.net/resources/views/components/info/cache-notice.blade.php ENDPATH**/ ?>