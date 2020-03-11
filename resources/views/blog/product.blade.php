@extends('blog.layout')

@section('title','News')

@section('body')
    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
                    <h2>Products</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
            </div>
            
            <div class="row probootstrap-gutter60">
                @foreach($products as $product)
                <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeInLeft">
                    <div class="service">
                        <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-thumbnail" src="https://www.ciputranews.com/wp-content/uploads/2020/02/tools-social-media-management.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{{substr($product->lead,0,65) . '...'}}</p>
                            <a href="{{url('detail-product/'.$product->alias)}}" class="btn btn-primary">Detail Product</a>
                        </div>
                        </div> 
                    </div>  
                </div>
                @endforeach
            </div>
        </section>
@endsection