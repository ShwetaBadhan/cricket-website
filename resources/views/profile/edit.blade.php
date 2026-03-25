{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Profile</h5>

                </div>
            </div>
            <!-- /Page Header -->

            {{-- main --}}
            <div class="container-fluid">
                <div class="row">

                    <!-- Update Profile -->
                    <div class="col-lg-4 col-md-6">

                        @include('profile.partials.update-profile-information-form')

                    </div>


                    <!-- Update Password -->
                    <div class="col-lg-4 col-md-6">
                        @include('profile.partials.update-password-form')
                    </div>


                    <!-- Delete Account -->
                    <div class="col-lg-4 col-md-6">
                        @include('profile.partials.delete-user-form')

                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection