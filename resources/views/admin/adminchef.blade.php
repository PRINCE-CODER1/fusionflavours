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
    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label class="form-label">Name</label><br>
            <input class="text-dark" class="form-control" type="text" name="name" required>
        </div>
        <div>
            <label class="form-label">Speciality</label><br>
            <input class="text-dark" class="form-control" type="text" name="speciality" required>
        </div>
        <div>
            <label class="form-label">Image</label><br>
            <input type="file" name="image" required>
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Chef Name</th>
                <th>Speciality</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        
        @foreach ($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->speciality}}</td>
                <td><img src="/chefimage/{{$item->image}}" alt=""></td>
                <td><a href="{{url('/updatechef',$item->id)}}">Update</a></td>
                <td><a href="{{url('/deletechef',$item->id)}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    </div>
    @include('admin.adminscript')
  </body>
</html>