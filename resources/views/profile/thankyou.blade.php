@extends('front.master')
@section('content')
 <style>
    table td { padding:10px
    }</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li></li>
                <li class="active"></li>
<h3><span style='color:green'>{{ucwords(Auth::user()->name)}}</span> We got your Order! wanna buy more product? Click here <button class="btn btn-primary"> <a href="{{url('/shop')}}">See more Products</a></button></h3>
            </ol>
        </div><!--/breadcrums-->

        <div class="row">
           
        </div>



    </div>
</section>


@endsection