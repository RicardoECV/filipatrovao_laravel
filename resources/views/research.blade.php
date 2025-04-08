@extends('components.layout')
@section('content') 

<div class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="research_title">{{ $research_page["title"] }}</h1>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-11 freestyle">
      <h1 class="research_sub_title">{{ $research_page["sub_title_1"] }}</h1>
    </div>
  </div>

  <div class="row justify-content-center gap-5 mt-2">

    @foreach ($expertises as $element)

      <div class="col-lg-2 col-md-4 col-8 p-0">
        <div class="card">
          
          <img src="{{ $element['img'] }}" class="card-img-top" alt="{{ $element['img'] }}"> 
          <div class="card-body">                               
            <h5 class="d-inline-flex gap-1 m-0">
              <p class="card-title expertise_card_title text-decoration-none m-0" data-bs-toggle="collapse" href="#collapseExample-{{ $loop->index }}" role="button" aria-expanded="false" aria-controls="collapseExample-{{ $loop->index }}" onclick="clickCard('{{ $loop->index }}')">
                {{ $element['title'] }}
                <img src="{{ asset('images/logos/icons8-arrow-up-24.png')}}" alt="Arrow Icon" class="expertise_arrow_{{ $loop->index }} transition-expertise">
              </p> 
            </h5>

            <div class="collapse" id="collapseExample-{{ $loop->index }}">
              <div class="card card-body expertise_card_text">{{ $element['text'] }}</div>
            </div>
          </div>

        </div>
      </div>

    @endforeach

  </div>

  <div class="row justify-content-center mt-5">
    <div class="col-11 freestyle">
      <h1 class="research_sub_title">{{ $research_page["sub_title_2"] }}</h1>
    </div>
  </div>

  <div class="row justify-content-around gap-3 gap-md-0 mt-md-1">   

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
      <h1 class="research_sub_title">{{ $research_page["sub_title_3"] }}</h1>
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