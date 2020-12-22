@extends('index')
@section('title','Trang chu')
@section('content')
 <!-- Begin Slider With Banner Area -->

 <div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Slider Area -->
            @if (session('success'))
                <div class="alert alert-info">{{session('success')}}</div>
            @endif
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    @forelse ($banner as $item)
                    @if ($loop->index==0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="active"></li>
                    @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"></li>
                    @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @forelse ($banner as $item)
                    @if ($loop->index==0)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset("/images/$item->url")}}" alt="First slide">
                      </div>
                    @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset("/images/$item->url")}}" alt="Second slide">
                      </div>
                    @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <!-- Li Banner Area End Here -->
    </div>
</div>
 </div>
<!-- Slider With Banner Area End Here -->
<!-- Begin Product Area -->
<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                       <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phâm mới</span></a></li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Trending Product Area -->
<section class="product-area li-trending-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>Sản  phẩm nỗi bật</span>
                    </h2>
                    {{-- <ul class="nav li-product-menu li-trending-product-menu">
                       <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                       <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                       <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                    </ul> --}}
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Trending Product Area End Here -->
@endsection
