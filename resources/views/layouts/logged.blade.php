<html>
    <head>
        <title>Swapbd.com | @yield('title')</title>
        <link rel="shortcut icon" href="/assets/images/swap.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
        <meta name="author" content="ADD AUTHOR INFORMATION">
        <meta name="robots" content="index, follow">

        <!-- icons -->
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Override CSS file - add your own CSS rules -->
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/slideshow.css">
        <link rel="stylesheet" href="/css/card.css">
        <link rel="stylesheet" href="/css/dropbtn.css">
        <link rel="stylesheet" href="/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="/css/switch.css">
        <link rel="stylesheet" type="text/css" href="/css/chatbox.css">
        <link rel="stylesheet" type="text/css" href="/css/boostrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

    </head>
    <body>
        <div class="container">
        @section('header')
            <div class="header" style="background-color: #008080;color: white;">
                <h1 class="header-heading">Welcome to Swap World</h1>
                <h6>- Where product can be swap</h6>
            </div>
        @show
        @section('nav-bar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="{{route('User.index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">               
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('User.notification')}}">Notification <i class="fa fa-bell"></i></a></button>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('User.profile')}}">profile</a></button>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{ route('User.messageBox')}}">Messege</a></button>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Ad.withLoggedAdView')}}">All Ads</a></button>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Ad.selectType')}}">Post your ad</a></button>
                        <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Logout.index')}}">logout</a></button>
                    </form>
                </div>
            </nav>
        @show
        <br>
        @section('nav-bar2')
            <div class="nav-bar2" align="right">
                <ul class="nav2">
                    <!-- <form method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="dropdown">
                        <button class="dropbtn" style="height: 50px;width: 300px;">Location</button>
                        <div class="dropdown-content">
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Dhaka'])}}">Dhaka</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Khulna'])}}">Khulna</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Chattogram'])}}">Chattogram</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Jessore'])}}">Jessore</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Rajshahi'])}}">Rajshahi</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Barishal'])}}">Barishal</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Rangpur'])}}">Rangpur</a>
                            <a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Sylhet'])}}">Sylhet</a>
                        </div>
                    </div> 

                    <div class="dropdown">
                        <button class="dropbtn" style="height: 50px;width: 300px;">Category</button>
                        <div class="dropdown-content">
                            <a href="{{route('Ad.searchByCategory',['category_name'=>'electronics'])}}">Electronics</a>
                            <a href="{{route('Ad.searchByCategory',['category_name'=>'books'])}}">Books</a>
                            <a href="{{route('Ad.searchByCategory',['category_name'=>'vehicles'])}}">Vehicles</a>
                            <a href="{{route('Ad.searchByCategory',['category_name'=>'Furniture'])}}">Furniture</a>
                            <a href="{{route('Ad.searchByCategory',['category_name'=>'property'])}}">Property</a>
                        </div>
                    </div>

                        
                        <div class="active-cyan-3 active-cyan-4 mb-4">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        

                    
                    </form> -->
                    <!-- <form class="form-inline" method="post" enctype="multipart/form-data">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </form> -->
                    <form method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </ul>
            </div>

        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            <div class="footer">
                &copy; Swap World, All rights researved.
            </div>
        @show
    </div>
    </body>
</html>
