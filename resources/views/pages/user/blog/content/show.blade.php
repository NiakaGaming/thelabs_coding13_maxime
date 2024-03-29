<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{ asset('img/article/' . $article->img) }}" alt="">
                        <div class="post-date">
                            <h2>{{ $article->created_at->format('d') }}</h2>
                            <h3>{{ $article->created_at->format('M') }} {{ $article->created_at->format('y') }}
                            </h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{ $article->title }}</h2>
                        <div class="post-meta">
                            <a href="">
                                @forelse ($article->categorie as $categorie)
                                    @if (!$loop->last)
                                        {{ $categorie->label }},
                                    @else
                                        {{ $categorie->label }}
                                    @endif
                                @empty Pas de catégorie
                                @endforelse
                            </a>
                            <a href="">
                                @forelse ($article->tag as $tag)
                                    @if (!$loop->last)
                                        {{ $tag->label }},
                                    @else
                                        {{ $tag->label }}
                                    @endif
                                @empty Pas de tag
                                @endforelse
                            </a>
                            <div class="d-none">{{ $a = 0 }}</div>
                            @foreach ($comments as $comment)
                                @if ($comment->article_id == $article->id)
                                    <div class="d-none"> {{ $a++ }}</div>
                                @endif
                            @endforeach
                            <a href="">{{ $a }} Comments</a>
                        </div>
                        <p>{{ $article->text }}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{ asset('img/avatar/' . $article->user->profil->img) }}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{ $article->user->last_name }} {{ $article->user->first_name }}, <span>Author</span>
                            </h2>
                            <p>{{ $article->user->profil->description }}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <?php $a = 0; ?>
                        @foreach ($comments as $comment)
                            @if ($comment->article_id == $article->id)
                                <?php $a++; ?>
                            @endif
                        @endforeach
                        <h2>Comments ({{ $a }})
                        </h2>
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                                @if ($comment->article_id == $article->id)
                                    <li>
                                        <div class="avatar">
                                            <img src="{{ asset('img/avatar/' . $comment->user->profil->img) }}" alt="">
                                        </div>
                                        <div class="commetn-text">
                                            <h3>{{ $comment->user->last_name }} {{ $comment->user->first_name }} |
                                                {{ $comment->created_at->format('d') }}
                                                {{ $comment->created_at->format('M') }},
                                                {{ $comment->created_at->format('y') }} | Reply
                                            </h3>
                                            <p>{{ $comment->message }}</p>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="{{ Auth::check() ? "/comment/$article->id" : '/login' }}"
                                method="{{ Auth::check() ? 'POST' : 'GET' }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input {{ Auth::check() ? 'disabled' : '' }} type="text" name="name"
                                            placeholder="{{ Auth::check() ? Auth::user()->last_name . ' ' . Auth::user()->first_name : 'Name' }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input {{ Auth::check() ? 'disabled' : '' }} type="text" name="email"
                                            placeholder="{{ Auth::check() ? Auth::user()->email : 'Email' }}">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="img/instagram/1.jpg" alt=""></li>
                        <li><img src="img/instagram/2.jpg" alt=""></li>
                        <li><img src="img/instagram/3.jpg" alt=""></li>
                        <li><img src="img/instagram/4.jpg" alt=""></li>
                        <li><img src="img/instagram/5.jpg" alt=""></li>
                        <li><img src="img/instagram/6.jpg" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                            metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                            turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
