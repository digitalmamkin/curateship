<section class="feature-bottom container max-width-adaptive-lg margin-top-md margin-bottom-md">
    <div class="grid gap-md">
      <div class="col-9@md featured-post margin-bottom-xl">

        @if($featured_post)
            @if($featured_post->thumbnail)
                <a href="
                    {{
                        route(
                            'pages.post',
                            [
                                'locale' => config('app.locale'),
                                'slug'   => $featured_post->slug
                            ]
                        )
                    }}
                " class="featured__img-wrapper feautured__img-wrapper-cropped">
                    <img src="{{ $featured_post->showThumbnail('medium') }}" alt="Image of {{ $featured_post->title }}">
                </a>
            @else
                <span class="feautured__img-wrapper-cropped bg-black bg-opacity-50%"></span>
            @endif
            <h1 class="featured__headline-main line-height-xxxl feature-v12__offset-item text-left padding-left-sm">
                <a href="
                    {{
                        route(
                            'pages.post',
                            [
                                'locale' => config('app.locale'),
                                'slug'   => $featured_post->slug
                            ]
                        )
                    }}
                ">{{ $featured_post->title }}</a>
            </h1>
        @endif
      </div>

      <div class="col-6@md">
        <div class="stories">
            @foreach($featured_list as $key => $post)
                <li class="stories__story">
                    @if($post->thumbnail)
                        <a href="
                            {{
                                route(
                                    'pages.post',
                                    [
                                        'locale' => config('app.locale'),
                                        'slug'   => $post->slug
                                    ]
                                )
                            }}
                        " class="stories__img-wrapper">
                            <figure>
                                <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">
                            </figure>
                        </a>
                    @else
                        <span class="stories__img-wrapper bg-black bg-opacity-50%"></span>
                    @endif

                    <div class="featured__headline line-height-xl v-space-sm text-sm">
                        <h4 class="padding-bottom-md">
                            <a href="
                                {{
                                    route(
                                        'pages.post',
                                        [
                                            'locale' => config('app.locale'),
                                            'slug'   => $post->slug
                                        ]
                                    )
                                }}
                            ">
                                {{ $post->title }}
                            </a>
                        </h4>
                        <div class="author author--minimal padding-bottom-xs">
                            @if($post->user->avatar)
                                <a href="{{ route('pages.profile.user', $post->user->username) }}" class="author__img-wrapper">
                                    <img src="{{ $post->user->getAvatar() }}" alt="Author picture">
                                </a>
                            @else
                                <span class="author__img-wrapper"></span>
                            @endif
                            <div class="author__content">
                                <h4 class="stories__metadata">
                                    by
                                    <a href="{{ route('pages.profile.user', $post->user->username) }}" rel="author">
                                        {{ $post->user->name }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <p class="stories__metadata padding-bottom-xs">
                            <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                                {{ $post->created_at->format('F d, Y') }}
                            </time>
                            <span class="stories__separator" role="separator"></span>
                            @php
                                $tag_categories = Modules\Tag\Entities\TagCategory::all();
                                $posts_tags     = $post->postsTag;
                                $category_names = [];
                            @endphp
                            @foreach($tag_categories as $key => $tag_category)
                                @php
                                    $show_category = false;

                                    foreach($posts_tags as $post_tag){
                                        $tag = Modules\Tag\Entities\Tag::find($post_tag->tag_id);

                                        if($tag->tag_category_id === $tag_category->id){
                                            $show_category = true;
                                            break;
                                        }
                                    }

                                    if($show_category){
                                        array_push($category_names, $tag_category->name);
                                    }
                                @endphp

                            @endforeach

                            @foreach($category_names as $cn_key => $category_name)
                                <a href="{{ route('pages.tag-categories', $category_name) }}">{{ $category_name }}</a>
                                @if($cn_key < count($category_names) - 1)
                                    ,
                                @endif
                            @endforeach
                        </p>
                    </div>
                </li>
            @endforeach
        </div>

      </div>
    </div>
  </section>