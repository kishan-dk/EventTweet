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
        //$var[] = [];
        $when = ['Just', 'Today', 'Once%2520more%2520time','As%2520usual','Friends%2520and%2520I','for%2520the%2520first%2520time','Quickly'];
        $doing = ['Came%2520to', 'reached%2520to', 'jumped%2520to','got%2520a%2520chance%2520to','arrived%2520to','signing%2520in%2520to','entered%2520to'];    
        $what = ['Visit', 'attend', 'see','discover','explore','experience'];
        $power = ['Awesome','magical','epic','excellent','exciting','secretive','improved','informative','innovative','jaw-dropping','latest','mind-blowing','outstanding','popular','powerful','promising','simplistic','simplified','special','spectacular','surprising','thrilled'];
        $whatisit = ['event%2520of','zone%2520of','segment%2520of'];
        $month = '%2523laravelmeetup%2520January%2520Chapter';
        $at = '@laravelAhm';
        $with = '@laravellive';
        $dot = '.';
        $extereme = ['Superbly','absolutely','amazingly','surprisingly','actually'];
        $power1 = ['advanced','easy','energized','exclusive','eye-opening','famous','fantastic','fascinating','new','simple','cool','helpful','basic','killer','unexpected','unique','unusual','useful','valuable'];
        $day = '%2523sunday';
        $outcome = ['learnings','teachings','knowledge%2520grabbing'];
        $with1 = 'with';
        $speakers = '@theAwesomeAnish';
        
        $random .= $when[array_rand($when)].'%2520';
        $random .= $doing[array_rand($doing)].'%2520';
        $random .= $what[array_rand($what)].'%2520';
        $random .= $power[array_rand($power)].'%2520';
        $random .= $whatisit[array_rand($whatisit)].'%2520';
        $random .= $month.'%2520';
        $random .= $at.'%2520';
        $random .= $with.$dot.'%2520';
        $random .= $extereme[array_rand($extereme)].'%2520';
        $random .= $power1[array_rand($power1)].'%2520';
        $random .= $day.'%2520';
        $random .= $outcome[array_rand($outcome)].'%2520';
        $random .= $with1.'%2520';
        $random .= $speakers.'%2520';
        
        return $random;
    }

    public function words_url() {
        $text = $this->words();
        $url = "https://twitter.com/intent/tweet?text="
                . $text
                . "%26hashtags="
                . "&url="
                . "http%3A%2F%2Furl%20goes%20here"
                . "&original_referer="
                . "";
        return $url;
    }

}
