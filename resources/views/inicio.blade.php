@extends('layouts.admin')
@section('titulo','INICIO')

@section('contenedor')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{asset('/img/banner1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
      <img src="{{asset("/img/banner2.jpg")}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
      <img src="{{asset("/img/banner3.jpg")}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset("/img/banner4.jpg")}}" class="d-block w-100" alt="...">
        </div> 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection