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
            <a href="<?php echo e(route('admin.dash.index')); ?>" class="flex items-center gap-2">
                <img class="h-5" src="<?php echo e($logotypeUrl); ?>" alt="Image">
                <span class="font-bold text-lab-pr">
                    <?php echo e(__('admin/labels.admin_panel')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.dash.index')).'','iconName' => 'grid-01','iconType' => 'line','current' => route_is('admin.dash.*'),'text' => ''.e(__('admin/sidebar.dashboard')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.dash.index')).'','iconName' => 'grid-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.dash.*')),'text' => ''.e(__('admin/sidebar.dashboard')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.lab.index')).'','iconName' => 'thermometer-cold','iconType' => 'line','current' => route_is('admin.lab.*'),'text' => ''.e(__('admin/sidebar.lab_tools')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.lab.index')).'','iconName' => 'thermometer-cold','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.lab.*')),'text' => ''.e(__('admin/sidebar.lab_tools')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(config('app.documentation_url')).'','iconName' => 'book-open-01','iconType' => 'line','target' => '_blank','text' => ''.e(__('admin/sidebar.documentation')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(config('app.documentation_url')).'','iconName' => 'book-open-01','iconType' => 'line','target' => '_blank','text' => ''.e(__('admin/sidebar.documentation')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.users.index')).'','iconName' => 'user-02','iconType' => 'line','current' => route_is('admin.users.*'),'text' => ''.e(__('admin/sidebar.users')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.users.index')).'','iconName' => 'user-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.users.*')),'text' => ''.e(__('admin/sidebar.users')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.posts.index')).'','iconName' => 'layout-alt-02','iconType' => 'line','current' => route_is('admin.posts.*'),'text' => ''.e(__('admin/sidebar.publications')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.posts.index')).'','iconName' => 'layout-alt-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.posts.*')),'text' => ''.e(__('admin/sidebar.publications')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.ads.index')).'','iconName' => 'announcement-03','iconType' => 'line','current' => route_is('admin.ads.*'),'text' => ''.e(__('admin/sidebar.ads_manager')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.ads.index')).'','iconName' => 'announcement-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.ads.*')),'text' => ''.e(__('admin/sidebar.ads_manager')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.stories.index')).'','iconName' => 'refresh-cw-04','iconType' => 'line','current' => route_is('admin.stories.*'),'text' => ''.e(__('admin/sidebar.stories')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.stories.index')).'','iconName' => 'refresh-cw-04','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.stories.*')),'text' => ''.e(__('admin/sidebar.stories')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.market.index')).'','iconName' => 'shopping-bag-03','iconType' => 'line','current' => route_is('admin.market.*'),'text' => ''.e(__('admin/sidebar.marketplace')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.market.index')).'','iconName' => 'shopping-bag-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.market.*')),'text' => ''.e(__('admin/sidebar.marketplace')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.jobs.index')).'','iconName' => 'briefcase-01','iconType' => 'line','current' => route_is('admin.jobs.*'),'text' => ''.e(__('admin/sidebar.jobs')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.jobs.index')).'','iconName' => 'briefcase-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.jobs.*')),'text' => ''.e(__('admin/sidebar.jobs')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.chats.index')).'','iconName' => 'message-chat-circle','iconType' => 'line','current' => route_is('admin.chats.*'),'text' => ''.e(__('admin/sidebar.chats_groups')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.chats.index')).'','iconName' => 'message-chat-circle','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.chats.*')),'text' => ''.e(__('admin/sidebar.chats_groups')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.config.general')).'','iconName' => 'settings-01','iconType' => 'line','current' => route_is('admin.config.general'),'text' => ''.e(__('admin/sidebar.general_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.config.general')).'','iconName' => 'settings-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.config.general')),'text' => ''.e(__('admin/sidebar.general_settings')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.config.email')).'','iconName' => 'mail-01','iconType' => 'line','current' => route_is('admin.config.email'),'text' => ''.e(__('admin/sidebar.email_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.config.email')).'','iconName' => 'mail-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.config.email')),'text' => ''.e(__('admin/sidebar.email_settings')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.config.notifications')).'','iconName' => 'bell-01','iconType' => 'line','current' => route_is('admin.config.notifications'),'text' => ''.e(__('admin/sidebar.notifications')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.config.notifications')).'','iconName' => 'bell-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.config.notifications')),'text' => ''.e(__('admin/sidebar.notifications')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.config.api')).'','iconName' => 'code-02','iconType' => 'line','current' => route_is('admin.config.api'),'text' => ''.e(__('admin/sidebar.api_settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.config.api')).'','iconName' => 'code-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.config.api')),'text' => ''.e(__('admin/sidebar.api_settings')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.storage.index')).'','iconName' => 'cloud-blank-01','iconType' => 'line','current' => route_is('admin.storage.*'),'text' => ''.e(__('admin/sidebar.file_storage')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.storage.index')).'','iconName' => 'cloud-blank-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.storage.*')),'text' => ''.e(__('admin/sidebar.file_storage')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.coming.index')).'','iconName' => 'database-01','iconType' => 'line','current' => false,'text' => ''.e(__('admin/sidebar.db_backup')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.coming.index')).'','iconName' => 'database-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'text' => ''.e(__('admin/sidebar.db_backup')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.payments.index')).'','iconName' => 'credit-card-02','iconType' => 'line','current' => route_is('admin.payments.*'),'text' => ''.e(__('admin/sidebar.payments')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.payments.index')).'','iconName' => 'credit-card-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.payments.*')),'text' => ''.e(__('admin/sidebar.payments')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.categories.index')).'','iconName' => 'tag-03','iconType' => 'line','current' => route_is('admin.categories.*'),'text' => ''.e(__('admin/sidebar.categories')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.categories.index')).'','iconName' => 'tag-03','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.categories.*')),'text' => ''.e(__('admin/sidebar.categories')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.reports.index')).'','iconName' => 'flag-02','iconType' => 'line','current' => route_is('admin.reports.*'),'text' => ''.e(__('admin/sidebar.reported_content')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.reports.index')).'','iconName' => 'flag-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.reports.*')),'text' => ''.e(__('admin/sidebar.reported_content')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.lang.index')).'','iconName' => 'translate-01','iconType' => 'line','current' => route_is('admin.lang.*'),'text' => ''.e(__('admin/sidebar.languages')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.lang.index')).'','iconName' => 'translate-01','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.lang.*')),'text' => ''.e(__('admin/sidebar.languages')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.currency.index')).'','iconName' => 'currency-euro','iconType' => 'line','current' => route_is('admin.currency.*'),'text' => ''.e(__('admin/sidebar.currency')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.currency.index')).'','iconName' => 'currency-euro','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.currency.*')),'text' => ''.e(__('admin/sidebar.currency')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.config.verification')).'','iconName' => 'check-verified-02','iconType' => 'line','current' => route_is('admin.config.verification'),'text' => ''.e(__('admin/sidebar.verification')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.config.verification')).'','iconName' => 'check-verified-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.config.verification')),'text' => ''.e(__('admin/sidebar.verification')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.authorship.index')).'','iconName' => 'star-04','iconType' => 'line','current' => route_is('admin.authorship.*'),'text' => ''.e(__('admin/sidebar.authorship')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.authorship.index')).'','iconName' => 'star-04','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.authorship.*')),'text' => ''.e(__('admin/sidebar.authorship')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.coming.index')).'','iconName' => 'credit-card-up','iconType' => 'line','current' => false,'text' => ''.e(__('admin/sidebar.withdrawals')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.coming.index')).'','iconName' => 'credit-card-up','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'text' => ''.e(__('admin/sidebar.withdrawals')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.pages.index')).'','iconName' => 'file-02','iconType' => 'line','current' => route_is('admin.pages.*'),'text' => ''.e(__('admin/sidebar.static_pages')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.pages.index')).'','iconName' => 'file-02','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.pages.*')),'text' => ''.e(__('admin/sidebar.static_pages')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(route('admin.banning.index')).'','iconName' => 'slash-octagon','iconType' => 'line','current' => route_is('admin.banning.*'),'text' => ''.e(__('admin/sidebar.banned')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.banning.index')).'','iconName' => 'slash-octagon','iconType' => 'line','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route_is('admin.banning.*')),'text' => ''.e(__('admin/sidebar.banned')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.navlist-item','data' => ['href' => ''.e(url(config('log-viewer.route_path'))).'','iconName' => 'alert-triangle','iconType' => 'line','text' => ''.e(__('admin/sidebar.logging')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.navlist-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(url(config('log-viewer.route_path'))).'','iconName' => 'alert-triangle','iconType' => 'line','text' => ''.e(__('admin/sidebar.logging')).'']); ?>
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
		<div class="mt-auto py-6">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(route('document.help.index')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.help.index')).'','target' => '_blank']); ?>
                    <?php echo e(__('business/labels.help')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(route('document.developers.index')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.developers.index')).'','target' => '_blank']); ?>
                    <?php echo e(__('business/labels.for_developers')); ?>

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
<?php $component->withAttributes(['href' => ''.e(url('/')).'','target' => '_blank']); ?>
                    <?php echo e(config('app.name')); ?> &copy; <?php echo e(now()->year); ?>  Version #<?php echo e($appVersion); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['href' => ''.e(route('document.cookies.index')).'','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('document.cookies.index')).'','target' => '_blank']); ?>
                    <?php echo e(__('links.cookies_policy')); ?>

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
<?php endif; ?>
<?php /**PATH /var/www/www.uservault.net/resources/views/layouts/mpa/apps/admin/parts/sidebar.blade.php ENDPATH**/ ?>