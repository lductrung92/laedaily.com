<div class="front-page-top-section clearfix">

    <div class="widget_slider_area">
        <section id="colormag_featured_posts_slider_widget-2" class="widget widget_featured_slider widget_featured_meta clearfix">
            <div class="widget_featured_slider_inner_wrap clearfix">
                <div id="category_slider_colormag_featured_posts_slider_widget-2" class="widget_slider_area_rotate" data-mode="horizontal" data-speed="1500" data-pause="5000" data-auto="true">
                    @foreach($technologies as $technology)
                        <div class="single-slide">
                        <figure class="slider-featured-image">
                            <a href="{{ $technology->link_custom }}.html" title="{{ $technology->title }}">
                                <img width="800" height="445" src="upload/images/articles/{{ $technology->image }}"
                                   class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image"
                                   alt="{{ $technology->title }}"
                                   title="{{ $technology->title }}"
                                   sizes="(max-width: 800px) 100vw, 800px"/>
                            </a>
                        </figure>
                        <div class="slide-content">
                            <h3 class="entry-title">
                                <a href="{{ $technology->link_custom }}.html" title="{{ $technology->title }}">
                                    {{ $technology->title }}
                                </a>
                            </h3>
                            <div class="below-entry-meta">
                                <span class="posted-on">
                                    <a rel="bookmark">
                                        <i class="fa fa-calendar-o"></i>
                                        <time class="entry-date published" datetime="{{ $technology->updated_at }}">{{ date('d-m-Y', strtotime($technology->updated_at)) }}</time>
                                    </a>
                                </span>
                                <span class="byline">
                                    <span class="author vcard">
                                        <i class="fa fa-pencil"></i>
                                        <a class="url fn n" href="{{ $technology->source }}">{{ preg_replace('#^https?://#', '', $technology->source) }}</a>
                                    </span>
                                </span>
                                <span class="comments">
                                    <i class="fa fa-comment"></i>
                                    <a href="{{ $technology->link_custom }}.html">0</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <div class="widget_beside_slider">
        <section id="colormag_highlighted_posts_widget-2"
                 class="widget widget_highlighted_posts widget_featured_meta clearfix">
            <div class="widget_highlighted_post_area">
                @foreach($tips as $tip)
                    <div class="single-article">
                    <figure class="highlights-featured-image">
                        <a href="{{ $tip->link_custom }}.html" title="{{ $tip->title }}">
                            <img width="392" height="272" src="upload/images/medium/{{ $tip->image }}"
                                  class="attachment-colormag-highlighted-post size-colormag-highlighted-post wp-post-image"
                                  alt="{{ $tip->title }}"
                                  title="{{ $tip->title }}"
                                  sizes="(max-width: 392px) 100vw, 392px"/>
                        </a>
                    </figure>
                    <div class="article-content">
                        <h3 class="entry-title">
                            <a href="{{ $tip->link_custom }}.html" title="{{ $tip->title }}">{{ $tip->title }}</a>
                        </h3>
                        <div class="below-entry-meta">
                            <span class="posted-on">
                                    <a rel="bookmark">
                                        <i class="fa fa-calendar-o"></i>
                                        <time class="entry-date published" datetime="{{ $tip->updated_at }}">{{ date('d-m-Y', strtotime($tip->updated_at)) }}</time>
                                    </a>
                                </span>
                            <span class="byline">
                                    <span class="author vcard">
                                        <i class="fa fa-pencil"></i>
                                        <a class="url fn n" href="{{ $tip->source }}">{{ preg_replace('#^https?://#', '', $tip->source) }}</a>
                                    </span>
                                </span>
                            <span class="comments">
                                    <i class="fa fa-comment"></i>
                                    <a href="{{ $tip->link_custom }}.html">0</a>
                                </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

</div>