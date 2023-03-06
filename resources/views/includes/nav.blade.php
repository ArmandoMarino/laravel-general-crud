<div class="container nav">
    <ul class="navbar-nav">
        <li>
            <a class="nav-link @if (Route::is('home')) active @endif" href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a class="nav-link @if (Route::is('cards.index')) active @endif" href="{{ route('cards.index') }}">Cards</a>
        </li>
    </ul>
</div>
