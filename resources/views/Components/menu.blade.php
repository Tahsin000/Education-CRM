
<header class="top-area" id="home">
    <div class="header-top-area" id="scroolup">
        <div class="mainmenu-area" id="mainmenu-area">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#home" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt="logo" /></a>
                    </div>
                    <div id="main-nav" class="stellarnav">
                        <ul id="nav" class="nav navbar-nav pull-right">
                            @foreach ($menuData as $menu)
                            <li class=""><a href="{{$menu->menu_link}}">{{$menu->menu_name}}</a></li>
                            @endforeach
                            
                          
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="welcome-slider-area white font16">


        @foreach ($sliderData as $slider)
        <div class="welcome-single-slide">
            <div class="slide-bg-one slide-bg-overlay" style="background: rgba(0, 0, 0, 0) url('../{{$slider->image}}') no-repeat scroll center center / cover;"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1>{{$slider->title}}</h1>
                                <p>{{$slider->description}}</p>
                                {{-- <div class="home-button">
                                    <form action="#">
                                        <input type="search" name="search" id="search" placeholder="Search Courses" />
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach
    </div>
</header>