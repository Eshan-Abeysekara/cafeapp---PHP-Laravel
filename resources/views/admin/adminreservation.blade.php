<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    
  @include("admin.navbar")
  <div style="position: relative; top:60px; right:-150px">
    <table border="3px" bgcolor="grey">
  <tr>
    <th style="padding: 20px;">Name</th>
    <th style="padding: 20px;">Email</th>
    <th style="padding: 20px;">Mobile No</th>
    <th style="padding: 20px;">No of Guest</th>
    <th style="padding: 20px;">Date</th>
    <th style="padding: 20px;">Time</th>
  </tr>
  @foreach($data as $data)
  <tr align="center">
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->guest}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->time}}</td>
  </tr>
  @endforeach
  </table>
</div>

    
  </div>
  @include("admin.adminscript")
  </body>
</html>