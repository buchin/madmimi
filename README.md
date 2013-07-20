Madmimi for Laravel 4
=====================
Madmimi is email 

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
        'Madmimi'    => 'Buchin\Madmimi\Madmimi',

    ),

### Example

Lets say you want to add confirmed user to list.
    
    // routes.php or controller
    Route::get('user/confirm/{code}', function($code){
        $user = User::where('confirmation_code', '=', $code)->firstOrFail();
        Event::fire('user.confirm', $user);
        
        //Confirm user here
    });
    
    // listener.php
    Event::subscribe('user.confirm', function($user){
        mimi = new Madmimi('email@example.com', 'api_key');
        $user = array('email' => $user->email, 'firstName' => $user->firstname, 'add_list' => 'Test List');
    	$status = $mimi->addUser($user);
    });
