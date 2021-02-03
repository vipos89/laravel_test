<?php


use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' =>'admin'],
            ['name' => 'moderator'],
            ['name' => 'manager'],
        ];

        foreach ($roles as $role){
            Role::firstOrCreate($role);
        }
    }

}
