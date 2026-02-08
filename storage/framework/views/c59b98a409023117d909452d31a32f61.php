<div x-data="{isSubmitting: false}" x-cloak>
	<div x-show="$store.confirmModal.isOpen">
		<?php if (isset($component)) { $__componentOriginal9a9f2e7206a50f00396a345f13bd32ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a9f2e7206a50f00396a345f13bd32ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals.modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modals.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
			<form x-bind:action="$store.confirmModal.formAction" x-on:submit="isSubmitting = true" method="POST">
				<?php echo csrf_field(); ?>
				<?php echo method_field('POST'); ?>

				<div class="px-8 text-center py-7">
					<h4 x-html="$store.confirmModal.content.title" class="text-title-2 text-lab-pr2 font-semibold mb-1"></h4>
					<p x-html="$store.confirmModal.content.desc" class="text-par-m text-lab-sc mb-4"></p>
				</div>
				<div class="border-t border-bord-pr">
					<div class="grid grid-cols-2">
						<div class="flex py-4 justify-center border-r border-bord-pr hover:bg-fill-fv">
							<button x-bind:disabled="isSubmitting" x-on:click="$store.confirmModal.close()" type="button" class="text-par-m font-medium text-brand-900 outline-hidden leading-none disabled:opacity-80 cursor-pointer" x-text="$store.confirmModal.content.cancelButtonText || '<?php echo e(__('labels.cancel_button')); ?>'"></button>
						</div>
						<div class="flex py-4 justify-center hover:bg-fill-fv">
							<button x-bind:disabled="isSubmitting" type="submit" class="text-par-m font-medium cursor-pointer text-red-900 outline-hidden leading-none disabled:opacity-80" x-text="$store.confirmModal.content.confirmButtonText || '<?php echo e(__('labels.delete_button')); ?>'"></button>
						</div>
					</div>
				</div>
			</form>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a9f2e7206a50f00396a345f13bd32ae)): ?>
<?php $attributes = $__attributesOriginal9a9f2e7206a50f00396a345f13bd32ae; ?>
<?php unset($__attributesOriginal9a9f2e7206a50f00396a345f13bd32ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a9f2e7206a50f00396a345f13bd32ae)): ?>
<?php $component = $__componentOriginal9a9f2e7206a50f00396a345f13bd32ae; ?>
<?php unset($__componentOriginal9a9f2e7206a50f00396a345f13bd32ae); ?>
<?php endif; ?>
	</div>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/modals/confirm/confirm.blade.php ENDPATH**/ ?>