<div class="topbar mb-5" id="top" style="background: #fffdcb">
    <div class="header6">
        <div class="container po-relative">
            <nav class="navbar navbar-expand-lg h6-nav-bar">
                <a href="/" class="navbar-brand">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info"
                        aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="ti-menu"></span></button>
                <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="h6-info">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/about" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/service" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/posts" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Bloge</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                </div>
            </nav>
        </div>
    </div>
</div>
