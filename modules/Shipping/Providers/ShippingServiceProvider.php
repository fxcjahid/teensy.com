<?php

namespace Modules\Shipping\Providers;

use Modules\Shipping\Method;
use Illuminate\Support\ServiceProvider;
use Modules\Shipping\Facades\ShippingMethod;

class ShippingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (!config('app.installed')) {
            return;
        }

        $this->registerFreeShipping();
        $this->registerInsdieDhakaShipping();
        $this->registerOutsideDhakaShipping();
    }


    private function registerFreeShipping()
    {
        if (!setting('free_shipping_enabled')) {
            return;
        }

        ShippingMethod::register('free_shipping', function () {
            return new Method('free_shipping', setting('free_shipping_label'), 0);
        });
    }
    private function registerInsdieDhakaShipping()
    {
        if (! setting('inside_dhaka_enabled')) {
            return;
        }

        ShippingMethod::register('inside_dhaka', function () {
            return new Method('inside_dhaka',
                setting('inside_dhaka_label'),
                setting('inside_dhaka_cost'),
            );
        });
    }

    private function registerOutsideDhakaShipping()
    {
        if (! setting('outside_dhaka_enabled')) {
            return;
        }

        ShippingMethod::register('outside_dhaka', function () {
            return new Method('outside_dhaka',
                setting('outside_dhaka_label'),
                setting('outside_dhaka_cost'),
            );
        });
    }
}
