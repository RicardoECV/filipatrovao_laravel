@extends('components.layout_backoffice')
@section('backoffice_index')

  @auth
    <div class="row">
      <div class="col-12 text-center p-5">
        <h1>Welcome {{ Auth::user()->real_name }}</h1>
        <h3 class="p-3">Last Access Date:</h3>
      </div>
    </div>

  @else
    <div class="row">
      <div class="col-12 text-center p-5">
        <h1>Backoffice Login</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="col-auto p-4 mx-auto border border-3 border-success rounded-4 text-center">
            
        <!-- Login/Senha Incorretos -->
        @if($errors->any())
          @foreach ($errors->all() as $error)
            <h2 class="text-danger py-4">{{ $error }}</h2>
          @endforeach
        @endif

        <!-- Formulário Login -->
        <form action="/backoffice/login" method="POST"> 
          @csrf       
          <input type="text" name="loginname" placeholder="Login" required autofocus>
          <br><br>
          <input type="password" name="loginpassword" placeholder="Password" required>
          <br><br>
          <button class="btn btn-outline-success">Login</button>
        </form>
    
      </div>
    </div>
  @endauth

@endsection