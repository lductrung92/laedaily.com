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