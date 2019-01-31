<?php

return [
    'qr_url'  =>  'https://chart.googleapis.com/chart?cht=qr',
    'qr_size'   =>  '320x320',
    'tweet_qr_redirect'  =>  'tweet',
    'twitter'  =>  [
        'endpoint'  =>  'https://twitter.com/intent/tweet',
        'text'  =>  'text'
    ],
    'words' =>  [
        'when'  => ['Just','Today','One more time','As usual','Friends and I','for the first time','Quickly'],
        'doing' => ['came to','reached to','jumped to','got a chance to','arrived to','signing in to','entered to'],
        'what'  =>  ['visit', 'attend', 'see','discover','explore','experience'],
        'power' => ['awesome','magical','epic','excellent','exciting',
            'secretive','improved','informative','innovative','jaw-dropping',
            'latest','mind-blowing','outstanding','popular','powerful',
            'promising','simplistic','simplified','special','spectacular',
            'surprising','thrilled',
            'advanced','easy','energized','exclusive','eye-opening','famous',
            'fantastic','fascinating','new','simple','cool','helpful','basic',
            'killer','unexpected','unique','unusual','useful','valuable'
            ],
        'whatisit'  =>['event of','zone of','segment of'],
        'event' => ['#laravelmeetup January Chapter'],
        'at'    =>  ['@laravelAhm'],
        'community'  =>  ['@laravellive'],
        'dot' => ['.'],
        'extreme' => ['superbly','absolutely','amazingly','surprisingly','actually'],
        'day'   =>  ['#sunday'],
        'outcome' => ['learnings','teachings','knowledge grabbing'],
        'with'  =>  ['with'],
        'speakers'  =>  ['@theAwesomeAnish','@DharmvijayPatel','@NidhishKumar'],
        'space' =>  [' ']        
    ],
    'sentence_formation'    =>  [
        'when','space','doing','space','what','space','power','space',
        'whatisit','space','event','space','at','space','community','dot','space',
        'extreme','space','power','space','day','space','outcome','space',
        'with','space','speakers'
    ]
];