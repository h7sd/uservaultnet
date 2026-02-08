<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'counterValue' => 0,
    'captionText' => '',
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
    'counterValue' => 0,
    'captionText' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="leading-none">
    <h2 class="text-title-1 tracking-tighter font-medium mb-1.5 text-lab-pr2">
        <?php echo $counterValue; ?>

    </h2>
    <span class="block text-par-s text-lab-sc"><?php echo $captionText; ?></span>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/counter/counter-item.blade.php ENDPATH**/ ?>