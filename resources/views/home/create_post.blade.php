<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.homecss')

    <style>
        .form-container {
            position: absolute;
            height: 500px;
            top: 450px;
            left: 495px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); Added box-shadow for better focus */
        }
        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }
        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header_section">
        @include('home.header')
        <!-- banner section start -->
        @include('home.banner')
        <!-- banner section end -->
    </div>
    <!-- Form Section -->
    <div class="form-container">
        <form action="{{ route('user.store_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" placeholder="Enter post title" required>
            </div>
            <div class="form-group">
                <label for="description">Post Description</label>
                <textarea id="description" name="description" rows="4" placeholder="Enter post description" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Post Image</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit Post</button>
            </div>
        </form>
    </div>

    <!-- footer section start -->
    @include('home.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
