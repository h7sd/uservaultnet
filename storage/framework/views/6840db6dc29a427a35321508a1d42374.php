<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'default',
    'variants' => [
        'strong' => 'text-lab-pr',
        'default' => 'text-lab-pr2',
        'weak' => 'text-lab-pr3',
        'muted' => 'text-lab-sc',
        'money' => 'text-mint',
    ],
    'weight' => 'normal',
    'weights' => [
        'normal' => 'font-normal',
        'medium' => 'font-medium',
        'bold' => 'font-bold',
    ],
    'numeric' => false,
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
    'variant' => 'default',
    'variants' => [
        'strong' => 'text-lab-pr',
        'default' => 'text-lab-pr2',
        'weak' => 'text-lab-pr3',
        'muted' => 'text-lab-sc',
        'money' => 'text-mint',
    ],
    'weight' => 'normal',
    'weights' => [
        'normal' => 'font-normal',
        'medium' => 'font-medium',
        'bold' => 'font-bold',
    ],
    'numeric' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<td class="h-14 align-middle leading-snug text-par-s max-w-32 border-b border-b-bord-tr px-2 break-words first:pl-5 last:pr-5 <?php echo e($variants[$variant]); ?> <?php echo e($weights[$weight]); ?> <?php echo e($numeric ? 'font-mono' : ''); ?>" <?php echo e($attributes); ?>>
    <?php echo e($slot); ?>

</td><?php /**PATH /var/www/www.uservault.net/resources/views/components/table/td.blade.php ENDPATH**/ ?>