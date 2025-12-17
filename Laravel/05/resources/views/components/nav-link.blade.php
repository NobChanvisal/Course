<a href="{{route($page)}}" 
    class="flex items-center px-2 py-1.5 text-body rounded-md hover:bg-slate-100 {{request()->routeIs($page)?'bg-slate-100':''}}">
    <span class="ms-3">{{$slot}}</span>
</a>