@extends('welcome')

@section('content')


<div class="jumbotron bg-light">
    <div class="col-md-8">
        <h2 class="featurette-heading">Editorial/Lifestyle Portraits<span class="text-muted"></span></h2>
        <hr>
  </div>

  <div class="studiogallery">
    <div class="row justify-content-center">

       <div class="col-md-8">
           <div class="row pb-2">
               <a href="{{ asset('images/life1gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life1gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life2gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life2gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life3gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life3gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life4gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life4gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life5gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life5gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life6gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life6gr-tbn.jpg') }}" class="img-fluid"></a>
           </div>
           <div class="row mb-2">
               <a href="{{ asset('images/life7gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life7gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life8gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life8gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life9gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life9gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life10gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life10gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life11gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life11gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life12gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life12gr-tbn.jpg') }}" class="img-fluid"></a>
           </div>
       </div>
   </div>
<!--
   <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="row pb-2">
               <a href="{{ asset('images/life13gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life13gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life14gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life14gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life15gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life15gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life16gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life16gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life17gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life17gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life18gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life18gr-tbn.jpg') }}" class="img-fluid"></a>
           </div>
           <div class="row pt-2 pb-4">
               <a href="{{ asset('images/life19gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life19gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life20gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life20gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life21gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life21gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life22gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life22gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life23gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life23gr-tbn.jpg') }}" class="img-fluid"></a>
               <a href="{{ asset('images/life24gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
               <img src="{{ asset('images/life24gr-tbn.jpg') }}" class="img-fluid"></a>
           </div>
       </div>
   </div>
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="row pb-2">
                   <a href="{{ asset('images/studio25gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio25gr-tbn.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/studio26gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio26gr-tbn.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/studio27gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio27gr-tbn.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/studio28gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio28gr-tbn.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/studio29gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio29gr-tbn.jpg') }}" class="img-fluid"></a>
                   <a href="{{ asset('images/studio30gr.jpg') }}" data-toggle="lightbox" data-gallery="studio-gallery" class="col-sm-2">
                   <img src="{{ asset('images/studio30gr-tbn.jpg') }}" class="img-fluid"></a>
               </div>

           </div>
       </div>
   </div> --->
   <p class="row justify-content-center"> All images &copy; Gareth Reed </p>
</div>

  @endsection
