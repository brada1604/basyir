<?php
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
echo User::all();
echo "<br>";
echo Auth::user()->id;
echo "<br>";
echo RoleUser::select('id', 'user_id', 'role_id')->get();
echo "<br>";
echo Role::select('id', 'name')->get();

die();
?>
@if (Auth::user()->role->name == 'Superadmin')
    hai Superadmin
@elseif (Auth::user()->role->name == 'Contributor')
    hai Contributor
@elseif (Auth::user()->role->name == 'Creator')
    hai Creator
@endif

<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> -->
