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
  <div class="container">
  <h1>Customer Orders</h1>

  <form action="{{url('/search')}}" method="get">
    @csrf
    <input type="text" name="search" style="color: blue;">
    <input type="submit" value="Search" class="btn btn-success">
  </form>

  <table>
    <tr align="center" style="color: black;">
        <th style="padding: 20px;">Name</th>
        <th style="padding: 20px;">Phone</th>
        <th style="padding: 20px;">Address</th>
        <th style="padding: 20px;">Foodname</th>
        <th style="padding: 20px;">Price</th>
        <th style="padding: 20px;">Quantity</th>
        <th style="padding: 20px;">Total Price</th>
    </tr>
    @foreach($data as $data)
    <tr align="center">
        <td style="padding: 20px;">{{$data->name}}</td>
        <td style="padding: 20px;">{{$data->phone}}</td>
        <td style="padding: 20px;">{{$data->address}}</td>
        <td style="padding: 20px;">{{$data->foodname}}</td>
        <td style="padding: 20px;">{{$data->price}}LKR</td>
        <td style="padding: 20px;">{{$data->quantity}}</td>
        <td style="padding: 20px;">{{$data->price * $data->quantity}}LKR</td>
    </tr>
    @endforeach
  </table>
  </div>

    
  </div>
  @include("admin.adminscript")
  </body>
</html>