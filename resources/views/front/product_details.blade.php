@extends('front.master')
@section('content')





details page 

<div style="width:20rem">
        <img src="{{url('images',$products->image)}}" alt="Card image cap">

<div>


</div>
</div>

<div class="product-information">
        <img src="" alt=""/>
        <div class="product-information">
            <img src="" class="" alt=""/>
            <h2><?php echo ucwords($products->pro_name);?></h2>
            <h4><?php echo ucwords($products->pro_info);?> </h4>
<a href="#"> Read More</a>
</div>
</div>
@endsection