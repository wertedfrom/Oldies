<div class="row">
    <div class="login text-right">
        <a href="index.php">Home</a> |
        {{--<div class="text-right">--}}
        {{--<a href="login.blade.php">Log In</a> |--}}
        {{--<a href="register.php">Sign Up!</a> |--}}
        {{--<a href="logout.php">Log Out</a> |--}}
        @if (Auth::guest())
            <a href="/login">Login</a> |
            <a href="/register">Register</a>
        @else
            {{--<div class="dropdown">--}}
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}
            </a> |
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            {{--</div>--}}
        @endif
    </div>
</div>