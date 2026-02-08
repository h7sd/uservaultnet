<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'hasLabel' => true,
    'labelText' => '',
    'name' => '',
    'placeholder' => '',
    'options' => []
]));

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

foreach (array_filter(([
    'hasLabel' => true,
    'labelText' => '',
    'name' => '',
    'placeholder' => '',
    'options' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="block">
    <!--[if BLOCK]><![endif]--><?php if($hasLabel): ?>
        <?php if (isset($component)) { $__componentOriginal306f477fe089d4f950325a3d0a498c1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal306f477fe089d4f950325a3d0a498c1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($labelText); ?>

            <!--[if BLOCK]><![endif]--><?php if(!empty($labelTextBrackets)): ?>
                <span class="text-lab-sc">(<?php echo e($labelTextBrackets); ?>)</span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal306f477fe089d4f950325a3d0a498c1c)): ?>
<?php $attributes = $__attributesOriginal306f477fe089d4f950325a3d0a498c1c; ?>
<?php unset($__attributesOriginal306f477fe089d4f950325a3d0a498c1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal306f477fe089d4f950325a3d0a498c1c)): ?>
<?php $component = $__componentOriginal306f477fe089d4f950325a3d0a498c1c; ?>
<?php unset($__componentOriginal306f477fe089d4f950325a3d0a498c1c); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="relative">
        <div 
            x-data="{ 
                isOpen: false, 
                selected: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
                options: <?php echo e(json_encode($options)); ?>,
                get selectedLabel() {
                    if (!this.selected) return '<?php echo e($placeholder); ?>';
                    const option = this.options.find(opt => opt.key == this.selected);
                    return option ? option.value : '<?php echo e($placeholder); ?>';
                }
            }" 
            class="cursor-pointer relative <?php echo e((count($options) < 1) ? 'opacity-60 cursor-default' : ''); ?>"
        >
            <div 
                @click="isOpen = !isOpen" 
                @click.away="isOpen = false" 
                class="w-full bg-input-pr border-none py-4 rounded-xl flex items-center px-5"
            >
                <span class="truncate text-lab-sc text-par-m" x-text="selectedLabel"></span>
                <span class="size-4 text-lab-sc shrink-0 ml-auto">
                    <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'chevron-selector-vertical','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-selector-vertical','type' => 'solid']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                </span>
            </div>
            
            <!--[if BLOCK]><![endif]--><?php if(count($options)): ?>
                <div 
                    x-show="isOpen" 
                    x-transition
                    class="absolute shadow-md py-2 rounded-2xl top-full left-auto bg-bg-pr/80 backdrop-blur-xs w-60 overflow-y-auto max-h-96 z-10"
                >
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div @click="selected = '<?php echo e($option['key']); ?>'; isOpen = false" class="border-b border-bord-tr px-4 py-2 text-par-m text-lab-sc hover:bg-fill-qt smoothing cursor-pointer">
                            <?php echo e($option['value']); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

    <!--[if BLOCK]><![endif]--><?php if(isset($feedbackInfo)): ?>
        <?php if (isset($component)) { $__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($feedbackInfo); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67)): ?>
<?php $attributes = $__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67; ?>
<?php unset($__attributesOriginalc8d6e69da03bfdaed5b7c7c610ff2c67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67)): ?>
<?php $component = $__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67; ?>
<?php unset($__componentOriginalc8d6e69da03bfdaed5b7c7c610ff2c67); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /var/www/www.uservault.net/resources/views/components/form/select.blade.php ENDPATH**/ ?>