
<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">{{ __('Home')}}</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">{{ __('About')}}</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">{{ __('Projects')}}</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">{{ __('Contact')}}</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>

         @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
