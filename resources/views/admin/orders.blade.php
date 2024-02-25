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
<div class="container">


    <h1>Customers Orders</h1>
    <form action="{{url('/search')}}" method="get">
        @csrf
        <input type="text" name="search" class="bg-dark">
        <input type="submit" value="search" class="btn btn-sm btn-warning">
    </form>
    <table class="table">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Food</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->foodname}}</td>
            <td>${{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price* $item->quantity}}</td>
        </tr>
        @endforeach
        
    </table>
</div>
    </div>
    @include('admin.adminscript')
    
  </body>
</html>