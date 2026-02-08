<?php $__env->startSection('pageContent'); ?>
	<?php if (isset($component)) { $__componentOriginalb9ba322bc93843e01717177fcea0bf8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9ba322bc93843e01717177fcea0bf8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.http.http-error','data' => ['code' => '503','title' => ''.e(__('errors.http.503.title')).'','message' => ''.e(__('errors.http.503.message')).'','hasBackButton' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('http.http-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['code' => '503','title' => ''.e(__('errors.http.503.title')).'','message' => ''.e(__('errors.http.503.message')).'','hasBackButton' => 'true']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9ba322bc93843e01717177fcea0bf8b)): ?>
<?php $attributes = $__attributesOriginalb9ba322bc93843e01717177fcea0bf8b; ?>
<?php unset($__attributesOriginalb9ba322bc93843e01717177fcea0bf8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9ba322bc93843e01717177fcea0bf8b)): ?>
<?php $component = $__componentOriginalb9ba322bc93843e01717177fcea0bf8b; ?>
<?php unset($__componentOriginalb9ba322bc93843e01717177fcea0bf8b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('documentLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/errors/503.blade.php ENDPATH**/ ?>