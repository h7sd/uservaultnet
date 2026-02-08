<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'defaultClasses' => [
        'absolute',
        'transition-all',
        'ease-in-out',
        'min-w-72',
        'rounded-2xl',
        'overflow-hidden',
        'bg-bg-pr/80',
        'backdrop-blur-xs',
        'z-40',
        'shadow-2xl',
        'min-h-10'
    ],
    'classes' => [
        'origin-bottom-left',
        'right-0',
        'top-full',
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
    'defaultClasses' => [
        'absolute',
        'transition-all',
        'ease-in-out',
        'min-w-72',
        'rounded-2xl',
        'overflow-hidden',
        'bg-bg-pr/80',
        'backdrop-blur-xs',
        'z-40',
        'shadow-2xl',
        'min-h-10'
    ],
    'classes' => [
        'origin-bottom-left',
        'right-0',
        'top-full',
    ]
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="{ open: false }" class="relative" x-cloak>
    <span @click="open = !open" class="inline-block">
        <?php echo e($dropdownButton); ?>

    </span>

    <div x-show="open" @click.away="open = false" class="<?php echo e(implode(' ', array_merge($defaultClasses, $classes))); ?>">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/ui/dropdown/dropdown.blade.php ENDPATH**/ ?>