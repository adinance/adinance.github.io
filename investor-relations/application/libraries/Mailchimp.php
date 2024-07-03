<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailchimp {

    protected $api_url         = 'https://mandrillapp.com/api/1.0/messages/send.json';
    protected $api_key         = '04c073fc01dd1e5d5e1dfa43981d6b06-us11';
    protected $email_from      = 'noreply@cmo-group.com';
    protected $email_from_name = 'CMO | Investor Relations';
    protected $audience_key    = '0982464fd9';

    public function __construct() {

    }

    public function subscribe($data) {

        $apiKey = $this->api_key;
        $listId = $this->audience_key;

        $memberId   = md5(strtolower($data['email']));
        $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
        $url        = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

        $json = json_encode([
            'email_address' => $data['email'], //$data['email'],
            'status'        => $data['status'], // NOTE: status having 4 Option --"subscribed","unsubscribed","cleaned","pending"
            'merge_fields'  => [
                'FNAME' => $data['name']
            ],
        ]);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $result   = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode; // success : 200


     

    }

}