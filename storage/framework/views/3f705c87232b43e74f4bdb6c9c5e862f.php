<div class="bg-bg-pr rounded-2xl pt-5">
    <?php if(isset($filter)): ?>
        <div class="pb-4">
            <div class="px-4">
                <?php echo e($filter); ?>

            </div>
            <?php if (isset($component)) { $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.div','data' => ['class' => 'px-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-4']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $attributes = $__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__attributesOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0)): ?>
<?php $component = $__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0; ?>
<?php unset($__componentOriginal3f00ccaefd3b3202e8ec6f52d3527ea0); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <table class="w-full">
        <?php echo e($slot); ?>

    </table>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/table/table.blade.php ENDPATH**/ ?>