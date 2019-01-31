<?php

namespace App\Tweet;

class Qr 

{
    protected $tweeturl;
    
    public function __construct($tweeturl) {
        $this->tweeturl = $tweeturl;
    }
}
