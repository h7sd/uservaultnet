<?php $__env->startSection('pageContent'); ?>
    <div class="block">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('user.auth.login-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-3011505201-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('authLayout::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/www.uservault.net/resources/views/apps/mpa/auth/index.blade.php ENDPATH**/ ?>