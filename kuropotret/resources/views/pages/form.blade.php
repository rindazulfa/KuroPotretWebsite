@extends('layouts.app')
@section('content')
<!-- ini form -->
<section class="pricing_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('pricing.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Isi Data Acara</h2>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Paket</label>
                                <div class="form-select" id="default-select">
                                    <select name="paket" class="form-control">
                                        @foreach($packages as $key)
                                        <option value="{{$key->id}}">{{$key->name_pack}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" required name="tanggal" id="date" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Your Date'" placeholder='Select Your Date'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Paket">Lokasi</label>
                                <div class="form-select" id="default-select">
                                    <select name="lokasi"  id="lokasi" class="form-control">
                                        @foreach($details as $key)
                                        <option value="{{$key->id}}">{{$key->location}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="Tanggal">Biaya Transportasi</label>
                                <input type="text" class="form-control" readonly name="biaya" id="biaya" value="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Desk">Deskripsi</label>
                                <textarea class="single-textarea" name="deskripsi" required id="description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Description'" placeholder='Enter The Description'></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Tanggal">DP</label>
                                <input type="number" class="form-control" required name="dp" id="dp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button-contactForm btn_2">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        $('#lokasi').on('change',function(){
            var lokasi = $(this).val();
            $.ajax({
                url:'/getprice/'+ lokasi,
                method:'get',
                success: function(data){
                    $('#biaya').val(data.price_transportation);
                }
            })
        })
    }) 
</script>

@endpush