{{-- nav link component --}}
<a href="{{$href}}" class="nav-link {{ request()->is($active) ? 'active' : '' }}">
    {{ $slot }}
</a>