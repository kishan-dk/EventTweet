<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Config;

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
    
    public function generate_sentence() {
        $sentence = '';
        foreach (config('constants.sentence_formation') as $k =>  $word_key) {
            $word_array = config("constants.words.$word_key");
            if(is_array($word_array)) {
                $sentence .= $word_array[array_rand($word_array)];
            }
        }
        return $sentence;
    }
    
    public function generate_tweet_text() {
        return config('constants.twitter.endpoint').'?'.
               config('constants.twitter.text').'='
                ;
    }
    
    public function words_url() {
        $text = $this->generate_sentence();
        $final_url = $this->generate_tweet_text(). urlencode($text);
        //$final_url .= '&'.config('constants.twitter.hashtag').'='. urlencode(config('constants.hashtags'));
        
        $final_url .= '&'.config('constants.twitter.related').'='. urlencode(config('constants.related_accounts'));
        return $final_url;
    }
    
    public function tweet() {
        
        return redirect($this->words_url());
    }


}
