
    <div class="top-bar-right">
            <ul class="menu main">
                <li><a href="/book">Book</a></li>
                <li><a href="/audiobook">Audiobook</a></li>
            </ul>
    </div>
    <div class="top-bar-right">
            <ul class="menu login">
                <li>
                    <a class="loginTextColor" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li>
                    @if (Route::has('register'))
                        <a class="loginTextColor" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            </ul>
    </div>

