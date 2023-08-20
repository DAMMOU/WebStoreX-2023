<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**
    * Change the application's language.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  string  $lang
    * @return \Illuminate\Http\RedirectResponse
    */
    public function language(Request $request, string $lang)
    {
        try {
            // Check if the specified language exists in the configuration
            if (array_key_exists($lang, config('locale'))) {
                App::setLocale($lang); // Set the application's locale
                Session::put('locale', App::getLocale()); // Store the selected locale in the session
                return redirect()->back(); // Redirect back to the previous page
            }
            
            return redirect('/'); // If the specified language doesn't exist, redirect to the home page

        } catch (\Exception $exception) {
            
            return redirect('/'); // If an exception occurs, redirect to the home page
        }
    }

}
