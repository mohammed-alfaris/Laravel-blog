<!DOCTYPE html>
<html>
  <head> 
    <style>
        .post_title {
            font-size: 30px; 
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }
        .div_center {
            text-align: center;
            padding: 30px;
        }
        label {
            display: inline-block;
            width: 200px;
            margin-bottom: 10px;
            color: white;
        }
        input, textarea, .btn {
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <header class="header">   
      @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">

        <h1 class="post_title">Add Post</h1>
        <form action="{{ route('admin.update_post',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="div_center">
                <label for="title">Post Title</label>
                <input type="text" value="{{$post->title}}" id="title" name="title" required>
            </div>

            <div class="div_center">
                <label for="description">Post Description</label>
                <textarea id="description" name="description" rows="4" required>{{$post->description}}</textarea>
            </div>

            <div class="div_center">
                <label for="image">Add Image</label>
                <input type="file" value="{{$post->image}}" id="image" name="image" accept="image/*">
            </div>
            
            <div class="div_center">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
      </div>

      @include('admin.footer')
  </body>
</html>
