<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
	'avatarUrl' => asset(config('user.avatar'))
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
	'avatarUrl' => asset(config('user.avatar'))
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="size-small-avatar relative">
	<div class="size-full bg-bg-pr border border-bord-pr overflow-hidden rounded-full">
		<?php if (isset($component)) { $__componentOriginale3b1800702d09db8605e2ea6bec09b0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3b1800702d09db8605e2ea6bec09b0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.general.avatars.img','data' => ['src' => ''.e($avatarUrl).'','alt' => 'Avatar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('general.avatars.img'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e($avatarUrl).'','alt' => 'Avatar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3b1800702d09db8605e2ea6bec09b0a)): ?>
<?php $attributes = $__attributesOriginale3b1800702d09db8605e2ea6bec09b0a; ?>
<?php unset($__attributesOriginale3b1800702d09db8605e2ea6bec09b0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3b1800702d09db8605e2ea6bec09b0a)): ?>
<?php $component = $__componentOriginale3b1800702d09db8605e2ea6bec09b0a; ?>
<?php unset($__componentOriginale3b1800702d09db8605e2ea6bec09b0a); ?>
<?php endif; ?>
	</div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/general/avatars/avatar-small.blade.php ENDPATH**/ ?>