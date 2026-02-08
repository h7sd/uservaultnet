<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'solid',
    'name' => '',
    'fill' => false
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
    'type' => 'solid',
    'name' => '',
    'fill' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $iconPath = resource_path("assets/ui-icons/{$type}/{$name}.svg");
?>

<?php if(file_exists($iconPath)): ?>
    <svg class="size-full <?php echo e($fill ? $fill : ''); ?>" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <?php echo file_get_contents($iconPath); ?>

    </svg>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/components/ui-icon.blade.php ENDPATH**/ ?>