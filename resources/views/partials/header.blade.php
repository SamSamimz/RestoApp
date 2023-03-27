    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            @auth
                            <li class="submenu">
                                <a href="javascript:;">{{Auth::user()->name}}</a>
                                <ul>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                                @if(Auth::user()->is_admin)
                                <li class="scroll-to-section"><a href="{{route('adminhome')}}">Dashboard</a></li> 
                                @endif
                            </li>
                            <li class="scroll-to-section"><a href="#" class="position-relative">Carts <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">{{$carts->count()}}</span></a></li> 
                            @else
                            <li class="scroll-to-section"><a href="{{route('register')}}">Register</a></li> 
                            <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li> 
                            @endauth
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
