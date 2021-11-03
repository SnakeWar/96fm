@extends('pages.layouts.layout')

<!-- preloader -->

{{--<div id="preloader">

    <div class="inner">

        <div class="bolas">

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>

</div>--}}

<div style="display:none;"></div>

<div style="display:none;"></div>

<div style="display:none;"></div>

{{--@section('css')
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
        .animacao {
            position: absolute;
            width:100%;
            top:0;
            left:0;
            z-index:999999;
        }
    </style>
@endsection--}}

@section('content')
    {{--<img class="animacao animate__animated animate__hinge animate__delay-2s animate__slower d-none d-md-flex" src="{{ asset('images/96fm.png') }}" alt="">
    <img class="animacao animate__animated animate__hinge animate__delay-2s animate__slower d-md-none" src="{{ asset('images/96fm_mobile.png') }}" alt="">--}}
    {{--@if(!empty($lives) || (!empty($featured) && $featured->type === 'video'))
        <div class="container">
        	<div class="row d-flex justify-content-center">
        		<div class="col-12 col-md-8 col-lg-6">
        			<div style="margin-left:0;margin-right:0;margin-top:10px;margin-bottom:10px;" class="row noticias">
		                <div style="position: relative;padding-bottom: 56.25%;height: 0;overflow: hidden;max-width: 100%;" class="col-12">
		                    <iframe type="text/html" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" src="{{ (new \App\Models\Video)->getEmbed(!empty($lives) ? $lives[0]['src'] : $featured->url) }}" frameborder="0"></iframe>
		                </div>
		            </div>
        		</div>
        	</div>
        </div>
    @endif

    @if(empty($lives) && (empty($featured) || $featured->type === 'posts') && $banner_top_youtube)
        <section class="mt-4 d-none d-md-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <a href="{{ route('banner_hit', [ 'slug' => $banner_top_youtube->slug ] )}}" target="_blank">
                            <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banner_top_youtube->file}") }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif--}}

    @if((empty($featured) || $featured->type === 'posts') && $banner_top_youtube)
        <section class="mt-4 d-none d-md-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <a href="{{ route('banner_hit', [ 'slug' => $banner_top_youtube->slug ] )}}" target="_blank">
                            <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banner_top_youtube->file}") }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="mt-4 mb-5">

        <div class="container-fluid">

            <div class="row justify-content-center">

                <!-- conteudo da pagina -->

                <div class="col-lg-8">

                    <!-- banner mobile -->
                    {{--@if(empty($lives) && (empty($featured) || $featured->type === 'posts') && $banner_top_youtube)
                    <a class="d-block d-md-none" href="{{ route('banner_hit', [ 'slug' => $banner_top_youtube->slug ] )}}" target="_blank">
                        <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banner_top_youtube->file_mobile ? $banner_top_youtube->file_mobile : $banner_top_youtube->file)) }}" alt="">
                    </a>
                    @endif--}}

                    @if((empty($featured) || $featured->type === 'posts') && $banner_top_youtube)
                    <a class="d-block d-md-none" href="{{ route('banner_hit', [ 'slug' => $banner_top_youtube->slug ] )}}" target="_blank">
                        <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banner_top_youtube->file_mobile ? $banner_top_youtube->file_mobile : $banner_top_youtube->file)) }}" alt="">
                    </a>
                    @endif

                    <!-- noticias destaques -->

                    @if(empty($featured) || $featured->type === 'posts')
                        <div class="row noticias main-news">

                        <div class="col-12">

                            <ul class="noticia-title">
                                <!-- se há destaque fixa e fixadas nas posições secundárias -->
                                @if( isset($fixed)&& $fixed_secondary->count() == 2 )
                                    <!-- principal-->
                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed[0]->slug ] )}}">
                                            <h1>{{ $fixed[0]->title }}</h1>
                                        </a>

                                    </li>

                                    <!-- duas abaixo do destaque principal -->
                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed_secondary[0]->slug ] )}}">
                                            <h1>{{ $fixed_secondary[0]->title }}</h1>
                                        </a>

                                    </li>

                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed_secondary[1]->slug ] )}}">
                                            <h1>{{ $fixed_secondary[1]->title }}</h1>
                                        </a>

                                    </li>
                                <!-- se há apenas uma fixa secundária -->
                                @elseif(isset($fixed) && $fixed_secondary->count() == 1)
                                    <!-- principal-->
                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed[0]->slug ] )}}">
                                            <h1>{{ $fixed[0]->title }}</h1>
                                        </a>

                                    </li>

                                    <!-- duas abaixo do destaque principal -->
                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed_secondary[0]->slug ] )}}">
                                            <h1>{{ $fixed_secondary[0]->title }}</h1>
                                        </a>

                                    </li>

                                    <li>   
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $featureds[0]->slug ] )}}">
                                            <h1>{{ $featureds[0]->title }}</h1>
                                        </a>

                                    </li>
                                <!-- se há apenas destaque fixa -->
                                @elseif($fixed->count() > 0)
                                    <!-- destaque 1 - notícia do texto maiorzão -->
                                    <li>

                                            
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed[0]->slug ] )}}">
                                            <h1>{{ $fixed[0]->title }}</h1>
                                        </a>

                                    </li>

                                    @foreach($featureds as $key => $item)
                                        <!-- abaixo do destaque 1 -->
                                        @if($key <= 1)
                                            
                                            <li>

                                                <a class="m-1" href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">
                                                    <h1>{{ $item->title }}</h1>
                                                </a>

                                            </li>

                                        @endif

                                    @endforeach
                                
                                <!-- se não há destaque fixa nem fixadas nas posições secundárias-->
                                @else
                                    @foreach($featureds as $key => $item)

                                        @if($key <= 2)
                                            
                                            <li>

                                                <a class="m-1" href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">
                                                    <h1>{{ $item->title }}</h1>
                                                </a>

                                            </li>

                                        @endif

                                    @endforeach
                                @endif

                            </ul>

                        </div>

                        @if($fixed->count() == 2)
                        <!-- se há duas destaques fixas -->
                            <!-- a primeira das notícias com imagem será fixa também -->
                            <div class="col-12 col-md-6 col-lg-4 noticia">
                                        
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $fixed[1]->slug ] )}}">

                                            <div class="card">

                                                <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$fixed[1]->file}") }}" alt="">

                                                <div class="card-body">

                                                    <span>{{ $fixed[1]->category->title }}</span>

                                                    <p class="mt-1">{{ $fixed[1]->title }}</p>

                                                </div>

                                            </div>

                                        </a>

                            </div>
                            <!-- lista as outras 2 noticias AQUII-->
                            @foreach($featureds as $key => $item)

                                @if($key >= 2)

                                    <div class="col-12 col-md-6 col-lg-4 noticia">
                                        
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                            <div class="card">

                                                <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                                <div class="card-body">

                                                    <span>{{ $item->category->title }}</span>

                                                    <p class="mt-1">{{ $item->title }}</p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                @endif

                            @endforeach

                        <!-- se há NÂO há duas destaques fixas -->
                        @else
                            @foreach($featureds as $key => $item)

                                @if($key >= 3 && $key <= 5)

                                    <div class="col-12 col-md-6 col-lg-4 noticia">
                                        
                                        <a class="m-1" href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                            <div class="card">

                                                <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                                <div class="card-body">

                                                    <span>{{ $item->category->title }}</span>

                                                    <p class="mt-1">{{ $item->title }}</p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                @endif

                            @endforeach

                        @endif

                        </div>

                    @endif



                    @if(isset($banners[0]))

                        <a href="{{ route('banner_hit', [ 'slug' => $banners[0]->slug ] )}}" target="_blank">

                            <img class="w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[0]->file}") }}" alt="">

                            <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[0]->file_mobile ? $banners[0]->file_mobile : $banners[0]->file)) }}" alt="">

                        </a>

                    @endif



                    <!-- ultimas noticias -->

                    <div class="row mt-5 ultimas-noticias">

                        <div class="col-12">

                            <h1>Últimas notícias</h1>

                        </div>

                        <div class="col-md-6 border-right">



                            <ul>

                                @foreach($posts_1 as $item)

                                    <li>

                                        <a href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                            <div class="media" style="height: 145px;overflow: hidden;">

                                                <img class="mr-3" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                                <div class="media-body">

                                                    <span>{{ $item->category->title }}</span>

                                                    <h5 class="mt-0">{{ $item->title }}</h5>

                                                    <small>{{ convertdata_tosite($item->published_at) }}</small>

                                                </div>

                                            </div>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                @foreach($posts_2 as $item)

                                    <li>

                                        <a href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                            <div style="min-height: 105px" class="media">

                                                <div class="media-body">

                                                    <span>{{ $item->category->title }}</span>

                                                    <h5 class="mt-0">{{ $item->title }}</h5>

                                                    <small>{{ convertdata_tosite($item->published_at) }}</small>

                                                </div>

                                            </div>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                    @if(isset($banners[1]))

                        <a href="{{ route('banner_hit', [ 'slug' => $banners[1]->slug ] )}}" target="_blank">

                            <img class="w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[1]->file}") }}" alt="">

                            <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[1]->file_mobile ? $banners[1]->file_mobile : $banners[1]->file)) }}" alt="">

                        </a>

                    @endif



                    <!-- entretenimento -->

                    <div class="row mt-5 mb-3 entretenimento">

                        <div class="col-12">

                            <h1>{{ $category->title }}</h1>

                        </div>

                        @foreach($category_items as $item)

                            <div class="col-sm-6 col-md-4 col-lg-4">

                                <a href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                    <div style="min-height: 321px" class="card">

                                        <img @if(!$loop->first) class="d-none d-lg-block" @endif src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                        <div class="card-body">

                                            <h5 class="card-title">{{ $item->title }}</h5>

                                            <p class="card-text">

                                                <img src="{{ asset("assets/img/icon/play2.png") }}" alt="">

                                                {{ $item->description }}

                                            </p>



                                            <div class="d-flex justify-content-end">

                                                <small>{{ $item->category->title }}</small>

                                                <!-- <img class="ml-2" src="{{ asset("assets/img/icon/compartilhar.png") }}" alt=""> -->



                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </div>

                        @endforeach

                    </div>



                    @if(isset($banners[2]))

                        <a href="{{ route('banner_hit', [ 'slug' => $banners[2]->slug ] )}}" target="_blank">

                            <img class="w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[2]->file}") }}" alt="">

                            <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[2]->file_mobile ? $banners[2]->file_mobile : $banners[2]->file)) }}" alt="">

                        </a>

                    @endif

                    <div class="noticias mt-2 d-block d-sm-none">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="recentes2-tab" data-toggle="tab" href="#recentes2" role="tab" aria-controls="recentes2" aria-selected="false">Mais recentes</a></li>
                                    <li class="nav-item"><a class="nav-link" id="lidas2-tab" data-toggle="tab" href="#lidas2" role="tab" aria-controls="lidas2" aria-selected="true">Mais lidas</a></li>
                                    <li class="nav-item"><a class="nav-link" id="comentadas2-tab" data-toggle="tab" href="#comentadas2" role="tab" aria-controls="comentadas2" aria-selected="false">Mais comentadas</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="recentes2" role="tabpanel" aria-labelledby="recentes-tab">
                                        <ul class="">
                                            @foreach($recent_posts as $top_post)
                                                <li class="border-bottom pb-4 mt-3"><a href="{{ route('news_detail', [ 'slug' => $top_post->slug ]) }}">{{ $top_post->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="lidas2" role="tabpanel" aria-labelledby="lidas2-tab">
                                        <ul class="">
                                            @foreach($top_hits as $top_post)
                                                <li class="border-bottom pb-4 mt-3"><a href="{{ route('news_detail', [ 'slug' => $top_post->slug ]) }}">{{ $top_post->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="comentadas2" role="tabpanel" aria-labelledby="comentadas2-tab">
                                        <ul class="">
                                            @foreach($top_comments as $top_post)
                                                <li class="border-bottom pb-4 mt-3"><a href="{{ route('news_detail', [ 'slug' => $top_post->slug ]) }}">{{ $top_post->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                            <div class=" col-md-6 col-lg-12 opinioes">
                                <!-- banner da iskisita que estava repetindo no mobile -->
                                {{--@if(isset($banners[2]))
                                    <a href="{{ route('banner_hit', [ 'slug' => $banners[2]->slug ] )}}" target="_blank">
                                        <img class="mt-3 w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[2]->file}") }}" alt="">
                                        <img class="mt-3 w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[2]->file_mobile ? $banners[2]->file_mobile : $banners[2]->file)) }}" alt="">
                                    </a>
                                @endif--}}

                                @if(!empty($blogs))
                                    <div class="d-flex justify-content-between mt-3 _mais">
                                        <h1 class="pl-2 text-uppercase">{{ $category_secondary->title }}</h1>
                                    </div>
                                    <div class="opinioes_info">
                                        <div class="card-body">
                                            {{--@foreach($blogs as $item)
                                                <a href="{{ route('news') . '?blog=' . $item['id'] }}">
                                                    <div class="media d-flex align-items-center">
                                                        @if($item->file)
                                                            <img class="w-auto mr-3" src="{{ \Illuminate\Support\Facades\Storage::url("users/{$item->file}") }}" alt="">
                                                        @endif
                                                        <div class="media-body">
                                                            <h5 class="mt-0">{{ $item->name }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                                @if(!$loop->last)
                                                    <hr class="mt-3 mb-3">
                                                @endif
                                            @endforeach--}}
                                            <a href="https://www.blogdobg.com.br/" target="_blank">
                                                <div class="media d-flex align-items-center">
                                                    <img class="mr-3" src="{{ asset("assets/img/blogs/BG-2.jpeg") }}" alt="">

                                                    <div class="media-body">
                                                        <h5 class="mt-0">Blog do BG</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mt-3 mb-3">

                                            <a href="https://www.blogdodina.com/" target="_blank">
                                                <div class="media d-flex align-items-center">
                                                    <img class="mr-3" src="{{ asset("assets/img/blogs/perfil-dina.jpg") }}" alt="" style="object-fit: cover">

                                                    <div class="media-body">
                                                        <h5 class="mt-0">Blog do Dina</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mt-3 mb-3">

                                            <a href="https://gustavonegreiros.com.br/" target="_blank">
                                                <div class="media d-flex align-items-center">
                                                    <img class="w-auto mr-3" src="{{ asset("assets/img/blogs/perfil-gustavo1.png") }}" alt="">

                                                    <div class="media-body">
                                                        <h5 class="mt-0">Blog Gustavo Negreiros</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mt-3 mb-3">

                                            <a href="https://portalbo.com/" target="_blank">
                                                <div class="media d-flex align-items-center">
                                                    <img class="w-auto mr-3" src="{{ asset("assets/img/blogs/portal-bo.png") }}" alt="">

                                                    <div class="media-body">
                                                        <h5 class="mt-0">Portal BO</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 mb-3 entretenimento">

                        <div class="col-12">

                            <h1>INSTAGRAM </h1>

                        </div>

                        <div class="col-12">

                            <!-- SnapWidget -->
                            {{--<script src="https://snapwidget.com/js/snapwidget.js"></script>
                            <iframe src="https://snapwidget.com/embed/942342" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>--}}
                            
                            <!-- SnapWidget -->
                            <script src="https://snapwidget.com/js/snapwidget.js"></script>
                            <iframe src="https://snapwidget.com/embed/942342" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>

                        </div>

                    </div>



                    @if(isset($banners[3]))

                        <a href="{{ route('banner_hit', [ 'slug' => $banners[3]->slug ] )}}" target="_blank">

                            <img class="w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[3]->file}") }}" alt="">

                            <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[3]->file_mobile ? $banners[3]->file_mobile : $banners[3]->file)) }}" alt="">

                        </a>

                    @endif



                    <!-- outras noticias -->



                    <div class="row mt-5 ultimas-noticias">

                        <div class="col-md-12">

                            <ul>

                                @foreach($others_1 as $item)

                                    <li>

                                        <a href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                            <div class="media align-items-center">

                                                <img class="mr-3 img-noticias-meio" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                                <div class="media-body">

                                                    <span>{{ $item->category->title }}</span>

                                                    <h5 class="mt-2 mb-1">{{ $item->title }}</h5>

                                                    <small>{{ convertdata_tosite($item->published_at) }}</small>

                                                    <p class="mt-3 card-text text-dark d-none d-sm-block">

                                                        {{ $item->description }}

                                                    </p>

                                                </div>

                                            </div>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>



                    @if(isset($banners[4]))

                        <a href="{{ route('banner_hit', [ 'slug' => $banners[4]->slug ] )}}" target="_blank">

                            <img class="w-100 d-none d-md-block" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$banners[4]->file}") }}" alt="">

                            <img class="w-100 d-block d-lg-none" src="{{ \Illuminate\Support\Facades\Storage::url("banners/" . ($banners[4]->file_mobile ? $banners[4]->file_mobile : $banners[4]->file)) }}" alt="">

                        </a>

                    @endif



                    @if(isset($others_2[0]))

                        <div class="row noticias d-flex align-items-top">

                            <div class="col-lg-12 mt-3 mb-3">

                                <a class="m-2" href="{{ route('news_detail', [ 'slug' => $others_2[0]->slug ] )}}">

                                    <div class="card destaque">

                                        <img class="w-100" src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$others_2[0]->file}") }}" alt="">

                                        <div class="card-body">

                                            <span>{{ $others_2[0]->category->title }}</span>



                                            <p class="mt-2">

                                                {{ $others_2[0]->title }}

                                            </p>

                                        </div>

                                    </div>

                                </a>

                            </div>

                        </div>

                    @endif



                    @php

                        $others_2->shift()

                    @endphp



                    <div class="row entretenimento">

                        @foreach($others_2 as $item)

                            <div class="col-6 col-md-4 col-lg-3">

                                <a href="{{ route('news_detail', [ 'slug' => $item->slug ] )}}">

                                    <div class="card border-0">

                                        <img src="{{ \Illuminate\Support\Facades\Storage::url("posts/{$item->file}") }}" alt="">

                                        <div class="card-body pl-0">

                                            <h5 class="card-title  text-dark">{{ $item->title }}</h5>

                                            <div class="d-flex justify-content-start">

                                                <small>{{ $item->category->title }}</small>

                                                <!-- <img class="ml-2" src="{{ asset("assets/img/icon/compartilhar.png") }}" alt=""> -->

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </div>

                        @endforeach

                    </div>

                </div>



                <!-- menu lateral -->

                @include('pages.layouts.sections._sidebar')

            </div>

        </div>

    </section>


    @if(isset($popup[0]))
        <div id="myModalPopup" class="modal-popup">
            <span class="close-popup">&times;</span>
            <a href="{{ route('banner_hit', [ 'slug' => $popup[0]->slug ] )}}" target="_blank">
                <img class="modal-popup-content" src="{{ \Illuminate\Support\Facades\Storage::url("banners/{$popup[0]->file}") }}">
            </a>
        </div>
    @endif

@endsection



@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModalPopup");

        setTimeout(function() {
            if (modal) {
                modal.style.display = "block";
            }
        }, 3000);

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-popup")[0];

        //setTimeout(function(){
            //$('.animacao').remove();
        //}, 4500);

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

@stop