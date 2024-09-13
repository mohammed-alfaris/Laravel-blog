<nav class="navbar navbar-expand-lg">
    
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header--><a href="index.html" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
          <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>
      <div class="right-menu list-inline no-margin-bottom">    
        
        <!-- Tasks-->
        <!-- Tasks end-->
        <!-- Megamenu-->
        
        <!-- Megamenu end     -->
        <!-- Languages dropdown    -->
        
        <!-- Log out               -->
        <div class="list-inline-item logout">
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 0; font-size: inherit; color: rgb(133, 133, 133); cursor: pointer;">
                    Log Out
                </button>
            </form>
                                        </div>
      </div>
    </div>
  </nav>