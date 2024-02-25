<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">
      @include('admin.navbar')
      <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label>Chef Name</label><br>
            <input class="text-dark" type="text" name="name" value="{{$data->name}}" required>
        </div>
        <div>
            <label>Speciality</label><br>
            <input class="text-dark" type="text" name="speciality" value="{{$data->speciality}}" required>
        </div>
        <div>
            <label>Old Image</label><br>
            <img style="width:400px" class="img-fluid"src="/chefimage/{{$data->image}}">
        </div>
        <div>
            <label>New Image</label><br>
            <input type="file" name="image">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>

    </div>
    
    @include('admin.adminscript')
    
  </body>
</html>