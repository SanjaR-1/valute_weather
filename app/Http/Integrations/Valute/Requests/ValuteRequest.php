<?php

namespace App\Http\Integrations\Valute\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ValuteRequest extends Request
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
        return '/uz/arkhiv-kursov-valyut/json/USD/';
    }
}
