<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 12/07/2018
 * Time: 16.17
 */
?>
@extends('layouts.master')

@include('include.header')

@section('section_about')

    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-left-content-area wow fadeIn">
                        <img src="{{ asset('carries/img/about/1x.JPG') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>PT Bona Nusantara Raya Sakti</h2>
                            <p>
                                PT.BONA NUSANTARA RAYA SAKTI adalah perusahaan yang bergerak dibidang jasa (ekspedisi) untuk antar kota ataupun antar pulau melalui jalur darat maupun laut.
                            </p>
                            <a href="{{ route('about') }}">read more <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('section_service')
   <section class="blog-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Ruang Lingkup Bisnis Kami</h2>
                        <p>Jasa pelayanan pengiriman yang kami berikan </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src={{ asset('carries/img/blog/blog_3.jpg')}} alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="">Cargo</a></h3>
                            <p>Metode pengiriman melalui darat/laut dalam jumlah besar ataupun kecil baik untuk pekerjaan proyek, perorangan, ataupun perusahaan..</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src={{ asset('carries/img/instafeed/12.jpg') }} alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="">Trucking</a></h3>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p>Metode pengiriman melalui darat/truk dengan tujuan pengiriman domestik baik untuk pekerjaan proyek, perorangan, ataupun perusahaan..</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src={{ asset('carries/img/blog/blog_1.jpg')  }} alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="">Shipping Line</a></h3>
                            <p>Metode pengiriman dalam jumlah/volume besar/cargo/container dengan tujuan antar pulau keseluruh wilayah indonesia..</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop