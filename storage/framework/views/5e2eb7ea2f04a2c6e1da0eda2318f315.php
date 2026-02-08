<?php if (isset($component)) { $__componentOriginalf72f913f7fa3788608589377f1289d5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf72f913f7fa3788608589377f1289d5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.container','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal73a4cfdf5f52b7a313923e36a0d9d499 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73a4cfdf5f52b7a313923e36a0d9d499 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="mb-12">
            <a href="<?php echo e(route('business.dashboard.index')); ?>" class="flex items-center gap-2">
                <img class="h-5" src="<?php echo e($logotypeUrl); ?>" alt="Image">
                <span class="font-bold text-lab-pr">
                    <?php echo e(__('business/labels.business_account')); ?>

                </span>
            </a>
        </div>
        <?php if (isset($component)) { $__componentOriginal8f70025065c9e36f0873e80a7e5ee174 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f70025065c9e36f0873e80a7e5ee174 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('user.desktop.index')).'','iconName' => 'home-smile','iconType' => 'line','trailingIcon' => true,'trailingIconName' => 'arrow-up-right','trailingIconType' => 'line','target' => '_blank','text' => ''.e(__('admin/sidebar.home')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('user.desktop.index')).'','iconName' => 'home-smile','iconType' => 'line','trailingIcon' => true,'trailingIconName' => 'arrow-up-right','trailingIconType' => 'line','target' => '_blank','text' => ''.e(__('admin/sidebar.home')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal183513552c4e5c0eb52c1e9ea926c863 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $attributes = $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $component = $__componentOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.dashboard.index')).'','iconName' => 'home-smile','iconType' => 'line','current' => route_is('business.dashboard.*'),'text' => ''.e(__('business/labels.overview')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.dashboard.index')).'','iconName' => 'home-smile','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.dashboard.*')),'text' => ''.e(__('business/labels.overview')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.ads.index')).'','iconName' => 'announcement-03','iconType' => 'line','current' => route_is('business.ads.*'),'text' => ''.e(__('business/labels.campaign')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.ads.index')).'','iconName' => 'announcement-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.ads.*')),'text' => ''.e(__('business/labels.campaign')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.market.index')).'','iconName' => 'shopping-bag-03','iconType' => 'line','current' => route_is('business.market.*'),'text' => ''.e(__('business/labels.marketplace')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.market.index')).'','iconName' => 'shopping-bag-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.market.*')),'text' => ''.e(__('business/labels.marketplace')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.jobs.index')).'','iconName' => 'briefcase-01','iconType' => 'line','current' => route_is('business.jobs.*'),'text' => ''.e(__('business/labels.jobs')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.jobs.index')).'','iconName' => 'briefcase-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.jobs.*')),'text' => ''.e(__('business/labels.jobs')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal183513552c4e5c0eb52c1e9ea926c863 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $attributes = $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $component = $__componentOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.wallet.index')).'','iconName' => 'wallet-03','iconType' => 'line','current' => route_is('business.wallet.*'),'text' => ''.e(__('business/labels.wallet')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.wallet.index')).'','iconName' => 'wallet-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.wallet.*')),'text' => ''.e(__('business/labels.wallet')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.settings.index')).'','iconName' => 'settings-01','iconType' => 'line','current' => route_is('business.settings.*'),'text' => ''.e(__('business/labels.account_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.settings.index')).'','iconName' => 'settings-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.settings.*')),'text' => ''.e(__('business/labels.account_settings')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('business.affiliate.index')).'','iconName' => 'currency-euro','iconType' => 'line','current' => route_is('business.affiliate.*'),'text' => ''.e(__('business/labels.affiliate_program')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('business.affiliate.index')).'','iconName' => 'currency-euro','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('business.affiliate.*')),'text' => ''.e(__('business/labels.affiliate_program')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal183513552c4e5c0eb52c1e9ea926c863 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-div','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-div'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $attributes = $__attributesOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__attributesOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863)): ?>
<?php $component = $__componentOriginal183513552c4e5c0eb52c1e9ea926c863; ?>
<?php unset($__componentOriginal183513552c4e5c0eb52c1e9ea926c863); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('document.help.index')).'','iconName' => 'help-circle','iconType' => 'line','current' => false,'text' => ''.e(__('business/labels.help')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.help.index')).'','iconName' => 'help-circle','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'text' => ''.e(__('business/labels.help')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginald13091cb8538526f6284a842e9e81328 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald13091cb8538526f6284a842e9e81328 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(config('business.links.business_account_guide')).'','iconName' => 'arrow-up-right','iconType' => 'line','text' => ''.e(__('business/labels.about_account')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(config('business.links.business_account_guide')).'','iconName' => 'arrow-up-right','iconType' => 'line','text' => ''.e(__('business/labels.about_account')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $attributes = $__attributesOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__attributesOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald13091cb8538526f6284a842e9e81328)): ?>
<?php $component = $__componentOriginald13091cb8538526f6284a842e9e81328; ?>
<?php unset($__componentOriginald13091cb8538526f6284a842e9e81328); ?>
<?php endif; ?>

            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f70025065c9e36f0873e80a7e5ee174)): ?>
