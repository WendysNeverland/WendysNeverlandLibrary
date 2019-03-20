<div class="top-bar">
    <div class="top-bar-left">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
    </div>

    @guest
        @include('layouts/guestmenu')
    @else
        @if(Auth::user()->roles()->first()->role=='admin')
            @include('layouts/adminmenu')
        @else
            @include('layouts/usermenu')
        @endif
    @endguest

</div>


