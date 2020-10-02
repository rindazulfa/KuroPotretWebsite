@extends('layouts.app')
@section('content')
<section class="contact-section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Fill Your Photo Details</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">

                        <div class="col-12">
                        <div class="form-group">
                            <label for="Paket">Paket</label>
                            <div class="form-select" id="default-select">
                                <select class="form-control">
                                    <option value="Prewedding">Prewedding</option>
                                    <option value="Akad">Akad</option>
                                    <option value="Resepsi">Resepsi</option>
                                    <option value="Music Video">Music Video</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="Nama">Nama</label>
                            <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'" placeholder='Enter Your Name'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="Email">Email</label>
                            <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'" placeholder='Enter Email Address'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder='Enter Address'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="hp">Nomor Handphone</label>
                            <input class="form-control" name="hp" id="hp" type="hp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder='Enter Phone Number'>
                        </div>
                    </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button-contactForm btn_2">Send Message </button>
            </div>

            </form>
        </div>
    </div>
    </div>
</section>
@endsection