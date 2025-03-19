@extends('components.layout')
@section('content') 

<div class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="research_title">{{ $research_page["title"] }}</h1>
    </div>
  </div> 

  <div class="row justify-content-around gap-3 gap-md-0 mt-md-4">
    <div class="col-11">
      <h1 class="freestyle research_sub_title">{{ $research_page["sub_title_1"] }}</h1>
    </div>

    @foreach ($publications as $element)
      <div class="col-11 my-lg-3">
        <div class="d-flex justify-content-between flex-md-row flex-column">
          <p class="me-3 publication_text">{{ $element["text"] }}</p>
          <a target="_blank" href="{{ $element["link"] }}" class="publication_button text-decoration-none align-self-center m-md-1 m-auto text-center">{{ $element["button_link"] }}</a>
        </div>
      </div>
    @endforeach    
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-11 freestyle">
      <h1 class="research_sub_title">{{ $research_page["sub_title_2"] }}</h1>
    </div>
  </div>

  <div class="row justify-content-center">  
    @foreach ($projects as $element)
      <div class="col-11 m-3">
        <div class="d-flex">
          <img src="{{ $element['title_logo'] }}" class="project_logo" alt="{{ $element['title_logo'] }}">
          <h4 class="d-inline align-self-center m-0 freestyle project_title">{{ $element['title'] }}</h4>
        </div>

        <div class="d-flex justify-content-between flex-md-row flex-column">
          <p class="me-md-4 project_text">{{ $element['text'] }}</p>          
          @if($element['img'])
            <img src="{{ $element['img'] }}" class="project_img m-auto" alt="{{ $element['img'] }}">
          @endif
        </div>
      </div>
    @endforeach
  </div>   

</div>

@endsection