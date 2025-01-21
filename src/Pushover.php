<?php

namespace Natpnk\Pushover;

use GuzzleHttp\Client as HttpClient;

class Pushover extends \NotificationChannels\Pushover\Pushover {

    /**
     * @param HttpClient $http     
     */
    public function __construct(HttpClient $http){
        $this->http = $http;      
    }

    /**
     * Merge token into parameters array, unless it has been set on the PushoverReceiver.
     *
     * @param  array  $params
     * @return array
     */
    protected function paramsWithToken(array $params): array {        
        return $params;
    }
}