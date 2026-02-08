<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'controls' => null
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
	'controls' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<header class="mb-6 fixed top-0 right-0 left-sidebar-width z-50 bg-transparent backdrop-blur-md">
    <div class="flex items-center py-3 h-16">
		<?php if(isset($controls)): ?>
			<div class="pr-16 ml-auto">
				<div class="flex items-center gap-4 leading-none">
					<?php echo e($controls); ?>


					<a target="_blank" href="<?php echo e(me()->profile_url); ?>" class="shrink-0 cursor-pointer items-center">
						<div class="size-[40px] rounded-full overflow-hidden">
							<img class="w-full" src="<?php echo e(me()->avatar_url); ?>" alt="Image">
						</div>
					</a>
				</div>
			</div>
		<?php endif; ?>
    </div>
</header><?php /**PATH /var/www/www.uservault.net/resources/views/components/header.blade.php ENDPATH**/ ?>