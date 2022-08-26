<nav class='navbar'>
    <div class='container'>
        <div class='navbar-brand'>
            <a href='#' class='navbar-item is-size-4'>Amar-Raksha</a>
        </div>
        <div class='navbar-menu'>
            <div class='navbar-end'>
                @guest
                    <div class='navbar-item'>
                        <a class='button is-success is-outlined' href="{{ route('login') }}">Login</a>
                    </div>
                @else
                    <a class='navbar-item' href="{{ route('home') }}">Dashboard</a>
                    <a class='navbar-item'>Events</a>
                    <a class='navbar-item'>Blogs</a>
                    <a class='navbar-item'>Notifications</a>
                    <div class='navbar-item'>
                        <a class='button is-danger is-outlined' onclick="document.getElementById('logout').submit()">Logout</a>
                    </div>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
