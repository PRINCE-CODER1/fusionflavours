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
<div class="d-flex justify-content-center align-items-center flex-column">

    <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input class="text-dark" type="text" name="title" required>
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input class="text-dark" type="text" name="price" required>
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input class="text-dark" type="file" name="image" required>
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input class="text-dark" type="text" name="description" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Save">
        </div>
    </form>
    <table class="table">
        <tr class="text-white">
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        @foreach ($data as $item)
            
        <tr>
             <td>{{$item->title}}</td>
             <td>{{$item->price}}</td>
             <td>{{$item->description}}</td>
             <td><img class="img-fluid" src="/foodimage/{{$item->image}}" alt=""></td>
             <td><a href="{{url('/deletemenu',$item->id)}}">Delete</a></td>
             <td><a href="{{url('/updateview',$item->id)}}">Update</a></td>
         </tr>
        
        @endforeach
    
    </table>
</div>
    @include('admin.adminscript')


    </div>
  </body>
</html>