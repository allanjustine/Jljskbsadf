<div id="wrapper">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <h2
                style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">
                Music Bar
                <img src="images/m-removebg.png" alt=”an artist's rendition of a black hole in space”
                    style="height: 80px; width: 80px; border-radius: 50%; color:hsl(0, 33%, 97%)">
            </h2>
        </div>&nbsp;&nbsp;&nbsp;<br>
        <ul class="sidebar-nav"><br>
            <li>
                @if (!auth()->check())
                    <button type="button" class="btn btn-dark"><i class="fa fa-user-circle-o"
                            style=" border-radius: 50%; font-size:48px;color:hsl(0, 33%, 97%)"></i>&nbsp;User
                        Profile</button>
                @else
                    <button type="button" class="btn btn-dark"><img
                            src="{{ Storage::url(auth()->user()->profile_img) }}"
                            style="height: 60px; width: 60px; border-radius: 50%;"
                            alt="{{ auth()->user()->profile_img }}"> &nbsp;<span
                            class="text-white">{{ auth()->user()->name }}</span></button>
                @endif
            </li><br>
            @if (auth()->check())
                <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="/home" class="text-white"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                </li>
                <li class="{{ request()->is('playlist') ? 'active' : '' }}">
                    <a href="/playlist" class="text-white"><i class="fa fa-music" aria-hidden="true"></i>Music</a>
                </li>
                <li>
                    <a href="/logout" class="text-white"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>
            @else
                <li>
                    <a href="/register" class="text-white"><i class="fa fa-registered"
                            aria-hidden="true"></i>Register</a>
                </li>
                <li>
                    <a href="/" class="text-white"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                </li>
            @endif
        </ul>
    </aside>
    <!-- Centered link -->
    <div class="topnav">
        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <a href="#" class="navbar-brand" id="sidebar-toggle"><span class="material-icons">
                        sync_alt
                    </span>
                </a>
                <div class="topnav-left" <div class="topnav-centered">
                    <h1 href="/home"
                        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 25px; color:#f4f4f4;"
                        class="active"><span class="material-icons">
                        </span>&nbsp;Welcome to my Music Bar</h1>
                </div>
                <!-- center-aligned links (default) -->
                <a href="/" class="nav-link">&nbsp;
                    {{-- <div class="btn-group">
                                    @if (!auth()->check())
                                    &nbsp; &nbsp; &nbsp; &nbsp;<button type="button" class="btn btn-center text-center text-white">&nbsp;User Profile&nbsp;<i class="fa fa-user-circle-o" style="font-size:48px;color:hsl(0, 33%, 97%)"></i></button>
                                  @else
                                  &nbsp; &nbsp; &nbsp; &nbsp;<button type="button" class="btn btn-transparent"><span class="text-light font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{auth()->user()->name}}</span> &nbsp;<img src="{{ Storage::url( auth()->user()->profile_img) }}"
                                 style="height: 80px; width: 80px; border-radius: 50%;" alt="{{  auth()->user()->profile_img }}">
                                    @endif --}}
                    {{-- <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                     @if (auth()->check())
                                  <a class="dropdown-item" href="/logout">Logout</a>
                                      @endif
                                    </div> --}}
        </div>
    </div>&nbsp;
    </a>
</div>
</nav>
</div>
</div>
<script>
    $("#sidebar-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<style>
    /* Centered section inside the top navigation */
    /* Add a black background color to the top navigation */
    .topnav {
        position: relative;
        /* background-color: #333; */
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #0c0c0c;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #a73871;
        color: whitesmoke
    }




    /* Centered section inside the top navigation */
    .topnav-centered a {
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Right-aligned section inside the top navigation */
    .topnav-right {
        float: right;
    }

    .topnav-left {
        float: left;
    }

    /* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
    @media screen and (max-width: 600px) {

        .topnav a,
        .topnav-right {
            float: none;
            display: block;
        }

        .topnav-centered a {
            position: relative;
            top: 0;
            left: 0;
            transform: none;
        }
    }

    body {
        padding-bottom: 30px;
        position: relative;
        min-height: 100%;
    }

    a {
        transition: background 0.2s, color 0.2s;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    #wrapper {
        padding-left: 0;
        transition: all 0.5s ease;
        position: relative;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        overflow-x: hidden;
        background-color: #0c192c;
        color: whitesmoke;
        /* background: #222; */
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    .sidebar-brand {
        position: absolute;
        top: 0;
        width: 250px;
        text-align: center;
        padding: 20px 0;
    }

    .sidebar-brand h2 {
        margin: 0;
        font-weight: 600;
        font-size: 24px;
        color: whitesmoke
    }

    .sidebar-nav {
        position: absolute;
        top: 75px;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav>li {
        text-indent: 10px;
        line-height: 42px;
    }

    .sidebar-nav>li a {
        display: block;
        text-decoration: none;
        color: #757575;
        font-weight: 600;
        font-size: 18px;
    }

    .sidebar-nav>li>a:hover,
    .sidebar-nav>li.active>a {
        text-decoration: none;
        color: whitesmoke;
        background: #ec207c;
    }

    .sidebar-nav>li>a i.fa {
        font-size: 24px;
        width: 60px;
    }

    #navbar-wrapper {
        width: 100%;
        position: absolute;
        z-index: 2;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #navbar-wrapper .navbar {
        padding: 1px;
        background: #008b8b87;
        border-radius: 20;
    }

    /* #navbar-wrapper .navbar a {
        color: #757575;
      } */
    #navbar-wrapper .navbar a:hover {
        color: #e33d66;
    }

    #content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
        top: 100px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    @media (min-width: 700px) {
        #wrapper {
            padding-left: 250px;
        }

        #wrapper.toggled {
            padding-left: 60px;
        }

        #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 60px;
        }

        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -190px;
        }

        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -190px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 60px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 60px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        #wrapper {
            padding-left: 60px;
        }

        #sidebar-wrapper {
            width: 60px;
        }

        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 250px;
        }
    }

    @media (max-width: 767px) {
        #wrapper {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 0;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #navbar-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #wrapper.toggled #content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        #navbar-wrapper {
            position: relative;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #content-wrapper {
            position: relative;
            top: 0;
        }

        #wrapper.toggled #navbar-wrapper,
        #wrapper.toggled #content-wrapper {
            position: relative;
            margin-right: 250px;
        }

    }
</style>
