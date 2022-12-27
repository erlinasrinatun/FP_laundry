@extends('landingpage.index')
@section('content')
<br><br><br><br><br>
<h1 align="center">About Us</h1>
</br></br></br></br>
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" style="width: 85%" src="{{ url('img/foto/about2.png')}}">
                    </div>
                    
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3 mb-4">
                            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                                <h2>SI Laundry</h2>
                                <p>Melayani Siap Antar Jemput Pakaian Anda</p>
                                <hr>
                            </div>
                            <p>SI Laundry merupakan jasa kebersihan spesialis untuk soft furniture menggunakan peralatan dengan 
                               teknologi terbaru yang membuat SI Laundry berbeda dengan jasa kebersihan biasa.</p>
                        </div>
                        <a class="btn text-white rounded-pill py-3 px-5 mt-2" href="" style="background-color: #6785FF">Read More</a>
                    </div>
                </div>
            </div>
        </div>
@endsection