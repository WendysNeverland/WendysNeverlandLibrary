<div class="top-bar">
    <div class="top-bar-left">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
    </div>

    @guest
        @include('layouts/guestmenu')
    @else
        @include('layouts/usermenu')
    @endguest

</div>
