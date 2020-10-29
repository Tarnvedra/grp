@extends('welcome')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
               <div class="carousel-inner">
                     <div class="carousel-item active">
                           <img class="first-slide img-fluid" src="{{ asset('images/gr9.png') }}" alt="First slide">
                   <div class="container">
                      <div class="carousel-caption text-left">
                          <h1 class="desktop">Gareth Reed  -<span></span> Photographer</h1>
                         <p class="desktop">"I am an image engineer, I build images that evoke, arouse and inspire others through my inquisitive practise in playing with light."</p>

                      </div>
                 </div>
              </div>
               <div class="carousel-item">
                     <img class="second-slide img-fluid" src="{{ asset('images/gr8.png') }}" alt="Second slide">
                    <div class="container">
                <div class="carousel-caption">
                    <h1 class="desktop">Gareth Reed  -<span></span> Photographer</h1>
                      <p class="desktop">"My strong passion for people and the portrait genre drives me to achieve my best possible image every time and I enjoy every second of it!"</p>
               </div>
              </div>
            </div>
        <div class="carousel-item">
          <img class="third-slide img-fluid" src="{{ asset('images/com31gr.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <!-- added inline style due to image colouring -->
              <h1 class="desktop" style="color:black;"> Gareth Reed  -<span></span> Photographer</h1>
              <p class="desktop" style="color:black;">"I build images that inspire others through my inquisitive practise in playing with light."</p>
           </div>
          </div>
        </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing pt-4">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ asset('images/gr12.png') }}" alt="Generic placeholder image" width="200" height="200">
         <!-- <h2>About</h2> -->
          <p class="pt-2">I am a published portrait photographer who has always been drawn to people.</p>
         <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>  -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ asset('images/gr13.png') }}" alt="Generic placeholder image" width="200" height="200">
        <!--  <h2>Heading</h2> -->
          <p class="pt-2">My photographic career to date has mainly been people intensive, working with many different people from many different backgrounds.</p>
         <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ asset('images/life3gr-tbn.jpg') }}" alt="Generic placeholder image" width="200" height="200">
          <!-- <h2>Heading</h2> -->
          <p class="pt-2">Photography has taken me on journeys to London, Paris and New York</p>
          <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> <span class="text-muted"></span></h2>
          <p class="lead">I am now forging a career as a hard working professional portrait photographer whilst directing a motivated and hardworking people-focused brand that reflects high quality imagery and trust with a personal touch within commercial photography.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/gr4.png') }}" data-src="holder.js/500x500/aut" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"><span class="text-muted"></span></h2>
          <p class="lead">My photographic career to date has mainly been people intensive, working with many different people from many different backgrounds. I have worked on a national advertising campaign providing promotional images for a barber shop product supplier.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/gr5.png') }}" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

     <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted"></span></h2>
          <p class="lead"><i>“I am an image engineer, I build images that evoke, arouse and inspire others through my inquisitive practise in playing with light. My strong passion for people and the portrait genre drives me to achieve my best possible image every time and I enjoy every second of it!”</i>

          <strong> - Gareth Reed </strong></p>
          <a class="btn btn-success" href="mailto:info@garethreed.com" target="_blank"><i class="fas fa-2x fa-id-card-alt"></i> Work With Me</a>
          <a class="btn btn-info" href="https://goo.gl/maps/u7DTH7Eg5sLpNRMf6" target="_blank" ><i class="fas fa-2x fa-map-marker-alt"></i> Map to Studio</a>
        </div>
        <div class="col-md-5 pb-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/gr6.png') }}" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>

      </div>



      <!-- /END THE FEATURETTES -->
</div>


@endsection
