<?php
/**
 * namespace ${NAMESPACE}
 * @copyright Copyright © 2018 Sprii. All rights reserved.
 * Contact : technical@sprii.com
 * @author Tharanga Jayasinghe @ Sprii Web Team.
 * Project : packagetestapp
 * Entity :ContactFormServiceProvider
 * File :ContactFormServiceProvider.php
 * User: nalin
 * Date: 1/9/19
 * Time: 3:58 PM
 */

namespace Nteej\ContactForm;
use Illuminate\Support\ServiceProvider;
class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // nteej\contactform\src\ContactFormServiceProvider.php
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // nteej\contactform\src\ContactFormServiceProvider.php
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

        // nteej\contactform\src\ContactFormServiceProvider.php
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }
}