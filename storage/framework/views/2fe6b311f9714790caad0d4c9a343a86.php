<?php $__env->startSection('pageContent'); ?>
    <?php if (isset($component)) { $__componentOriginaldca661202cb23fae4e0511047891ce96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldca661202cb23fae4e0511047891ce96 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.content','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
		<?php if (isset($component)) { $__componentOriginal3ea41c3349d71f63b0449fca520760fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ea41c3349d71f63b0449fca520760fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-states.coming.feature-coming-soon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-states.coming.feature-coming-soon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ea41c3349d71f63b0449fca520760fc)): ?>
<?php $attributes = $__attributesOriginal3ea41c3349d71f63b0449fca520760fc; ?>
<?php unset($__attributesOriginal3ea41c3349d71f63b0449fca520760fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ea41c3349d71f63b0449fca520760fc)): ?>
<?php $component = $__componentOriginal3ea41c3349d71f63b0449fca520760fc; ?>
<?php unset($__componentOriginal3ea41c3349d71f63b0449fca520760fc); ?>
<?php endif; ?>
	 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldca661202cb23fae4e0511047891ce96)): ?>
<?php $attributes = $__attributesOriginaldca661202cb23fae4e0511047891ce96; ?>
<?php unset($__attributesOriginaldca661202cb23fae4e0511047891ce96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldca661202cb23fae4e0511047891ce96)): ?>
<?php $component = $__componentOriginaldca661202cb23fae4e0511047891ce96; ?>
<?php unset($__componentOriginaldca661202cb23fae4e0511047891ce96); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/coming/index.blade.php ENDPATH**/ ?>