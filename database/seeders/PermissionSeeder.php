<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;


class PermissionSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $modules = [
            // Main
            'dashboard',

            // Leads
            'leads',

            // Management
            'blog',
            'event categories',
            'gallery',
            'match result',
            'organizers',
            'partners',
            'reviews',
            'sports',
            'team',
            'upcoming match',
            'videos',

            // CMS
            'home slider',
            'home about',
            'how we work',
            'home benefit',
            'about section',
            'about values',
            'organizer about',
            'required documents',
            'selection process',
            'privacy policy',
            'terms conditions',

            // Users
            'users',
            'roles permissions',

            // Others
            'profile',
            'settings',
        ];

        $actions = ['view', 'create', 'edit', 'delete'];

        foreach ($modules as $module) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    'name' => "$action $module"
                ]);
            }
        }

        // Special settings
        Permission::firstOrCreate(['name' => 'manage settings']);
    }
}