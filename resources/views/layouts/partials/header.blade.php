@yield('header')
<header>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            </li>
            <li><a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ''}}">Nosotros</a>
            </li>
            <a href="{{url('locale/en')}}" >Ingles</a>
            <a href="{{url('locale/es')}}" >Español</a>
        </ul>
    </nav>

</header>
