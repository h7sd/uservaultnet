<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_boost/browser-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boost.browser-logs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.stats.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/workload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.workload.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/masters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.masters.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/monitoring' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.monitoring.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.monitoring.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/metrics/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs-metrics.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/metrics/queues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.queues-metrics.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs-batches.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/jobs/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.pending-jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/jobs/completed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.completed-jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/jobs/silenced' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.silenced-jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/horizon/api/jobs/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.failed-jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BICSrjalJWZIGCyM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.min.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hBL3RjJySSTwzfFA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/colibrilab/log-viewer/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dash.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lab.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cache/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cache.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coming.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/stories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/market' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/email/testing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.email-testing',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/config/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.config.verification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banning' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banning.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/storage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.storage.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/authorship' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.authorship.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/upsert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.upsert',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chats.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.google.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/apple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.apple.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/apple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.apple.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/telegram' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.telegram.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/telegram' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.telegram.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.twitter.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.twitter.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.facebook.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.facebook.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/discord' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.discord.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/discord' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.discord.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/vk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.vk.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/vk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.vk.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.linkedin.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.linkedin.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/tiktok' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.tiktok.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/tiktok' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.tiktok.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/auth/microsoft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.microsoft.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/social-login/callback/microsoft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.microsoft.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/help-center' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.help.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/terms-of-use' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.terms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.privacy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/cookies-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.cookies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/developers-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.developers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/verification-rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.verification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/document/become-author' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'document.author.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/market' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/market/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/ads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/jobs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.wallet.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/affiliate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.affiliate.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.notifications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/business/settings/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.settings.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sanctum/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zAwYv57Nvlfi8Yyb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/translations/app' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X1oHVZ7LrSTh1vV4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/bootstrap/bootstrap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Vn7nAwsibFeSHv2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVYxLdXqgZoteFKb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/languages/switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::etRoP02XSgUxfwcm',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/email/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tR2NSgiZKHM8FIzD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/email/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uvp93zwkPPNNL3Bz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/email/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AxIrY4S4dnkNcrta',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/email/update/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gnj4Z9NInpRm1EbY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/email/update/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fPx3OgyoWkJd5lgV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/phone/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g9Vx5iV6JxmHm7op',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/phone/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::shSSnDuSfZLydarG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/phone/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbwRjfINZwWIKnSS',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/phone/update/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJ7htQIM1WYh0TGF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/phone/update/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BEDWpb9KRGRdoTeZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/password/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jVuYwpAi2APQHlij',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/password/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RkJUfMUfPZIGoYi4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVAG4XeUBp5hbMHa',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/notifications/push/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::khM45cfJyT0ixfkk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/notifications/email/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0X2RZQj4bD6fVZpZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/notifications/login/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dbaY096mRkRRZhCA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/notification/push/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FrM3xFFHSuNIF4f7',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/notification/email/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VEoRuJI1eRfnWG3c',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BhDHRkLH6piwKHkD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/birthdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fluVy7QlxsKzgM3p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEgojj58ZVdQ1jVb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3oo3kFFa0GI8A5N0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/birthdate/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PASJ6A5diJfmUaAu',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/country/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RQSXjlxO7GPDdWdZ',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/personal/city/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lHVaWS6LtfmgJfrA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wh6dkQ3j8nhAh2yL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/sessions/terminate/other' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uHCP0BPBqjB1qJBn',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/privacy/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wsjDaCtB3Hd76CmN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/privacy/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ng8h4qKXajWsZsgl',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/social/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RGmGa95qdmlHO5kd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/social/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gaxJYIDVCpENWSni',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1voM9EYtZQd4Ufc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PUdg6yEjkJw2UYK1',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/authorship/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0lZmh2jI4vVfLlpB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/authorship/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1tiKt10LcHLpRoWu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/credentials/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Di0SnUIx6NIswGNL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/linked' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qQGOd15xb7h6BE2g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::en9wp0n4CfX3IAKo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/avatar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8P1NGNdQ7leiNFrR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/cover/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::90QExwcPByTj1MEy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/theme/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O7hqSFCA1p8EuVmR',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/account/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yWOjmQnFtxo1AO8n',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Td6qhkqB71c0wG9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ndEswHABm5zjcBz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xyyIHPzJ8vYZ1Edj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/media/image/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aLztJPge2pi7OgiB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/media/video/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9MYU47C9Lk4kwEtq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/media/audio/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nLWD7AN5jbrtXgOE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/media/document/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ShQd5RC2OYxHvpmi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/media/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F1OyAXjfIHpgvuOw',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/poll/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::elzUiKFNhCdVFDJz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/poll/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w6UvVruXAbjwTu41',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/gif/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aoWHJxahRC1SS4po',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/link/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6DEOBebvjde8okPh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/post/editor/link/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HWWknBGUeinKxjFa',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/story/editor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bn1IlVGWmgOSVk0i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/story/editor/media/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9LXDUNCIEfZOOCpT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/story/editor/media/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v85sTfum1FWuw8Q8',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ogf8M14rXXS0JzPF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9xVndtkxLadGxE2t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/post/poll/vote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UAIf7eXqIhqIKnbq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/post/bookmarks/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CLYzZCLhx5Rg6X8s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/post/reaction/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VN4Mnw6x1XwoYYMF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/post/comment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iW9GtIkNDX2sj2sF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/post/comment/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ahXFU7NUr5PrpDSw',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeline/comment/reaction/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JBFqaaM1F7sC9ZEo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stories/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zbf5omEymDxZ6N3T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stories/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mErhZ0vit8diujVJ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kYCQ33974If0QvW4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/profile/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6UxOeuc7ygnSqWD7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/profile/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83h1Dovcky3imlxO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/profile/followers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vXFJBRrCkHbIgoiS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/profile/followings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OWBKnmhDxVBpMqB6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/follows/follow/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dEWUSUsKscyHqSc9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/follows/accept/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n4vSpYjnl3UF2bT6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketplace/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jG90jFlCzTghofdN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketplace/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DSCBQUgwXQzNDQW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketplace/metadata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::by149xnxc9re2ziU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketplace/bookmarks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CIXx42vhaV92O1BB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketplace/bookmarks/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zCk7KA0TaRR4iRaO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jobs/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AgsLgzPegnIOz9hK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jobs/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tKTF932KcCaAI8rV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jobs/bookmarks/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gWdEETzfFlbddinh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vv0UMce9juYtZ8XA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/archive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WlSJJsMO3f2muMJB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/unread/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U55I10SGSFpOKDii',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0CqFS5ZmG46EGxyz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b4IPG22STdgNdvmf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/avatar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nmrnYJtChJ8tYPIL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::My7lDD6wkXSQ3wQV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/participant/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HT4IcZ6Xab2aa6yE',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yBhgwbZX1HhYIaew',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/invite/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xh0MEqfHoYwujt32',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/invite/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rwwmnJz9tHKRy90k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/invite/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GLMxL4KLNbOqyJzq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/invite/decline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8VCPt1xTmxWPVl5c',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/groups/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ud2hQQ44bARzwfhC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YbMZgTA18uZaXzLh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats/requests/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d53do2uy1gRqx9Rb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats/launch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O9qqPLNzxtPC3vky',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chats/launcher-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vFcjkj7Rjc8xAh94',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8KvxpDnc2X2GmJq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chat/message/add-reaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aIH5Upl23TAjEXho',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messenger/chat/message/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ab4zpk21qDFvhuWn',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/profile/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m6QrmJx1PawZVBQf',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/verification/user/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qGcCsF83FiN0dp50',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recommendations/follow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XguKbikpTzQG2Sxh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/explore/people' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSTzl9weefbGz7ei',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/explore/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N78TxyC0HCbmsB9s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fGRbSK1eZHbf2ua0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/mentions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::53sQXUL9RTnh8YWG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/important' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cItdCHV2Pl18JjOB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/unread/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IUL9MObMEChiqFl9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WLz0QdUkQGKx3Ni9',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/autocompletes/mentions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::liUqwXjhw1GJCUR0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/translator/translate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cPOIbdeo6RHHrlnV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/feedback/report/reasons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::grY7s4GScTkU9E3b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/feedback/report/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CWwRBIvlR6G5LYJU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/bookmarks/bookmarks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EaXxDErgMTvKHCpM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R89guLgep5p3KZGO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/payment/providers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d3Taat6Svt9YFz6n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2DeARpl0czS6eh9m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HYGt6mEEjEbiZ4O3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4TB1n7qeVGhWLtrb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/receiver/find' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v1oG24tZzHAIuF6K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/receiver/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Fby9DDY96ruKN2J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/system/verification/user/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::htxyIgjiaQ8CteIk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ads/ad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O1VPpSQQNLS3D4JT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tips/bio/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HBrmHP3AyLhzzhNg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tips/recommended/follow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3V6UkJ55r70CGqm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tips/avatar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nJ8YLmg9TmqsrBzu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pins/posts/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmmXxPGA5Ho5o2lQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/stripe/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mgV2eW9Q8k3bLGJZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/paypal/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iDfFUIFsTDSsnyuW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/yoo_kassa/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OlUUuqEBhFLUXeq9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/robokassa/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NONMRl3CArUcmrFW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/paypal/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.paypal.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/paypal/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.paypal.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/yoo_kassa/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.yoo_kassa.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/yoo_kassa/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.yoo_kassa.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/robokassa/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.robokassa.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/callback/robokassa/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback.robokassa.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.signup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.forgot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/link-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.linker.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.desktop.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/telegraph/([^/]++)/webhook(*:108)|/colibrilab/(?|horizon(?|/api/(?|m(?|onitoring/(?|([^/]++)(*:174)|(.*)(*:186))|etrics/(?|jobs/([^/]++)(*:218)|queues/([^/]++)(*:241)))|batches/(?|([^/]++)(*:270)|retry/([^/]++)(*:292))|jobs/(?|failed/([^/]++)(*:324)|retry/([^/]++)(*:346)|([^/]++)(*:362)))|(?:/((?:.*)))?(*:386))|log\\-viewer(?|/api/f(?|olders/([^/]++)(?|/(?|download(?|/request(*:459)|(*:467))|clear\\-cache(*:488))|(*:497))|iles/([^/]++)(?|/(?|download(?|/request(*:545)|(*:553))|clear\\-cache(*:574))|(*:583)))|(?:/((?:.*)))?(*:607)))|/livewire/preview\\-file/([^/]++)(*:649)|/a(?|dmin/(?|users/(?|show/([^/]++)(*:692)|delete/([^/]++)(*:715)|authoriz(?|e/([^/]++)(*:744)|ation/([^/]++)/reject(*:773))|un(?|authorize/([^/]++)(*:805)|verify/([^/]++)(*:828))|verify/([^/]++)(*:852))|p(?|osts/(?|show/([^/]++)(*:886)|pin/([^/]++)(*:906)|unpin/([^/]++)(*:928)|delete/([^/]++)(*:951))|a(?|yments/show/([^/]++)(*:984)|ges/([^/]++)/edit(*:1009)))|ads/(?|show/([^/]++)(*:1040)|destroy/([^/]++)(*:1065)|approve/([^/]++)(*:1090)|reject/([^/]++)(*:1114))|stor(?|ies/(?|show/([^/]++)(*:1151)|delete/([^/]++)(*:1175))|age/show/([a-zA-Z0-9]+)(*:1208))|market/(?|show/([^/]++)(*:1241)|delete/([^/]++)(*:1265)|approve/([^/]++)(*:1290)|reject/([^/]++)(*:1314))|jobs/(?|show/([^/]++)(*:1345)|destroy/([^/]++)(*:1370)|approve/([^/]++)(*:1395)|reject/([^/]++)(*:1419))|reports/(?|show/([^/]++)(*:1453)|ignore/([^/]++)(*:1477)|delete/([^/]++)(*:1501)|processed/([^/]++)(*:1528))|lang/(?|show/([^/]++)(*:1559)|d(?|isable/([^/]++)(*:1587)|elete/([^/]++)(*:1610))|enable/([^/]++)(*:1635)|make\\-default/([^/]++)(*:1666))|c(?|urrency/show/([^/]++)(*:1701)|ategories/(?|edit/([^/]++)(*:1736)|destroy/([^/]++)(*:1761)|([^/]++)/show(*:1783))|hats/chats/(?|([0-9]+)/show(*:1820)|([0-9]+)/delete(*:1844)))|banning/(?|show/([^/]++)(*:1879)|delete/([^/]++)(*:1903)))|pi/(?|timeline/post/(?|([^/]++)(?|(*:1948)|/comments(*:1966))|delete(*:1982))|stories/(?|stories/([^/]++)(*:2019)|views/(?|([^/]++)(*:2045)|record(*:2060)))|m(?|arketplace/products/([^/]++)(*:2103)|essenger/(?|groups/([^/]++)/(?|edit(*:2147)|show(*:2160)|participants(*:2181)|recent\\-joins(*:2203)|invite/pending(*:2226))|chat/([^/]++)(?|(*:2252)|/(?|messages(*:2273)|participants(*:2294)|clear(*:2308)|delete(*:2323)|archive(*:2339)|unarchive(*:2357)|read(*:2370)))))|jobs/jobs/([^/]++)(*:2401))|uth/(?|reset\\-password/([^/]++)(*:2442)|confirm\\-signup/([^/]++)(*:2475)|forgot\\-success/([^/]++)(*:2508)|signup\\-success/([^/]++)(*:2541)))|/file\\-downloads/post/download\\-document/([^/]++)/file(*:2606)|/business/(?|market/([^/]++)/(?|show(*:2651)|edit(*:2664)|delete(*:2679)|unpublish(*:2697)|publish(*:2713))|ads/(?|(\\d+)/show(*:2740)|(\\d+)/edit(*:2759)|(\\d+)/delete(*:2780)|(\\d+)/pause(*:2800)|(\\d+)/publish(*:2822))|jobs/(?|(\\d+)/show(*:2850)|(\\d+)/edit(*:2869)|(\\d+)/delete(*:2890)|(\\d+)/unpublish(*:2914)|(\\d+)/publish(*:2936)))|/switch(?|\\-(?|language/([^/]++)(*:2979)|theme/([^/]++)(*:3002))|er/device/(desktop|mobile)(*:3038))|/onboarding/step/([^/]++)(*:3073)|/(.*)(*:3087)|/broadcasting/auth(*:3114))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'telegraph.webhook',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.monitoring-tag.paginate',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.monitoring-tag.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs-metrics.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.queues-metrics.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs-batches.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs-batches.retry',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.failed-jobs.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.retry-jobs.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.jobs.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'horizon.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.request-download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.request-download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.show',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.authorize',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.auth-reject',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.unauthorize',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.unverify',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.verify',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.show',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.pin',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.unpin',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.posts.destroy',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payments.show',
          ),
          1 => 
          array (
            0 => 'paymentId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pages.edit',
          ),
          1 => 
          array (
            0 => 'pageName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ads.show',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ads.destroy',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ads.approve',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ads.reject',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stories.show',
          ),
          1 => 
          array (
            0 => 'frameId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stories.destroy',
          ),
          1 => 
          array (
            0 => 'frameId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.storage.show',
          ),
          1 => 
          array (
            0 => 'diskId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market.show',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market.destroy',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market.approve',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market.reject',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jobs.show',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jobs.destroy',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jobs.approve',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.jobs.reject',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.show',
          ),
          1 => 
          array (
            0 => 'reportId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.ignore',
          ),
          1 => 
          array (
            0 => 'reportId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.delete',
          ),
          1 => 
          array (
            0 => 'reportId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.processed',
          ),
          1 => 
          array (
            0 => 'reportId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.show',
          ),
          1 => 
          array (
            0 => 'localeId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.disable',
          ),
          1 => 
          array (
            0 => 'localeId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.delete',
          ),
          1 => 
          array (
            0 => 'localeId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.enable',
          ),
          1 => 
          array (
            0 => 'localeId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.make_default',
          ),
          1 => 
          array (
            0 => 'localeId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.show',
          ),
          1 => 
          array (
            0 => 'currencyId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.edit',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.destroy',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.show',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chats.show',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.chats.destroy',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banning.show',
          ),
          1 => 
          array (
            0 => 'banId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banning.delete',
          ),
          1 => 
          array (
            0 => 'banId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YO0GOBHNuC5AjfDU',
          ),
          1 => 
          array (
            0 => 'hashId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUlA1KReGr8zCD6J',
          ),
          1 => 
          array (
            0 => 'hashId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dpOviBAZlaTcxSH9',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8uesDTE6d7vbhXgc',
          ),
          1 => 
          array (
            0 => 'storyId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GvXbbi7RQu92gPvz',
          ),
          1 => 
          array (
            0 => 'frameId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6sfQFLRppYC8MVSh',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sGGVBGByimLHidQX',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GJEUDEx5Ty0h61kS',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6fBLH5z6CpCI5JzG',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pi8eLV55LIcR7G4M',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yo6dGZX1xHrAay4f',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aRa11ta1MB6lX0G3',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::71UEY3x6ytLsbCsP',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XVW0Mo06oMO9dCE6',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fx0iHSpiR1yxwAcH',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l24fzE7Bsd57SzzN',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HK8ho4uqS0DQXGd8',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UbeTkObK62F6z4Eb',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZnTvOmloaj9rEMwf',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vufR3ggfPAHllnSR',
          ),
          1 => 
          array (
            0 => 'chatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ZvldKH14cwC0uh7',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.confirm-signup',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.forgot-success',
          ),
          1 => 
          array (
            0 => 'hashId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.auth.signup-success',
          ),
          1 => 
          array (
            0 => 'hashId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'downloads.document.index',
          ),
          1 => 
          array (
            0 => 'mediaId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.show',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.edit',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.destroy',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.unpublish',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.market.publish',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.show',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.edit',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.destroy',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.pause',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.ads.publish',
          ),
          1 => 
          array (
            0 => 'adId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.show',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.edit',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.destroy',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.unpublish',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.jobs.publish',
          ),
          1 => 
          array (
            0 => 'jobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.language.switch',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.theme.switch',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'device.switch',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.onboarding.index',
          ),
          1 => 
          array (
            0 => 'step',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PqJWLICovicgbX8u',
          ),
          1 => 
          array (
            0 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5uNQrtuZstQ4d9fF',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'telegraph.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telegraph/{token}/webhook',
      'action' => 
      array (
        'uses' => 'DefStudio\\Telegraph\\Controllers\\WebhookController@handle',
        'controller' => 'DefStudio\\Telegraph\\Controllers\\WebhookController@handle',
        'middleware' => 
        array (
        ),
        'as' => 'telegraph.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boost.browser-logs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_boost/browser-logs',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1108:"function (\\Illuminate\\Http\\Request $request) {
            $logs = $request->input(\'logs\', []);
            /** @var Logger $logger */
            $logger = \\Illuminate\\Support\\Facades\\Log::channel(\'browser\');

            /**
             *  @var array{
             *      type: \'error\'|\'warn\'|\'info\'|\'log\'|\'table\'|\'window_error\'|\'uncaught_error\'|\'unhandled_rejection\',
             *      timestamp: string,
             *      data: array,
             *      url:string,
             *      userAgent:string
             *  } $log */
            foreach ($logs as $log) {
                $logger->write(
                    level: self::mapJsTypeToPsr3Level($log[\'type\']),
                    message: self::buildLogMessageFromData($log[\'data\']),
                    context: [
                        \'url\' => $log[\'url\'],
                        \'user_agent\' => $log[\'userAgent\'] ?: null,
                        \'timestamp\' => $log[\'timestamp\'] ?: now()->toIso8601String(),
                    ]
                );
            }

            return response()->json([\'status\' => \'logged\']);
        }";s:5:"scope";s:34:"Laravel\\Boost\\BoostServiceProvider";s:4:"this";N;s:4:"self";s:32:"0000000000000b530000000000000000";}}',
        'as' => 'boost.browser-logs',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.stats.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/stats',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\DashboardStatsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\DashboardStatsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.stats.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.workload.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/workload',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\WorkloadController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\WorkloadController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.workload.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.masters.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/masters',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\MasterSupervisorController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\MasterSupervisorController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.masters.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.monitoring.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/monitoring',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.monitoring.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.monitoring.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/horizon/api/monitoring',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@store',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@store',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.monitoring.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.monitoring-tag.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/monitoring/{tag}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@paginate',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@paginate',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.monitoring-tag.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.monitoring-tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'colibrilab/horizon/api/monitoring/{tag}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@destroy',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\MonitoringController@destroy',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.monitoring-tag.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'tag' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs-metrics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/metrics/jobs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\JobMetricsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\JobMetricsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs-metrics.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs-metrics.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/metrics/jobs/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\JobMetricsController@show',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\JobMetricsController@show',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs-metrics.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.queues-metrics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/metrics/queues',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\QueueMetricsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\QueueMetricsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.queues-metrics.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.queues-metrics.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/metrics/queues/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\QueueMetricsController@show',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\QueueMetricsController@show',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.queues-metrics.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs-batches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/batches',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs-batches.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs-batches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/batches/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@show',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@show',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs-batches.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs-batches.retry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/horizon/api/batches/retry/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@retry',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\BatchesController@retry',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs-batches.retry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.pending-jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/pending',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\PendingJobsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\PendingJobsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.pending-jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.completed-jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/completed',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\CompletedJobsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\CompletedJobsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.completed-jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.silenced-jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/silenced',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\SilencedJobsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\SilencedJobsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.silenced-jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.failed-jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/failed',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\FailedJobsController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\FailedJobsController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.failed-jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.failed-jobs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/failed/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\FailedJobsController@show',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\FailedJobsController@show',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.failed-jobs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.retry-jobs.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/retry/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\RetryController@store',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\RetryController@store',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.retry-jobs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.jobs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/api/jobs/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\JobsController@show',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\JobsController@show',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon/api',
        'where' => 
        array (
        ),
        'as' => 'horizon.jobs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'horizon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/horizon/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Horizon\\Http\\Controllers\\HomeController@index',
        'controller' => 'Laravel\\Horizon\\Http\\Controllers\\HomeController@index',
        'namespace' => 'Laravel\\Horizon\\Http\\Controllers',
        'prefix' => 'colibrilab/horizon',
        'where' => 
        array (
        ),
        'as' => 'horizon.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BICSrjalJWZIGCyM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::BICSrjalJWZIGCyM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hBL3RjJySSTwzfFA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.min.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'as' => 'generated::hBL3RjJySSTwzfFA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.request-download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/folders/{folderIdentifier}/download/request',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@requestDownload',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@requestDownload',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.request-download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/log-viewer/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'colibrilab/log-viewer/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.request-download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/files/{fileIdentifier}/download/request',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@requestDownload',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@requestDownload',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.request-download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/log-viewer/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'colibrilab/log-viewer/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/log-viewer/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'colibrilab/log-viewer/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'colibrilab/log-viewer/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'colibrilab/log-viewer',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dash.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Dash\\DashController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\Dash\\DashController@dashboard',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dash.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lab.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lab.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin::lab.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cache.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cache/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Cache\\CacheController@reset',
        'controller' => 'App\\Http\\Controllers\\Admin\\Cache\\CacheController@reset',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cache.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.coming.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.coming.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.admin.coming.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/show/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\User\\UserController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\User\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\User\\UserController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\User\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/authorize/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@authorize',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@authorize',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.authorize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.unauthorize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/unauthorize/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@unauthorize',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@unauthorize',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.unauthorize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.auth-reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/authorization/{userId}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@rejectAuthorization',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@rejectAuthorization',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.auth-reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/verify/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@verify',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@verify',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.unverify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/unverify/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@unverify',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@unverify',
        'namespace' => NULL,
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
        'as' => 'admin.users.unverify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Post\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Post\\PostController@index',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/posts/show/{postId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@show',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.pin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/pin/{postId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@pin',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@pin',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.pin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.unpin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/unpin/{postId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@unpin',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@unpin',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.unpin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/posts/delete/{postId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Post\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/posts',
        'where' => 
        array (
        ),
        'as' => 'admin.posts.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@index',
        'namespace' => NULL,
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
        'as' => 'admin.ads.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ads/show/{adId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Ad\\AdController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Ad\\AdController@show',
        'namespace' => NULL,
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
        'as' => 'admin.ads.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ads/destroy/{adId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
        'as' => 'admin.ads.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ads.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ads/approve/{adId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@approve',
        'namespace' => NULL,
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
        'as' => 'admin.ads.approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ads.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ads/reject/{adId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ad\\AdController@reject',
        'namespace' => NULL,
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
        'as' => 'admin.ads.reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Story\\StoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Story\\StoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/stories',
        'where' => 
        array (
        ),
        'as' => 'admin.stories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/stories/show/{frameId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Story\\StoryController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Story\\StoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/stories',
        'where' => 
        array (
        ),
        'as' => 'admin.stories.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/stories/delete/{frameId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Story\\StoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Story\\StoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/stories',
        'where' => 
        array (
        ),
        'as' => 'admin.stories.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/market',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@index',
        'namespace' => NULL,
        'prefix' => 'admin/market',
        'where' => 
        array (
        ),
        'as' => 'admin.market.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/market/show/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Market\\MarketController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Market\\MarketController@show',
        'namespace' => NULL,
        'prefix' => 'admin/market',
        'where' => 
        array (
        ),
        'as' => 'admin.market.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/market/delete/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/market',
        'where' => 
        array (
        ),
        'as' => 'admin.market.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/market/approve/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@approve',
        'namespace' => NULL,
        'prefix' => 'admin/market',
        'where' => 
        array (
        ),
        'as' => 'admin.market.approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/market/reject/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\Market\\MarketController@reject',
        'namespace' => NULL,
        'prefix' => 'admin/market',
        'where' => 
        array (
        ),
        'as' => 'admin.market.reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@index',
        'namespace' => NULL,
        'prefix' => 'admin/jobs',
        'where' => 
        array (
        ),
        'as' => 'admin.jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jobs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/jobs/show/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Job\\JobController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Job\\JobController@show',
        'namespace' => NULL,
        'prefix' => 'admin/jobs',
        'where' => 
        array (
        ),
        'as' => 'admin.jobs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jobs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/jobs/destroy/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/jobs',
        'where' => 
        array (
        ),
        'as' => 'admin.jobs.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jobs.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/jobs/approve/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@approve',
        'namespace' => NULL,
        'prefix' => 'admin/jobs',
        'where' => 
        array (
        ),
        'as' => 'admin.jobs.approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.jobs.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/jobs/reject/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\Job\\JobController@reject',
        'namespace' => NULL,
        'prefix' => 'admin/jobs',
        'where' => 
        array (
        ),
        'as' => 'admin.jobs.reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/config/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@general',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@general',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.general',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/config/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@email',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@email',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.email-testing' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/config/email/testing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@emailTesting',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@emailTesting',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.email-testing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/config/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@notifications',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@notifications',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/config/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@api',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@api',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.api',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.config.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/config/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@verification',
        'controller' => 'App\\Http\\Controllers\\Admin\\Config\\ConfigController@verification',
        'namespace' => NULL,
        'prefix' => 'admin/config',
        'where' => 
        array (
        ),
        'as' => 'admin.config.verification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Payment\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Payment\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/payments',
        'where' => 
        array (
        ),
        'as' => 'admin.payments.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payments/show/{paymentId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Payment\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Payment\\PaymentController@show',
        'namespace' => NULL,
        'prefix' => 'admin/payments',
        'where' => 
        array (
        ),
        'as' => 'admin.payments.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@index',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.reports.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/show/{reportId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Report\\ReportController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Report\\ReportController@show',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.reports.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.ignore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reports/ignore/{reportId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@markAsIgnored',
        'controller' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@markAsIgnored',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.reports.ignore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reports/delete/{reportId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.reports.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.processed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reports/processed/{reportId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@markAsProcessed',
        'controller' => 'App\\Http\\Controllers\\Admin\\Report\\ReportController@markAsProcessed',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
        'as' => 'admin.reports.processed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@index',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/show/{localeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Lang\\LangController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Lang\\LangController@show',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.disable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/disable/{localeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@disable',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@disable',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/enable/{localeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@enable',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@enable',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.make_default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/make-default/{localeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@makeDefault',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@makeDefault',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.make_default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@create',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@store',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/delete/{localeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Lang\\LangController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/lang',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Currency\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Currency\\CurrencyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/currency',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/show/{currencyId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Currency\\CurrencyController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Currency\\CurrencyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/currency',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banning.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banning',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Banning\\BanningController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Banning\\BanningController@index',
        'namespace' => NULL,
        'prefix' => 'admin/banning',
        'where' => 
        array (
        ),
        'as' => 'admin.banning.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banning.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banning/show/{banId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
          1 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\Banning\\BanningController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Banning\\BanningController@show',
        'namespace' => NULL,
        'prefix' => 'admin/banning',
        'where' => 
        array (
        ),
        'as' => 'admin.banning.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banning.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banning/delete/{banId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Banning\\BanningController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Banning\\BanningController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/banning',
        'where' => 
        array (
        ),
        'as' => 'admin.banning.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.storage.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/storage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Storage\\StorageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Storage\\StorageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/storage',
        'where' => 
        array (
        ),
        'as' => 'admin.storage.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.storage.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/storage/show/{diskId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Storage\\StorageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Storage\\StorageController@show',
        'namespace' => NULL,
        'prefix' => 'admin/storage',
        'where' => 
        array (
        ),
        'as' => 'admin.storage.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'diskId' => '[a-zA-Z0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.authorship.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/authorship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Authorship\\AuthorshipController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Authorship\\AuthorshipController@index',
        'namespace' => NULL,
        'prefix' => 'admin/authorship',
        'where' => 
        array (
        ),
        'as' => 'admin.authorship.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/edit/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.upsert' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/upsert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@upsert',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@upsert',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.upsert',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/destroy/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{categoryId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/categories',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
        'as' => 'admin.pages.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{pageName}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
        'as' => 'admin.pages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Page\\PageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
        'as' => 'admin.pages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chats.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@index',
        'namespace' => NULL,
        'prefix' => 'admin/chats/chats',
        'where' => 
        array (
        ),
        'as' => 'admin.chats.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chats.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chats/{chatId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@show',
        'namespace' => NULL,
        'prefix' => 'admin/chats/chats',
        'where' => 
        array (
        ),
        'as' => 'admin.chats.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'chatId' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.chats.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chats/{chatId}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-area',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Chat\\ChatController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/chats/chats',
        'where' => 
        array (
        ),
        'as' => 'admin.chats.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'chatId' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'downloads.document.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file-downloads/post/download-document/{mediaId}/file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Downloads\\Documents\\DocumentDownloadController@downloadDocument',
        'controller' => 'App\\Http\\Controllers\\Downloads\\Documents\\DocumentDownloadController@downloadDocument',
        'as' => 'downloads.document.index',
        'namespace' => NULL,
        'prefix' => '/file-downloads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.google.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\GoogleAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\GoogleAuthController@index',
        'as' => 'social-login.google.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\GoogleAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\GoogleAuthController@callbackHandler',
        'as' => 'social-login.google.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.apple.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/apple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\AppleAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\AppleAuthController@index',
        'as' => 'social-login.apple.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.apple.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/apple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\AppleAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\AppleAuthController@callbackHandler',
        'as' => 'social-login.apple.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.telegram.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/telegram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TelegramAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TelegramAuthController@index',
        'as' => 'social-login.telegram.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.telegram.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/telegram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TelegramAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TelegramAuthController@callbackHandler',
        'as' => 'social-login.telegram.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.twitter.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TwitterAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TwitterAuthController@index',
        'as' => 'social-login.twitter.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.twitter.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TwitterAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TwitterAuthController@callbackHandler',
        'as' => 'social-login.twitter.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.facebook.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\FacebookAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\FacebookAuthController@index',
        'as' => 'social-login.facebook.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\FacebookAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\FacebookAuthController@callbackHandler',
        'as' => 'social-login.facebook.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.discord.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/discord',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\DiscordAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\DiscordAuthController@index',
        'as' => 'social-login.discord.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.discord.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/discord',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\DiscordAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\DiscordAuthController@callbackHandler',
        'as' => 'social-login.discord.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.vk.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/vk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\VkAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\VkAuthController@index',
        'as' => 'social-login.vk.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.vk.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/vk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\VkAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\VkAuthController@callbackHandler',
        'as' => 'social-login.vk.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.linkedin.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\LinkedinAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\LinkedinAuthController@index',
        'as' => 'social-login.linkedin.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.linkedin.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\LinkedinAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\LinkedinAuthController@callbackHandler',
        'as' => 'social-login.linkedin.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.tiktok.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/tiktok',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TikTokAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TikTokAuthController@index',
        'as' => 'social-login.tiktok.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.tiktok.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/tiktok',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TikTokAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\TikTokAuthController@callbackHandler',
        'as' => 'social-login.tiktok.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.microsoft.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/auth/microsoft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\MicrosoftAuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\MicrosoftAuthController@index',
        'as' => 'social-login.microsoft.redirect',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.microsoft.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-login/callback/microsoft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\Social\\MicrosoftAuthController@callbackHandler',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\Social\\MicrosoftAuthController@callbackHandler',
        'as' => 'social-login.microsoft.callback',
        'namespace' => NULL,
        'prefix' => '/social-login',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.about.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.about.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.help.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/help-center',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.help.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.help.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/terms-of-use',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.terms.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.terms.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.privacy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.privacy.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.privacy.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.cookies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/cookies-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.cookies.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.cookies.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.developers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/developers-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.developers.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.developers.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.verification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/verification-rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.verification.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.verification.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'document.author.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'document/become-author',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'document.author.index',
        'namespace' => NULL,
        'prefix' => '/document',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'apps.mpa.document.author.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Dashboard\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.dashboard.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/market',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/market/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@create',
        'controller' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@create',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/market/{productId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@show',
        'controller' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@show',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/market/{productId}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@edit',
        'controller' => '\\App\\Http\\Controllers\\Business\\Market\\MarketController@edit',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/market/{productId}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@destroy',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.unpublish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/market/{productId}/unpublish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@unpublish',
        'controller' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@unpublish',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.unpublish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.market.publish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/market/{productId}/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@publish',
        'controller' => 'App\\Http\\Controllers\\Business\\Market\\MarketController@publish',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.market.publish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/ads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@create',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@create',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/ads/{adId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@show',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@show',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'adId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/ads/{adId}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@edit',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@edit',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'adId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/jobs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@create',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@create',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/jobs/{jobId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@show',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@show',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'jobId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/jobs/{jobId}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
          6 => 'sided.layout',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@edit',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@edit',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'jobId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/jobs/{jobId}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@destroy',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@destroy',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'jobId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/ads/{adId}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@destroy',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'adId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.pause' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/ads/{adId}/pause',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@pause',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@pause',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.pause',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'adId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.ads.publish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/ads/{adId}/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@publish',
        'controller' => 'App\\Http\\Controllers\\Business\\Ads\\AdsController@publish',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.ads.publish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'adId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.unpublish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/jobs/{jobId}/unpublish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@unpublish',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@unpublish',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.unpublish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'jobId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.jobs.publish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'business/jobs/{jobId}/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Job\\JobController@publish',
        'controller' => 'App\\Http\\Controllers\\Business\\Job\\JobController@publish',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.jobs.publish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'jobId' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.wallet.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Wallet\\WalletController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Wallet\\WalletController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.wallet.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.affiliate.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/affiliate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Affiliate\\AffiliateController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Affiliate\\AffiliateController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.affiliate.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.notifications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Notifications\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Notifications\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.notifications.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Settings\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Business\\Settings\\SettingsController@index',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.settings.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'business.settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'business/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'auth',
          3 => 'user.status',
          4 => 'device.identifier',
          5 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\Business\\Settings\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Business\\Settings\\SettingsController@edit',
        'namespace' => NULL,
        'prefix' => 'business',
        'where' => 
        array (
        ),
        'as' => 'business.settings.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zAwYv57Nvlfi8Yyb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sanctum/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:597:"function (\\Illuminate\\Http\\Request $request) {
    $request->validate([
        \'email\' => \'required|email\',
        \'password\' => \'required\',
        \'device_name\' => \'required\',
    ]);
 
    $user = \\App\\Models\\User::where(\'email\', $request->email)->first();
 
    if (! $user || ! \\Illuminate\\Support\\Facades\\Hash::check($request->password, $user->password)) {
        throw \\Illuminate\\Validation\\ValidationException::withMessages([
            \'email\' => [\'The provided credentials are incorrect.\'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cab0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zAwYv57Nvlfi8Yyb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X1oHVZ7LrSTh1vV4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/translations/app',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'throttle:60,1',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:283:"function () {
	$locale = \\request()->get(\'locale\', \'en\');
	$localePath = \\base_path("lang/{$locale}/api/index.php");

	if(! \\file_exists($localePath)) {
		return \\response()->json([
			\'data\' => []
		]);
	}

    return \\response()->json([
		\'data\' => require_once $localePath,
	]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000caf0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/translations',
        'where' => 
        array (
        ),
        'as' => 'generated::X1oHVZ7LrSTh1vV4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Vn7nAwsibFeSHv2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/bootstrap/bootstrap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Bootstrap\\BootstrapController@bootstrap',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Bootstrap\\BootstrapController@bootstrap',
        'namespace' => NULL,
        'prefix' => 'api/bootstrap',
        'where' => 
        array (
        ),
        'as' => 'generated::5Vn7nAwsibFeSHv2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fVYxLdXqgZoteFKb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\LanguageSettingsController@getLanguages',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\LanguageSettingsController@getLanguages',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fVYxLdXqgZoteFKb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::etRoP02XSgUxfwcm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/languages/switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\LanguageSettingsController@switchLanguage',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\LanguageSettingsController@switchLanguage',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::etRoP02XSgUxfwcm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tR2NSgiZKHM8FIzD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/email/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@getEmailSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@getEmailSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::tR2NSgiZKHM8FIzD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uvp93zwkPPNNL3Bz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/email/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@checkEmailRequest',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@checkEmailRequest',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::uvp93zwkPPNNL3Bz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AxIrY4S4dnkNcrta' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/email/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@updateEmailAddress',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@updateEmailAddress',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::AxIrY4S4dnkNcrta',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gnj4Z9NInpRm1EbY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/email/update/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@confirmEmailUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@confirmEmailUpdate',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Gnj4Z9NInpRm1EbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fPx3OgyoWkJd5lgV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/email/update/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@resendEmailConfirmCode',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\EmailSettingsController@resendEmailConfirmCode',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fPx3OgyoWkJd5lgV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g9Vx5iV6JxmHm7op' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/phone/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@getPhoneSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@getPhoneSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::g9Vx5iV6JxmHm7op',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::shSSnDuSfZLydarG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/phone/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@checkPhoneRequest',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@checkPhoneRequest',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::shSSnDuSfZLydarG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hbwRjfINZwWIKnSS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/phone/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@updatePhoneNumber',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@updatePhoneNumber',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::hbwRjfINZwWIKnSS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJ7htQIM1WYh0TGF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/phone/update/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@confirmPhoneUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@confirmPhoneUpdate',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::UJ7htQIM1WYh0TGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BEDWpb9KRGRdoTeZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/phone/update/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@resendPhoneConfirmCode',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PhoneSettingsController@resendPhoneConfirmCode',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::BEDWpb9KRGRdoTeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jVuYwpAi2APQHlij' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/password/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@getPasswordSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@getPasswordSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jVuYwpAi2APQHlij',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RkJUfMUfPZIGoYi4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/password/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@generatePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@generatePassword',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::RkJUfMUfPZIGoYi4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fVAG4XeUBp5hbMHa' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PasswordSettingsController@updatePassword',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fVAG4XeUBp5hbMHa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::khM45cfJyT0ixfkk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/notifications/push/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@getPushSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@getPushSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::khM45cfJyT0ixfkk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0X2RZQj4bD6fVZpZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/notifications/email/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@getEmailSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@getEmailSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::0X2RZQj4bD6fVZpZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dbaY096mRkRRZhCA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/notifications/login/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updateLoginNotification',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updateLoginNotification',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::dbaY096mRkRRZhCA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FrM3xFFHSuNIF4f7' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/notification/push/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updatePushSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updatePushSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::FrM3xFFHSuNIF4f7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VEoRuJI1eRfnWG3c' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/notification/email/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updateEmailSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\NotificationSettingsController@updateEmailSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::VEoRuJI1eRfnWG3c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BhDHRkLH6piwKHkD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/personal/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getPersonalInfoSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getPersonalInfoSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::BhDHRkLH6piwKHkD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fluVy7QlxsKzgM3p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/personal/birthdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getBirthdateSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getBirthdateSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fluVy7QlxsKzgM3p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEgojj58ZVdQ1jVb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/personal/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getCountrySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getCountrySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::MEgojj58ZVdQ1jVb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3oo3kFFa0GI8A5N0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/personal/city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getCitySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@getCitySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::3oo3kFFa0GI8A5N0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PASJ6A5diJfmUaAu' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/personal/birthdate/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateBirthdateSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateBirthdateSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::PASJ6A5diJfmUaAu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQSXjlxO7GPDdWdZ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/personal/country/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateCountrySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateCountrySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::RQSXjlxO7GPDdWdZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lHVaWS6LtfmgJfrA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/personal/city/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateCitySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PersonalInfoSettingsController@updateCitySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::lHVaWS6LtfmgJfrA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wh6dkQ3j8nhAh2yL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SessionSettingsController@getSessions',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SessionSettingsController@getSessions',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Wh6dkQ3j8nhAh2yL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uHCP0BPBqjB1qJBn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/settings/sessions/terminate/other',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SessionSettingsController@terminateOtherSessions',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SessionSettingsController@terminateOtherSessions',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::uHCP0BPBqjB1qJBn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wsjDaCtB3Hd76CmN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/privacy/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PrivacySettingsController@getPrivacySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PrivacySettingsController@getPrivacySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::wsjDaCtB3Hd76CmN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ng8h4qKXajWsZsgl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/privacy/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PrivacySettingsController@updatePrivacySettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\PrivacySettingsController@updatePrivacySettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ng8h4qKXajWsZsgl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RGmGa95qdmlHO5kd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/social/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SocialSettingsController@getSocialSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SocialSettingsController@getSocialSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::RGmGa95qdmlHO5kd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gaxJYIDVCpENWSni' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/social/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SocialSettingsController@updateSocialSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\SocialSettingsController@updateSocialSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::gaxJYIDVCpENWSni',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k1voM9EYtZQd4Ufc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getAccountSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getAccountSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::k1voM9EYtZQd4Ufc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PUdg6yEjkJw2UYK1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/account/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateAccountData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateAccountData',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::PUdg6yEjkJw2UYK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lZmh2jI4vVfLlpB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/authorship/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getAuthorshipSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getAuthorshipSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::0lZmh2jI4vVfLlpB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1tiKt10LcHLpRoWu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/authorship/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@requestAuthorship',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@requestAuthorship',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::1tiKt10LcHLpRoWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Di0SnUIx6NIswGNL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/account/credentials/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getCredentialsSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getCredentialsSettings',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Di0SnUIx6NIswGNL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qQGOd15xb7h6BE2g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/account/linked',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getLinkedAccounts',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@getLinkedAccounts',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::qQGOd15xb7h6BE2g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::en9wp0n4CfX3IAKo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/account/switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@switchAccount',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@switchAccount',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::en9wp0n4CfX3IAKo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8P1NGNdQ7leiNFrR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/account/avatar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateAvatar',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateAvatar',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::8P1NGNdQ7leiNFrR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::90QExwcPByTj1MEy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings/account/cover/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateCover',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateCover',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::90QExwcPByTj1MEy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O7hqSFCA1p8EuVmR' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/settings/account/theme/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateTheme',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\AccountSettingsController@updateTheme',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::O7hqSFCA1p8EuVmR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yWOjmQnFtxo1AO8n' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/settings/account/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Settings\\DeleteAccountController@deleteAccount',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Settings\\DeleteAccountController@deleteAccount',
        'namespace' => NULL,
        'prefix' => 'api/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::yWOjmQnFtxo1AO8n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Td6qhkqB71c0wG9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:287:"function (\\Illuminate\\Http\\Request $request) {
    \\auth()->guard(\'web\')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return \\response()->json([
        \'status\' => \'success\',
        \'message\' => \'Logged out successfully\'
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cdf0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::0Td6qhkqB71c0wG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ndEswHABm5zjcBz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/post/editor/draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@getDraftPost',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@getDraftPost',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::1ndEswHABm5zjcBz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xyyIHPzJ8vYZ1Edj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@createPost',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@createPost',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::xyyIHPzJ8vYZ1Edj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aLztJPge2pi7OgiB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/media/image/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostImageController@uploadImage',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostImageController@uploadImage',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::aLztJPge2pi7OgiB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9MYU47C9Lk4kwEtq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/media/video/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostVideoController@uploadVideo',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostVideoController@uploadVideo',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::9MYU47C9Lk4kwEtq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nLWD7AN5jbrtXgOE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/media/audio/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostAudioController@uploadAudio',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostAudioController@uploadAudio',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::nLWD7AN5jbrtXgOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ShQd5RC2OYxHvpmi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/media/document/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostDocumentController@uploadDocument',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostDocumentController@uploadDocument',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::ShQd5RC2OYxHvpmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F1OyAXjfIHpgvuOw' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/post/editor/media/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostMediaController@deleteMedia',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostMediaController@deleteMedia',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::F1OyAXjfIHpgvuOw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::elzUiKFNhCdVFDJz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/poll/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@createPoll',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@createPoll',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::elzUiKFNhCdVFDJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w6UvVruXAbjwTu41' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/post/editor/poll/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@deletePoll',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@deletePoll',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::w6UvVruXAbjwTu41',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aoWHJxahRC1SS4po' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/gif/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostGifController@createGif',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostGifController@createGif',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::aoWHJxahRC1SS4po',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6DEOBebvjde8okPh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/editor/link/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@previewLink',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@previewLink',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::6DEOBebvjde8okPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWWknBGUeinKxjFa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/post/editor/link/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@deleteLinkSnapshot',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@deleteLinkSnapshot',
        'namespace' => NULL,
        'prefix' => 'api/post/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::HWWknBGUeinKxjFa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bn1IlVGWmgOSVk0i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/story/editor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@create',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@create',
        'namespace' => NULL,
        'prefix' => 'api/story/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::Bn1IlVGWmgOSVk0i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9LXDUNCIEfZOOCpT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/story/editor/media/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryMediaController@uploadMedia',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryMediaController@uploadMedia',
        'namespace' => NULL,
        'prefix' => 'api/story/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::9LXDUNCIEfZOOCpT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v85sTfum1FWuw8Q8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/story/editor/media/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryMediaController@deleteMedia',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryMediaController@deleteMedia',
        'namespace' => NULL,
        'prefix' => 'api/story/editor',
        'where' => 
        array (
        ),
        'as' => 'generated::v85sTfum1FWuw8Q8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ogf8M14rXXS0JzPF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/timeline/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getFeed',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getFeed',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::Ogf8M14rXXS0JzPF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xVndtkxLadGxE2t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/timeline/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getFeedUpdate',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getFeedUpdate',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::9xVndtkxLadGxE2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YO0GOBHNuC5AjfDU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/timeline/post/{hashId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getPostData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getPostData',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::YO0GOBHNuC5AjfDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kUlA1KReGr8zCD6J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/timeline/post/{hashId}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getPostComments',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\FeedController@getPostComments',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::kUlA1KReGr8zCD6J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UAIf7eXqIhqIKnbq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeline/post/poll/vote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@votePoll',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostPollController@votePoll',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::UAIf7eXqIhqIKnbq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CLYzZCLhx5Rg6X8s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeline/post/bookmarks/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@bookmarkPost',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@bookmarkPost',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::CLYzZCLhx5Rg6X8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VN4Mnw6x1XwoYYMF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeline/post/reaction/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@addReaction',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@addReaction',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::VN4Mnw6x1XwoYYMF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iW9GtIkNDX2sj2sF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeline/post/comment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@createComment',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@createComment',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::iW9GtIkNDX2sj2sF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dpOviBAZlaTcxSH9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/timeline/post/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@deletePost',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\PostController@deletePost',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::dpOviBAZlaTcxSH9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ahXFU7NUr5PrpDSw' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/timeline/post/comment/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@deleteComment',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@deleteComment',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::ahXFU7NUr5PrpDSw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JBFqaaM1F7sC9ZEo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeline/comment/reaction/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:240,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@addReaction',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Timeline\\CommentController@addReaction',
        'namespace' => NULL,
        'prefix' => 'api/timeline',
        'where' => 
        array (
        ),
        'as' => 'generated::JBFqaaM1F7sC9ZEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zbf5omEymDxZ6N3T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stories/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getFeed',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getFeed',
        'namespace' => NULL,
        'prefix' => 'api/stories',
        'where' => 
        array (
        ),
        'as' => 'generated::zbf5omEymDxZ6N3T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8uesDTE6d7vbhXgc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stories/stories/{storyId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getStories',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getStories',
        'namespace' => NULL,
        'prefix' => 'api/stories',
        'where' => 
        array (
        ),
        'as' => 'generated::8uesDTE6d7vbhXgc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GvXbbi7RQu92gPvz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stories/views/{frameId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getStoryViews',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@getStoryViews',
        'namespace' => NULL,
        'prefix' => 'api/stories',
        'where' => 
        array (
        ),
        'as' => 'generated::GvXbbi7RQu92gPvz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6sfQFLRppYC8MVSh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/stories/views/record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@recordView',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@recordView',
        'namespace' => NULL,
        'prefix' => 'api/stories',
        'where' => 
        array (
        ),
        'as' => 'generated::6sfQFLRppYC8MVSh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mErhZ0vit8diujVJ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/stories/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@deleteStory',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Story\\StoryController@deleteStory',
        'namespace' => NULL,
        'prefix' => 'api/stories',
        'where' => 
        array (
        ),
        'as' => 'generated::mErhZ0vit8diujVJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kYCQ33974If0QvW4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileData',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::kYCQ33974If0QvW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6UxOeuc7ygnSqWD7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/profile/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfilePosts',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfilePosts',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::6UxOeuc7ygnSqWD7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83h1Dovcky3imlxO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/profile/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileDetails',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileDetails',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::83h1Dovcky3imlxO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vXFJBRrCkHbIgoiS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/profile/followers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileFollowers',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileFollowers',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::vXFJBRrCkHbIgoiS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OWBKnmhDxVBpMqB6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/profile/followings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileFollowings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Profile\\ProfileController@getProfileFollowings',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::OWBKnmhDxVBpMqB6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dEWUSUsKscyHqSc9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/follows/follow/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Follows\\FollowsController@followUser',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Follows\\FollowsController@followUser',
        'namespace' => NULL,
        'prefix' => 'api/follows',
        'where' => 
        array (
        ),
        'as' => 'generated::dEWUSUsKscyHqSc9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n4vSpYjnl3UF2bT6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/follows/accept/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Follows\\FollowsController@acceptFollowRequest',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Follows\\FollowsController@acceptFollowRequest',
        'namespace' => NULL,
        'prefix' => 'api/follows',
        'where' => 
        array (
        ),
        'as' => 'generated::n4vSpYjnl3UF2bT6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jG90jFlCzTghofdN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/marketplace/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getProducts',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::jG90jFlCzTghofdN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sGGVBGByimLHidQX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketplace/products/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getProductData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getProductData',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::sGGVBGByimLHidQX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3DSCBQUgwXQzNDQW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketplace/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getCategories',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getCategories',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::3DSCBQUgwXQzNDQW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::by149xnxc9re2ziU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketplace/metadata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getMetadata',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getMetadata',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::by149xnxc9re2ziU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CIXx42vhaV92O1BB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketplace/bookmarks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getBookmarks',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@getBookmarks',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::CIXx42vhaV92O1BB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zCk7KA0TaRR4iRaO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/marketplace/bookmarks/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@bookmark',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Market\\MarketController@bookmark',
        'namespace' => NULL,
        'prefix' => 'api/marketplace',
        'where' => 
        array (
        ),
        'as' => 'generated::zCk7KA0TaRR4iRaO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AgsLgzPegnIOz9hK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/jobs/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getCategories',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getCategories',
        'namespace' => NULL,
        'prefix' => 'api/jobs',
        'where' => 
        array (
        ),
        'as' => 'generated::AgsLgzPegnIOz9hK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tKTF932KcCaAI8rV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jobs/jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getJobs',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getJobs',
        'namespace' => NULL,
        'prefix' => 'api/jobs',
        'where' => 
        array (
        ),
        'as' => 'generated::tKTF932KcCaAI8rV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ZvldKH14cwC0uh7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/jobs/jobs/{jobId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getJobData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@getJobData',
        'namespace' => NULL,
        'prefix' => 'api/jobs',
        'where' => 
        array (
        ),
        'as' => 'generated::0ZvldKH14cwC0uh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gWdEETzfFlbddinh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/jobs/bookmarks/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@bookmark',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Job\\JobController@bookmark',
        'namespace' => NULL,
        'prefix' => 'api/jobs',
        'where' => 
        array (
        ),
        'as' => 'generated::gWdEETzfFlbddinh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vv0UMce9juYtZ8XA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChats',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChats',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Vv0UMce9juYtZ8XA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WlSJJsMO3f2muMJB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/archive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getArchive',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getArchive',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::WlSJJsMO3f2muMJB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U55I10SGSFpOKDii' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/unread/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getUnreadCount',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getUnreadCount',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::U55I10SGSFpOKDii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0CqFS5ZmG46EGxyz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/chats/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@createChat',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@createChat',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::0CqFS5ZmG46EGxyz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b4IPG22STdgNdvmf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@createDraftGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@createDraftGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::b4IPG22STdgNdvmf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GJEUDEx5Ty0h61kS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/{chatId}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@editGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@editGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::GJEUDEx5Ty0h61kS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6fBLH5z6CpCI5JzG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/{chatId}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@showGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@showGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::6fBLH5z6CpCI5JzG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pi8eLV55LIcR7G4M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/{chatId}/participants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getGroupParticipants',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getGroupParticipants',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Pi8eLV55LIcR7G4M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yo6dGZX1xHrAay4f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/{chatId}/recent-joins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getGroupRecentJoins',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getGroupRecentJoins',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Yo6dGZX1xHrAay4f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nmrnYJtChJ8tYPIL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/avatar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@updateGroupAvatar',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@updateGroupAvatar',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::nmrnYJtChJ8tYPIL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::My7lDD6wkXSQ3wQV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@updateGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@updateGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::My7lDD6wkXSQ3wQV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HT4IcZ6Xab2aa6yE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/groups/participant/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@deleteParticipants',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@deleteParticipants',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::HT4IcZ6Xab2aa6yE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yBhgwbZX1HhYIaew' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/groups/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@deleteGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@deleteGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::yBhgwbZX1HhYIaew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xh0MEqfHoYwujt32' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/invite/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@inviteParticipants',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@inviteParticipants',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Xh0MEqfHoYwujt32',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rwwmnJz9tHKRy90k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/invite/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@searchInvitees',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@searchInvitees',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::rwwmnJz9tHKRy90k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GLMxL4KLNbOqyJzq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/invite/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@acceptInvite',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@acceptInvite',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::GLMxL4KLNbOqyJzq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8VCPt1xTmxWPVl5c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/invite/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@declineInvitation',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@declineInvitation',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::8VCPt1xTmxWPVl5c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ud2hQQ44bARzwfhC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/groups/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@leaveGroup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@leaveGroup',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Ud2hQQ44bARzwfhC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aRa11ta1MB6lX0G3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/groups/{chatId}/invite/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getPendingInvitations',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\GroupController@getPendingInvitations',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::aRa11ta1MB6lX0G3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YbMZgTA18uZaXzLh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chats/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatRequests',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatRequests',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::YbMZgTA18uZaXzLh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d53do2uy1gRqx9Rb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chats/requests/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatRequestsCount',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatRequestsCount',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::d53do2uy1gRqx9Rb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O9qqPLNzxtPC3vky' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/chats/launch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@launchChat',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@launchChat',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::O9qqPLNzxtPC3vky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vFcjkj7Rjc8xAh94' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/chats/launcher-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@launcherSendMessage',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@launcherSendMessage',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::vFcjkj7Rjc8xAh94',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T8KvxpDnc2X2GmJq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@sendMessage',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::T8KvxpDnc2X2GmJq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::71UEY3x6ytLsbCsP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chat/{chatId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatData',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::71UEY3x6ytLsbCsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aIH5Upl23TAjEXho' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/messenger/chat/message/add-reaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@addReaction',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@addReaction',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::aIH5Upl23TAjEXho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ab4zpk21qDFvhuWn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/chat/message/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@deleteMessage',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@deleteMessage',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::ab4zpk21qDFvhuWn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XVW0Mo06oMO9dCE6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chat/{chatId}/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatMessages',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatMessages',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::XVW0Mo06oMO9dCE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fx0iHSpiR1yxwAcH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chat/{chatId}/participants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatParticipants',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@getChatParticipants',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::Fx0iHSpiR1yxwAcH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l24fzE7Bsd57SzzN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/chat/{chatId}/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@clearConversation',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@clearConversation',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::l24fzE7Bsd57SzzN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HK8ho4uqS0DQXGd8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/chat/{chatId}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@deleteChat',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@deleteChat',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::HK8ho4uqS0DQXGd8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbeTkObK62F6z4Eb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/chat/{chatId}/archive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@archiveChat',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@archiveChat',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::UbeTkObK62F6z4Eb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZnTvOmloaj9rEMwf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/messenger/chat/{chatId}/unarchive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@unarchiveChat',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@unarchiveChat',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::ZnTvOmloaj9rEMwf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vufR3ggfPAHllnSR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messenger/chat/{chatId}/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@markAsRead',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Chat\\ChatController@markAsRead',
        'namespace' => NULL,
        'prefix' => 'api/messenger',
        'where' => 
        array (
        ),
        'as' => 'generated::vufR3ggfPAHllnSR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m6QrmJx1PawZVBQf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/profile/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\AdminController@deleteProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\AdminController@deleteProfile',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::m6QrmJx1PawZVBQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qGcCsF83FiN0dp50' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/verification/user/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
          7 => 'api_key',
        ),
        'uses' => '\\App\\Http\\Controllers\\Api\\Admin\\VerificationController@verifyUser',
        'controller' => '\\App\\Http\\Controllers\\Api\\Admin\\VerificationController@verifyUser',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qGcCsF83FiN0dp50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XguKbikpTzQG2Sxh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/recommendations/follow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Recommend\\FollowRecommendController@getFollowRecommendations',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Recommend\\FollowRecommendController@getFollowRecommendations',
        'namespace' => NULL,
        'prefix' => 'api/recommendations',
        'where' => 
        array (
        ),
        'as' => 'generated::XguKbikpTzQG2Sxh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gSTzl9weefbGz7ei' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/explore/people',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Explore\\ExploreController@getPeople',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Explore\\ExploreController@getPeople',
        'namespace' => NULL,
        'prefix' => 'api/explore',
        'where' => 
        array (
        ),
        'as' => 'generated::gSTzl9weefbGz7ei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N78TxyC0HCbmsB9s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/explore/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Explore\\ExploreController@getPosts',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Explore\\ExploreController@getPosts',
        'namespace' => NULL,
        'prefix' => 'api/explore',
        'where' => 
        array (
        ),
        'as' => 'generated::N78TxyC0HCbmsB9s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fGRbSK1eZHbf2ua0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getAll',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getAll',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::fGRbSK1eZHbf2ua0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::53sQXUL9RTnh8YWG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications/mentions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getMentions',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getMentions',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::53sQXUL9RTnh8YWG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cItdCHV2Pl18JjOB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications/important',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getImportant',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getImportant',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::cItdCHV2Pl18JjOB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IUL9MObMEChiqFl9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications/unread/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getUnreadCount',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@getUnreadCount',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::IUL9MObMEChiqFl9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WLz0QdUkQGKx3Ni9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@deleteNotification',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Notification\\NotificationController@deleteNotification',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::WLz0QdUkQGKx3Ni9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::liUqwXjhw1GJCUR0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/autocompletes/mentions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Search\\AutocompleteController@searchMentions',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Search\\AutocompleteController@searchMentions',
        'namespace' => NULL,
        'prefix' => 'api/autocompletes',
        'where' => 
        array (
        ),
        'as' => 'generated::liUqwXjhw1GJCUR0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPOIbdeo6RHHrlnV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/translator/translate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Translator\\TranslatorController@translate',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Translator\\TranslatorController@translate',
        'namespace' => NULL,
        'prefix' => 'api/translator',
        'where' => 
        array (
        ),
        'as' => 'generated::cPOIbdeo6RHHrlnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::grY7s4GScTkU9E3b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/feedback/report/reasons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:15,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Feedback\\ReportController@getReportReasons',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Feedback\\ReportController@getReportReasons',
        'namespace' => NULL,
        'prefix' => 'api/feedback',
        'where' => 
        array (
        ),
        'as' => 'generated::grY7s4GScTkU9E3b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CWwRBIvlR6G5LYJU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/feedback/report/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:15,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Feedback\\ReportController@sendReport',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Feedback\\ReportController@sendReport',
        'namespace' => NULL,
        'prefix' => 'api/feedback',
        'where' => 
        array (
        ),
        'as' => 'generated::CWwRBIvlR6G5LYJU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EaXxDErgMTvKHCpM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/bookmarks/bookmarks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Bookmark\\BookmarkController@getBookmarks',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Bookmark\\BookmarkController@getBookmarks',
        'namespace' => NULL,
        'prefix' => 'api/bookmarks',
        'where' => 
        array (
        ),
        'as' => 'generated::EaXxDErgMTvKHCpM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R89guLgep5p3KZGO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getData',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getData',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::R89guLgep5p3KZGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3Taat6Svt9YFz6n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/payment/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getPaymentProviders',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getPaymentProviders',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::d3Taat6Svt9YFz6n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2DeARpl0czS6eh9m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@createDepositPayment',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@createDepositPayment',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::2DeARpl0czS6eh9m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HYGt6mEEjEbiZ4O3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@makeTransfer',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@makeTransfer',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::HYGt6mEEjEbiZ4O3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4TB1n7qeVGhWLtrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getTransactions',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getTransactions',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::4TB1n7qeVGhWLtrb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v1oG24tZzHAIuF6K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/receiver/find',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getReceivers',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getReceivers',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::v1oG24tZzHAIuF6K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Fby9DDY96ruKN2J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/receiver/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getReceiverHistory',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Wallet\\WalletController@getReceiverHistory',
        'namespace' => NULL,
        'prefix' => 'api/wallet',
        'where' => 
        array (
        ),
        'as' => 'generated::0Fby9DDY96ruKN2J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::htxyIgjiaQ8CteIk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/system/verification/user/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'throttle:60,1',
          6 => 'api.key',
        ),
        'uses' => '\\App\\Http\\Controllers\\Api\\Admin\\VerificationController@verifyUser',
        'controller' => '\\App\\Http\\Controllers\\Api\\Admin\\VerificationController@verifyUser',
        'namespace' => NULL,
        'prefix' => 'api/system',
        'where' => 
        array (
        ),
        'as' => 'generated::htxyIgjiaQ8CteIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O1VPpSQQNLS3D4JT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ads/ad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Ad\\AdController@getAd',
        'controller' => 'App\\Http\\Controllers\\Api\\Ad\\AdController@getAd',
        'namespace' => NULL,
        'prefix' => 'api/ads',
        'where' => 
        array (
        ),
        'as' => 'generated::O1VPpSQQNLS3D4JT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HBrmHP3AyLhzzhNg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tips/bio/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@updateBio',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@updateBio',
        'namespace' => NULL,
        'prefix' => 'api/tips',
        'where' => 
        array (
        ),
        'as' => 'generated::HBrmHP3AyLhzzhNg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f3V6UkJ55r70CGqm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tips/recommended/follow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@followRecommendedUsers',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@followRecommendedUsers',
        'namespace' => NULL,
        'prefix' => 'api/tips',
        'where' => 
        array (
        ),
        'as' => 'generated::f3V6UkJ55r70CGqm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nJ8YLmg9TmqsrBzu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tips/avatar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@updateAvatar',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Tip\\TipController@updateAvatar',
        'namespace' => NULL,
        'prefix' => 'api/tips',
        'where' => 
        array (
        ),
        'as' => 'generated::nJ8YLmg9TmqsrBzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OmmXxPGA5Ho5o2lQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pins/posts/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'log.request',
          2 => 'restrict.ip',
          3 => 'device.identifier',
          4 => 'terminator',
          5 => 'auth:sanctum',
          6 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\Pin\\PinController@getGlobalPinnedPosts',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\Pin\\PinController@getGlobalPinnedPosts',
        'namespace' => NULL,
        'prefix' => 'api/pins',
        'where' => 
        array (
        ),
        'as' => 'generated::OmmXxPGA5Ho5o2lQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgV2eW9Q8k3bLGJZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/stripe/webhook',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Webhook\\StripeWebhookController@handleWebhook',
        'controller' => 'App\\Http\\Controllers\\Payment\\Webhook\\StripeWebhookController@handleWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mgV2eW9Q8k3bLGJZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iDfFUIFsTDSsnyuW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/paypal/webhook',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Webhook\\PaypalWebhookController@handleWebhook',
        'controller' => 'App\\Http\\Controllers\\Payment\\Webhook\\PaypalWebhookController@handleWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iDfFUIFsTDSsnyuW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OlUUuqEBhFLUXeq9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/yoo_kassa/webhook',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Webhook\\YooKassaWebhookController@handleWebhook',
        'controller' => 'App\\Http\\Controllers\\Payment\\Webhook\\YooKassaWebhookController@handleWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OlUUuqEBhFLUXeq9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NONMRl3CArUcmrFW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/robokassa/webhook',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Webhook\\RoboKassaWebhookController@handleWebhook',
        'controller' => 'App\\Http\\Controllers\\Payment\\Webhook\\RoboKassaWebhookController@handleWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NONMRl3CArUcmrFW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.paypal.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/paypal/success',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\PaypalCallbackController@handleSuccess',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\PaypalCallbackController@handleSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.paypal.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.paypal.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/paypal/cancel',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\PaypalCallbackController@handleCancel',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\PaypalCallbackController@handleCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.paypal.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.yoo_kassa.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/yoo_kassa/success',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\YooKassaCallbackController@handleSuccess',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\YooKassaCallbackController@handleSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.yoo_kassa.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.yoo_kassa.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/yoo_kassa/cancel',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\YooKassaCallbackController@handleCancel',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\YooKassaCallbackController@handleCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.yoo_kassa.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.robokassa.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/robokassa/success',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\RoboKassaCallbackController@handleSuccess',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\RoboKassaCallbackController@handleSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.robokassa.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback.robokassa.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/callback/robokassa/cancel',
      'action' => 
      array (
        'excluded_middleware' => 
        array (
          0 => true,
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\Callback\\RoboKassaCallbackController@handleCancel',
        'controller' => 'App\\Http\\Controllers\\Payment\\Callback\\RoboKassaCallbackController@handleCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'callback.robokassa.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.language.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switch-language/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Language\\LanguageController@switchLanguage',
        'controller' => 'App\\Http\\Controllers\\User\\Language\\LanguageController@switchLanguage',
        'as' => 'user.language.switch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.theme.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switch-theme/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Theme\\ThemeController@switchTheme',
        'controller' => 'App\\Http\\Controllers\\User\\Theme\\ThemeController@switchTheme',
        'as' => 'user.theme.switch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@index',
        'as' => 'user.auth.index',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@signup',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@signup',
        'as' => 'user.auth.signup',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.forgot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@forgotPassword',
        'as' => 'user.auth.forgot',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@resetPassword',
        'as' => 'user.auth.reset',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.confirm-signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/confirm-signup/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@confirmSignup',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@confirmSignup',
        'as' => 'user.auth.confirm-signup',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.forgot-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/forgot-success/{hashId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@forgotSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@forgotSuccess',
        'as' => 'user.auth.forgot-success',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.auth.signup-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/signup-success/{hashId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@signupSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\AuthController@signupSuccess',
        'as' => 'user.auth.signup-success',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.linker.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/link-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Auth\\LinkerController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Auth\\LinkerController@index',
        'as' => 'user.linker.index',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.onboarding.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'onboarding/step/{step}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\Onboarding\\OnboardingController@index',
        'controller' => 'App\\Http\\Controllers\\User\\Onboarding\\OnboardingController@index',
        'as' => 'user.onboarding.index',
        'namespace' => NULL,
        'prefix' => '/onboarding',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'device.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switcher/device/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:122:"function ($type) {
    \\Illuminate\\Support\\Facades\\Cookie::queue(\'device_type\', $type);

    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d5a0000000000000000";}}',
        'prefix' => 'switcher/',
        'namespace' => NULL,
        'where' => 
        array (
        ),
        'as' => 'device.switch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'type' => 'desktop|mobile',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.desktop.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'user.status',
          5 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:277:"function () {
        $deviceType = \\Illuminate\\Support\\Facades\\Cookie::get(\'device_type\', \'desktop\');
        
        if($deviceType == \'mobile\') {
            return \\view(\'mobile::index\');
        }

        else{
            return \\view(\'desktop::index\');
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d590000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.desktop.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PqJWLICovicgbX8u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'restrict.ip',
          2 => 'device.identifier',
          3 => 'terminator',
          4 => 'user.status',
          5 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:310:"function (\\Illuminate\\Http\\Request $request) {
        $deviceType = \\Illuminate\\Support\\Facades\\Cookie::get(\'device_type\', \'desktop\');
        
        if($deviceType == \'mobile\') {
            return \\view(\'mobile::index\');
        }

        else{
            return \\view(\'desktop::index\');
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d6a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PqJWLICovicgbX8u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'any' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5uNQrtuZstQ4d9fF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::5uNQrtuZstQ4d9fF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
