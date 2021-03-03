<!-- @extends('front.master')

@section('content')
<style>
    table td { padding:10px
}</style>

<br>
<br>
<br>
<br>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{url('/profile')}}">Profile</a></li>
                <li class="active">My Address</li>
            </ol>
        </div><!--/breadcrums-->
        @if(session('msg'))
        <div class="alert alert-info">{{session('msg')}}</div>

        @endif



        <div class="row">

            @include('profile.menu')
            <div class="col-md-8">

                
                
                <h3><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, Your Address</h3>

                
                <div class="container" >

                {!! Form::open(['url' => 'Address',  'method' => 'post']) !!}
                    <input type="text" name="fullname">
                    <input type="submit" value="Update" class="btn btn-primary">

                    {!! Form::close() !!}
                </div>
            </div>

        </div>


    </div>
</section>






@endsection -->