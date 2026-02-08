<div class="block">
    <p class="text-par-s text-lab-sc text-center">
        <?php echo __('auth.auth_agreement', [
            'app_name' => config('app.name'),
            'terms_link' => route('document.terms.index'),
            'policy_link' => route('document.privacy.index')
        ]); ?>

    </p>
</div><?php /**PATH /var/www/www.uservault.net/resources/views/livewire/user/auth/parts/agreement.blade.php ENDPATH**/ ?>