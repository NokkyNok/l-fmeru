@extends('pages.base')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset ('assets/img/slide/slide-1.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">L&Fhome <span>Home of Lost</span></h2>
              <p class="animate__animated animate__fadeInUp">L&Fhome is the home of items Lost. Be up to Publish any lost items within Meru University</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start With Us</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ asset ('assets/img/slide/slide-2.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Look and Love</h2>
              <p class="animate__animated animate__fadeInUp">Feel Free to submit Found ID's, Luggage to Us</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Integrity connected Page</h2>
              <p class="animate__animated animate__fadeInUp">Our page Users are quaranteed safe retainment of Lost and Found items. Contact us anytime</p>
              
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= 
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
            </div>
          </div>
        </div>

      </div>
	  
    </section><!-- End Featured Services Section -->
	-->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Integrity center centered to receive receive document of Nchiru Based Resdidents. </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our Location and services are open to all</h3>
           
            <ul>
              <li><i class="icofont-check-circled"></i> Location: Nchiru center Opposite Nchiru market. Attached to Kainga shop</li>
              <li><i class="icofont-check-circled"></i> Staff: quantified personell of 10 people. 3 field people, 4 rececptionist, 3 admins</li>
              <li><i class="icofont-check-circled"></i> Services: Track lost document, Receive it, deliver it to the correspondent</li>
              <li><i class="icofont-check-circled"></i> Available: On monday, wednesday, and weekend days of every week</li>

            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Trust</h4>
            <p>We deliver to a specific correspondent bearing the document information</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Instant</h4>
            <p>Our receive and delivery options are instant and in time. Less than 12 hours of document delivery</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4> Authentication</h4>
            <p>Authentication to our system is neccesary to submit or receive a document</p>
          </div>

          

        </div>

      </div>
    </section><!-- End Why Us Section -->

 

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3></h3>
            <p> Submit to Us today Any posession af any lost School or National Identification. Trust us. We deliver </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="js-modal cta-btn align-middle" href="#modal1">Submit<i class="icon-upload"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Meet a team of established staff ready for a 24hour customer relation services. Meet in person, contact them or book an appointment with at your own time. Own L$FMeru.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            
              <h4>Roy Roy</h4>
              <span>Senior adminstrator</span>
              <p>
                Call Roy Via phone: +2547435278329 Email: Royjack@gmail.com: Whatsapp
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <h4>Kibet Enock</h4>
              <span>Co  - administrator</span>
              <p>
                Call enock via phone: 0718755446 Email: kibetenock@gmail.com : Whatsapp
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <h4>Ndethe Paul</h4>
              <span>Field collection supervisor</span>
              <p>
                Call via phone: +254767389920 Email: paulndethe@gmail.com Whatsapp
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Opposite Kainga Shop, Nchiru</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p> L&Fhomeadmin.gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1254 796 531 679</p>
              </div>

              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('contact.store')}}" method="POST" role="form" class="" enctype="multipart/form-data">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@guest
 <a href="#modal1" id="modals" class="js-modal">Claim item</a>
<div id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

@else

  <a href="#modal1" id="modals" class="js-modal">Claim item</a>
<div id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

          
          
<div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
  
  <form action="{{route('found.store')}}" class="found-form" method="POST" enctype="multipart/form-data">
  @csrf
  @if(count($errors))
  <div class="form-group">
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          </ul>
      </div>
  </div>
  @endif
  @include('flash-message')
  <h3 class="head">Document Information</h3>
    <div class="form-row">
    
      <div class="form-group col-md-6">
        <label for="name"><h5>Item found</h5> </label>
         
        <input  type="text" name="item" placeholder=""   class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Bearer's Name</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="bearer"  />
        <div class="validate"></div>
      </div>

      <div class="form-group col-md-6">
        <label for="name"><h5>Unique No(Reg, ID.Number, Passport No)</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="docNumber"  />
        <div class="validate"></div>
      </div>
     
     
      

      <div class="form-group col-md-6">
        <select name="doc_type" id="">
         
          @foreach($document_type as $type)
          <option value="{{$type->type}}">{{$type->type}}</option>
          @endforeach

        </select>

        
      </div>
     
    </div>
      
      
    
    <label for="formFileLg" class="form-label"><h5>Sample Upload</h5> </label>
    <input class="form-control form-control-lg" name="sample_image" id="formFileLg" type="file" />
    <div class="form-group">
      <label for="name"><h5>Additional information</h5> </label>
      <textarea class="form-control" name="short_description"></textarea>
      <div class="validate"></div>
    </div>
    <br><br><br>


    <h2>Dates and  Addresses</h2>
    <div class="form-row">
    
      <div class="form-group col-md-6">
        <label for="name"><h5>Location found</h5> </label>
        <input type="text" name="location" placeholder="" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Location Description</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="location_desc"  />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Date found</h5> </label>
        <input type="text" name="Received_date" placeholder="" class="form-control" id="name" />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Time found</h5> </label>
        <input type="text" name="Received_time"  placeholder="" class="form-control" id="name" />
        <div class="validate"></div>
      </div>
     
      

      
      
    </div>
    <br><br><br>






    <h3 class="head">Personal information</h3>
    <div class="form-row">
    
      <div class="form-group col-md-6">
        <label for="name"><h5>Email</h5> </label>
        <input type="email" name="Received_email" value="{{ Auth::user()->name }}" disabled="disabled"  class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Current Location</h5> </label>
        <input type="text" name="Received_location"  placeholder="" class="form-control" id="name" />
        <div class="validate"></div>
      </div>
      <div class="form-group col-md-6">
        <label for="name"><h5>Phone Number</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="phone"  />
        <div class="validate"></div>
      </div>
     
    </div>
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest




@guest
 <a href="#modal2" id="modals" class="js-modal">Claim item</a>
<div id="modal2" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

@else

  <a href="#modal2" id="modals" class="js-modal">Claim item</a>
<div id="modal2" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

          
          
<div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
  
  <form action="{{route('search')}}" class="found-form" method="GET" enctype="multipart/form-data">
  @csrf
  
  @include('flash-message')
  
    <h3 class="head">Search Document by Unique Id(Reg.No, ID.No)</h3>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="name"><h5>Number</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="search"  />
        <div class="validate"></div>
      </div>
     
    </div>
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest






<!-- Have lost an item? -->
@guest
 <a href="#modal3" id="modals" class="js-modal"></a>
<div id="modal3" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm"></button>
      <div class="row">

@else

  <a href="#modal3" id="modals" class="js-modal"></a>
<div id="modal3" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

          
          
<div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
  
<form action="{{route('lost.store')}}" class="found-form" method="POST" enctype="multipart/form-data">
  @csrf
  
  @include('flash-message')
  
    <h3 class="head">Lost an Document?(Place submission)</h3>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Doc_unique ID</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="doc"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
      <select name="category" id="">
         
         @foreach($document_type as $type)
         <option value="{{$type->type}}">{{$type->type}}</option>
         @endforeach

       </select>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Holder's Name</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="name"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Email Address</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="email"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Holder's Nationality</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="nationality"  />
        <div class="validate"></div>
      </div>
     
    </div>
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest
</section>
  </main><!-- End #main -->

  @endsection