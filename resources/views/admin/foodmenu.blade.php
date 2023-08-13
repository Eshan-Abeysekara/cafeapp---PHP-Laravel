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
  <div style="position: relative; top: 60px; right: -150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Food Name</label>
            <input style="color: blue;" type="text" name="title" placeholder="Enter Title" required> 
        </div>
        <div>
            <label>Price</label>
            <input style="color: blue;" type="num" name="price" placeholder="Enter Price" required> 
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image" required> 
        </div>
        <div>
            <label>Description</label>
            <input style="color: blue;" type="text" name="description" placeholder="Enter Description" required> 
        </div>
        <br>
        
        <div>
            <input type="submit" value="Save">
        </div>
        <br>
    </form>
    <div>
      <table bgcolor="black">
        <tr>
          <th style="padding: 20px;">Food Name</th>
          <th style="padding: 20px;">Price (LKR)</th>
          <th style="padding: 20px;">Description</th>
          <th style="padding: 20px;">Image</th>
          <th style="padding: 20px;">Action</th>
          <th style="padding: 20px;">Action</th>
         
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->title}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->description}}</td>
          <td><img src="/foodimage/{{$data->image}}" width="150px" height="100px"></td>
          <td><a href="{{url('/deletemenu',$data->id)}}">DELETE</a>
          <td><a href="{{url('/updateview',$data->id)}}">UPDATE </a>
        </tr>
        @endforeach
        
      </table>
    </div>
  </div>

    
  </div>
  @include("admin.adminscript")
  </body>
</html>