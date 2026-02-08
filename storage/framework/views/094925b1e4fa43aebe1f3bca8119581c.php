<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'title' => '',
	'desc' => '',
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
	'title' => '',
	'desc' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="bg-bg-pr rounded-2xl px-6 py-40 text-center shadow-2xl shadow-fill-qt">
	<h4 class="text-par-m font-medium text-lab-pr2">
		<?php echo e($title); ?>

	</h4>
	<p class="text-par-s text-lab-sc">
		<?php echo e($desc); ?>

	</p>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/page-states/empty.blade.php ENDPATH**/ ?>