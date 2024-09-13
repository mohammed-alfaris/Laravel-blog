<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .post_title {
            font-size: 28px; 
            font-weight: 700;
            text-align: center;
            padding: 20px;
            color: #ffffff;
            /* background-color: #DB6574;  */
            margin-bottom: 30px;
            border-radius: 8px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }
        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #DB6574;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #db5a6c;
        }
    </style>
    @include('admin.css')
</head>
<body>
    <header class="header">   
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation -->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end -->

        <div class="page-content">
            <h1 class="post_title">Add Post</h1>
            <div class="form-container">
                <form action="{{ route('admin.add_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf 

                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Post Description</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Add Image</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        @include('admin.footer')
    </div>
</body>
</html>
