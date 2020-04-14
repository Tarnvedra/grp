@extends('welcome')

@section('content')

<div class="jumbotron">
    <div class="col-md-8">
        <h2 class="featurette-heading">Humans of Stafford Project<span class="text-muted"></span></h2>
        <hr>
  </div>
 
    <div class="humangallery">
            <div class="row justify-content-center">

                <div class="col-md-10">
                    <div class="row pb-2">
                        <a href="{{ asset('images/human1gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human1gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human2gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human2gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human3gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human3gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human4gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human4gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human5gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human5gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human6gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human6gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human7gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human7gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human8gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human8gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human9gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human9gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human10gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human10gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human11gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human11gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human12gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human12gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human13gr.jpg') }}" data-toggle="lightbox" data-title="&copy; Gareth Reed" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human13gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human14gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human14gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human15gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human15gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human16gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human16gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human17gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human17gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human18gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human18gr-tbn.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="row pb-2">
                        <a href="{{ asset('images/human19gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human19gr-tbn.jpg') }}" class="img-fluid"></a>
                        <a href="{{ asset('images/human20gr.jpg') }}" data-toggle="lightbox" data-gallery="human-gallery" class="col-sm-4">
                        <img src="{{ asset('images/human20gr-tbn.jpg') }}" class="img-fluid"></a>
                      
                    </div>
                </div>
            </div>
        <p class="row justify-content-center pt-3"> All images &copy; Gareth Reed </p>
    </div>
  @endsection