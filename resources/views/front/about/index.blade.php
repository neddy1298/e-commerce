@extends('front.layouts.app',['page'=>'About'])

@section('content')
<div class="site-blocks-cover inner-page" data-aos="fade">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 text-left">
                <div class="featured-hero-product w-100 text-left">
                    <h1 class="mb-2">About</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint autem neque ad voluptas quia
                        quidem odio sed officia.</p>
                </div>
            </div>
            <div class="col-lg-7 align-self-end text-center text-lg-right">
                <img src="{{ asset('front') }}/images/model_woman_1.png" alt="Image" class="img-fluid img-1">
            </div>

        </div>
    </div>

</div>

<div class="custom-border-bottom py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">About</strong></div>
        </div>
    </div>
</div>

<div class="site-section custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="block-16">
                    <figure>
                        <img src="{{ asset('front') }}/images/new/hero_2.jpg" alt="Image placeholder"
                            class="img-fluid rounded">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                                class="icon-play"></span></a>

                    </figure>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">


                <div class="site-section-heading pt-3 mb-4">
                    <h2 class="text-black">How We Started</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo
                    exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi
                    hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum
                    quas.</p>
                <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in,
                    quibusdam cumque recusandae, laudantium minima repellendus.</p>

            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2>Free Shipping</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan tincidunt fringilla.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2"></span>
                </div>
                <div class="text">
                    <h2>Free Returns</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan tincidunt fringilla.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help"></span>
                </div>
                <div class="text">
                    <h2>Customer Support</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan tincidunt fringilla.</p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="site-section custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>The Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-5">

                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{ asset('front') }}/images/person_1.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                            <p class="block-38-subheading">CEO/Co-Founder</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{ asset('front') }}/images/person_2.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Jennifer Greive</h3>
                            <p class="block-38-subheading">Co-Founder</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{ asset('front') }}/images/person_2.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Patrick Marx</h3>
                            <p class="block-38-subheading">Marketing</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{ asset('front') }}/images/person_1.jpg" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Mike Coolbert</h3>
                            <p class="block-38-subheading">Sales Manager</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
