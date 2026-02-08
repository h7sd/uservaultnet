<div>
    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/market.form.base_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/market.form.base_info')).'']); ?>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.name')).' *','wire:model' => 'formData.title','name' => 'formData.title','placeholder' => ''.e(__('business/market.form.name_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.name')).' *','wire:model' => 'formData.title','name' => 'formData.title','placeholder' => ''.e(__('business/market.form.name_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/market.form.name_helper')); ?>

                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.desc')).' *','asText' => true,'wire:model' => 'formData.description','name' => 'formData.description','placeholder' => ''.e(__('business/market.form.name_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.desc')).' *','asText' => true,'wire:model' => 'formData.description','name' => 'formData.description','placeholder' => ''.e(__('business/market.form.name_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/market.form.desc_helper')); ?>

                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['options' => $categories,'name' => 'formData.category_id','wire:model' => 'formData.category_id','placeholder' => ''.e(__('business/market.form.category_placeholder')).'','labelText' => ''.e(__('business/market.form.category')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'name' => 'formData.category_id','wire:model' => 'formData.category_id','placeholder' => ''.e(__('business/market.form.category_placeholder')).'','labelText' => ''.e(__('business/market.form.category')).' *']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('business/market.form.type')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.type')).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.type','defaultValue' => 'physical','wire:model.live' => 'formData.type','labelText' => ''.e(__('business/market.form.type_physical')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.type','defaultValue' => 'physical','wire:model.live' => 'formData.type','labelText' => ''.e(__('business/market.form.type_physical')).'']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.type','defaultValue' => 'digital','wire:model.live' => 'formData.type','labelText' => ''.e(__('business/market.form.type_digital')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.type','defaultValue' => 'digital','wire:model.live' => 'formData.type','labelText' => ''.e(__('business/market.form.type_digital')).'']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $attributes = $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $component = $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>

                <div class="block mt-1">
                    <p class="text-cap-l text-lab-sc">
                        <?php echo __('business/market.form.type_helper'); ?>

                    </p>
                </div>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['options' => $conditions,'name' => 'formData.condition','wire:model' => 'formData.condition','placeholder' => ''.e(__('business/market.form.condition_placeholder')).'','labelText' => ''.e(__('business/market.form.condition')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($conditions),'name' => 'formData.condition','wire:model' => 'formData.condition','placeholder' => ''.e(__('business/market.form.condition_placeholder')).'','labelText' => ''.e(__('business/market.form.condition')).' *']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.stock_qty')).' *','wire:model' => 'formData.stock_quantity','name' => 'formData.stock_quantity','type' => 'number','placeholder' => ''.e(__('business/market.form.stock_qty_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.stock_qty')).' *','wire:model' => 'formData.stock_quantity','name' => 'formData.stock_quantity','type' => 'number','placeholder' => ''.e(__('business/market.form.stock_qty_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/market.form.stock_qty_helper')); ?>

                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/market.form.price_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/market.form.price_info')).'']); ?>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.price')).' *','wire:model' => 'formData.price','name' => 'formData.price','placeholder' => ''.e(__('business/market.form.price_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.price')).' *','wire:model' => 'formData.price','name' => 'formData.price','placeholder' => ''.e(__('business/market.form.price_placeholder')).'']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['options' => $currencies,'wire:model' => 'formData.currency','name' => 'formData.currency','labelText' => ''.e(__('business/market.form.currency')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($currencies),'wire:model' => 'formData.currency','name' => 'formData.currency','labelText' => ''.e(__('business/market.form.currency')).' *']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
            </div>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('business/market.form.discount')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.discount')).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.with_discount','wire:model.live' => 'formData.with_discount','defaultValue' => 'no','labelText' => ''.e(__('business/market.form.discount_off')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.with_discount','wire:model.live' => 'formData.with_discount','defaultValue' => 'no','labelText' => ''.e(__('business/market.form.discount_off')).'']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.with_discount','wire:model.live' => 'formData.with_discount','defaultValue' => 'yes','labelText' => ''.e(__('business/market.form.discount_on')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.with_discount','wire:model.live' => 'formData.with_discount','defaultValue' => 'yes','labelText' => ''.e(__('business/market.form.discount_on')).'']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $attributes = $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5)): ?>
<?php $component = $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5; ?>
<?php unset($__componentOriginal007928a2acf9f0c01766b43c0d46b2e5); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $attributes = $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28)): ?>
<?php $component = $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28; ?>
<?php unset($__componentOriginalca0217661bc5c98c2e71d2f3864e3d28); ?>
<?php endif; ?>
            </div>
            <?php if($formData['with_discount'] == 'yes'): ?>
                <div class="mb-6">
                    <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.discount_rate')).' *','wire:model' => 'formData.discount','name' => 'formData.discount','placeholder' => ''.e(__('business/market.form.discount_rate_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.discount_rate')).' *','wire:model' => 'formData.discount','name' => 'formData.discount','placeholder' => ''.e(__('business/market.form.discount_rate_placeholder')).'']); ?>
                         <?php $__env->slot('feedbackInfo', null, []); ?> 
                            <?php echo e(__('business/market.form.discount_rate_helper')); ?>

                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/market.form.media_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/market.form.media_info')).'']); ?>
            <label class="mb-1 font-normal block text-lab-pr3 text-par-s">
                <?php echo e(__('business/market.form.photos')); ?> *
            </label>
            <div class="mb-2">
                <div class="grid grid-cols-4 gap-2">
                    <div class="aspect-square" x-data>
                        <button x-on:click="$refs.input.click()" type="button" class="border-2 cursor-pointer border-fill-pr border-dashed size-full rounded-md px-4 text-brand-900 transition-all ease-linear hover:border-brand-900">
                            <span class="flex flex-col items-center justify-center size-full">
                                <span class="size-6 mb-2">
                                    <?php if (isset($component)) { $__componentOriginalaa25fa354301adf40df60a26b9586efa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa25fa354301adf40df60a26b9586efa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui-icon','data' => ['name' => 'plus','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'plus','type' => 'solid']); ?> <?php echo $__env->renderComponent(); ?>
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
                                <span class="text-cap-s text-center leading-none ml-1 font-medium">
                                    <?php echo e(__('business/market.form.photos_placeholder')); ?>

                                </span>
                            </span>
                        </button>
                        <input x-ref="input" wire:model="image" type="file" class="hidden" accept="image/*">
                    </div>

                    <?php if($productMedia->isNotEmpty()): ?>
                        <?php $__currentLoopData = $productMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="relative aspect-square border border-bord-pr rounded-md overflow-hidden cursor-pointer smoothing group">
                                <div class="absolute invisible inset-0 flex-center bg-black/40 z-10 group-hover:visible smoothing">
                                    <?php if (isset($component)) { $__componentOriginal879242edd99bb9f1a4a6e9016ceb48b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal879242edd99bb9f1a4a6e9016ceb48b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trash-btn','data' => ['wire:click' => 'deleteProductImage('.e($mediaItem->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trash-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'deleteProductImage('.e($mediaItem->id).')']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal879242edd99bb9f1a4a6e9016ceb48b3)): ?>
<?php $attributes = $__attributesOriginal879242edd99bb9f1a4a6e9016ceb48b3; ?>
<?php unset($__attributesOriginal879242edd99bb9f1a4a6e9016ceb48b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal879242edd99bb9f1a4a6e9016ceb48b3)): ?>
<?php $component = $__componentOriginal879242edd99bb9f1a4a6e9016ceb48b3; ?>
<?php unset($__componentOriginal879242edd99bb9f1a4a6e9016ceb48b3); ?>
<?php endif; ?>
                                </div>
                                <img class="size-full object-cover" src="<?php echo e($mediaItem->source_url); ?>" alt="Image">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mb-6">
                <p class="text-cap-l text-lab-sc">
                    <?php echo __('business/market.form.photos_helper', ['width' => config('marketplace.product.image_width'), 'height' => config('marketplace.product.image_height')]); ?>

                </p>

                <?php $__errorArgs = ['image'];
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
unset($__errorArgs, $__bag); ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('labels.additional_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('labels.additional_info')).'']); ?>
            <div class="mb-16">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/market.form.location')).'','wire:model' => 'formData.address','name' => 'formData.address','placeholder' => ''.e(__('business/market.form.location_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/market.form.location')).'','wire:model' => 'formData.address','name' => 'formData.address','placeholder' => ''.e(__('business/market.form.location_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/market.form.location_helper')); ?>

                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $attributes = $__attributesOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__attributesOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale08b08ebed7295039e76389dab2f0e3a)): ?>
<?php $component = $__componentOriginale08b08ebed7295039e76389dab2f0e3a; ?>
<?php unset($__componentOriginale08b08ebed7295039e76389dab2f0e3a); ?>
<?php endif; ?>
            </div>
            <div class="block">
                <div class="flex mb-6 gap-2">
                    <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['wire:attr.loading' => 'disabled','type' => 'submit','btnText' => ''.e(route_is('business.market.create') ? __('business/market.form.create_button') : __('business/market.form.save_button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:attr.loading' => 'disabled','type' => 'submit','btnText' => ''.e(route_is('business.market.create') ? __('business/market.form.create_button') : __('business/market.form.save_button')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>

                    <a href="<?php echo e(route('business.market.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['variant' => 'danger','btnText' => ''.e(__('business/market.form.cancel_button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','btnText' => ''.e(__('business/market.form.cancel_button')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                <div class="text-cap-l text-lab-sc">
                    <p class="mb-4">
                        <?php echo __('business/market.form.tos_agreement'); ?>

                    </p>
                    <div class="block">
                        <a target="_blank" href="<?php echo e(asset(config('marketplace.document_links.trade_rules'))); ?>" class="text-brand-900 underline">
                            <?php echo e(__('business/market.form.tos_agreement_link')); ?>

                        </a>
                    </div>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $attributes = $__attributesOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__attributesOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec930da7ae1f567dd18413569ebe58b6)): ?>
<?php $component = $__componentOriginalec930da7ae1f567dd18413569ebe58b6; ?>
<?php unset($__componentOriginalec930da7ae1f567dd18413569ebe58b6); ?>
<?php endif; ?>
    </form>
</div>
<?php /**PATH /var/www/www.uservault.net/resources/views/livewire/business/market/upsert.blade.php ENDPATH**/ ?>