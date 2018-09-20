<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 13/07/2018
 * Time: 21.21
 */
?>
@extends('layouts.master')
@include('include.header_page')
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Services</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
</body>
@section('content')

    <!--SERVICE AREA-->
    <section class="service-area">
        <div class="service-top-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md- col-lg-6 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h3>Pelayanan & Jasa Kami</h3>
                            <p style="text-align:justify">
                                PT.BONA NUSANTARA RAYA SAKTI memberikan layanan mulai dari <strong>Domestic Sea Freight (FCL & LCL),
                                    Land Transportation dan lain lain (Air, Sea & Land).
                                </strong>
                            </p>
                            <p style="text-align:justify">
                                Jaringan PT.BONA NUSANTARA RAYA SAKTI telah menjangkau seluruh wilayah Indonesia.
                            </p>
                            <p style="text-align:justify">
                                PT.BONA NUSANTARA RAYA SAKTI merupakan solusi jasa layanan kargo cepat, kargo murah, 
                                kargo aman dan berkualitas untuk jasa pengiriman barang anda diwilayah Indonesia.
                            </p>
                            <h3><strong>Layanan</strong></h3>
                            <p>
                                Saat ini kami telah melayani pengiriman barang di seluruh wilayah Indonesia mulai dari Sabang sampai dengan Merauke.
                            </p>
                            <ul>
                                <li><i class="fa fa-check"></i> Cargo handling service / door to door - door to port - door to ship</li>
                                <li><i class="fa fa-check"></i> jasa angkutan / trucking</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="service-catalouge-content-area wow fadeIn">
                            <div class="service-catalouge-bg"></div>
                            <div class="row">
                                <img src="{{ asset('carries/img/service/peta_indonesia.jpg') }}" alt="" sizes="100%" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </section>
    <!--SERVICE AREA END-->
@stop
