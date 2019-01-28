<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QrController extends Controller {

    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'QrController';

    /**
     * Return the dynamic string of twitter.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        
        $random_url = $this->words_url();
        
        return view('welcome', compact('random_url'));
    }
    
    public function words() {
        $random = '';
        $tag1 = ['tag1_1', 'tag1_2', 'tag1_3'];
        $tag2 = ['tag2_1', 'tag2_2', 'tag2_3'];
        $tag3 = ['tag3_1', 'tag3_2', 'tag3_3'];

        $random .= $tag1[array_rand($tag1)].'%2520';
        $random .= $tag2[array_rand($tag2)].'%2520';
        $random .= $tag3[array_rand($tag3)].'%2520';
        
        return $random;
    }

    public function words_url() {
        $text = $this->words();
        $url = "https://twitter.com/intent/tweet?text="
                . $text
                . "%26hashtags="
                . "hashtag1%2Chashtag2%2Chashtag3"
                . "&url="
                . "http%3A%2F%2Furl%20goes%20here"
                . "&original_referer="
                . "";
        return $url;
    }

}
