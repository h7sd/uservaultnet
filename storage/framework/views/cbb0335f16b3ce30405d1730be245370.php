<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'btnText' => 'Label',
    'type' => 'button',
    'width' => 'w-auto',
    'size' => 'md',
    'sizeOptions' => [
        'sm' => 'py-2.5 px-4 text-par-n',
        'md' => 'py-3.5 px-6 text-par-n',
        'lg' => 'py-4.5 px-8 text-par-m',
    ],
    'variant' => 'default',
    'variantOptions' => [
        'default' => 'bg-fill-tr text-brand-900 font-semibold',
        'danger' => 'bg-fill-tr text-red-900 font-semibold',
        'accent' => 'bg-lab-pr2 text-bg-sc font-semibold',
        'outline' => 'bg-transparent border border-bord-pr hover:bg-fill-fv text-lab-pr hover:text-lab-pr font-semibold',
        'link' => 'bg-transparent text-lab-sc hover:text-brand-900',
    ]
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
    'btnText' => 'Label',
    'type' => 'button',
    'width' => 'w-auto',
    'size' => 'md',
    'sizeOptions' => [
        'sm' => 'py-2.5 px-4 text-par-n',
        'md' => 'py-3.5 px-6 text-par-n',
        'lg' => 'py-4.5 px-8 text-par-m',
    ],
    'variant' => 'default',
    'variantOptions' => [
        'default' => 'bg-fill-tr text-brand-900 font-semibold',
        'danger' => 'bg-fill-tr text-red-900 font-semibold',
        'accent' => 'bg-lab-pr2 text-bg-sc font-semibold',
        'outline' => 'bg-transparent border border-bord-pr hover:bg-fill-fv text-lab-pr hover:text-lab-pr font-semibold',
        'link' => 'bg-transparent text-lab-sc hover:text-brand-900',
    ]
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<button class="<?php echo e($width); ?> <?php echo e($sizeOptions[$size]); ?> block <?php echo e($variantOptions[$variant]); ?> rounded-full cursor-pointer disabled:opacity-60 disabled:cursor-wait" <?php echo e($attributes); ?> type="<?php echo e($type); ?>">
    <?php echo e($btnText); ?>

</button><?php /**PATH /var/www/www.uservault.net/resources/views/components/ui/buttons/pill.blade.php ENDPATH**/ ?>