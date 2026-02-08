<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => ''
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
    'title' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="block">
    <!--[if BLOCK]><![endif]--><?php if(isset($icon)): ?>
        <div class="size-8 overflow-hidden text-lab-pr2 mb-2">
            <?php echo $icon; ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <h1 class="text-title-2 text-lab-pr2 font-semibold">
        <?php echo $title; ?>

    </h1>

    <!--[if BLOCK]><![endif]--><?php if(isset($caption)): ?>
        <p class="text-par-m text-lab-sc">
            <?php echo $caption; ?>

        </p>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/auth/parts/form-header.blade.php ENDPATH**/ ?>