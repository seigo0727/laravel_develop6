<header class="header">
    <div class="container-fluid">

        <div class="header-nav">

            <div class="nav-left">

                <div class="navbar-header">
                    <a class="btn-nav-toggle" href="javascript:void(0);">
                        ×
                    </a>
                </div>

                {{-- <ul class="nav-items d-none d-sm-block">
                    <li class="nav-item">
                        <a href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Menu</a>
                    </li>
                </ul> --}}
            </div>

            <div class="nav-right">
                <ul class="nav-items">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>