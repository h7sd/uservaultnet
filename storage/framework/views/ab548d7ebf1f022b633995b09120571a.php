<a href="<?php echo e(route('admin.storage.show', $diskData['id'])); ?>" class="border border-fill-tr rounded-2xl p-4 flex items-center gap-2 overflow-hidden">
	<div class="size-12">
		<?php if($diskData['driver'] === 's3'): ?>
			<img src="<?php echo e(asset('assets/icons/file-format/s3.png')); ?>" alt="S3 storage" class="w-full">
		<?php elseif($diskData['driver'] === 'ftp'): ?>
			<img src="<?php echo e(asset('assets/icons/file-format/ftp.png')); ?>" alt="FTP storage" class="w-full">
		<?php else: ?>
			<img src="<?php echo e(asset('assets/icons/file-format/pub.png')); ?>" alt="Public storage" class="w-full">
		<?php endif; ?>
	</div>
	<div class="flex-1">
		<h5 class="text-par-m font-semibold text-lab-pr2">
			<?php if(isset($diskData['name'])): ?>
				<?php echo e($diskData['name']); ?>

			<?php else: ?>
				<?php echo e(__('labels.unknown')); ?>

			<?php endif; ?>
		</h5>
		<p class="text-lab-sc text-par-s">
			<?php if(isset($diskData['description'])): ?>
				<?php echo e($diskData['description']); ?>

			<?php else: ?>
				<?php echo e(__('admin/storage.no_disk_description')); ?>

			<?php endif; ?>
		</p>
	</div>
	<div class="shrink-0">
		<?php if (isset($component)) { $__componentOriginal5480584177209bfba6caa2164974332c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5480584177209bfba6caa2164974332c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.icon','data' => ['iconName' => 'arrow-up-right','iconType' => 'line']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconName' => 'arrow-up-right','iconType' => 'line']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5480584177209bfba6caa2164974332c)): ?>
<?php $attributes = $__attributesOriginal5480584177209bfba6caa2164974332c; ?>
<?php unset($__attributesOriginal5480584177209bfba6caa2164974332c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5480584177209bfba6caa2164974332c)): ?>
<?php $component = $__componentOriginal5480584177209bfba6caa2164974332c; ?>
<?php unset($__componentOriginal5480584177209bfba6caa2164974332c); ?>
<?php endif; ?>
	</div>
</a><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/admin/config/storage/index/parts/disk-item.blade.php ENDPATH**/ ?>