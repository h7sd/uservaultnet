<div class="flex flex-col gap-6">
	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_MAILER','description' => ''.e(__('admin/config.captions.email_driver')).'','value' => ''.e(config('mail.default')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_MAILER','description' => ''.e(__('admin/config.captions.email_driver')).'','value' => ''.e(config('mail.default')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_HOST','description' => ''.e(__('admin/config.captions.email_host')).'','value' => ''.e(config('mail.mailers.smtp.host')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_HOST','description' => ''.e(__('admin/config.captions.email_host')).'','value' => ''.e(config('mail.mailers.smtp.host')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_PORT','description' => ''.e(__('admin/config.captions.email_port')).'','value' => ''.e(config('mail.mailers.smtp.port')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_PORT','description' => ''.e(__('admin/config.captions.email_port')).'','value' => ''.e(config('mail.mailers.smtp.port')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_USERNAME','description' => ''.e(__('admin/config.captions.email_username')).'','value' => ''.e(config('mail.mailers.smtp.username')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_USERNAME','description' => ''.e(__('admin/config.captions.email_username')).'','value' => ''.e(config('mail.mailers.smtp.username')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_PASSWORD','description' => ''.e(__('admin/config.captions.email_password')).'','value' => ''.e(config('mail.mailers.smtp.password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_PASSWORD','description' => ''.e(__('admin/config.captions.email_password')).'','value' => ''.e(config('mail.mailers.smtp.password')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_ENCRYPTION','description' => ''.e(__('admin/config.captions.email_encryption')).'','value' => ''.e(config('mail.mailers.smtp.encryption')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_ENCRYPTION','description' => ''.e(__('admin/config.captions.email_encryption')).'','value' => ''.e(config('mail.mailers.smtp.encryption')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_FROM_ADDRESS','description' => ''.e(__('admin/config.captions.email_from_address')).'','value' => ''.e(config('mail.mailers.smtp.from_address')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_FROM_ADDRESS','description' => ''.e(__('admin/config.captions.email_from_address')).'','value' => ''.e(config('mail.mailers.smtp.from_address')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>

	<?php if (isset($component)) { $__componentOriginal3f815bef9679f46e246ecf7bba34bf54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.config.env','data' => ['name' => 'MAIL_FROM_NAME','description' => ''.e(__('admin/config.captions.email_from_name')).'','value' => ''.e(config('mail.mailers.smtp.from_name')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('config.env'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'MAIL_FROM_NAME','description' => ''.e(__('admin/config.captions.email_from_name')).'','value' => ''.e(config('mail.mailers.smtp.from_name')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $attributes = $__attributesOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__attributesOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54)): ?>
<?php $component = $__componentOriginal3f815bef9679f46e246ecf7bba34bf54; ?>
<?php unset($__componentOriginal3f815bef9679f46e246ecf7bba34bf54); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/email/parts/config.blade.php ENDPATH**/ ?>