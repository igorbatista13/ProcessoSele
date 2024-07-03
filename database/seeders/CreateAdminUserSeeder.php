<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
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
            'password' => bcrypt('s3duc@@2323')
        ]);
      

      
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'DRE1']);
        $role = Role::create(['name' => 'DRE2']);
        $role = Role::create(['name' => 'DRE3']);
        $role = Role::create(['name' => 'DRE4']);
        $role = Role::create(['name' => 'DRE5']);
        $role = Role::create(['name' => 'DRE6']);
        $role = Role::create(['name' => 'DRE7']);
        $role = Role::create(['name' => 'DRE8']);
        $role = Role::create(['name' => 'DRE9']);
        $role = Role::create(['name' => 'DRE10']);
        $role = Role::create(['name' => 'DRE11']);
        $role = Role::create(['name' => 'DRE12']);
        $role = Role::create(['name' => 'DRE13']);

       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
        
        $user->assignRole([$role->id]);

        // $user = User::create([
        //     'name' => 'Dayane Freitas Coelho', 
        //     'email' => 'dayane.coelho@edu.mt.gov.br',
        //     'password' => bcrypt('seduc@123')
        // ]);
        // $user = User::create([
        //     'name' => 'Lizia Soares Penido', 
        //     'email' => 'lizia.penido@edu.mt.gov.br',
        //     'password' => bcrypt('seduc@123')
        // ]);
        // $user = User::create([
        //     'name' => 'Thais Marques dos Reis', 
        //     'email' => 'thais.marques@edu.mt.gov.br',
        //     'password' => bcrypt('seduc@123')
        // ]);

        // $role = Role::create(['name' => 'seduc']);

        // $permissions = Permission::pluck('id','id')->all();
     
        // $role->syncPermissions($permissions);
        
        // $user->assignRole([$role->id]);


    }

    }