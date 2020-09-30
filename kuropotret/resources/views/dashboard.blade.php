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
                        <a  class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_2.png')">
                            
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_3.png')">
                            
                        </a>
                        <a  class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('img/gallery/gallery_item_4.png')">
                           
                        </a>
                        <a  class="img-gal width-1 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_5.png')">
                           
                        </a>
                        <a  class="img-gal filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_6.png')">
                            
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
                        
                        <h4>Pra-Nikah</h4>
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
                        
                        <h4>Pernikahan</h4>
                        <p>upacara pengikatan janji nikah yang dirayakan atau dilaksanakan oleh dua orang dengan maksud 
                            meresmikan ikatan perkawinan secara norma agama, norma hukum, dan norma sosial.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        
                        <h4>Musik Video</h4>
                        <p>Video musik adalah film pendek yang memadukan lagu dengan citra, dan diproduksi untuk tujuan promosi atau artistik .  Video musik modern terutama dibuat dan digunakan sebagai perangkat pemasaran
                             yang dimaksudkan untuk mempromosikan penjualan rekaman musik . Ada juga kasus di mana lagu digunakan dalam kampanye
                             pemasaran terkait yang memungkinkannya menjadi lebih dari sekadar lagu. Pengikat dan merchandising dapat digunakan untuk mainan atau untuk makanan atau produk lainnya.</p>
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
   
    <!--::pricing part end::-->

    <!--::blog part start::-->
    <section class="catagory_post padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section_tittle">
                        
                        <h2>Latest Project</h2>
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