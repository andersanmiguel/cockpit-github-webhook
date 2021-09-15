<?php

namespace Ghwebhook\Controller;

class Main extends \Cockpit\AuthController {

    public function index() {
        return $this->render("ghwebhook:views/index.php");
    }

    public function deploy() {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->app->config['ghwebhook']['url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{ "event_type" : "Update from Cockpit CMS" }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/vnd.github.v3+json',
                'Authorization: token ' . $this->app->config['ghwebhook']['token'],
                'User-Agent: CMS Cockpit',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $code = curl_getinfo($curl,  CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($code == 204) {
            return $this->render("ghwebhook:views/deploy.php");
        } else {
            return $this->render("ghwebhook:views/no-deploy.php", ['code' => $code]);
        }

    }

}
