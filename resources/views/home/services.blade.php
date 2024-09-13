<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Post Page</h1>
       <div class="services_section_2">
         <div class="row">
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <div class="col-md-4" style="padding: 15px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 20px;">
                        <div>
                            <img src="postimage/{{$post->image}}" style="max-width: auto; height: 400px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                        </div>
                        <p>{{$post->title}}</p>
                        <p>Posted by <b>{{$post->name}}</b></p>
                        <div class="btn_main">
                            <a href="{{route('user.post_details',$post->id)}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12" style="padding: 15px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 20px;">
                    <h1 style="margin: 0;">There are no posts</h1>
                </div>
            @endif
        </div>
       </div>
    </div>
 </div>