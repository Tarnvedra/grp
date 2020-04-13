@extends('welcome')

@section('content')

<div class="jumbotron">
    <div class="col-md-8">
        <h2 class="featurette-heading">Commissioned Work<span class="text-muted"></span></h2>
        <hr>
  </div>
 

  <div class="comgallery">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="row pb-2">
                <a href="{{ asset('images/com1gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com1gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/com2gr.jpg') }}" data-toggle="lightbox" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com2gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/com3gr.jpg') }}" data-toggle="lightbox" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com3gr-tbn.jpg') }}" class="img-fluid"></a>
            </div>

            <div class="row pb-2">
                <a href="{{ asset('images/com4gr.jpg') }}" data-toggle="lightbox" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com4gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/com5gr.jpg') }}" data-toggle="lightbox" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com5gr-tbn.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/com6gr.jpg') }}" data-toggle="lightbox" data-gallery="com-gallery" class="col-sm-4">
                <img src="{{ asset('images/com6gr-tbn.jpg') }}" class="img-fluid"></a>
            </div>

        </div>
    </div>
<p class="row justify-content-center pt-3"> All images &copy; Gareth Reed </p>
</div>
  @endsection