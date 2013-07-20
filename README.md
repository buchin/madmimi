Madmimi for Laravel 4
=====================
Madmimi is email 

## Installation

## Quick start

### Required setup

In the `require` key of `composer.json` file add the following

    "buchin/madmimi": "dev-master"

Run the Composer update comand

    $ composer update

In your `config/app.php` add `'Buchin\Madmimi\MadmimiServiceProvider'` to the end of the `$providers` array

    'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        ...
        'Buchin\Madmimi\MadmimiServiceProvider',

    ),

At the end of `config/app.php` add `'Confide'    => 'Zizaco\Confide\ConfideFacade'` to the `$aliases` array

    'aliases' => array(

        'App'        => 'Illuminate\Support\Facades\App',
        'Artisan'    => 'Illuminate\Support\Facades\Artisan',
        ...
        'Madmimi'    => 'Buchin\Madmimi\MadmimiServiceProvider',

    ),
