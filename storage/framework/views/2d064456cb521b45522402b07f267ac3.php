<div>
    <form wire:submit.prevent="submitForm">
        <?php echo csrf_field(); ?>
        <?php if (isset($component)) { $__componentOriginalec930da7ae1f567dd18413569ebe58b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec930da7ae1f567dd18413569ebe58b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/jobs.form.base_info')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/jobs.form.base_info')).'']); ?>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['wire:model' => 'formData.title','name' => 'formData.title','labelText' => ''.e(__('business/jobs.form.title')).' *','placeholder' => ''.e(__('business/jobs.form.title_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'formData.title','name' => 'formData.title','labelText' => ''.e(__('business/jobs.form.title')).' *','placeholder' => ''.e(__('business/jobs.form.title_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.title_helper')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/jobs.form.overview')).' *','asText' => true,'wire:model' => 'formData.overview','name' => 'formData.overview','placeholder' => ''.e(__('business/jobs.form.overview_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.overview')).' *','asText' => true,'wire:model' => 'formData.overview','name' => 'formData.overview','placeholder' => ''.e(__('business/jobs.form.overview_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.overview_helper')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/jobs.form.desc')).' *','asText' => true,'wire:model' => 'formData.description','name' => 'formData.description','placeholder' => ''.e(__('business/jobs.form.desc_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.desc')).' *','asText' => true,'wire:model' => 'formData.description','name' => 'formData.description','placeholder' => ''.e(__('business/jobs.form.desc_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.desc_helper')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['options' => $categories,'placeholder' => ''.e(__('business/jobs.form.category_placeholder')).'','name' => 'formData.category_id','wire:model' => 'formData.category_id','labelText' => ''.e(__('business/jobs.form.category')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'placeholder' => ''.e(__('business/jobs.form.category_placeholder')).'','name' => 'formData.category_id','wire:model' => 'formData.category_id','labelText' => ''.e(__('business/jobs.form.category')).' *']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('business/jobs.form.job_type')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.job_type')).' *']); ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.type','wire:model' => 'formData.type','defaultValue' => 'vacancy','checked' => true,'labelText' => ''.e(__('business/labels.type_labels.vacancy')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.type','wire:model' => 'formData.type','defaultValue' => 'vacancy','checked' => true,'labelText' => ''.e(__('business/labels.type_labels.vacancy')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.type','defaultValue' => 'project','wire:model' => 'formData.type','labelText' => ''.e(__('business/labels.type_labels.project')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.type','defaultValue' => 'project','wire:model' => 'formData.type','labelText' => ''.e(__('business/labels.type_labels.project')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/jobs.form.income')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/jobs.form.income')).'']); ?>
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/jobs.form.income_amount')).'','wire:model' => 'formData.income','name' => 'formData.income','placeholder' => ''.e(__('business/jobs.form.income_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.income_amount')).'','wire:model' => 'formData.income','name' => 'formData.income','placeholder' => ''.e(__('business/jobs.form.income_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.income_helper')); ?>

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
            <div class="mb-10">
                <?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('business/jobs.form.income_range')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.income_range')).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.is_start_income','wire:model' => 'formData.is_start_income','defaultValue' => 'yes','labelText' => ''.e(__('business/jobs.form.income_range_start')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.is_start_income','wire:model' => 'formData.is_start_income','defaultValue' => 'yes','labelText' => ''.e(__('business/jobs.form.income_range_start')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.is_start_income','wire:model' => 'formData.is_start_income','defaultValue' => 'no','labelText' => ''.e(__('business/jobs.form.income_range_end')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.is_start_income','wire:model' => 'formData.is_start_income','defaultValue' => 'no','labelText' => ''.e(__('business/jobs.form.income_range_end')).'']); ?>
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
            <div class="mb-6">
                <?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['options' => $currencies,'name' => 'formData.currency','wire:model' => 'formData.currency','placeholder' => ''.e(__('business/jobs.form.currency_placeholder')).'','labelText' => ''.e(__('business/jobs.form.currency')).' *']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($currencies),'name' => 'formData.currency','wire:model' => 'formData.currency','placeholder' => ''.e(__('business/jobs.form.currency_placeholder')).'','labelText' => ''.e(__('business/jobs.form.currency')).' *']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.currency_helper')); ?>

                     <?php $__env->endSlot(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordion.form','data' => ['title' => ''.e(__('business/jobs.form.additional')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordion.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('business/jobs.form.additional')).'']); ?>
            <div class="mb-10">
                <?php if (isset($component)) { $__componentOriginalca0217661bc5c98c2e71d2f3864e3d28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0217661bc5c98c2e71d2f3864e3d28 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-group','data' => ['labelText' => ''.e(__('business/jobs.form.urgency')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.urgency')).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal007928a2acf9f0c01766b43c0d46b2e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007928a2acf9f0c01766b43c0d46b2e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.is_urgent','wire:model' => 'formData.is_urgent','defaultValue' => 'yes','labelText' => ''.e(__('business/jobs.form.urgent')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.is_urgent','wire:model' => 'formData.is_urgent','defaultValue' => 'yes','labelText' => ''.e(__('business/jobs.form.urgent')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio','data' => ['name' => 'formData.is_urgent','wire:model' => 'formData.is_urgent','defaultValue' => 'no','labelText' => ''.e(__('business/jobs.form.not_urgent')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'formData.is_urgent','wire:model' => 'formData.is_urgent','defaultValue' => 'no','labelText' => ''.e(__('business/jobs.form.not_urgent')).'']); ?>
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
            <div class="mb-10">
                <?php if (isset($component)) { $__componentOriginale08b08ebed7295039e76389dab2f0e3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale08b08ebed7295039e76389dab2f0e3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text-input','data' => ['labelText' => ''.e(__('business/jobs.form.address')).'','wire:model' => 'formData.location','name' => 'formData.location','placeholder' => ''.e(__('business/jobs.form.address_placeholder')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['labelText' => ''.e(__('business/jobs.form.address')).'','wire:model' => 'formData.location','name' => 'formData.location','placeholder' => ''.e(__('business/jobs.form.address_placeholder')).'']); ?>

                     <?php $__env->slot('feedbackInfo', null, []); ?> 
                        <?php echo e(__('business/jobs.form.address_helper')); ?>

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
                    <?php if($this->upsertType == 'create'): ?>
                        <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'submit','btnText' => ''.e(__('business/jobs.form.submit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','btnText' => ''.e(__('business/jobs.form.submit')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>

                        <a href="<?php echo e(route('business.jobs.index')); ?>">
                            <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['variant' => 'danger','type' => 'button','btnText' => ''.e(__('business/jobs.form.cancel')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','type' => 'button','btnText' => ''.e(__('business/jobs.form.cancel')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['type' => 'submit','btnText' => ''.e(__('business/jobs.form.save')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','btnText' => ''.e(__('business/jobs.form.save')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $attributes = $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__attributesOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242)): ?>
<?php $component = $__componentOriginalf5aedddf2decf4502e7c91ad5f359242; ?>
<?php unset($__componentOriginalf5aedddf2decf4502e7c91ad5f359242); ?>
<?php endif; ?>

                        <a href="<?php echo e(route('business.jobs.show', $this->jobData->id)); ?>">
                            <?php if (isset($component)) { $__componentOriginalf5aedddf2decf4502e7c91ad5f359242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5aedddf2decf4502e7c91ad5f359242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.buttons.pill','data' => ['variant' => 'danger','type' => 'button','btnText' => ''.e(__('business/jobs.form.cancel')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.buttons.pill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','type' => 'button','btnText' => ''.e(__('business/jobs.form.cancel')).'']); ?> <?php echo $__env->renderComponent(); ?>
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
                <p class="text-cap-l text-lab-sc">
                    <?php echo __('business/jobs.form.tos_agreement'); ?>

                    <br>
                    <br>
                    <a href="<?php echo e(asset(config('jobs.document_links.posting_rules'))); ?>" target="_blank" class="text-brand-900 underline">
                        <?php echo e(__('business/jobs.form.tos_agreement_link')); ?>

                    </a>
                </p>
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
<?php /**PATH /var/www/www.uservault.net/resources/views/livewire/business/jobs/upsert.blade.php ENDPATH**/ ?>