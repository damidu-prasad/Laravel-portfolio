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
                                <h1 class="title title-org" data-dsn-ajax="title">The Page You Looking For Not Available.</h1>
                            </div>
                            <p class="subtitle-meta metas p-relative mt-10">404</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('components.layout.footer')
@endsection
