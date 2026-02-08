<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['storyData']));

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

foreach (array_filter((['storyData']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
		<div class="overflow-hidden aspect-square relative">
			<?php if($storyData->type->isImage()): ?>
				<img src="<?php echo e($storyData->media->first()->source_url); ?>" alt="Image" class="size-full object-cover">
			<?php elseif($storyData->type->isVideo()): ?>
				<img src="<?php echo e($storyData->media->first()->thumbnail_url); ?>" alt="Image" class="size-full object-cover">
			<?php endif; ?>

			<?php if($storyData->type->isVideo()): ?>
				<?php if (isset($component)) { $__componentOriginalc697ba2fcb501bd2afeb8d2261238760 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc697ba2fcb501bd2afeb8d2261238760 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.overlay.video-play','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('overlay.video-play'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc697ba2fcb501bd2afeb8d2261238760)): ?>
<?php $attributes = $__attributesOriginalc697ba2fcb501bd2afeb8d2261238760; ?>
<?php unset($__attributesOriginalc697ba2fcb501bd2afeb8d2261238760); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc697ba2fcb501bd2afeb8d2261238760)): ?>
<?php $component = $__componentOriginalc697ba2fcb501bd2afeb8d2261238760; ?>
<?php unset($__componentOriginalc697ba2fcb501bd2afeb8d2261238760); ?>
<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="p-4 overflow-hidden">
			<?php if($storyData->content): ?>
				<p class="text-lab-sc text-par-s mb-2 line-clamp-6 leading-snug">
					<?php echo e(nl2br($storyData->content)); ?>

				</p>
			<?php endif; ?>

			<p class="text-lab-sc text-par-s">
				<?php echo e($storyData->created_at->getCalendar()); ?>

			</p>

			<?php if (! ($storyData->isExpired())): ?>
				<a href="<?php echo e($storyData->story->url); ?>" class="block mt-4" target="_blank">
					<?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'button','width' => 'w-full','btnText' => ''.e(__('admin/dd.story.view_story')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','width' => 'w-full','btnText' => ''.e(__('admin/dd.story.view_story')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
			<?php endif; ?>
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
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/components/entity/previews/story.blade.php ENDPATH**/ ?>