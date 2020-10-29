@extends('welcome')

@section('content')

<div class="jumbotron bg-light">
    <div class="col-md-8">
        <h2 class="featurette-heading">Still Life<span class="text-muted"></span></h2>
        <hr>
  </div>

  <div class="stillgallery">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="row pb-2">
                <a href="{{ asset('images/still1gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still1gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/still2gr.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still2gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/still3gr.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still3gr-tbn.jpg') }}" class="img-fluid"></a>
            </div>

            <div class="row pb-2">
                <a href="{{ asset('images/still4gr.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still4gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/still5gr.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still5gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/still6gr.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/still6gr-tbn.jpg') }}" class="img-fluid"></a>
            </div>

        </div>
    </div>
<p class="row justify-content-center pt-3"> All images &copy; Gareth Reed </p>
</div>


  @endsection
