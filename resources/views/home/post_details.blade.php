<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')
      <style>
        .img_deg{
            width: 50%;
            height: 50%;
        }
      </style>
     </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->
      </div>
      
      <div class="col-md-12" style="padding: 15px;text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 20px;">
        <div>
            <img src="postimage/{{$post->image}}" style="max-width: 600px; height: auto; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        </div>
        <p style="font-size: 20px; font-weight: bold; color: #333; margin: 10px 0;">{{$post->title}}</p>
        <p style="font-size: 16px; color: #555; margin-bottom: 20px;">Posted by <b>{{$post->name}}</b></p>
        <p style="font-size: 16px; color: #000000; margin-bottom: 20px;">{{$post->description}}</p> 
       </div>
    
    <!-- Comments Section -->
    <div class="comments-section" style="max-width: 800px; margin: 40px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">Comments</h3>

        <!-- Existing Comments -->
        @foreach($post->comments as $comment)
            <div class="comment" style="margin-bottom: 15px; padding: 10px; border-bottom: 1px solid #ddd;">
                <p class="comment-body" style="font-size: 22px; line-height: 1.5; color: #000000;"><b>{{ $comment->author }}</b></p>
                <p class="comment-body" style="font-size: 16px; line-height: 1.5; color: #333;">{{ $comment->body }}</p>
            </div>
        @endforeach

        <!-- Comment Form -->
        <form action="{{ route('post.add_comment', $post->id) }}" method="POST" class="comment-form" style="display: flex; flex-direction: column; align-items: center; gap: 10px; margin-top: 20px;">
            @csrf
            <textarea name="body" rows="4" placeholder="Write your comment here..." required style="width: 100%; max-width: 600px; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
            <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                Submit Comment
            </button>
        </form>
    </div>
      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
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