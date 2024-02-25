<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')

    <div>
        <table class="table table-striped-columns">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach ($data as $id)
            <tr align="center">
                <td>{{$id->name}}</td>
                <td>{{$id->email}}</td>
                @if ($id->usertype=="0")
                <td><a href="{{route('delete.user', $id->id)}}">Delete</a></td>  
                @else
                <td><a>Not Allowed</a></td>
                @endif
            </tr>
            @endforeach
            
        </table>
    </div>


    @include('admin.adminscript')
    </div>
  </body>
</html>