<?php $attributes = $__attributesOriginal8f70025065c9e36f0873e80a7e5ee174; ?>
<?php unset($__attributesOriginal8f70025065c9e36f0873e80a7e5ee174); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f70025065c9e36f0873e80a7e5ee174)): ?>
<?php $component = $__componentOriginal8f70025065c9e36f0873e80a7e5ee174; ?>
<?php unset($__componentOriginal8f70025065c9e36f0873e80a7e5ee174); ?>
<?php endif; ?>
		<div class="mt-auto">
			<div class="flex flex-wrap gap-1">
                <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(url('settings/theme')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('settings/theme')).'','target' => '_blank']); ?>
                    <?php echo e(__('labels.theme')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(route('document.privacy.index')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.privacy.index')).'','target' => '_blank']); ?>
                    <?php echo e(__('business/labels.privacy_policy')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(route('document.terms.index')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.terms.index')).'','target' => '_blank']); ?>
                    <?php echo e(__('business/labels.terms_of_use')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(url('settings/language')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('settings/language')).'','target' => '_blank']); ?>
                    <?php echo e(__('business/labels.language')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
            
                <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(url('/')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url('/')).'','target' => '_blank']); ?><?php echo e(config('app.name')); ?> &copy; <?php echo e(now()->year); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
                
                <?php if (! (config('app.hide_author_attribution'))): ?>
                    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => 'https://www.terla.me','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://www.terla.me','target' => '_blank']); ?>Created by Mansur Terla <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
                <?php endif; ?>
			</div>
		</div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73a4cfdf5f52b7a313923e36a0d9d499)): ?>
<?php $attributes = $__attributesOriginal73a4cfdf5f52b7a313923e36a0d9d499; ?>
<?php unset($__attributesOriginal73a4cfdf5f52b7a313923e36a0d9d499); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73a4cfdf5f52b7a313923e36a0d9d499)): ?>
<?php $component = $__componentOriginal73a4cfdf5f52b7a313923e36a0d9d499; ?>
<?php unset($__componentOriginal73a4cfdf5f52b7a313923e36a0d9d499); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf72f913f7fa3788608589377f1289d5a)): ?>
<?php $attributes = $__attributesOriginalf72f913f7fa3788608589377f1289d5a; ?>
<?php unset($__attributesOriginalf72f913f7fa3788608589377f1289d5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf72f913f7fa3788608589377f1289d5a)): ?>
<?php $component = $__componentOriginalf72f913f7fa3788608589377f1289d5a; ?>
<?php unset($__componentOriginalf72f913f7fa3788608589377f1289d5a); ?>
<?php endif; ?><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/business/parts/sidebar.blade.php ENDPATH**/ ?>