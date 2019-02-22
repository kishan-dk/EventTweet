<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Tweet Followers</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('grid/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('grid/css/vendor.css')}}">
    <link rel="stylesheet" href="{{ asset('grid/css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('grid/js/modernizr.js')}}"></script>
    <script src="{{ asset('grid/js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

 
    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>
                @foreach($response as $k=>$v)
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="{{$v->url}}" >
                            <img src="<?php echo $v->profile_image_url_https; ?>" 
                                    srcset="<?php echo $v->profile_image_url_https; ?> 1x" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">{{$v->name}}</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">{{$v->location}}</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                {{$v->description}}                                
                            </p>
                        </div>
                    </div>
    
                </article> <!-- end article -->
                @endforeach
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

    </section> <!-- s-content -->

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('grid/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('grid/js/plugins.js')}}"></script>
    <script src="{{ asset('grid/js/main.js')}}"></script>

</body>

</html>