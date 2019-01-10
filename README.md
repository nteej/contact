# Laravel Contact Form
[![Latest Stable Version](https://poser.pugx.org/nteej/contactform/v/stable)](https://packagist.org/packages/nteej/contactform)
[![Total Downloads](https://poser.pugx.org/nteej/contactform/downloads)](https://packagist.org/packages/nteej/contactform)
[![Latest Unstable Version](https://poser.pugx.org/nteej/contactform/v/unstable)](https://packagist.org/packages/nteej/contactform)
[![License](https://poser.pugx.org/nteej/contactform/license)](https://packagist.org/packages/nteej/contactform)
[![Monthly Downloads](https://poser.pugx.org/nteej/contactform/d/monthly)](https://packagist.org/packages/nteej/contactform)
[![Daily Downloads](https://poser.pugx.org/nteej/contactform/d/daily)](https://packagist.org/packages/nteej/contactform)
[![composer.lock](https://poser.pugx.org/nteej/contactform/composerlock)](https://packagist.org/packages/nteej/contactform)

> **Note:** This repository contains the core code for the contact form addon for laravel Framework. If you want to build an application using Laravel addon, visit the main [Contactform repository](https://github.com/nteej/contact.git).

## Lumen PHP Framework

Laravel Contact form is smart addon for laravel framework to make easier your process to add contact page to your web app & save that infor into database.
## Official Documentation

Documentation for the framework can be found on the [Text website](https://www.text.lk/docs/laravel/contactform).

## Security Vulnerabilities

If you discover a security vulnerability within this addon, please send an e-mail to Tharanga Jayasinghe at admin@buking.lk. All security vulnerabilities will be promptly addressed.

## License

This laravel addon is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Getting Start
Perquisites

To integrate this addon for your project, you should have:

   Laravel v 5.5 upwards.
   Composer installed on your machine. If you don't have Composer installed on your system you can download it [here](https://getcomposer.org/).

## Install
Next, we need to add our new service provider in our root config/app.php inside the providers array:
    
    nteej\ContactForm\ContactFormServiceProvider::class,

## Execute
Now you can start the server & check on browser with path of /contact

    http://localhost:8000/contact
