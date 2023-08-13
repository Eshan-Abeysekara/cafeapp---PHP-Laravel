<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        
  @include("admin.navbar")

  <div style="position: relative; top: 60px; right: -150px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input style="color: blue;" type="text" name="title" value="{{$data->title}}" required> 
        </div>
        <div>
            <label>Price</label>
            <input style="color: blue;" type="num" name="price" name="title" value="{{$data->price}}" required> 
        </div>
        <div>
            <label>Description</label>
            <input style="color: blue;" type="text" name="description"  value="{{$data->description}}" required> 
        </div>
        <div>
            <label> Old Image</label>
            <img src="/foodimage/{{$data->image}}" width="200px" height="150px">
        </div>
        <div>
            <label> Add New Image</label>
            <input type="file" name="image">
        </div>
        <br>
        
        <div>
            <input type="submit" value="Update">
        </div>
        <br>
    </form>
  </div>

    
  </div>
  @include("admin.adminscript")
  </body>
</html>