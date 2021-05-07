@extends('website.layouts.index')
@section('title', 'Homepage')
@section('body') 
        <div class="container"> 
          <div class="row"> 
            @foreach($data as $x)
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow"> 
                        <div id="carouselExampleControls_{{ $x->id }}" class="carousel slide"">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ URL::asset('storage/'. $x->image1) }} " class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ URL::asset('storage/'. $x->image2) }}" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ URL::asset('storage/'. $x->image3) }}" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_{{ $x->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_{{ $x->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $x->name }}
                                <br>
                                <small class="text-muted"> 
                                    {{ $x->category }}
                                </small>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    ₱   {{ $x->price }}
                                </small> 
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary">
                                        <i class="bi bi-cart"></i> Add to cart
                                    </button> 
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
@endsection