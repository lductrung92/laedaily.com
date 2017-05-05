@foreach($childs as $child)
        <header class="page-header">
            <h3 class="page-title" style="border-bottom-color: #206b4d">
                <span style="background-color: #206b4d">{{ $child->name }}</span>
            </h3>
        </header>
        <div class="article-container">
            @foreach($child->articles as $article)
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
        </div>
@endforeach



