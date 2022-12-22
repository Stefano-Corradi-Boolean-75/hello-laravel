
<header>

    <nav>
        <ul>
            <li><a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ url('/') }}">home</a></li>
            <li><a class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about') }}">chi siamo</a></li>
            <li><a class="{{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{ route('contacts') }}">contatti</a></li>
        </ul>
    </nav>

</header>
