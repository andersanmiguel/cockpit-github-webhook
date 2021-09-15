<?php

if (COCKPIT_ADMIN_CP) {
$app->on('admin.init', function () {
    // Check we have quickactions in the configuration.

    $this->helper('admin')->addMenuItem('modules', [
        'label' => 'Deploy site',
        'icon' => 'assets:app/media/icons/paperplane.svg',
        'route' => '/ghwebhook',
        'active' => strpos($this['route'], '/ghwebhook') === 0
        ]);

    $this->bindClass('Ghwebhook\\Controller\\Main', 'ghwebhook');

    // $this->bind('/ghtest', function() {
    //     return $this->render('github-webhook:views/index.php');
    // });



});
}
