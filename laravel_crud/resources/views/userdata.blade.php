<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Laravel_crud</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Form</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('viewuser')}}">View user</a>
          </li>
        
         
        </ul>
        
      </div>
    </div>
  </nav>

  <center><h1>Users Data</h1></center>
<div
class="table-responsive"
>
<table
    class="table table-primary"
>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">class</th>
            <th scope="col">faculty</th>
            <th scope="col">action</th>
  



        </tr>
    </thead>
    <tbody>
        @foreach ($data as $k)
            
           <tr class="">
            <td scope="row">{{$k->id}}</td>
            <td scope="row">{{$k->name}}</td>
            <td scope="row">{{$k->email}}</td>
            <td scope="row">{{$k->password}}</td>
            <td scope="row">{{$k->class}}</td>
            <td scope="row">{{$k->faculty}}</td>

            <td scope="row">
              <a class="btn btn-danger" href="{{url('/')}}/del_user/{{$k->id}}">Delete</a>
            </td>
           
          


           
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
