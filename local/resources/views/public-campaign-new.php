<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/5.0.1/smooth-scrollbar.css" rel="stylesheet"/>
        <style>
            body{display: none;}
            .select-track{
                cursor: pointer;
            }
        </style>
        <title>
            New Campaign
        </title>
    </head>
    <body>
        <div class="main-content">
            <div class="container-lg container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 pd-0">
                        <div class="header mt-3 mb-4">
                            <div class="header-body">
                                <a class="text-left navbar-brand pt-4 pb-3" style="z-index: 1;" href="<?= Request::root();?>/signIn">
                                     <object style="margin-bottom: -7px;height: 50px;margin-top: -3px;position: relative; z-index: -1" data="<?= Request::root();?>/local/resources/views/assets/img/logo.svg"> </object>
                                </a>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <!-- Pretitle -->
                                        <h6 class="header-pretitle">
                                            Overview
                                        </h6>
                                        <!-- Title -->
                                        <h1 class="header-title">
                                            New campaign
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary mb-0" id="btn-add-song" style="width: 175px;" type="button">
                                <i class="fe fe-plus fs-5">
                                </i>
                                Add song
                            </button>
                        </div>
                        <form> 
                             
                            <div id="track-selected">
                                
                            </div>
                            <div class="card mt-4" id="search-box-2" style="display: none;">
                                <div class="card-body" id="search-box">
                                    <div class="input-group ">
                                        <input id="search" aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control" placeholder="Enter your song/artist name…" type="text"/>

                                        <button class="btn btn-primary ps-2 px-2" id="button-addon2" type="button">
                                            <i class="fe fe-search fs-5">
                                            </i>
                                            Search
                                        </button>

                                    </div>
                                    <div  class="list-group list-group-flush" data-scrollbar="" style="margin-top: 5px !important; max-height: 350px;overflow-x: none">
                                        <div class="list-group-item p-0" style="border: 0px;" id="tracksContainers">  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header mb-4">
                                <div class="header-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h1 class="header-title">
                                                Platforms
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="nav row align-items-center">
                                <div class="col-12">
                                    <div class="card mb-3">
                                        <div class="card-body mb-2">
                                            <div class="row">
                                                <div class="col-3 col-lg-2">
                                                    <div class="form-check form-switch">
                                                        <input checked="" class="form-check-input" id="flexSwitchCheckDefault" style="margin-top: 4px;margin-left: -38px;" type="checkbox"/>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-9 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-1">
                                                            <img src="https://app.soundcamps.com/static/media/spotify-icon.fa647b39.png" style="width: 30px;">
                                                            </img>
                                                        </div>
                                                        <div class="col-9 col-lg-11">
                                                            <p class="mb-0 fw-bold fs-5">
                                                                Spotify
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Ads & Playlists
                                                                </span>
                                                            </p>
                                                            <p class=" text-muted lh-1 fs-5 mb-0">
                                                                Combination of Playlists and Ads to Reach and grow your Audience.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body mb-2">
                                            <div class="row">
                                                <div class="col-3 col-lg-2">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" disabled="" id="flexSwitchCheckDefault" style="margin-top: 4px;margin-left: -38px;" type="checkbox"/>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-9 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-1">
                                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/tiktok.svg" style="width: 30px;">
                                                            </img>
                                                        </div>
                                                        <div class="col-9 col-lg-11">
                                                            <p class="mb-0 fw-bold fs-5">
                                                                TikTok Campaign
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Influencer Campaign.
                                                                </span>
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Invitation Only.
                                                                </span>
                                                            </p>
                                                            <p class=" text-muted lh-1 fs-5 mb-0">
                                                                Expand your fan base with new audience from TikTok influencers who will create viral videos for your tracks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body mb-2">
                                            <div class="row">
                                                <div class="col-3 col-lg-2">
                                                    <div class="form-check form-switch ">
                                                        <input class="form-check-input input-sm" disabled="" id="flexSwitchCheckDefault" style="margin-top: 4px;margin-left: -38px;" type="checkbox"/>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-9 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-1">
                                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/apple_music.svg" style="width: 30px;">
                                                            </img>
                                                        </div>
                                                        <div class="col-9 col-lg-11">
                                                            <p class="mb-0 fw-bold fs-5">
                                                                    Apple Music Campaign
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Ads & Playlists.
                                                                </span>
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Invitation Only.
                                                                </span>
                                                            </p>
                                                            <p class=" text-muted lh-1 fs-5 mb-0">
                                                                Combination of Playlist and Ads to reach and grow your Audience on Apple Music.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body mb-2">
                                            <div class="row">
                                                <div class="col-3 col-lg-2">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" disabled="" id="flexSwitchCheckDefault" style="margin-top: 4px;margin-left: -38px;" type="checkbox"/>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-9 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-3 col-lg-1">
                                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/youtube.svg" style="width: 30px;">
                                                            </img>
                                                        </div>
                                                        <div class="col-9 col-lg-11">
                                                            <p class="mb-0 fw-bold fs-5">
                                                                YouTube
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Ads
                                                                </span>
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Suggested Videos
                                                                </span>
                                                                <span class="badge bg-light fw-bold" style="font-size: 11px;">
                                                                    Invitation Only
                                                                </span>
                                                            </p>
                                                            <small class=" text-muted lh-sm">
                                                                Ads will help reach and grow your Audience on YouTube.
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 row mt-3">
                                <div class="col-6" style="text-align: left;">
                                </div>
                                <div class="col-6" style="text-align: right;">
                                    <a class="btn btn-primary" href="<?= Request::root();?>/customer-info" style="width: 120px;">
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/5.0.1/smooth-scrollbar.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready(function () {
                if ($(window).width() >= 992) {
                    $("html,.scroll").niceScroll({
                        cursorcolor:"#ddd"
                    });
                }
                else{
                }     
            });
            
            Scrollbar.initAll();
            $("#btn-add-song").click(function(){
                $("#search-box").show();
                 $("#search-box-2").show();
                $("#track-selected").hide();
                $("html").getNiceScroll().resize();
            });

            $(".select-track").click(function(){
                $("#search-box").hide();
                $("#search-box-2").hide();
                $("#track-selected").show();
                $("html").getNiceScroll().resize();
            });

        </script>


        <script>

            $(document).ready(function(){
                setTrackExistente(); 
            });

            // BUSCAMOS EL TRACK EN SPOTIFY
            
            $('#search').keyup(delay(function (e){  
                 if($('#search').val() !=""){
                    search();
                 }else{
                     $("#tracksContainers").html("");
                 }
            },200));

            function search() {
                var settings = {
                  "url": "<?= Request::root();?>/track/search?search=" + $('#search').val(),
                  "method": "GET",
                  "timeout": 0,
                };

                $.ajax(settings).done(function (response) {

                $("#tracksContainers").html("");
                
                var track = ''; 
                contador = 0;
                $.each(response.tracks.items, function(i, item) {
                contador = contador + 1;
                    id_track = item.id;

                    var new_track = '<div class="row align-items-center mb-1 select-track" onclick="setTrack('+contador +')" style="position: relative;"> <div class="col-auto text-center"> <a class="avatar avatar-4by3 select-track"> <img class="avatar-img rounded aqui" src="' + item.album.images[2].url + '" style="height: 35px;width: 35px;margin-top: 6px;"> </img> </a> </div><div class="col ms-n2"> <h4 class="mb-1"> <a id="track-' + contador + '" onclick="setTrack('+contador +')" t-name="' + item.name + '"  t-img="' + item.album.images[0].url + '"  t-artist="' + item.artists[0].name + '" t-id="' + item.id + '" class="select-track"> ' + item.name + ' </a> </h4> <p class="card-text small text-muted"> <span> ' + item.artists[0].name + ' </span> </p></div></div><hr class="mb-1 mt-0">'; 
                    track = track + new_track; 
                }); 

                $("#tracksContainers").html(track);

                });
            }

            function delay(callback, ms) {
              var timer = 0;
              return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                  callback.apply(context, args);
                }, ms || 0);
              };
            }

         // ALMACENAMOS TEMPORALMENTE EL TRACK
          
         function setTrack(id){

            Cookies.set('track_name', $("#track-" + id).attr('t-name'));
            Cookies.set('track_img', $("#track-" + id).attr('t-img'));
            Cookies.set('track_artist', $("#track-" + id).attr('t-artist'));
            Cookies.set('track_id', $("#track-" + id).attr('t-id')); 
            $("#search-box").hide();
            $("#search-box-2").hide();
            $("#track-selected").show(); 
            setTrackExistente();
         }

        // LIMPIAMOS LA COOKIE CON EL NOMBRE TEMPORAL DEL TRACK

        function cleanTrack(){ 
            Cookies.remove('track_name');
            Cookies.remove('track_img');
            Cookies.remove('track_artist');
            Cookies.remove('track_id'); 
            setTrackExistente();
         } 
             
        function setTrackExistente(){
            if(typeof Cookies.get("track_name") !== "undefined"){
                 item = '<div class="card mt-2 mb-0 mt-4" style="border: 0px;"> <div class="list-group-item" style="border: 1px dashed #ddd;position: relative;"> <i style="cursor: pointer;float: right;" class="fe fe-x" onclick="cleanTrack()"></i> <div class="row align-items-center mb-2"> <div class="col-auto text-center"> <a class="avatar avatar-4by3"> <img class="avatar-img rounded" src=" ' + Cookies.get("track_img") + '"> </img> </a> </div><div class="col ms-n2"> <h4 class="mb-1"> <a> ' + Cookies.get("track_name") + '</a> </h4> <p class="card-text small text-muted"> <span> ' + Cookies.get("track_artist") + ' </span> </p></div></div></div></div>'; 
                 $("#track-selected").html(item);
            } 
            else{
                $("#track-selected").html('');
            }
        }
        </script>
    </body>
</html>