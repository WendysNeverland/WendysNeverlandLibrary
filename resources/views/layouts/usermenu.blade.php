<div class="top-bar-right">
    <ul class="menu main">
        <li><a href="/user/book">Book</a></li>
        <li><a href="/user/audiobook">Audiobook</a></li>
        <li><a href="/user/author">Author</a></li>
        <li><a href="/user/author">Author</a></li>
    </ul>
</div>
<div class="top-bar-right">
    <ul class="menu login">
        <li>
            <a class="loginTextColor" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        <li>
            <a class="loginTextColor" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li>
    </ul>
</div>
