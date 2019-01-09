<?php
/**
 * namespace Nteej\ContactForm\Models
 * @copyright Copyright © 2018 Sprii. All rights reserved.
 * Contact : technical@sprii.com
 * @author Tharanga Jayasinghe @ Sprii Web Team.
 * Project : packagetestapp
 * Entity :ContactForm
 * File :ContactForm.php
 * User: nalin
 * Date: 1/9/19
 * Time: 4:50 PM
 */

namespace Nteej\ContactForm\Models;
use Illuminate\Database\Eloquent\Model;
class ContactForm extends Model
{
    protected $guarded = [];
    protected $table = 'contact';
}