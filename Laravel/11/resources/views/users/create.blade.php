@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Create Account</h2>
            <p class="mt-2 text-gray-600">Please fill in the details below to register.</p>
        </div>

        <form id="registrationForm" class="space-y-6" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
                    <input type="text" id="name" name="name" required maxlength="255"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    
                </div>

                <!-- Email -->
                <div class="col-span-2 md:col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address *</label>
                    <input type="email" id="email" name="email" required maxlength="255"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                <!-- Password -->
                <div class="col-span-2 md:col-span-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
                    <input type="password" id="password" name="password" required minlength="8"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                <!-- Confirm Password -->
                <div class="col-span-2 md:col-span-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                <!-- Phone -->
                <div class="col-span-2 md:col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" maxlength="20"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                <!-- Date of Birth -->
                <div class="col-span-2 md:col-span-1">
                    <label for="DOB" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="DOB" name="DOB"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                <!-- Address -->
                <div class="col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address" rows="3"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition"
                        placeholder="Enter your address..."></textarea>
                </div>

                <!-- Avatar -->
                <div class="col-span-2">
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Profile Picture (Max 2MB)</label>
                    <div class="mt-1 flex items-center">
                        <input type="file" id="avatar" name="avatar" accept="image/*"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition">
                    </div>
                </div>

                <!-- Bio -->
                <div class="col-span-2">
                    <label for="bio" class="block text-sm font-medium text-gray-700">Short Bio</label>
                    <textarea id="bio" name="bio" rows="3" maxlength="1000"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition"
                        placeholder="Tell us about yourself..."></textarea>
                    <div class="text-right text-xs text-gray-400 mt-1"><span id="bioCount">0</span>/1000</div>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition transform active:scale-95">
                    Create Account
                </button>
            </div>
        </form>
    </div>
@endsection