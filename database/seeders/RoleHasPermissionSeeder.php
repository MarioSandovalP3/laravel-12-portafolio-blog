<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([ // Home
            "permission_id" => 1,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([// Analitica
            "permission_id" => 2,
            "role_id" => 1
        ]);

        /** Usuario */
        
        DB::table('role_has_permissions')->insert([
            "permission_id" => 3,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 4,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 5,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 6,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 7,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 8,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 9,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 10,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 11,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 12,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 13,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 14,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 15,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 16,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 17,
            "role_id" => 1
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 18,
            "role_id" => 1
        ]);


         /** Admin */
        
         DB::table('role_has_permissions')->insert([
            "permission_id" => 1,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 2,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 3,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 4,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 6,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 7,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 10,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 11,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 12,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 13,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 14,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 15,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 16,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 17,
            "role_id" => 2
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 18,
            "role_id" => 2
        ]);

    
        /** Editor */
        
        DB::table('role_has_permissions')->insert([
            "permission_id" => 1,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 2,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 10,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 11,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 12,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 13,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 14,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 15,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 16,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 17,
            "role_id" => 3
        ]);
        DB::table('role_has_permissions')->insert([
            "permission_id" => 18,
            "role_id" => 3
        ]);


         /** Lector */
        
        DB::table('role_has_permissions')->insert([
            "permission_id" => 1,
            "role_id" => 4
        ]);
       
        DB::table('role_has_permissions')->insert([
            "permission_id" => 17,
            "role_id" => 4
        ]);
        
    }
}
