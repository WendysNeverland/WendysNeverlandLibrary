<div class="top-bar-right">
    <ul class="menu main">
        <li><a href="admin/author">Authors</a></li>
        <li><a href="admin/author/create">Add Author</a></li>
        <li><a href="admin/book">Books</a></li>
        <li><a href="admin/book/create">Add Book</a></li>
        <li><a href="admin/audiobook">Audiobooks</a></li>
        <li><a href="admin/audiobook/create">Add Audiobook</a></li>
        <li><a href="admin/genre">Genres</a></li>
        <li><a href="admin/genre/create">Add Genre</a></li>
        <li><a href="admin/narrator">Narrator</a></li>
        <li><a href="admin/narrator/create">Add Narrator</a></li>
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
