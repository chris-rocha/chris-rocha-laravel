<ul class="menu">
    <li><a href="{{ route('spa') }}">Home</a></li>
    <li><a class="router-link-active {{ (request()->is('admin')) ? 'router-link-exact-active' : '' }}" href="{{ route('admin') }}">Admin</a></li>
@guest
    <li><a class="router-link-active {{ (request()->is('register')) ? 'router-link-exact-active' : '' }}" href="{{ route('register') }}" class="">Register</a></li>
    <li><a class="router-link-active {{ (request()->is('login')) ? 'router-link-exact-active' : '' }}" href="{{ route('login') }}" class="">Login</a></li>
@endguest
@auth
    <li>
        <form class="remove-bottom" action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="unstyle">Logout</button>
        </form>
    </li>
@endauth
</ul>
