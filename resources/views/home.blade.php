@extends('components.layout')
@section('content') 

<div class="container-fluid">

  <div class="row justify-content-center mt-5">
    <div class="col-lg-5 col-12 d-flex">
      <img src="{{ $homePage['img'] }}" class="index_img w-100 align-self-center" alt="{{ $homePage['img'] }}">      
    </div>
    <div class="col-lg-5 col-11">
      <div class="m-5">
        <h2 class="freestyle home_title">{{ $homePage['title'] }}</h2>
        <p class="home_text">{{ $homePage['text'] }}</p>          
      </div>    
      <div class="d-flex justify-content-between m-5">
        <div class="d-flex gap-4">
          <a class="home_more_link text-decoration-none" href="{{ route('aboutmepage') }}">More...</a>
        </div>                        
      </div>    
    </div>    
  </div>

  <div class="row justify-content-center">
    <div class="col-11 text-center">
      <h1 id="contacts_title" class="freestyle m-3 home_title">Contacts</h1>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-3 text-center">
      <a href="mailto:{{ $contacts['link_email'] }}">
        <img class="home_icon" src="{{ $contacts['logo_email'] }}" alt="{{ $contacts['logo_email'] }}">
      </a>      
    </div>

    <div class="col-3 text-center">
      <a href="{{ $contacts['link_linkdin'] }}">
        <img class="home_icon" src="{{ $contacts['logo_linkdin'] }}" alt="{{ $contacts['logo_linkdin'] }}">
      </a>      
    </div>

    <div class="col-3 text-center">
      <a href="{{ $contacts['link_x'] }}">
        <img class="home_icon" src="{{ $contacts['logo_x'] }}" alt="{{ $contacts['logo_x'] }}">
      </a>      
    </div>
  </div>

</div>

@endsection