

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js" ></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
  <h1>Roles</h1>
    
     @if (session("success"))
         <span class="alert alert-success"> {{session("success")}}</span>
     @endif

      <a class="btn btn-primary" href="{{route("roles.create")}}">Create Role</a>
      <a href="{{route("testRoute")}}">test Role</a>
      <a href="{{url("roles/test")}}">test Role2</a>

     <table class="table">
        <thead>
              <tr>
            <th>id</th>
            <th>Name</th>
            <th>action</th>
         </tr>
            </thead>  
            <tbody>
                @foreach ( $roles as $role)
                <tr>
             <th> {{$role->id}} </th>
             <th>{{$role->name}}</th>
             <th>
                
                <a href="{{route("roles.show", $role->id)}}">Show</a>  
                <a href="{{route("roles.edit", $role->id)}}">Edit</a>  
                
                 <form action="{{route("roles.destroy", $role->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit"   onclick="confirm('are you sure')">Delete</button>
                 </form>
            
            
            
            </th>
         </tr>
         @endforeach  
            
            </tbody>     
       

     </table>

       <div class="d-flex justify-content-center">
          {{$roles->links()}}
       </div>

    </div>
  </body>
</html>