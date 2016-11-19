<div class="row" style="margin: 10px 0;">
    <div class="header col-md-10 col-md-offset-1">
        <div class="col-md-2">
            {{--<a style="color: rgba(212,99,99,.93)" href="index.php">Oldie's</a>--}}
            <a class="logo" href="/">Oldie's</a>
        </div>
        <div class="login col-md-5 col-md-offset-5">
            <div class="row">
                <div class="text-right">
                    @if (Auth::guest())
                        <a href="/login">Login</a> |
                        <a href="/register">Register</a>
                    @else
                        {{--<div class="dropdown">--}}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  {{ Auth::user()->name }}
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
{{--            @if(Route::current()->getName() !== 'login')--}}
                <div class="row">
                    <div class="searcher" style="margin-top: 5px;">
                        <form id="searcher" action="/search" method="POST">
                            <div class="input-group">
                                {{ csrf_field() }}
                                <input type="text" class="form-control box-shadow" name="query">
                                <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </span>
                            </div>
                        </form>

                    </div>
                </div>
            {{--@endif--}}
        </div>
    </div>
</div>
{{--<div class="col-xs-12"><hr></div>--}}
<hr style="margin: 10px 0;">