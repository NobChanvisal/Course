<a href="{{ route($route) }}"
   class="px-4 py-2.5 rounded-md
   {{ request()->routeIs($active)
        ? 'bg-sky-400 text-white'
        : 'bg-slate-100 hover:bg-slate-200' }}">
    {{ $slot }}
</a>