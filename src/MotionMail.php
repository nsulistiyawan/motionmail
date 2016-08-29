<?php

namespace Nsulistiyawan\MotionMail;

use GuzzleHttp\Exception\RequestException as RequestException;
use GuzzleHttp\Client as Client;

class MotionMail
{
    //motion mail user api key
    protected $api_key;
    //motion mail user secret key
    protected $secret_key;
    //guzzlehttp client
    protected $client;

    /**
     * Motionmail constructor.
     * @param String $api_key
     * @param String $secret_key
     */
    public function __construct($api_key, $secret_key)
    {
        $this->client = new Client();
        $this->api_key = $api_key;
        $this->secret_key = $secret_key;
    }

    /**
     * Generate additional url for dynamic countdown.
     * @param string $datetime datetime in ISO 8601, ex 2010-12-30T23:21:46
     * @return mixed Additional url to be appended on motionmail link
     */
    public function generateDynamicDatetime($datetime)
    {
        $formatted_datetime = new \DateTime($datetime);
        try {
            $response = $this->client->post('http://api.motionmailapp.com/tokens/datetime', [
                'auth' => [
                    $this->api_key,
                    $this->secret_key,
                ],
                'body' => [
                    'datetime' => $formatted_datetime->format(\DateTime::ATOM),
                ],
            ]);
            $result = json_decode($response->getBody());
            if ($result->Success == true) {
                return $result->Data;
            } else {
                return false;
            }
        } catch (RequestException $e) {
            throw new \Exception('Whoops, something bad happened.');
        }
    }
}
