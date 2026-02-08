<a <?php echo e($attributes); ?> class="rounded-full border border-bord-pr block leading-none">
    <div class="flex relative h-12 md:h-12 items-center">
        <!--[if BLOCK]><![endif]--><?php if(isset($iconSlot)): ?>
            <div class="absolute left-3 size-4 md:size-6 top-3 block overflow-hidden">
                <?php echo e($iconSlot); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <span class="text-center block w-full text-lab-pr2 text-par-s md:text-par-m font-medium"><?php echo e($slot); ?></span>
    </div>
</a><?php /**PATH /var/www/www.uservault.net/resources/views/components/auth/social/button.blade.php ENDPATH**/ ?>