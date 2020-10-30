@extends('layouts.user')
<style>
video {
  width: 100% !important;
  /* height: auto; */
  max-height: 100% !important;
}

.video-js .vjs-big-play-button {
    top: 50% !important;
    left: 50% !important;
    margin-top: -.81666em !important;;
    margin-left: -1.5em !important;;
}

main.player{
    position: relative;
    max-height: 100%;
    width: 100%;
    height: 100%;
}

.pb-10{
    padding-bottom: 6rem !important;
}
.container-teste{
    padding-left: 1.5rem!important;
    padding-right: 1.5rem!important;
}

.mt-n10, .my-n10 {
    margin-top: -3rem !important;
}

.card-header{
    border-left: 15px solid; 
    border-top: 0 !important;
    border-bottom: 0 !important;
    border-right: 0 !important;
    border-color: #8904B1;
    border-radius: 0 !important;
    /* border-image: linear-gradient(to left, #B06AB3, #4568DC) 1 !important; */
    background: #1C1C1C !important;
}
.card-content{
    border-top: 3px solid !important; 
    border-left: 0 !important;
    border-bottom: 0 !important;
    border-right: 0 !important;
    border-image: linear-gradient(to left, #B06AB3, #4568DC) 1 !important;
    background: #1C1C1C !important;
}

.my_video_1-dimensions {
    width: 100%;
    max-width: 100%;
    height: 500px;
}
</style>

@section('content')
<header class="page-header text-light pb-5 bg-dev-course">
    <div class="container">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-5">
                    <h1 class="page-header-title main-font text-light py-2">Métodos e Requisições</h1>
                    <!-- <div class="page-header-subtitle">Aula 05, Módulo 02.</div> -->
                </div>
            </div>
        </div>
    </div>
</header>

  
<video id="my_video_1" class="video-js vjs-default-skin" width="auto" height="auto" controls preload="auto" poster="../img/person.jpg" data-setup='{ "asdf": true }' poster="http://video-js.zencoder.com/oceans-clip.png" >
    <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
    <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
</video>
  

<div class="container p-3 pt-5">
    <div class="row justify-content-between  card-content-top">
        <div class="h-100 col-6 p-3">
            <h1 class="page-header-title main-font text-light py-4">Playlist</h1>
            <div id="accordion">
                <div class="card bg-gray">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-block btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="float-left main-font font-weight-bold text-light"><h3>Conceitos Básicos</h3></span>
                                <div class="float-right ml-auto">
                                    <span class="main-font font-weight-bold lead text-light mr-3">40%</span> <i class="fa fa-2x fa-caret-down text-light"></i>
                                </div>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-gray">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="float-left main-font font-weight-bold text-light"><h3>Conceitos Avançados</h3></span>
                                <div class="float-right ml-auto">
                                    <span class="main-font font-weight-bold lead text-light mr-3">40%</span> <i class="fa fa-2x fa-caret-down text-light"></i>
                                </div>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-gray">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="float-left main-font font-weight-bold text-light"><h3>Lorem Ipsum</h3></span>
                                <div class="float-right ml-auto">
                                    <span class="main-font font-weight-bold lead text-light mr-3">40%</span> <i class="fa fa-2x fa-caret-down text-light"></i>
                                </div>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                                <li><a href="" class="font-weight-bold text-light main-font lead">Aula 01: Lorem Ipsum</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-100 col-5 py-4 pt-0">
            <h1 class="page-header-title main-font text-light py-4">Descrição</h1>
            <p class="lead text-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, corrupti. Dolor magnam libero nam similique mollitia, soluta nobis molestiae numquam, veniam accusantium necessitatibus earum. Hic sed obcaecati neque odio natus.
            </p>
            <h1 class="page-header-title main-font text-light py-4">Conteúdo Adicional</h1>
            <a href="#" class="btn btn-success">Teste.pdf</a>
        </div>
    </div>
    <div class="container py-4">
        <div class="float-left">
            <a href="{{asset('home')}}" class="lead text-light">
                <i class="fa fa-arrow-left mr-3"></i>
                Todos os Cursos
            </a>
        </div>
        <div class="float-right">
            <div class="row">
                <div class="mr-3">
                    <p class="lead main-font text-light">Avalie este curso:</p>
                </div>
                <div class="rating">
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="fas fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                    <i class="far fa-2x fa-laugh text-warning float-left m-1 ml-auto"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    videojs.autoSetup();

    videojs('my_video_1').ready(function(){
    console.log(this.options()); //log all of the default videojs options
    
    // Store the video object
    var myPlayer = this, id = myPlayer.id();
    // Make up an aspect ratio
    var aspectRatio = 264/640; 

    function resizeVideoJS(){
        var width = document.getElementById(id).parentElement.offsetWidth;
        myPlayer.width(width).height( width * aspectRatio );

    }
    
    // Initialize resizeVideoJS()
    resizeVideoJS();
    // Then on resize call resizeVideoJS()
    window.onresize = resizeVideoJS; 
    });
</script>

<script>
$(document).ready(function(){
    $('#my_video_1').bind('contextmenu',function() { return false; });
});
</script>

@endsection
