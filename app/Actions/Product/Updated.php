<?php

namespace App\Actions\Product;

use App\Actions\BaseAction;
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * @property string merchant example "1029864349"
 * @property string created_at example "Wed Jun 30 2021 12:16:25 GMT+030"
 * @property string event example "product.updated"
 * @property array data @see https://docs.salla.dev/docs/merchent/openapi.json/components/schemas/ProductsWebhookResponse
 */
class Updated extends BaseAction
{
    use AsAction;

    public function handle()
    {
        // you can do whatever you want
    }
}
