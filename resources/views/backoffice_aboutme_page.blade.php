@extends('components.layout_backoffice')
@section('backoffice_index')
  
<div class="row">

  <div class="col-12 text-center">
    <h1 class="p-3">About Me Page (Edit)</h1>      
  </div> 
  
  <!-- Tabela de Edição Principal -->
  <div class="col-12">
    <h2 class="text-center mb-4">Principal Page Fields</h2>
    <table class="m-auto mb-3">

      <tr class="text-center">   
        <th>Título</th>
        <th>Sub Título 1</th>                       
        <th>Sub Título 2</th>            
        <th>Sub Título 3</th>            
        <th>Editor</th>            
        <th>Last Edit Date</th>          
        <th>Ações</th> 
      </tr>
    
      <tr>          
        <td>{{ $aboutmePageInfo["title"] }}</td>
        <td>{{ $aboutmePageInfo["sub_title_1"] }}</td>
        <td>{{ $aboutmePageInfo["sub_title_2"] }}</td>
        <td>{{ $aboutmePageInfo["sub_title_3"] }}</td>
        <td>{{ $user[$aboutmePageInfo['editor_id']]['real_name'] }}</td> 
        <td>{{ $aboutmePageInfo["edit_date"] }}</td>     
        
        <!-- Botões de Editar/Apagar -->
        <td>
          <a class="btn btn-primary" href="aboutme_principal.php">Edit</a>  
        </td>          
      </tr>
  
    </table>
  </div>

  <div class="col-12">
    <h2 class="text-center mt-4">Skills Table</h2>

    <div class="text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="aboutme_skill_new.php">New Skill</a>            
    </div>

    <table class="m-auto">

      <tr class="text-center">   
        <th>Image</th>
        <th>Title</th>                       
        <th>Text</th> 
        <th>Creator</th> 
        <th>Creation Date</th> 
        <th>Edit</th>            
        <th>Last Edit Date</th>          
        <th>Settings</th> 
      </tr>

      @foreach($skills as $skill)
    
        <tr>
          
          <td><img src="{{ $skill["img"] }}" alt="{{ $skill["img"] }}"></td>
          <td>{{ $skill["title"] }}</td>
          <td>{{ $skill["text"] }}</td>        
          <td>{{ $user[$skill["creator_id"]]['real_name'] }}</td> 
          <td>{{ $skill["creation_date"] }}</td>         
          <td>{{ $user[$skill["editor_id"]]['real_name'] }}</td> 
          <td>{{ $skill["edit_date"] }}</td>     
          
          <!-- Botões de Editar/Apagar -->
          <td>
            <a class="btn btn-primary" href="aboutme_skill.php?id=">Edit</a>
            <br><br>   
            <a class="btn btn-danger" href="aboutme_skill_delete.php?id=">Delete</a> 
          </td>
          
        </tr>

      @endforeach
  
    </table>
  </div>

  <div class="col-12 mt-5">
    <h2 class="text-center mt-4">Journeys Table</h2>

    <div class="text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="aboutme_myjourney_new.php">New Journey</a>            
    </div>

    <table class="m-auto">

      <tr class="text-center">   
        <th>Image</th>
        <th>Img Title</th>
        <th>Title</th>         
        <th>Text</th> 
        <th>Creator</th> 
        <th>Creation Date</th> 
        <th>Edit</th>            
        <th>Last Edit Date</th>          
        <th>Settings</th> 
      </tr>

      @foreach($myJourneys as $journey)
    
        <tr>
          
          <td><img src="{{ $journey["img"] }}" alt="{{ $journey["img"] }}"></td>
          <td><img src="{{ $journey["title_logo"] }}" alt="{{ $journey["title_logo"] }}"></td>
          <td>{{ $journey["title"] }}</td>
          <td>{{ $journey["text"] }}</td>    
          <td>{{ $user[$journey["creator_id"]]['real_name'] }}</td> 
          <td>{{ $journey["creation_date"] }}</td>                 
          <td>{{ $user[$journey["editor_id"]]['real_name'] }}</td> 
          <td>{{ $journey["edit_date"] }}</td>     
          
          <!-- Edit/Back Buttons -->
          <td>
            <a class="btn btn-primary" href="aboutme_myjourney.php?id=">Edit</a>   
            <br><br> 
            <a class="btn btn-danger" href="aboutme_myjourney_delete.php?id=">Delete</a>   
          </td>
          
        </tr>

      @endforeach
  
    </table>
  </div>

  <div class="col-12 mt-5">
    <h2 class="text-center mt-4">Personal Interests Table</h2>

    <div class="text-center p-4">      
      <a class="text-decoration-none text-white btn btn-primary" href="aboutme_personal_new.php">New Personal</a>            
    </div>

    <table class="m-auto">

      <tr class="text-center">   
        <th>Image</th>
        <th>Title</th> 
        <th>Creator</th> 
        <th>Creation Date</th>
        <th>Edit</th> 
        <th>Last Edit Date</th>          
        <th>Settings</th> 
      </tr>

      @foreach($personalInterests as $interest)
    
        <tr>
          
          <td><img src="{{ $interest["img"] }}" alt="{{ $interest["img"] }}"></td>
          <td>{{ $interest["title"] }}</td>
          <td>{{ $user[$interest["creator_id"]]['real_name'] }}</td> 
          <td>{{ $interest["creation_date"] }}</td>         
          <td>{{ $user[$interest["editor_id"]]['real_name'] }}</td> 
          <td>{{ $interest["edit_date"] }}</td>     
          
          <!-- Botões de Editar/Apagar -->
          <td>
            <a class="btn btn-primary" href="aboutme_personal.php?id=">Edit</a>   
            <br><br>  
            <a class="btn btn-danger" href="aboutme_personal_delete.php?id=">Delete</a>  
          </td>
          
        </tr>

      @endforeach
  
    </table>
  </div>

</div>

@endsection