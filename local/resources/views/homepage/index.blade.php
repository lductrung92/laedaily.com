@extends('home.base.base')
@section('link')
<link rel="canonical" href="{{ Request::fullUrl() }}" />
@endsection
@section('keywords')
<meta name="keywords" content="laedaily, giải trí, lập trình" />
@endsection
@section('description')
<meta name="description" content="www.laedaily.com - mang đến cho bạn tri thức cùng với những món ăn tinh thần" />
@endsection
@section('title', 'LAEDAILY.COM - Trang chủ')

@section('content')
    @include('home.base.slider')

    <div class="main-content-section clearfix">
        <div id="primary">
            <div id="content" class="clearfix">

                @foreach($girl_categories as $category)
                    <section id="colormag_featured_posts_widget-2"
                             class="widget widget_featured_posts widget_featured_meta clearfix">
                        <h3 class="widget-title" style="border-bottom-color:#ff0093;">
                            <span style="background-color:#ff0093;">{{ $category->name }}</span>
                            <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
                        </h3>
                        <?php
                            $i = 1;
                        ?>
                        @foreach($girl_articles as $article)
                            @if($i != null)
                                <div class="first-post">
                                    <div class="single-article clearfix">
                                        <figure>
                                            <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                                <img width="390" height="205" src="upload/images/articles/{{ $article->image }}"
                                                     class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                                                     alt="{{ $article->title }}"
                                                     title="{{ $article->title }}"/>
                                            </a>
                                        </figure>
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
                                    </div>
                                </div>
                                <div class="following-post">
                                <?php
                                    $i = null;
                                ?>
                            @else
                                <div class="single-article clearfix">
                                <figure>
                                    <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                        <img width="130" height="90" src="upload/images/small/{{ $article->image }}"
                                             class="attachment-colormag-featured-post-small size-colormag-featured-post-small wp-post-image"
                                             alt="{{ $article->title }}"
                                             title="{{ $article->title }}"
                                             sizes="(max-width: 130px) 100vw, 130px"/></a>
                                </figure>
                                <div class="article-content">

                                    <h3 class="entry-title">
                                        <a href="{{ $article->link_custom }}.html"
                                                title="{{ $article->title }}">{{ $article->title }}</a>
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
                            @endif
                        @endforeach
                            </div>


                    </section>
                @endforeach

                <div id="paginationNew">
                    @foreach($news_categories as $category)
                        <section id="colormag_default_news_widget-2" class="widget widget_default_news_colormag widget_featured_posts clearfix">
                            <h3 class="widget-title" style="border-bottom-color:#206b4d;">
                                <span style="background-color:#206b4d;">{{ $category->name }}</span>
                                <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
                            </h3>
                            @foreach($news_articles as $article)
                                <div class="default-news">
                                    <div class="single-article clearfix">
                                        <figure>
                                            <a href="{{ $article->link_custom }}.html"  title="{{ $article->title }}">
                                                <img width="390" height="205"
                                                     src="upload/images/articles/{{ $article->image }}"
                                                     class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                                                     alt="{{ $article->title }}"
                                                     title="{{ $article->title }}"/>
                                            </a>
                                        </figure>
                                        <div class="article-content">

                                            <h3 class="entry-title">
                                                <a href="{{ $article->link_custom }}.html" title="Rafting accident near Silver leaves">
                                                    {{ $article->title }}
                                                </a>
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
                                    </div>
                                </div>
                            @endforeach
                            <nav aria-label="Page navigation" id="pagination" data_id="{{ $category->id }}">
                                {{ $news_articles->links() }}
                            </nav>
                        </section>
                    @endforeach
                </div>

                <section id="colormag_728x90_advertisement_widget-3"
                         class="widget widget_728x90_advertisement clearfix">
                    <div class="advertisement_728x90">
                        <div class="advertisement-content"><a href="http://themegrill.com/themes/colormag-pro"
                                                              class="single_ad_728x90" target="_blank"
                                                              rel="nofollow"> <img
                                        src="https://demo.themegrill.com/colormag-pro/wp-content/uploads/sites/24/2016/02/color-mag-large-advetise.jpg"
                                        width="728" height="90"> </a></div>
                    </div>
                </section>

                @foreach($php_categories as $category)
                    <section id="colormag_featured_posts_widget-2"
                             class="widget widget_featured_posts widget_featured_meta clearfix">
                        <h3 class="widget-title" style="border-bottom-color:#2f4db1;">
                            <span style="background-color:#2f4db1;">{{ $category->name }}</span>
                            <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
                        </h3>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($category->articles as $article)
                            @if($i != null)
                                <div class="first-post">
                                    <div class="single-article clearfix">
                                        <figure>
                                            <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                                <img width="390" height="205" src="upload/images/articles/{{ $article->image }}"
                                                     class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                                                     alt="{{ $article->title }}"
                                                     title="{{ $article->title }}"/>
                                            </a>
                                        </figure>
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
                                    </div>
                                </div>
                                <div class="following-post">
                                    <?php
                                    $i = null;
                                    ?>
                                    @else
                                        <div class="single-article clearfix">
                                            <figure>
                                                <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                                    <img width="130" height="90" src="upload/images/small/{{ $article->image }}"
                                                         class="attachment-colormag-featured-post-small size-colormag-featured-post-small wp-post-image"
                                                         alt="{{ $article->title }}"
                                                         title="{{ $article->title }}"
                                                         sizes="(max-width: 130px) 100vw, 130px"/></a>
                                            </figure>
                                            <div class="article-content">

                                                <h3 class="entry-title">
                                                    <a href="{{ $article->link_custom }}.html"
                                                       title="{{ $article->title }}">{{ $article->title }}</a>
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
                                    @endif
                                    @endforeach
                                </div>


                    </section>
                @endforeach

                <div class="tg-one-half">
                    @foreach($jquery_categories as $category)
                        <section id="colormag_featured_posts_vertical_widget-4" class="widget widget_featured_posts widget_featured_posts_vertical widget_featured_meta clearfix">
                            <h3 class="widget-title" style="border-bottom-color:#dab92e;">
                                <span style="background-color:#dab92e;">{{ $category->name }}</span>
                                <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
                            </h3>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($category->articles as $article)
                                @if($i != null)
                                    <div class="first-post">
                                        <div class="single-article clearfix">
                                            <figure>
                                                <a href="{{ $article->link_custom }}.html"
                                                   title="{{ $article->title }}">
                                                    <img width="390" height="205"
                                                         src="upload/images/articles/{{ $article->image }}"
                                                         class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                                                         alt="{{ $article->title }}"
                                                         title="{{ $article->title }}"/>
                                                </a>
                                            </figure>
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
                                        </div>
                                    </div>
                                    <div class="following-post">
                                        <?php
                                        $i = null;
                                        ?>
                                        @else
                                            <div class="single-article clearfix">
                                                <figure>
                                                    <a href="{{ $article->link_custom }}.html"
                                                       title="{{ $article->title }}">
                                                        <img width="130" height="90"
                                                             src="upload/images/small/{{ $article->image }}"
                                                             class="attachment-colormag-featured-post-small size-colormag-featured-post-small wp-post-image"
                                                             alt="{{ $article->title }}"
                                                             title="{{ $article->title }}"
                                                             sizes="(max-width: 130px) 100vw, 130px"/>
                                                    </a>
                                                </figure>
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
                                        @endif
                                        @endforeach
                                    </div>
                        </section>
                    @endforeach
                </div>

                <div class="tg-one-half tg-one-half-last">
                    @foreach($laravel_categories as $category)
                        <section id="colormag_featured_posts_vertical_widget-4" class="widget widget_featured_posts widget_featured_posts_vertical widget_featured_meta clearfix">
                            <h3 class="widget-title" style="border-bottom-color:#b76800;">
                                <span style="background-color:#b76800;">{{ $category->name }}</span>
                                <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
                            </h3>
                                <?php
                                $i = 1;
                                ?>
                            @foreach($category->articles as $article)
                                @if($i != null)
                            <div class="first-post">
                                <div class="single-article clearfix">
                                    <figure>
                                        <a href="{{ $article->link_custom }}.html"
                                           title="{{ $article->title }}">
                                            <img width="390" height="205"
                                                src="upload/images/articles/{{ $article->image }}"
                                                class="attachment-colormag-featured-post-medium size-colormag-featured-post-medium wp-post-image"
                                                alt="{{ $article->title }}"
                                                title="{{ $article->title }}"/>
                                        </a>
                                    </figure>
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
                                </div>
                            </div>
                            <div class="following-post">
                                <?php
                                $i = null;
                                ?>
                                @else
                                    <div class="single-article clearfix">
                                    <figure>
                                        <a href="{{ $article->link_custom }}.html"
                                           title="{{ $article->title }}">
                                            <img width="130" height="90"
                                                src="upload/images/small/{{ $article->image }}"
                                                class="attachment-colormag-featured-post-small size-colormag-featured-post-small wp-post-image"
                                                alt="{{ $article->title }}"
                                                title="{{ $article->title }}"
                                                sizes="(max-width: 130px) 100vw, 130px"/>
                                        </a>
                                    </figure>
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
                                @endif
                            @endforeach
                            </div>
                        </section>
                    @endforeach
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
        @include('home.base.secondary')
    </div>
@endsection

@section('js')
    <script>
        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getProducts(page);
        });
        function getProducts(page){
            $.ajax({
                url: 'ajax/article?page=' + page
            }).done(function(data){
                $('#paginationNew').html(data);
                $('html,body').animate({scrollTop: $("#paginationNew").offset().top},'slow');
                $("#paginationNew").hide();

                $("#paginationNew").show(500);
            });
        }
    </script>
@endsection
