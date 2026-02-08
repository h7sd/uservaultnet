<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'itemText' => '',
    'tag' => 'div',
    'danger' => false,
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
    'itemText' => '',
    'tag' => 'div',
    'danger' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<<?php echo e($tag); ?> class=" block last:border-none cursor-pointer <?php echo e($danger ? 'text-red-900' : 'text-lab-pr'); ?>" <?php echo e($attributes); ?>>
    <div class="py-3.5 px-4 flex leading-none items-center hover:bg-fill-qt smoothing">
        <span class="mr-auto text-par-m font-medium whitespace-nowrap">
            <?php echo e($itemText); ?>

        </span>

        <?php if(isset($itemIcon)): ?>
            <span class="shrink-0 size-icon-small">
                <?php echo e($itemIcon); ?>

            </span>
        <?php endif; ?>
    </div>
</<?php echo e($tag); ?>><?php /**PATH /var/www/www.uservault.net/resources/views/components/ui/dropdown/item.blade.php ENDPATH**/ ?>