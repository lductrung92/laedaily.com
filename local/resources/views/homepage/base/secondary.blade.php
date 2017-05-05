<div id="secondary">

    <aside id="colormag_300x250_advertisement_widget-2"
           class="widget widget_300x250_advertisement clearfix">
        <div class="advertisement_300x250">
            <div class="advertisement-content">
                <a href="#" class="single_ad_300x250" target="_blank" rel="nofollow">
                    <img src="http://img.izismile.com/img/img5/20121106/1000/daily_gifdump_250_11.gif"
                            width="300" height="250"> </a></div>
        </div>
    </aside>

    @foreach($lol_categories as $category)
        <aside id="colormag_featured_posts_vertical_widget-2"
               class="widget widget_featured_posts widget_featured_posts_vertical widget_featured_meta clearfix">
            <h3 class="widget-title" style="border-bottom-color:#fed170;">
                <span style="background-color:#fed170;">Liên minh</span>
                <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
            </h3>
            <?php
            $i = 1;
            ?>
            @foreach($lol_articles as $article)
                @if($i != null)
                    <div class="first-post">
                        <div class="single-article clearfix">
                            <figure>
                                <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                    <img width="390" height="205"
                                         src="upload/images/medium/{{ $article->image }}"
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
                                <div class="entry-content"><p>{{ $article->description }}</p></div>
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
        </aside>
    @endforeach

    @foreach($video_categories as $category)
        <aside id="colormag_featured_posts_vertical_widget-2"
               class="widget widget_featured_posts widget_featured_posts_vertical widget_featured_meta clearfix">
            <h3 class="widget-title" style="border-bottom-color:#f1009e;">
                <span style="background-color:#f1009e;">Video</span>
                <a href="{{ $category->link_custom }}.html" class="view-all-link">Xem tất cả</a>
            </h3>
            <?php
            $i = 1;
            ?>
            @foreach($video_articles as $article)
                @if($i != null)
                    <div class="first-post">
                        <div class="single-article clearfix">
                            <figure>
                                <a href="{{ $article->link_custom }}.html" title="{{ $article->title }}">
                                    <img width="390" height="205"
                                         src="upload/images/medium/{{ $article->image }}"
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
                                <div class="entry-content"><p>{{ $article->description }}</p></div>
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
        </aside>
    @endforeach

    <aside id="colormag_random_post_widget-2"
           class="widget widget_random_post_colormag widget_featured_posts clearfix">
        <div class="random-posts-widget">
            <h3 class="widget-title"><span>Bài viết ngẫu nhiên</span></h3>
            <div class="random_posts_widget_inner_wrap">
                @foreach($random_articles as $article)
                    <div class="single-article clearfix">
                        <figure class="random-images">
                            <a href="{{ $article->link_custom }}.html"
                               title="{{ $article->title }}">
                                <img width="130" height="90" src="upload/images/small/{{ $article->image }}"
                                     class="attachment-colormag-featured-post-small size-colormag-featured-post-small wp-post-image"
                                     alt="{{ $article->title }}"
                                     title="{{ $article->title }}"
                                     sizes="(max-width: 130px) 100vw, 130px"/></a>
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
                @endforeach
            </div>
        </div>
    </aside>
</div>