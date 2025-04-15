@extends('components.layout_backoffice')
@section('backoffice_index')

@auth
  <div class="row">

    <div class="col-12 text-center mt-3">
      <h1>Edit Principal Fields</h1>
    </div>

    @if(!empty($homePageInfo))            
      
      <!-- Edition Form -->
      <form class="row" method="POST" action="{{ route('backoffice_home_page_edit_confirm', $homePageInfo) }}"> 
        @csrf  
        @method('PATCH')

        <div class="col-12 p-4 mx-auto text-center contactos-backoffice">
          
          <label for="title">Title: </label>
          <input type="text" name="title" value="{{ $homePageInfo["title"] }}" autofocus>
          <br><br>          
          <label for="img">Image: </label>
          <input type="text" name="img" value="{{ $homePageInfo['img'] }}" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>
          <br><br>         
          <label for="text">Principal Text: </label>
          <br>
          <textarea name="text" cols="100" rows="30" id="texto_principal">{{ $homePageInfo["text"] }}</textarea>
          
        </div>

        <!-- Edit/Back Buttons -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="{{ route('backoffice_home_page') }}" class="btn btn-danger">Back</a>
        </div>

      </form>

      @if (session('editSuccess')) 
        <div class="col-4 m-auto pt-3">
          <div class="alert alert-success text-center" role="alert">
            {{ session('editSuccess') }}
          </div>          
        </div>      

      @elseif ($errors->any())       
        <div class="col-4 m-auto pt-3">
          <div class="alert alert-danger text-center" role="alert">
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
          </div>          
        </div>
      @endif  

    @else

      <!-- Principal Fields Not Found Mensage -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Principal Fields Not Found!</h1>
      </div>

    @endif

  </div>  
@endauth

@endsection