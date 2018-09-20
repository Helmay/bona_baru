<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 14/07/2018
 * Time: 09.08
 */
?>
@extends('layouts.master')
@include('include.header_page')
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
</body>
@section('content')

<section class="contact-area" id="contact">
    <div class="contact-form-area section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h3>Contact Us</h3>
                        <p>
                            Hubungi kami untuk pertanyaan seputar produk, layanan, maupun pengalaman Bona Nusantara sebagai Jasa Transportasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div id="map" style="width: 100%; height: 400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7695317480348!2d106.84509731427221!3d-6.161612995538992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5bbe93b4d5f%3A0x879adbd5431dd199!2sBona+Nusantara+Raya+Sakti.+PT!5e0!3m2!1sid!2sid!4v1531796263828" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="contact-image">
                        <div class="contact-address">
                            <h4>Address</h4>
                            <p><i class="fa fa-phone"></i> Phone: <a href="#"> +62 21 420 2660 (hunting)</a></p>
                            <p><i class="fa fa-phone"></i> Phone: <a href="#"> +62 21 425 5068 </a></p>
                            <p><i class="fa fa-print"></i> Fax: <a href="#"> +62 21 420 2948 </a></p>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:business@bonanusantara.com">business@bonanusantara.com<p class="tabs"></p></a>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:bona.nusantara@gmail.com"> bona.nusantara@gmail.com</p></a>
                            <p><i class="fa fa-globe"></i> www.bonanusantara.com</p></a>
                            <address><i class="fa fa-map-marker"></i>
                                Jl.Garuda No.80 F Jakarta 10620 - Indonesia
                            </address>
                        </div>
                        <div class="social-bookmark">
                            <h4>Follow Us </h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@stop