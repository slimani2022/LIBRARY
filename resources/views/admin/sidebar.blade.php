<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Category</a></li>
                <li><a href="{{url('add_book')}}"> <i class="icon-grid"></i>Add Books</a></li>
                <li><a href="{{url('show_book')}}"> <i class="icon-grid"></i>Show Books</a></li>
                <li><a href="{{url('user_page')}}"> <i class="icon-grid"></i>All Users</a></li>
           </ul>
                </li>
            


                <li><a href="{{url('borrow_request')}}"> <i class="icon-logout"></i>Borrow Request</a></li>


        
      </nav>