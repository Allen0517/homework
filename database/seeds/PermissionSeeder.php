<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
            'name' => 'article-list',
            'display_name' => 'Display Article Listing',
            'description' => 'See only Listing Of Article'
            ],
            [
                'name' => 'article-create',
                'display_name' => 'Create Article',
                'description' => 'Create New Article'
            ],
            [
                'name' => 'article-edit',
                'display_name' => 'Edit Article',
                'description' => 'Edit Article'
            ],
            [
                'name' => 'article-delete',
                'display_name' => 'Delete Article',
                'description' => 'Delete Article'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}