<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')


   <style type="text/css">
     
    .div_center
    {
      text-align: center;
      margin: auto;
    }

    .title_deg
    {
      color: white;
      padding: 35px;
      font-size: 40px;
      font-weight: bold;
    }

    label
    {

      display: inline-block;
      width: 200px;
    }


    .div_pad
    {
      padding: 15px;
    }


   </style>

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @Include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


          <div class="div_center">
            
            <h1 class="title_deg">Add New User </h1>

            <form action="{{url('store_user')}}" method="Post" enctype="multipart/form-data">
            @csrf
              
              <div class="div_pad">
                <label>Name</label>
                <input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
              </div>

              <div  class="div_pad">
                <label>Email</label>
                <input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
              </div>

              <div  class="div_pad">
                <label>Phone</label>
                <input id="phone"  type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
              </div>
              <div  class="div_pad">
                <label>Address</label>
                <input id="address"  type="text" name="address" :value="old('address')" required autofocus autocomplete="address">
              </div>
              <div  class="div_pad">
                <label>Password</label>
                <input id="password"  type="password" name="password" required autocomplete="new-password">
              </div>
              <div  class="div_pad">
                <label>Confirm Password</label>
                <input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password">
              </div>
              <div  class="div_pad">
                <label>User Type</label>
                <input id="usertype"  type="text" name="usertype" :value="old('usertype')" required autofocus autocomplete="usertype">
              </div>
             
             
              <div  class="div_pad">
                
                <input type="submit" value="Add User" class="btn btn-info">
              </div>



            </form>



          </div>




        </div>

      </div>

    </div>
       



       @include('admin.footer')
  </body>
</html>