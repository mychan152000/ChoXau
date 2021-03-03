<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="{{url('/')}}" class="navbar-brand">Chợ Xấu</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="{{url('/shop')}}" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/contact')}}" class="nav-link">About</a>
          </li>

         <li class="nav-item">
            <a href="{{url('/shop')}}" style="background:red; color:#fff" class="nav-link">newArrival</a>
          </li>
          <?php if (Auth::guest()) { ?>
          <li class="nav-item">
            <a href="{{url('/login')}}" class="nav-link">Login</a>
          </li>
          <?php } ?>
          <?php if (Auth::check()) { ?>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown dropdown-slide dropdown-hover">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="{{url('/')}}/profile">Profile</a>
                              <a class="dropdown-item" href="{{url('/admin/product/create')}}">Sell your product</a>
                              <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <?php } ?>


                    
            

         

<!-- Start Of Dropdown of Cart Iems -->
          
                   
            
               
               



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-secondary badge-pill"><i class="fa fa-shopping-cart"></i>{{Cart::count()}}</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <div class="">
          <h4 class="d-flex justify-content-between align-items-center mb-3">

            <span class="badge badge-secondary badge-pill"><i class="fa fa-shopping-cart"></i>{{Cart::count()}}</span>
            <span class="text-muted">Total: ({{Cart::total()}})</span>
            
          </h4>

         
         
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            
          </h4>


          <ul class="list-group mb-3">
            <?php $cartItems = Cart::content();?>
                @foreach($cartItems as $cartItem)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="col-md-6">
              <div>

                
                <img  class="dropdownimage" src="{{url('images',$cartItem->options->img)}}"  class="img-responsive dropdownimage" style="width:50px" />
               

               
              </div>
            </div>



              <div class="col-md-6">
              <h6 class="my-0">Name: {{$cartItem->name}}</h6>
              <span class="text-muted">Price: {{$cartItem->price}}</span>
            </br>
              <small class="text-muted foat-right">Qty: {{$cartItem->qty}}</small>

            </div>
            </li>
             @endforeach


              <li class="list-group-item d-flex justify-content-between">

              <a class="btn btn-primary" href="{{url('/')}}/checkout">Check Out</a>


              <a class="btn btn-primary float-right" href="{{url('/cart')}}">View Cart</a>
              
            
            </li> 



          </ul>



         
           

             
            
          
        </div>

        </div>
           
          </li>


         <form action='{{('/search')}}' class="form-inline ml-auto" method="post">
      
         <div class="d-flex justify-content-between align-items-center">
        <input type="text" name="site_search" class="form-control mr-2" type="text" placeholder="Search">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control mr-2" placeholder="Search">

        <button class="btn btn-outline-success" type="submit">Search</button>

         </div>

        </form>

  
        </ul>

        <!-- Search Product -->

       
      </div>
    </div>
  </nav>
