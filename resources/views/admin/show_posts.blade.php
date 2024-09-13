<!DOCTYPE html>
<html>
  <head> 
    <style>
         
         table {
            width: 85%;
            border-collapse: collapse;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 0 auto; 
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #DB6574;
            color: white;
            font-weight: bold;
        }
        td {
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .post_title {
            font-size: 30px; 
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }
        .img_deg{
            height: 100px;
            width: 150px;
            padding: 10px
        }
    </style>
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

        <h1 class="post_title" >Posts Table</h1>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>User ID</th>
                    <th>User Type</th>
                    <th>Post Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
    
               <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                        <img class="img_deg" src="postimage/{{$post->image}}" >
                    </td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->user_id}}</td>
                    <td>{{$post->usertype}}</td>
                    <td>{{$post->post_status}}</td>
                    <td><form action="{{ route('admin.delete_post', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?');">
                            Delete
                        </button>
                    </form></td>
                    <td><a href="{{route('admin.edit_post',$post->id)}}" class="btn btn-success">Edit</a></td>

                </tr>
                @endforeach 
            </tbody>
        </table>

      </div>

      @include('admin.footer')
  </body>
</html>
