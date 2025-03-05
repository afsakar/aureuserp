<?php

namespace Webkul\Sale\Settings;

use Spatie\LaravelSettings\Settings;

class ProductSettings extends Settings
{
    public bool $enable_variants;

    public bool $enable_uom;

    public bool $enable_packagings;

    public static function group(): string
    {
        return 'sales_product';
    }
}
