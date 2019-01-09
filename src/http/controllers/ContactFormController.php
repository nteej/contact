<?php
/**
 * namespace Nteej\ContactForm\http\controllers
 * @copyright Copyright © 2018 Sprii. All rights reserved.
 * Contact : technical@sprii.com
 * @author Tharanga Jayasinghe @ Sprii Web Team.
 * Project : packagetestapp
 * Entity :ContactFormController
 * File :ContactFormController.php
 * User: nalin
 * Date: 1/9/19
 * Time: 4:49 PM
 */

namespace Nteej\ContactForm\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nteej\ContactForm\Models\ContactForm;

class ContactFormController extends Controller {

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }



}