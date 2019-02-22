<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Thujohn\Twitter\Facades\Twitter;
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
        foreach (config('constants.sentence_formation') as $k => $word_key) {
            $word_array = config("constants.words.$word_key");
            if (is_array($word_array)) {
                $sentence .= $word_array[array_rand($word_array)];
            }
        }
        return $sentence;
    }

    public function generate_tweet_url() {
        return config('constants.twitter.endpoint') . '?' . config('constants.twitter.text') . '=';
    }

    public function words_url() {
        $text = $this->generate_sentence();
        $url = $this->generate_tweet_url() . $text;
        return $url;
    }

    public function tweet() {
        echo $this->words_url();
    }

    public function getTweet() {

        //$tweets = Twitter::getSearch(['q'=>'#laravelAhm']);
        /* $tweets = getMentionsTimeline(['count' => 20, 'format' => 'json']);
          print_r($tweets); */

        try {
            //$response = Twitter::getSearch(['count' => 10, 'q' => '#Laravel', 'result_type' => 'recent']);
            $response = Twitter::getFollowers();
            //$response1 = Twitter::getFavorites(['count' => 10, 'format' => 'array']);
        } catch (Exception $e) {
            // dd(Twitter::error());
            dd(Twitter::logs());
        }
        //echo $response->statuses[0]['text'];
        //$array =  (array) $response;
        //$array1 =  (array) $response->statuses;
        //echo '<pre>';print_R($array1);
        //echo $array['statuses'][0]['text']; 
        $response = $response->users;
        //dd($response);
        return view('tweet',compact('response'));
    }

}
