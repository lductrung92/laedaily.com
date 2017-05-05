@extends('home.base.base')
@section('link')
<link rel="canonical" href="{{ Request::fullUrl() }}" />
@endsection
@section('keywords')
<meta name="keywords" content="laedaily, giải trí, lập trình, {{ $article[0]->tag }}" />
@endsection
@section('description')
<meta name="description" content="www.laedaily.com - {{ $article[0]->title }}" />
@endsection
@section('title', 'LAEDAILY.COM - ' . $article[0]->title)

@section('headJs')
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '670780799789895',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@endsection

@section('content')

    <div class="breadcrumbs info-detail">
        <span class="first breadcrumb">
            <a href="{{ asset('/') }}"><i class="fa fa-home"></i>Trang chủ</a>
        </span>

        <i class="fa fa-angle-double-right"></i>
        <span typeof="v:Breadcrumb" class="breadcrumb">
            <a rel="v:url" property="v:title" href="{{ $article[0]->cate_link }}.html">{{ $article[0]->cate_name }}</a>
        </span>

        <i class="fa fa-angle-double-right"></i>
        <span typeof="v:Breadcrumb" class="breadcrumb">
            <a rel="v:url" property="v:title" href="{{ $article[0]->link_custom }}.html">{{ $article[0]->title }}</a>
        </span>
    </div>

    <div class="main-content-section clearfix">
        <div id="primary">

            <div id="content" class="clearfix">
                <article
                        class="post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-tourism">
                    <div class="article-content clearfix">
                        <header class="entry-header">
                            <h1 class="entry-title">{{ $article[0]->title }}</h1>
                        </header>
                        <div class="below-entry-meta">
                            <span class="posted-on">
                                <a rel="bookmark">
                                    <i class="fa  fa-calendar"></i>
                                    <time class="entry-date published"
                                          datetime="{{ $article[0]->updated_at }}">{{ date('d-m-Y', strtotime($article[0]->updated_at)) }}</time>
                                </a>
                            </span>

                            <span class="byline">
                                <span class="author vcard">
                                    <i class="fa fa-pencil"></i>
                                    <a class="url fn n"
                                       href="{{ $article[0]->source }}">{{ preg_replace('#^https?://#', '', $article[0]->source) }}</a>
                                </span>
                            </span>

                            <span class="post-views">
                                <i class="fa fa-eye"></i>
                                <span class="total-views">0 Views</span>
                            </span>

                            <span class="comments">
                                <i class="fa fa-comment"></i>
                                <a href="{{ $article[0]->link_custom }}.html">0</a>
                            </span>
                        </div>
                        <div class="entry-content clearfix">
                            {!! $article[0]->content !!}
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="fb-like" data-share="true" data-width="450" data-show-faces="true" style="margin-bottom: 20px"></div>

           <div id="fb-root"></div>
           <script>(function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=449119652102896";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));</script>

            <div id="comments" class="comments-area">
                <div class="fb-comments" data-href="http://laedaily.com" data-width="100%" data-numposts="5"></div>            
            </div>

            <header class="page-header">
                <h3 class="page-title" style="border-bottom-color: #206b4d">
                    <span style="background-color: #206b4d">Tin liên quan</span>
                </h3>
            </header>

            <div class="related-posts clearfix">
                @foreach($related_articles as $article)
                    <div class="single-related-posts">
                    <div class="related-posts-thumbnail">
                        <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                            <img width="390" height="205"
                               src="upload/images/medium/{{ $article->image }}"
                               class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                               alt="">
                        </a>
                    </div>
                    <div class="article-content">
                        <h3 class="entry-title">
                            <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">{{ $article->title }}</a>
                        </h3>

                        <div class="below-entry-meta">
                                <span class="posted-on">
                                    <a rel="bookmark">
                                        <i class="fa fa-calendar-o"></i>
                                        <time class="entry-date published" datetime="{{ $article->updated_at }}">{{ date('d-m-Y', strtotime($article->updated_at)) }}</time>
                                    </a>
                                </span>
                            <span class="byline">
                                    <span class="author vcard">
                                        <i class="fa fa-pencil"></i>
                                        <a class="url fn n" href="{{ $article->source }}">{{ preg_replace('#^https?://#', '', $article->source) }}</a>
                                    </span>
                                </span>
                            <span class="comments">
                                    <i class="fa fa-comment"></i>
                                    <a href="{{ $article->link_custom }}.html">0</a>
                                </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @include('home.base.secondary')
    </div>
@endsection
