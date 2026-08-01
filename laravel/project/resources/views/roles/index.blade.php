

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Roles</h1>
    
     @if (session("success"))
         <span> {{session("success")}}</span>
     @endif

      <a href="{{route("roles.create")}}">Create Role</a>
      <a href="{{route("testRoute")}}">test Role</a>
      <a href="{{url("roles/test")}}">test Role2</a>

     <table>
         <tr>
            <th>id</th>
            <th>Name</th>
            <th>action</th>
         </tr>
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

     </table>


</body>
</html>