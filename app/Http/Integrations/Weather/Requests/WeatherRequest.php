<?php

namespace App\Http\Integrations\Weather\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class WeatherRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/v1/forecast?latitude=41.3111&longitude=69.2797&current_weather=true';
    }
}
