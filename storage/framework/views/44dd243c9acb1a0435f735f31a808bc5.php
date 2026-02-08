<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'asText' => false,
    'hasLabel' => true,
    'labelText' => '',
    'labelTextBrackets' => '',
    'isReadonly' => false,
    'inputType' => 'text',
    'isPassword' => false,
    'placeholder' => '',
    'classes' => '',
    'name' => '',
    'errorKey' => null,
    'value' => ''
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
    'asText' => false,
    'hasLabel' => true,
    'labelText' => '',
    'labelTextBrackets' => '',
    'isReadonly' => false,
    'inputType' => 'text',
    'isPassword' => false,
    'placeholder' => '',
    'classes' => '',
    'name' => '',
    'errorKey' => null,
    'value' => ''
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

    <!--[if BLOCK]><![endif]--><?php if($asText): ?>
        <div class="block relative group">
            <textarea
                x-ref="input"
                class="block w-full bg-input-pr read-only:opacity-90 tracking-normal min-h-24 placeholder:font-light outline-hidden text-par-m text-lab-pr px-5 py-4 rounded-xl <?php echo e($classes); ?>"
                placeholder="<?php echo e($placeholder); ?>"
            name="<?php echo e($name); ?>" <?php echo e($attributes); ?>><?php echo e($value); ?></textarea>

            <div class="size-4 absolute right-0 bottom-px bg-input-pr text-lab-tr inline-block group-hover:hidden">
                <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'dots-arrow','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'dots-arrow','type' => 'solid']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="block relative" x-data="{ inputType: '<?php echo e($inputType); ?>' }">
            <input
                x-ref="input"
                x-bind:type="inputType"
                class="block w-full bg-input-pr read-only:opacity-50 read-only:cursor-not-allowed tracking-normal placeholder:font-light outline-hidden text-par-m text-lab-pr px-5 py-4 rounded-xl <?php echo e($classes); ?>"
                placeholder="<?php echo e($placeholder); ?>"
                name="<?php echo e($name); ?>"
                <?php if($isReadonly): ?>
                    readonly
                <?php endif; ?>
            value="<?php echo e($value); ?>" <?php echo e($attributes); ?>>

            <!--[if BLOCK]><![endif]--><?php if(isset($inputIcon)): ?>
                <span class="absolute right-0 top-0">
                    <?php echo e($inputIcon); ?>

                </span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if($isPassword): ?>
                <span class="absolute right-0 top-0 h-full inline-flex-center px-4">
                    <button x-on:click="inputType = (inputType == 'password' ? 'text' : 'password')" class="size-6 cursor-pointer text-bord-sc outline-hidden" type="button">
                        <template x-if="inputType == 'password'">
                            <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'eye','type' => 'solid','classes' => 'size-full text-bord-sc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'eye','type' => 'solid','classes' => 'size-full text-bord-sc']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                        </template>
                        <template x-if="inputType == 'text'">
                            <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'eye-off','type' => 'solid','classes' => 'size-full text-bord-sc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'eye-off','type' => 'solid','classes' => 'size-full text-bord-sc']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $attributes = $__attributesOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__attributesOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa25fa354301adf40df60a26b9586efa)): ?>
<?php $component = $__componentOriginalaa25fa354301adf40df60a26b9586efa; ?>
<?php unset($__componentOriginalaa25fa354301adf40df60a26b9586efa); ?>
<?php endif; ?>
                        </template>
                    </button>
                </span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($errors->has($errorKey ?? $name)): ?>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$errorKey ?? $name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php if (isset($component)) { $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.valerr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.valerr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  
                <?php echo e($message); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $attributes = $__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__attributesOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1)): ?>
<?php $component = $__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1; ?>
<?php unset($__componentOriginal91df8b95fd7e1cb5e39f14402ba3fbd1); ?>
<?php endif; ?>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
    <?php else: ?>
        <!--[if BLOCK]><![endif]--><?php if(isset($feedbackInfo)): ?>
            <div class="flex justify-between mt-0.5 px-1">
                <!--[if BLOCK]><![endif]--><?php if(isset($feedbackIcon)): ?>
                    <span class="mr-2.5">
                        <?php echo e($feedbackIcon); ?>

                    </span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /var/www/www.uservault.net/resources/views/components/form/text-input.blade.php ENDPATH**/ ?>