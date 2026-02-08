<script>
	window.BackendEmbeds = {
		assets: {
			images: {
				upload_avatar: '<?php echo e(asset('assets/avatars/upload-avatar.png')); ?>',
				bio_avatar: '<?php echo e(asset('assets/avatars/bio-avatar.png')); ?>'
			},
			logos: {
				url: '<?php echo e($logotypeUrl); ?>'
			},
			emojis: {
				animated: <?php echo json_encode(config('emojis.animated'), 15, 512) ?>
			}
		},
		translation_service: {
			name: '<?php echo e(config('services.translation.name')); ?>',
			url: '<?php echo e(config('services.translation.url')); ?>',
			logo_url: '<?php echo e(config('services.translation.logo')); ?>'
		},
		routes: {
			business_dashboard_index: "<?php echo e(route('business.dashboard.index')); ?>",
			user_auth_index: "<?php echo e(route('user.auth.index')); ?>",
			terms_of_use: "<?php echo e(route('document.terms.index')); ?>",
			privacy_policy: "<?php echo e(route('document.privacy.index')); ?>",
			cookies_policy: "<?php echo e(route('document.cookies.index')); ?>",
			api_developers: "<?php echo e(route('document.developers.index')); ?>",
			help_center: "<?php echo e(route('document.help.index')); ?>",
			user_linker_index: "<?php echo e(route('user.linker.index')); ?>",
			verification_rules: "<?php echo e(route('document.verification.index')); ?>",
			become_author: "<?php echo e(route('document.author.index')); ?>"
		},
		sharing: {
			stories: <?php echo json_encode(config('content.sharing.stories'), 15, 512) ?>
		},
		links: {
			assets_url: "<?php echo e(asset('/')); ?>",
			base_url: "<?php echo e(url('/')); ?>/",
			assets: {
				emoji: "<?php echo e(asset('assets/emoji/img-apple-64')); ?>/"
			},
			guide_links: {
				publication_rules: "<?php echo e(asset('documents/publication-rules.pdf')); ?>",
			}
		},
		locale: '<?php echo e(app()->getLocale()); ?>',
		locale_name: '<?php echo e($localeName); ?>',
		available_locales: <?php echo json_encode(available_locales(), 15, 512) ?>,
		theme: '<?php echo e(theme_name()); ?>',
		config: {
			features: <?php echo json_encode(config('features'), 15, 512) ?>,
			app: {
				name: '<?php echo e(config('app.name')); ?>',
				currency: <?php echo json_encode(default_currency(), 15, 512) ?>
			},
			verification: {
				service_url: '<?php echo e(config('verification.service_url')); ?>'
			},
			validation: {
				user: {
					bio: <?php echo json_encode(config('user.validation.bio'), 15, 512) ?>
				}
			},
			chat: {
				group: {
					invite_expire_days: <?php echo e(config('chat.group.invite_expire_days')); ?>

				}
			},
			user: {
				default_avatar: '<?php echo e(asset(config('user.avatar'))); ?>'
			},
			wallet: {
				name: '<?php echo e(config('wallet.name')); ?>',
				about_link: '<?php echo e(config('wallet.about_link')); ?>',
				deposit: {
					max_amount: <?php echo e(config('wallet.deposit.max_amount')); ?>,
					min_amount: <?php echo e(config('wallet.deposit.min_amount')); ?>,
					commission: <?php echo e(config('wallet.commission.deposit')); ?>

				},
				transfer: {
					max_amount: <?php echo e(config('wallet.transfer.max_amount')); ?>,
					min_amount: <?php echo e(config('wallet.transfer.min_amount')); ?>,
					commission: <?php echo e(config('wallet.commission.transfer')); ?>

				},
				withdraw: {
					max_amount: <?php echo e(config('wallet.withdraw.max_amount')); ?>,
					min_amount: <?php echo e(config('wallet.withdraw.min_amount')); ?>,
					commission: <?php echo e(config('wallet.commission.withdraw')); ?>

				}
			},
			sounds: {
				chat: {
					active_chat_message_received: '<?php echo e(asset(config('chat.sounds.active_chat_message_received'))); ?>',
					chat_message_sent: '<?php echo e(asset(config('chat.sounds.chat_message_sent'))); ?>',
					background_chat_message_received: '<?php echo e(asset(config('chat.sounds.background_chat_message_received'))); ?>'
				},
				notification: {
					received: '<?php echo e(asset(config('notifications.sounds.notification_received'))); ?>',
					ui_feedback: '<?php echo e(asset(config('notifications.sounds.ui_feedback'))); ?>'
				}
			}
		},
		contacts: {
			support_email: '<?php echo e(config('contacts.support_email')); ?>',
			support_phone: '<?php echo e(config('contacts.support_phone')); ?>',
			address: '<?php echo e(config('contacts.address')); ?>'
		}
	};
</script><?php /**PATH /var/www/www.uservault.net/resources/views/layouts/spa/apps/parts/embeds.blade.php ENDPATH**/ ?>