<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">


    @include('admin.navbar')
    <div class="d-flex justify-content-center align-items-center flex-column">


        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input class="text-dark" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input class="text-dark" type="text" value="{{$data->price}}" name="price" required>
            </div>
            <div class="mb-3">
                <label for="">Description</label>
                <input class="text-dark" type="text" value="{{$data->description}}" name="description" required>
            </div>
            <div class="mb-3">
                <label for="">Old Image</label>
                <img class="img-fluid" width="300px" src="/foodimage/{{$data->image}}" alt="">
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input class="img-fluid" width="300px" type="file" name="image" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save">
            </div>
        </form>

    </div>

    @include('admin.adminscript')


    </div>
  </body>
</html>