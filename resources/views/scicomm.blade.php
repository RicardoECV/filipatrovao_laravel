@extends('components.layout')
@section('content')

<div class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="scicomm_title">{{ $scicomm_page["title"] }}</h1>      
    </div>
  </div>
  
  <div class="row justify-content-lg-around justify-content-center gap-lg-0 gap-3">     
    @foreach($scicomm_cards as $card)
      <div class="col-md-4 col-lg-2 col-10">        
          <div class="card">
            <img src="{{ $card['img'] }}" class="card-img-top" alt="{{ $card['img'] }}">
            <div class="card-body">
              <h5 class="card-title scicomm_card_title">{{ $card['title'] }}</h5>            
            </div>
          </div>        
      </div>
    @endforeach 
  </div>
  
  <div class="row justify-content-center mt-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="scicomm_sub_title">{{ $scicomm_page["sub_title_1"] }}</h1>
    </div>
  </div>
  
  <div class="row justify-content-center">
    @foreach($activities as $activitie)    
      <div class="col-11">        
        <p class="me-4 scicomm_activitie">{{ $activitie['text'] }}</p> 
      </div>
    @endforeach
  </div>
     
  <div class="row justify-content-center mt-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="scicomm_sub_title">{{ $scicomm_page["sub_title_2"] }}</h1>
    </div>
  </div>
    
  <div class="row p-0 justify-content-center">  
    @foreach($multimedia_content as $card)    
      <div class="col-lg-3 col-xl-2 col-md-4 col-10 m-3">                
          <div class="card h-100">
            <a target="_blank" href="{{ $card['link'] }}">
              <img src="{{ $card['img'] }}" class="card-img-top" alt="{{ $card['img'] }}">
            </a> 
            <div class="card-body">
              <h5 class="card-title">
                <a target="_blank" href="{{ $card['link'] }}" class="text-decoration-none text-black scicomm_multimedia">
                  {{ $card['title'] }};
                </a>
              </h5>            
            </div>          
          </div> 
      </div>
    @endforeach   
  </div>

</div>

@endsection