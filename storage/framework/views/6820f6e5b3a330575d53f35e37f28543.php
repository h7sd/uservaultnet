<?php $__env->startSection('pageContent'); ?>
	<div class="mb-6">
		<?php if (isset($component)) { $__componentOriginal8b54caccbdedc8030792c13949386bbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b54caccbdedc8030792c13949386bbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-title','data' => ['titleText' => ''.e(__('business/settings.index_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titleText' => ''.e(__('business/settings.index_title')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $attributes = $__attributesOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__attributesOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b54caccbdedc8030792c13949386bbd)): ?>
<?php $component = $__componentOriginal8b54caccbdedc8030792c13949386bbd; ?>
<?php unset($__componentOriginal8b54caccbdedc8030792c13949386bbd); ?>
<?php endif; ?>
	</div>
	<div class="block bg-bg-pr rounded-2xl p-6">
		<div class="mb-3">
			<div class="mb-24">
				<h5 class="text-par-l font-semibold text-lab-pr2 mb-1">
					<?php echo e(__('business/settings.business_account')); ?>


					<?php if($accountData->updated_at): ?>
						<?php if($accountData->verified): ?>
							<span class="text-green-900">
								(<?php echo e(__('business/settings.verified')); ?>) &check;
							</span>
						<?php else: ?>
							<span class="text-lab-tr">
								(<?php echo e(__('business/settings.not_verified')); ?>)
							</span>
						<?php endif; ?>
					<?php endif; ?>
				</h5>
				<?php if($accountData->updated_at): ?>
					<p class="text-par-n font-normal text-lab-pr2">
						<?php echo e(__('business/settings.last_submission', ['date' => $accountData->updated_at->getIso()])); ?>

					</p>
				<?php else: ?>
					<p class="text-par-n font-normal text-lab-pr2">
						<?php echo e(__('business/settings.no_submission')); ?>

					</p>
				<?php endif; ?>

				<div class="block mt-4">
					<a href="<?php echo e(route('business.settings.edit')); ?>">
						<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'button','btnText' => ''.e(__('business/settings.edit_account_btn')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','btnText' => ''.e(__('business/settings.edit_account_btn')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
					</a>
				</div>
			</div>

			<h5 class="text-par-n font-semibold text-lab-sc">
				<?php echo e(__('business/settings.business_info_policy')); ?>

			</h5>
			<p class="text-par-n font-normal text-lab-sc">
				<?php echo __('business/settings.business_info_policy_description', ['url' => route('business.settings.edit')]); ?>

			</p>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('businessLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/business/settings/index.blade.php ENDPATH**/ ?>