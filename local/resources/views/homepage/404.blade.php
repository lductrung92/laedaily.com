@extends('home.base.base')
@section('link')
<link rel="canonical" href="{{ Request::fullUrl() }}" />
@endsection
@section('title', 'Page not found')

@section('content')
    <div class="main-content-section clearfix">
        <div id="primary">
            <div id="content" class="clearfix">
                <section class="error-404 not-found">
                    <div class="page-content">

                        <header class="page-header">
                            <h1 class="page-title">Oops! That page can’t be found.</h1>
                        </header>
                        <p>It looks like nothing was found at this location. Try the search below.</p>
                        <form action="https://demo.themegrill.com/colormag-pro/" class="search-form searchform clearfix" method="get">
                            <div class="search-wrap">
                                <input type="text" placeholder="Search" class="s field" name="s">
                                <button class="search-icon" type="submit"></button>
                            </div>
                        </form><!-- .searchform -->
                        <div class="error-wrap">
                  <span class="num-404">
                     404                  </span>
                            <span class="error">Error</span>
                        </div>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
            </div>
        </div>
        @include('home.base.secondary')
    </div>
@endsection
