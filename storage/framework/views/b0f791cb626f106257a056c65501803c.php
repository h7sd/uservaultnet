<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<div class="p-4">
		<div class="mb-4">
			<?php if (isset($component)) { $__componentOriginaledfb0392b08dde11bfce0a45831ed41d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.format','data' => ['format' => 'payment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.format'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['format' => 'payment']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $attributes = $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $component = $__componentOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
		</div>
		<h4 class="text-par-l font-semibold mb-1 text-lab-pr2">
			<?php echo e(__('admin/info.payment_preview.title')); ?>

		</h4>
		<p class="text-lab-sc text-par-s mb-2">
			<?php echo e(__('admin/info.payment_preview.line_one')); ?>

		</p>
		<p class="text-lab-sc text-par-s mb-2">
			<?php echo e(__('admin/info.payment_preview.line_two')); ?>

		</p>
		<p class="text-lab-sc text-par-s">
			<?php echo e(__('admin/info.payment_preview.line_three')); ?>

		</p>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/previews/payment.blade.php ENDPATH**/ ?>