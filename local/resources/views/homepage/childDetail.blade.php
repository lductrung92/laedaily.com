@extends('home.base.base')
@section('link')
<link rel="canonical" href="{{ Request::fullUrl() }}" />
@endsection
@section('keywords')
<meta name="keywords" content="laedaily, giải trí, lập trình, {{ $category->name }}" />
@endsection
@section('description')
<meta name="description" content="www.laedaily.com - {{ $category->name }}" />
@endsection
@section('title', 'LAEDAILY.COM - ' . $category->name)

@section('content')

    <div class="breadcrumbs info-detail">
        <span class="first breadcrumb">
            <a href="{{ asset('/') }}"><i class="fa fa-home"></i>Trang chủ</a>
        </span>
        @if(count($category->parent)>0)
            @include('home.breadcrumb.parentBreadcrumb',['parent' => $category->parent])
            <i class="fa fa-angle-double-right"></i>
            <span typeof="v:Breadcrumb" class="breadcrumb">
                <a rel="v:url" property="v:title" href="{{ $category->link_custom }}.html">{{ $category->name }}</a>
            </span>
        @endif
    </div>

    <div class="main-content-section clearfix">

        <div id="primary">
            <div id="content" class="clearfix">
                <header class="page-header">
                    <h3 class="page-title" style="border-bottom-color: #206b4d">
                        <span style="background-color: #206b4d">{{ $category->name }}</span>
                    </h3>
                </header>
                <div class="article-container">
                    @foreach($articles as $article)
                        <article id="post-{{ $article->id }}" class="post-{{ $article->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-travel">
                            <div class="featured-image">
                                <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                    <img width="800" height="445" src="upload/images/articles/{{ $article->image }}"
                                         class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image"
                                         alt="{{ $article->title }}"
                                         sizes="(max-width: 800px) 100vw, 800px">
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
                                <div class="entry-content">
                                    <p>{{ $article->description }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <nav aria-label="Page navigation" id="pagination" data_id="{{ $category->id }}">
                        {{ $articles->links() }}
                    </nav>

                </div>
            </div>
        </div>

        @include('home.base.secondary')
    </div>
@endsection
