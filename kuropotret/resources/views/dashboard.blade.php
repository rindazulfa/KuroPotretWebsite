@extends('layouts.app')
@section('content')

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        
                        <h2>Recent Project</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li class="active" data-filter="all">All photos</li>
                            <li data-filter="1">Pre-Wedding</li>
                            <li data-filter="2">Wedding</li>
                            <li data-filter="3">MV</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">
                        <a class="img-gal filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_1.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Pre-Wedding photography</p>
                                        <h4>Rodi & Ifa</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_2.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Wedding photography</p>
                                        <h4>Rizal & Santi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Pre-Wedding photography</p>
                                        <h4>Rizal & Santi</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Video Musik</p>
                                        <h4>Raihanah Voice</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Wedding photography</p>
                                        <h4>Robby & Dinah</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a  class="img-gal filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Video Musik</p>
                                        <h4>Raihanah Voice</h4>
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
  
                        <h2>Our Service</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center filtr-container">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        
                        <h4>Pre-Wedding</h4>
                        <p>pra nikah atau yang dikenal dengan istilah foto prewedding adalah sesi pemotretan yang dilakukan pasangan sebelum hari pernikahan tiba. 
                            Biasanya, hasil foto prewedding akan digunakan dalam undangan dan dipamerkan di tempat berlangsungnya pesta pernikahan.</p>
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
                        
                        <h4>Wedding</h4>
                        <p>upacara pengikatan janji nikah yang dirayakan atau dilaksanakan oleh dua orang dengan maksud 
                            meresmikan ikatan perkawinan secara norma agama, norma hukum, dan norma sosial.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding" style="padding: 30px;">
                        
                        <h4>Music Video</h4>
                        <p>Video musik adalah film pendek yang memadukan lagu dengan citra, dan diproduksi untuk tujuan promosi atau artistik .  Video musik modern terutama dibuat dan digunakan sebagai perangkat pemasaran
                             yang dimaksudkan untuk mempromosikan penjualan rekaman musik . Ada juga kasus di mana lagu digunakan dalam kampanye
                             pemasaran terkait yang memungkinkannya menjadi lebih dari sekadar lagu. Pengikat dan merchandising dapat digunakan untuk mainan atau untuk makanan atau produk lainnya.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="img/single_offer_img_3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::pricing part start::-->
   
    <!--::pricing part end::-->

    <!--::blog part start::-->
    <section class="catagory_post padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section_tittle">
                        
                        <h2>Lastest Project</h2>
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
                            <h5>9 Sept, 2020</h5>
                            <a href="https://www.youtube.com/watch?v=2lix7nRa4HY" target="_blank">
                                <h3>MV Cita-Citaku Hafidz Qur'an</h3>
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
                            <h5>14 Sept, 2020</h5>
                            <a href="https://www.youtube.com/watch?v=JDMbZ9vyssU" target="_blank">
                                <h3>MV Muhammad Ibni Abdillah</h3>
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
                            <h5>23 Sept, 2020</h5>
                            <a href="https://www.youtube.com/watch?v=PaNQYV_kH90" target="_blank">
                                <h3>MV Man Ana x Syaikhona</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->
    @endsection