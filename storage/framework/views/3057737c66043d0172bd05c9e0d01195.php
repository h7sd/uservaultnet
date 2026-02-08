<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['postData']));

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

foreach (array_filter((['postData']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

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
	<div class="overflow-hidden rounded-2xl">
		<?php if($postData->type->isMedia() && $postData->media->isNotEmpty()): ?>
			<?php if($postData->type->isImage() || $postData->type->isGif()): ?>
				<div class="aspect-square">
					<img src="<?php echo e($postData->media->first()->source_url); ?>" alt="Image" class="size-full object-cover">
				</div>
			<?php elseif($postData->type->isVideo()): ?>
				<?php if (isset($component)) { $__componentOriginaledfb0392b08dde11bfce0a45831ed41d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.format','data' => ['format' => 'mp4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.format'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['format' => 'mp4']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $attributes = $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $component = $__componentOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
			<?php elseif($postData->type->isAudio()): ?>
				<?php if (isset($component)) { $__componentOriginaledfb0392b08dde11bfce0a45831ed41d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.format','data' => ['format' => 'mp3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.format'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['format' => 'mp3']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $attributes = $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $component = $__componentOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
			<?php elseif($postData->type->isDocument()): ?>
				<?php if (isset($component)) { $__componentOriginaledfb0392b08dde11bfce0a45831ed41d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.format','data' => ['format' => 'doc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.format'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['format' => 'doc']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $attributes = $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $component = $__componentOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
			<?php endif; ?>
		<?php elseif($postData->type->isPoll()): ?>
			<?php if (isset($component)) { $__componentOriginaledfb0392b08dde11bfce0a45831ed41d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.entity.format','data' => ['format' => 'poll']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('entity.format'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['format' => 'poll']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $attributes = $__attributesOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__attributesOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d)): ?>
<?php $component = $__componentOriginaledfb0392b08dde11bfce0a45831ed41d; ?>
<?php unset($__componentOriginaledfb0392b08dde11bfce0a45831ed41d); ?>
<?php endif; ?>
		<?php endif; ?>

		<div class="p-4">
			<?php if($postData->content): ?>
				<div class="mb-4">
					<p class="text-lab-sc text-par-s line-clamp-6 leading-snug">
						<?php echo nl2br($postData->content); ?>

					</p>
				</div>
			<?php endif; ?>
			<p class="text-lab-sc text-par-s">
				<?php echo e($postData->created_at->getCalendar()); ?>

			</p>
			<a href="<?php echo e($postData->url); ?>" class="block mt-4" target="_blank">
				<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['size' => 'sm','type' => 'button','width' => 'w-full','btnText' => ''.e(__('admin/dd.post.view_publication')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','type' => 'button','width' => 'w-full','btnText' => ''.e(__('admin/dd.post.view_publication')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/previews/publication.blade.php ENDPATH**/ ?>