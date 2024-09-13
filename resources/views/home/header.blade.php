<div class="header_main">
    <div class="container-fluid">
       <div class="logo"><a href="{{url('/')}}"><img src="images/logo.png"></a></div>
       <div class="menu_main">
          <ul>
             <li class="active"><a href="{{url('/')}}">Home</a></li>
             @if(Route::has('login'))
             @auth
             
             
               <li><a href="{{route('user.my_posts')}}">My Posts</a></li>
               <li><a href="{{route('user.create_post')}}">Create Post</a></li>
               <li>
                  <form method="POST" action="{{ route('logout') }}" id="logout-form">
                      @csrf
                      <button type="submit" style="background: none; border: none; padding: 0; font-size: inherit; color: rgb(255, 255, 255); cursor: pointer;">
                          Log Out
                      </button>
                  </form>
              </li>
             @else
             <li><a href="{{ route('login') }}">Login</a></li>
             <li><a href="{{ route('register') }}">Register</a></li>
             @endauth
             @endif
          </ul>
       </div>
    </div>
 </div>