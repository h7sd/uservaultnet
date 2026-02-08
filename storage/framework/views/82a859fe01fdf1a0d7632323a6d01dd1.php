<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'labelText' => '',
    'checked' => '',
    'classes' => '',
    'name' => '',
    'defaultValue' => ''
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
    'labelText' => '',
    'checked' => '',
    'classes' => '',
    'name' => '',
    'defaultValue' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="border-r border-edge-tr last:border-none">
    <input type="radio" id="radio-input-<?php echo e($name); ?>-<?php echo e($defaultValue); ?>" name="<?php echo e($name); ?>" value="<?php echo e($defaultValue); ?>" class="hidden peer" required <?php if($checked): ?> checked <?php endif; ?> <?php echo e($attributes); ?>/>
    <label for="radio-input-<?php echo e($name); ?>-<?php echo e($defaultValue); ?>" class="font-medium peer-checked:text-brand-900 text-par-n text-lab-pr2 px-4 peer-checked:bg-input-pr inline-block py-3.5 cursor-pointer">                           
        <?php echo e($labelText); ?>

    </label>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/form/radio.blade.php ENDPATH**/ ?>