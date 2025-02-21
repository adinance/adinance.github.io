<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mandrill {

    protected $api_url = 'https://mandrillapp.com/api/1.0/messages/send.json';
    protected $api_key = "md-YsClQgtVxDurQO9yXzRc6Q";
    protected $email_from = 'noreply@cmo-group.com';
    protected $email_from_name = 'CMO | Investor Relations';

    public function __construct() {

    }

    public function send($to, $contact , $name, $telephone, $email, $subject, $message) {

        $uri = $this->api_url;
        $text = strip_tags($message);
        $html = $message . '<br><br><h4><i>Sent from <br>Name -  ' . $name . '<br>Email -  ' . $email .'<br>Tel -  ' . $telephone .'</i></h4>';

        $postString = '{
            "key": "' . $this->api_key . '", 
            "message": {
                "html": "' . $html . '",
                "text": "' . $text . '",
                "subject": "'. $subject . '",
                "from_email": "' . $this->email_from . '",
                "from_name": "'. $this->email_from_name . '",
                "to": [
                    {
                        "email": "' . $to . '",
                        "name": "' . $contact . '"
                    }
                ],
                "headers": {

                },
                "track_opens": true,
                "track_clicks": true,
                "auto_text": true,
                "url_strip_qs": true,
                "preserve_recipients": true,

                "merge": true,
                "global_merge_vars": [

                ],
                "merge_vars": [

                ],
                "tags": [

                ],
                "google_analytics_domains": [

                ],
                "google_analytics_campaign": "...",
                "metadata": [

                ],
                "recipient_metadata": [

                ],
                "attachments": [

                ]
            },
            "async": false
        }';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);

        return $result;

        // sent : [{"email":"adinan.h@cmo-group.com","status":"sent","_id":"cb3ab907c2f0438c9e0231a04961a591","reject_reason":null,"queued_reason":null}]
        // error : {"status":"error","code":401,"name":"Invalid_Key","message":"Invalid API key"}
        // error : {"status":"error","code":-1,"name":"ValidationError","message":"You must specify a key value"}

    }

}