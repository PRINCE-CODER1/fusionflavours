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
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <th>{{$data->name}}</th>
                <th>{{$data->email}}</th>
                <th>{{$data->phone}}</th>
                <th>{{$data->date}}</th>
                <th>{{$data->time}}</th>
                <th>{{$data->message}}</th>
            </tr>
            @endforeach
            
        </table>
    </div>
    </div>
    @include('admin.adminscript')
    
  </body>
</html>