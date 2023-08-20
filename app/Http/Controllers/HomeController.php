<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /** 
     * Show home page
    */
    public function index(){
        $metadata = $this->getMetadataInformation();
        return view('home', compact('metadata'));
    }


    /**
    * Display the Privacy Policy page.
    *
    * @return \Illuminate\View\View
    */
    public function showPrivacyPolicy()
    {
        // Get metadata information for the page
        $metadata = $this->getMetadataInformation();

        // Define the name of the page to fetch
        $pageToFetch = 'privacy';

        // Retrieve the corresponding page from the database
        $page = Page::where('name', '=', $pageToFetch)->first()->toArray;

        // Return the view with metadata information and the retrieved page
        return view('privacy-policy', compact('metadata', 'page'));
    }

    /**
     * Get metadata information for the page.
     *
     * @return array
    */
    public function getMetadataInformation()
    {
        // Define the names of metadata rows to retrieve
        $metadataRows = ['title', 'author', 'keywords', 'description', 'js', 'css'];

        // Retrieve the relevant settings from the database
        $settings = Setting::whereIn('name', $metadataRows)->get();

        // Initialize an array to store metadata information
        $metadata = [];

        // Populate the metadata array with retrieved settings
        foreach ($settings as $setting) {
            if(in_array($setting['name'], $metadataRows)){
                $metadata[$setting['name']] = $setting['value'];
            }else{
                $metadata[$setting['name']] = '';
            }
        }
        // Return the metadata
        return $metadata;
    }
}



