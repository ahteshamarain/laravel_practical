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
<center><h1>Registration Form</h1></center>
<div class="container">
<form action="http://127.0.0.1:8000" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
  </div>
  <span class="text-danger">
    @error('name')
    {{$message}}  
    @enderror
  </span>
  <br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
  </div> 
  <span class="text-danger">
    @error('email')
    {{$message}}  
    @enderror
  </span>
  <br>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('password')}}">
  </div>
  <span class="text-danger">
    @error('password')
    {{$message}}  
    @enderror
  </span>
  <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">class</label>
    <input type="text" name="class" class="form-control" id="exampleInputPassword1" value="{{old('class')}}">
  </div>
  <span class="text-danger">
    @error('class')
    {{$message}}  
    @enderror
  </span>
  <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">faculty</label>
    <input type="text" name="faculty" class="form-control" id="exampleInputPassword1" value="{{old('faculty')}}">
  </div>
  <span class="text-danger">
    @error('faculty')
    {{$message}}  
    @enderror
  </span>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>