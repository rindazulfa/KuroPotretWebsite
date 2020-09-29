@extends('layouts.app')
@section('content')

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        <p>recent project</p>
                        <h2>Check latest work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li class="active" data-filter="all">All photos</li>
                            <li data-filter="1">Resespsi</li>
                            <li data-filter="2">Akad</li>
                            <li data-filter="3">Pre-Wedding</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">
                        <a class="img-gal filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_1.jpg')">
                        </a>
                        <a href="portfolio_details.html" class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_2.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="img-gal width-1 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="img-gal filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->

    <!--::our_service part start::-->
    <section class="our_service padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>our service</p>
                        <h2>what we offer</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center filtr-container">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        <span class="flaticon-love-and-romance"></span>
                        <h4>wedding photography</h4>
                        <p>World the end of summer the sweltering heat makes human
                            sweat in the night and man plants and trees wilt even</p>
                    </div>
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/single_offer_img_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/single_offer_img_1.png" alt="">
                    </div>
                    <div class="single_offer_text text-center nature">
                        <span class="flaticon-leaf"></span>
                        <h4>Nature photography</h4>
                        <p>that the monsoon clouds are soon coming, there is a
                            strange silence in the ears, the sky gets darker and
                            darker, the flash of lightning illuminates the dark
                            skies all time needs band the sound of thunder fills the heart with fear.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        <span class="flaticon-love-and-romance"></span>
                        <h4>wedding photography</h4>
                        <p>World the end of summer the sweltering heat makes human
                            sweat in the night and man plants and trees wilt even</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/single_offer_img_1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::pricing part start::-->
    <section class="pricing_part section_padding home_page_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Price table</p>
                        <h2>pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="img/icon/feature_icon_1.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="img/icon/feature_icon_2.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="img/icon/feature_icon_3.svg" alt="">
                            <p>Standard</p>
                        </div>
                        <div class="pricing_content">
                            <h3>$50.00 <span>/ mo</span></h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#" class="btn_2">book Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::pricing part end::-->

    <!--::blog part start::-->
    <section class="catagory_post padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section_tittle">
                        <p>our blog</p>
                        <h2>Latest story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="img/blog/blog_1.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5>March 30 , 2019</h5>
                                <h3>Mad whales gathering open can't</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="img/blog/blog_2.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5>March 30 , 2019</h5>
                            <a>
                                <h3>Creepeth grass brought over man</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="img/blog/blog_3.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5>March 30 , 2019</h5>
                            <a>
                                <h3>Mad whales gathering open Evening</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->
    @endsection