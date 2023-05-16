<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Cabang',],
            ['id' => 2, 'title' => 'Pimpinan',],
            ['id' => 3, 'title' => 'Member',],

        ];

        foreach($items as $item){
            Role::create($item);
        }
    }
}
