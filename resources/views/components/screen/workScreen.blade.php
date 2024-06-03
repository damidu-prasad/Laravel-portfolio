@extends('components.home.mainLayout')
@section('content')
    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation  header-normal ">
        <div class="entry-header p-relative over-hidden">

            <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title container">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="hero_title">
                                <h1 class="title title-org" data-dsn-ajax="title">My Works</h1>
                            </div>
                            <p class="subtitle-meta metas p-relative mt-10">Projects</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
           data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
            <div class="text">SCROLL</div>
        </a>
    </header>
    <!-- ========== End Header Normal ========== -->

    <div id="page_wrapper" class="wrapper">
        <!-- ========== Stories ========== -->
        <div class="root-blog container section-margin  dsn-blog">
            <article class="blog-item p-relative pt-50 pb-50 border-bottom">
                <div class="blog-item-inner p-relative">
                    <div class="left-box">
                        <a data-dsn-text="Here Is The Neel ICT" href="{{route('work.neel')}}" class="effect-ajax word-wrap" rel="bookmark">
                            <h4 class="title-block">Neel Ict - LMS</h4>
                        </a>
                        <div class="link mt-15">
                            <span class="font-caps heading-color"> September 10, 2023 </span>
                        </div>
                    </div>
                    <div class="right-box">
                        <p class="max-w570">
                            This is a LMS with Student and Teacher which can manage their classes (online and physical)
                            , Payments and Assessments for G.C.E AL students.
                        </p>
                        <div class="metas has-separates fz-14 blog-category mt-5">
                            <span class="mt-10">Learning Management System</span>
                        </div>
                    </div>
                </div>
            </article>

            <div class="type-p-nav">
                <div class="dsn-pagination  p-relative d-flex align-items-center">
                    <span aria-current="page" class="page-numbers current">
                        <span class="dsn-numbers dsn-heading-title title-tag">
                            <span class="number">1</span>
                        </span>
                    </span>
                    <a class="page-numbers" href="#0">
                        <span class="dsn-numbers dsn-heading-title title-tag">
                            <span class="number">2</span>
                        </span>
                    </a>
                    <a class="next page-numbers" href="#0">
                        <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                             fill="#fff">
                            <path
                                d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z"></path>
                        </svg>
                        <span class="sm-title-block dsn-heading-title ">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- ========== End Stories ========== -->

    @include('components.layout.footer')
@endsection
