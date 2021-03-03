@extends('front.master')
@section('content')
<main role="main">
  <section class="jumbotron text-center hero-bkg-animated">
    <div class="container">
      <h1 class="jumbotron-heading" style="font-family: 'Fira Sans', sans-serif;">Chợ Xấu</h1>
      <p class="lead text-muted">In the Ugly Market, you can sell everything, buy anything</p>
      
      <p>
        

        <a href="{{url('/shop')}}"><button class="glow-on-hover" type="button">Let's buy something</button></a>
        <br>
        <br>
        
        

        


        <a href="{{url('/contact')}}" class="btn1">First time? Read instruction here</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
  <div class="container">

          <div class="row">
          <?php  $cats = DB::table('products')->get(); ?>
            @forelse($cats as $product)
          <div class="card" style="width:30rem height: 20rem">
            <img src="{{url('images',$product->image)}}" class="card-img-top">
            
          <div class="card-body">
          <p class="card-text">{{$product->pro_name}}</p>
          <div class="pricetext">
            <del>${{$product->pro_price}}</del>
            <span class="price text-muted float-right">${{$product->spl_price}}</span>
            </div>
            <button class="btn btn-primary btn-sm">
            <a href="{{url('/product_details')}}/<?php echo $product->id; ?>" class="">View Product</a>
          </button>
            
            <button class="btn btn-primary btn-sm float-right">
            <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="">Add ToCart<i class="fa fa-shopping-cart"></i></a>
            </button>
            </div>
          </div>
          @empty
            <h3>No Products</h3>
            @endforelse
            
          </div>

</div>
    </div>
  </div> 

</main>

@endsection