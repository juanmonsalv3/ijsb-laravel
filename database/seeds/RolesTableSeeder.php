<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = new \DateTime();
        
        DB::table('roles')->insert([
            'role_id' => 1,
            'name' => 'admin',
            'created_at' => $time,
            'updated_at' => $time
        ]);
        
        DB::table('roles')->insert([
            'role_id' => 2,
            'name' => 'principal',
            'created_at' => $time,
            'updated_at' => $time
        ]);
        
        DB::table('roles')->insert([
            'role_id' => 3,
            'name' => 'secretary',
            'created_at' => $time,
            'updated_at' => $time
        ]);
        
        DB::table('roles')->insert([
            'role_id' => 4,
            'name' => 'teacher',
            'created_at' => $time,
            'updated_at' => $time
        ]);
        
        DB::table('roles')->insert([
            'role_id' => 5,
            'name' => 'parent',
            'created_at' => $time,
            'updated_at' => $time
        ]);
    }
}
