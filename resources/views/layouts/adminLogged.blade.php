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

        @show
        <br>
        @section('nav-bar2')
            <div class="nav-bar2" align="right">
                <ul class="nav2">
                    
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
