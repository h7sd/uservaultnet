<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'userData' => null,
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
    'userData' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="border border-bord-pr gap-2.5 px-3 rounded-xl flex h-14 items-center overflow-hidden">
	<div class="size-7 overflow-hidden rounded-full">
		<img src="<?php echo e($userData->avatar_url); ?>" alt="Avatar Image">
	</div>
	<div class="flex-1 truncate">
		<span class="text-lab-pr2 text-par-m font-medium"><?php echo e($userData->name); ?> <span class="text-lab-sc">(<?php echo e($userData->username); ?>)</span></span>
	</div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/form/user-card.blade.php ENDPATH**/ ?>