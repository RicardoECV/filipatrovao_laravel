@extends('components.layout_backoffice')
@section('backoffice_index')

@auth
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Home Page (Edit)</h1>      
    </div>    

    <!-- Main Fields Table -->
    <div class="col-auto m-auto text-center">      
      <table>

        <tr class="text-center">
          <th>Header Main Title</th>           
          <th>Header Sub Title</th>           
          <th>Image</th>           
          <th>Title</th>          
          <th>Text</th>
          <th>Editor</th> 
          <th>Last Edit Date</th> 
          <th>Settings</th>           
        </tr>
      
        <tr>
          <td>{{ $homePageInfo["header"] }}</td>
          <td>{{ $homePageInfo["header_sub_title"] }}</td>
          <td>
            <img src="{{ $homePageInfo['img'] }}" alt="{{ $homePageInfo['img'] }}">
          </td>
          <td>{{ $homePageInfo["title"] }}</td>
          <td>{{ $homePageInfo["text"] }}</td>             
          <td>{{ $user[$homePageInfo['editor_id']]['real_name'] }}</td>            
          <td>{{ $homePageInfo["edit_date"] }}</td>  
          
          <!-- Botão de Editar -->
          <td>
            <a class="btn btn-primary" href="{{ route('backoffice_home_page_edit') }}">Edit</a>  
          </td>          
        </tr>
    
      </table>
    </div>
  </div>
@endauth

@endsection