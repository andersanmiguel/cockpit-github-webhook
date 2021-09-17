<?php

if (COCKPIT_ADMIN_CP) {
    $app->on('admin.init', function () {

        $this->helper('admin')->addMenuItem('modules', [
            'label' => 'Deploy site',
            'icon' => 'assets:app/media/icons/paperplane.svg',
            'route' => '/githubwebhook',
            'active' => strpos($this['route'], '/githubwebhook') === 0
            ]);

        $this->bindClass('GithubWebhook\\Controller\\Main', 'githubwebhook');

    });
}
