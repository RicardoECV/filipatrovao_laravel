<div class="row">

  <!-- Navbar -->
  <div class="col-12 p-0"> 
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Backoffice</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('backoffice_index') }}">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backoffice_home_page') }}">Home Page</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backoffice_aboutme_page') }}">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="research.php">Research</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link " href="scicomm.php">Scicomm & Outreach</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contacts</a>
            </li>  
            <li class="nav-item">
              <form action="{{ route('backoffice_logout')}}" method="POST">
                @csrf
                <button class="nav-link">Logout</button>
              </form>              
            </li>                
          </ul>              
        </div>

        <div class="text-white me-4">
          Welcome {{ Auth::user()->real_name }}               
        </div>
        <div class="horas text-white">                
        </div>
      </div>
    </nav>
  </div>

</div>