<?php
/**
 * namespace ${NAMESPACE}
 * @copyright Copyright © 2018 Sprii. All rights reserved.
 * Contact : technical@sprii.com
 * @author Tharanga Jayasinghe @ Sprii Web Team.
 * Project : packagetestapp
 * Entity :${NAME}
 * File :web.php
 * User: nalin
 * Date: 1/9/19
 * Time: 4:02 PM
 */

Route::group(['namespace' => 'Nteej\ContactForm\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});