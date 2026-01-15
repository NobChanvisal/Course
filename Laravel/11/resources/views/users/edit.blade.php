@extends('layouts.app')

@section('content')

<x-alert />
<div class="w-full bg-white rounded-4xl shadow-md border border-slate-100 md:flex-row overflow-hidden">
    <!-- Main Content Area -->
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <main class="flex-1 p-6 md:p-12 overflow-y-auto">
            <h2 class="text-2xl font-bold text-slate-900 mb-8">My Profile</h2>
            <!-- Profile Header Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-6 mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-5">
                    <div class="relative group cursor-pointer">
                        {{-- Avatar Logic --}}
                        @if ($user->profile && $user->profile->avatar)
                            <img src="{{ $user->profile->avatar }}" class="w-24 h-24 rounded-full border-white shadow-sm object-cover" id="avatar-preview">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random" class="w-24 h-24 rounded-full border-4 border-white shadow-sm" id="avatar-preview">
                        @endif
                        
                        {{-- Hidden File Input --}}
                        <label for="avatar-upload" class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                        </label>
                        <input type="file" name="avatar" id="avatar-upload" class="hidden" accept="image/*">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">{{ $user->name }}</h3>
                        <p class="text-sm font-medium text-slate-500">{{$user->email}}</p>
                    </div>
                </div>
            </section>

            <!-- Personal Information Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-8 mb-6">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-base font-bold text-slate-900">Personal Information</h3>
                    
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Username</label>
                        <input type="text" name="name" id="" class=" w-full border py-2.5 px-3 rounded-md"
                        value="{{ $user->name }}" >
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Email</label>
                        <input type="email" name="email" id="" class=" w-full border py-2.5 px-3 rounded-md"
                            value="{{ $user->email }}" >
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Date of Birth</label>
                        <input type="date" name="DOB" id="DOB" class=" w-full border py-2.5 px-3 rounded-md"
                        value="{{ $user->personalInfo ? $user->personalInfo->DOB : '0000-00-00' }}" >
                    </div>
                    <div class="space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Phone</label>
                        <input type="text" name="phone" id="phone" class=" w-full border py-2.5 px-3 rounded-md"
                            value="{{ $user->personalInfo ? $user->personalInfo->phone : '000 000 0000' }}" >
                    </div>
                    <div class="md:col-span-2 space-y-1">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest">Bio</label>
                        <textarea name="bio" id="bio" rows="10" class=" w-full border py-2.5 px-3 rounded-md" >
                            {{ $user->profile ? $user->profile->bio : 'No bio available.' }}
                        </textarea>
                    </div>
                </div>
            </section>

            <!-- Address Card -->
            <section class="bg-white border border-slate-100 rounded-2xl p-8">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-base font-bold text-slate-900">Address</h3>
                </div>
                <textarea name="address" id="address" rows="5"class=" w-full border py-2.5 px-3 rounded-md">
                    {{ $user->personalInfo ? $user->personalInfo->address : 'No address available.' }}
                </textarea>
            </section>
            <div class="flex gap-3 mt-5">
                    <a href="{{ route('users.show', $user->id) }}" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50">Cancel</a>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-sm transition-all">Save Changes</button>
            </div>
        </main>
    </form>
</div>
    <script>
    document.getElementById('avatar-upload').onchange = evt => {
        const file = evt.target.files[0];
        if (file) {
            document.getElementById('avatar-preview').src = URL.createObjectURL(file)
        }
    }
</script>
@endsection