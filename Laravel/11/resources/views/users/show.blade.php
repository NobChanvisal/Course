@extends('layouts.app')

@section('content')

<div class="w-full bg-white rounded-4xl shadow-md border border-slate-100 md:flex-row overflow-hidden">
    <!-- Main Content Area -->
        <main class="flex-1 p-6 md:p-12 overflow-y-auto">
            <h2 class="text-2xl font-bold text-slate-900 mb-8">My Profile</h2>
            <!-- Profile Header Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-6 mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-5">
                    <div class="relative group">
                         @if ($user->profile)
                            <img src="{{ $user->profile->avatar }}" class="w-20 h-20 rounded-full bg-slate-100 border-2 border-white shadow-sm object-cover" alt="{{$user->name}}">
                        @else
                            <img src="https://i.pinimg.com/736x/13/fa/66/13fa66ecb5991c5d2de0a7dc63df0842.jpg" class="w-24 h-24 mb-6 rounded-full border">
                        @endif
                        <div class="absolute inset-0 bg-black/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">{{ $user->name }}</h3>
                        <p class="text-sm font-medium text-slate-500">{{$user->email}}</p>
                    </div>
                </div>
                <a href="{{route('users.edit', $user->id)}}" class="inline-flex items-center justify-center px-5 py-2 border border-slate-200 rounded-full text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-all gap-2">
                    Edit
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </a>
            </section>

            <!-- Personal Information Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-8 mb-6">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-base font-bold text-slate-900">Personal Information</h3>
                    
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Date of Birth</label>
                        <p class="text-sm font-semibold text-slate-900">
                            @if ($user->personalInfo)
                                {{ $user->personalInfo->DOB }}
                            @else
                                0000-00-00
                            @endif
                        </p>
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Phone</label>
                        <p class="text-sm font-semibold text-slate-900">
                            @if ($user->personalInfo)
                                {{ $user->personalInfo->phone }}
                            @else
                                000 000 0000
                            @endif
                        </p>
                    </div>
                    <div class="md:col-span-2 space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Bio</label>
                        <p class="text-sm font-semibold text-slate-900 leading-relaxed">
                            @if ($user->profile)
                                {{ $user->profile->bio }}
                            @else
                                No bio available.
                            @endif
                        </p>
                    </div>
                </div>
            </section>

            <!-- Address Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-8">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-base font-bold text-slate-900">Address</h3>
                </div>
                <div>
                    @if ($user->personalInfo)
                        <p class="text-sm font-semibold text-slate-900 leading-relaxed">
                            {{ $user->personalInfo->address }}
                        </p>
                    @else
                        <p class="text-sm font-semibold text-slate-900 leading-relaxed">
                            No address available.
                        </p>
                    @endif
                </div>
               
            </section>
        </main>
    </div>
@endsection