@extends('front.master')

@section('content')

<style>
 

</style>
<div class="contact-page">
      <!-- Breadcrumb -->
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.html" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase">About</li>
        </ol>
      </div>
      <!-- Contact page-->
      <section class="contact p-t-small">
        <div class="container">
          <header class="mb-5">
            <h1 class="heading-line">About us</h1>
            <p class="lead text-muted">
            Our group has 3 members in total: Phuong My(1859034), Khanh Hung(1859019), Nhat Tan(1859043)
            </p>
          </header>
          <div class="row" id="hover07">
            <div class="col-md-4">
              
              <figure><img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/64239982_327556348178069_9192639063360798720_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=D--vuIb8VR8AX8iMACD&_nc_ht=scontent.fsgn5-1.fna&oh=a55b1153f46ca37fd77af0adcc0e789b&oe=5E935977" class="rounded img-fluid" alt="Cinque Terre"> </figure>
              <p>Tran Ngoc Phuong My </p>
            </div>
            
            <div class="col-md-4">
              
             <figure> <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/43476081_2235012720116868_583072274635030528_n.jpg?_nc_cat=105&_nc_sid=110474&_nc_ohc=ZdXgQH8X5fMAX_ZuhDW&_nc_ht=scontent.fsgn5-1.fna&oh=e160acff63f0a66ff7db8554f76636ee&oe=5EA5EDB1" class="rounded img-fluid" alt="Cinque Terre"> </figure>
              <p>Bui Nhat Tan</p>
            </div>
            
            <div class="col-md-4">
              
              <figure><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t1.0-9/88320759_2706829749549901_878262688239583232_n.jpg?_nc_cat=110&_nc_sid=85a577&_nc_ohc=9ByaQsr2Jp0AX-0qmTS&_nc_ht=scontent.fdad3-2.fna&oh=36217d7e82862e14b5bcb7d26944817f&oe=5E916653" class="rounded img-fluid" alt="Cinque Terre"> </figure>
              <p>Phan Bao Khanh Hung</p>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-051-placeholder-1"></div>
              </div>
              <h3>Address</h3>
              <p class="text-muted font-weight-light">University of Science<br>227 Nguyen Van Cu<br>Dong Lao<strong> aka VietNam</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-051-support"></div>
              </div>
              <h3>Call center</h3>
              <p class="text-muted font-weight-light">This number is toll free if calling from Dong Lao otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+123 456 789</strong></p>
            </div>
            <div class="col-md-4">
              <div class="contact-icon">
                <div class="icon icon-051-message"></div>
              </div>
              <h3>Electronic support</h3>
              <p class="text-muted font-weight-light">Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul class="list-style-none">
                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                <li><strong><a href="#">
                      Ticketio
                       - our ticketing support platform</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="container-fluid">
         
              <img src="https://i.ibb.co/V9Zf9hj/erd.png" alt="erd" border="0">
              <p>this is our ERD</p>
          <div class="container-fluid">
          <img src="https://i.ibb.co/K9Mh0ZR/uml.png" alt="uml" border="0" style="width: 600px height:600px">
          <p> This is our UML use case</p>
</div>    

          

</div>
        </div>


      </section>
      <div id="map">                                       </div>
      <section>
        <div class="container">
          <header class="mb-5">
            <h2 class="heading-line">Contact form</h2>
          </header>
          <div class="row">
            <div class="col-md-7">
              <form id="contact-form" method="post" action="contact.php" class="custom-form form">
                <div class="controls">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name">Your firstname *</label>
                        <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="surname">Your lastname *</label>
                        <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Your email *</label>
                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="message">Your message for us *</label>
                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                  </div>
                  <input type="submit" value="Send message" class="btn btn-primary">
                </div>
              </form>
            </div>
            <div class="col-md-5">
              <h2>Instruction of Cho Xau</h2>
              <p class="text-muted font-weight-light">This website was built with Laravel version 6.13.1, <i>please login first before you explore the website</i>  </p>
              <p class="text-muted font-weight-light"><b style="color:red"> [Notice] </b><b>Sell your product:</b> to create your product, please make sure to fill all the inputs.</p>
              <p class="text-muted font-weight-light">About Cho Xau: you can sell things, also buy another people's products, add to cart and checkout (please explore this yourself)</p>
              <p class="text-muted font-weight-light">There are some functions left undone because of the shortness of time and my weak skill :p, plz don't judge me</p>
              <div class="social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Search Panel-->
    <div class="search-overlay">
      <div class="search-inner d-flex justify-content-center align-items-center">
        <div class="search-close"><i class="icon-close"></i></div>
        <div class="container">
          <div class="form-holder">
            <form class="d-flex">
              <input type="search" placeholder="What are you looking for...">
              <button type="submit" class="search text-primary text-uppercase">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>



@endsection