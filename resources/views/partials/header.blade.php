<header>
    <div class="container cnt-header">
        <div class="row row-header">
            <div class="col-2">
                <div class="logo">
                    <img class="image-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC-logo">
                </div>
            </div>
            <div class="col-10">
                <div class="menu-bar">
                    <ul>
                        @foreach ($menu as $key => $item )
                        <li>
                            <a class="{{ Route::currentRouteName() == $key ? 'active' : ''}}" href="#">{{ $key }}</a>
                        </li>
                        @endforeach
                        <li class="li-input">
                            <input type="text" placeholder="search">
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <div class="jumbotron"></div>
</header>