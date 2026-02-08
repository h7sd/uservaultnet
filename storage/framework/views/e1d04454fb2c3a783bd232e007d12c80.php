<?php $__env->startSection('sms_content'); ?>
	<?php echo e(__('sms.code.title')); ?>

	
	<?php echo e($code); ?>


	<?php if(isset($ignoreSms)): ?>
		<?php echo e($ignoreSms); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sms.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/sms/user/settings/confirmation-code.blade.php ENDPATH**/ ?>