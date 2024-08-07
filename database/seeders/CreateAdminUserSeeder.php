<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Perfil;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = User::create([
            'name' => 'Igor Batista',
            'email' => 'igor.batista@edu.mt.gov.br',
            'password' => bcrypt('cavalo23')
        ]);

        $perfil = Perfil::create([
            'user_id' => '1',
            'nome' => 'IGOR',

        ]);


        $role = Role::create(['name' => 'Admin', 'DRE1', 'DRE2', 'DRE3', 'DRE4', 'DRE5', 'DRE6', 'DRE7', 'DRE8', 'DRE9', 'DRE10', 'DRE11', 'DRE12', 'DRE13']);
    
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
