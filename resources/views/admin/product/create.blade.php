

<div class="container-fluid">

<div class="row">
    <nav class="col-sm 3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#"> Overview <span class="sr-only">
                (current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Analytics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Exports</a>
            </li>
        </ul>
        
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">nav item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">nav item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> nav item</a>
            </li>
        </ul>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">nav item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">nav item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> nav item</a>
            </li>
        </ul>
    </nav>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        
        <h1>Dashboard</h1>
         <div class="col-md-6">
            <h1>BMW</h1>
        <h1>Add New </h1>

        <div class="panel-body">
        

        {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

          <div class="form-group">
                {{ Form::label('Proname', 'Name') }}
                {{ Form::text('pro_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>


          
            <div class="form-group">
                {{ Form::label('Code', 'Code') }}
                {{ Form::text('pro_code', null, array('class' => 'form-control')) }}
            </div>

       
                {{ Form::label('price', 'Price') }}
                {{ Form::text('pro_price', null, array('class' => 'form-control')) }}
            </div>


             <div class="form-group">
                {{ Form::label('Description', 'Description') }}
                {{ Form::text('pro_info', null, array('class' => 'form-control')) }}
            </div>

          
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             <div class="form-group">
                {{ Form::label('Sale Price', 'Sale Price') }}
                {{ Form::text('spl_price', null, array('class' => 'form-control')) }}
            </div>
             
            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
             
   {{!! Form::close() !!}}
       </div>
</div>
@extends('admin.master')

@section('content') 

@endsection
