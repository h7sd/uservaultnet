<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'placeholder' => __('admin/filter.search_placeholder'),
	'value' => '',
	'cancelUrl' => '',
	'isClearable' => true,
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
	'placeholder' => __('admin/filter.search_placeholder'),
	'value' => '',
	'cancelUrl' => '',
	'isClearable' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="block">
	<div class="flex border border-bord-card rounded-full overflow-hidden">
		<div class="flex-1 overflow-hidden">
			<input name="search" value="<?php echo e($value); ?>" type="text" placeholder="<?php echo e($placeholder); ?>" class="h-10 bg-transparent block w-full overflow-hidden outline-hidden text-par-l text-lab-pr px-4">
		</div>
		<?php if($isClearable && $value): ?>
			<div class="shrink-0 overflow-hidden max-w-40">
				<a href="<?php echo e($cancelUrl); ?>" class="h-10 w-full text-red-900 smoothing inline-flex-center outline-hidden px-4 cursor-pointer">
					<span class="text-par-m font-medium truncate">
						<?php echo e(__('admin/filter.clear_search')); ?>

					</span>
				</a>
			</div>
		<?php endif; ?>
		<div class="shrink-0 overflow-hidden min-w-26">
			<button type="submit" class="h-10 w-full text-lab-pr2 smoothing hover:bg-fill-tr block outline-hidden px-4 bg-fill-pr cursor-pointer">
				<span class="text-par-m font-medium">
					<?php echo e(__('admin/filter.search_button')); ?>

				</span>
			</button>
		</div>
	</div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/search/searchbar.blade.php ENDPATH**/ ?>