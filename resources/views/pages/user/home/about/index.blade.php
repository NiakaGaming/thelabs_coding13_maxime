<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($services_quick as $service)
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{ $service->icon->class }}"></i>
                            </div>
                            <h2>{{ $service->title }}</h2>
                            <p>{{ $service->text }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!! $titles[1]->title !!}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{ $about->text_1 }}</p>
                </div>
                <div class="col-md-6">
                    <p>{{ $about->text_2 }}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="#contact-form"
                    class="site-btn  {{ $about->hide_show == 0 ? 'd-none' : '' }}">{{ $about->btn }}</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img class="w-100" src="{{ asset('img/video/' . $video->img) }}" alt="">
                        <a href="{{ $video->link }}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->
