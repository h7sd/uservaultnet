<form action="<?php echo e(route('admin.config.email-testing')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
   	<?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('admin/config.email_testing.form.email_testing')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('admin/config.email_testing.form.email_testing')).'']); ?>
		<div class="mb-6">
			<?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('admin/config.email_testing.form.email')).' *','type' => 'email','name' => 'email','value' => ''.e(config('admin.email')).'','placeholder' => ''.e(__('admin/config.email_testing.form.email_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('admin/config.email_testing.form.email')).' *','type' => 'email','name' => 'email','value' => ''.e(config('admin.email')).'','placeholder' => ''.e(__('admin/config.email_testing.form.email_placeholder')).'']); ?>

				 <?php $__env->slot('feedbackInfo', null, []); ?> 
					<?php echo e(__('admin/config.email_testing.form.email_helper')); ?>

				 <?php $__env->endSlot(); ?>
			 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
		</div>
		<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'submit','btnText' => ''.e(__('admin/config.email_testing.form.send_button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','btnText' => ''.e(__('admin/config.email_testing.form.send_button')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
</form><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/email/parts/testing.blade.php ENDPATH**/ ?>