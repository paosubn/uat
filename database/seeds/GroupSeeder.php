<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['grupo' => 'auxiliar','descripcion' => 'Auxiliar','status' => '1'],
            ['grupo' => 'fiscal','descripcion' => 'Fiscal','status' => '1'],
            ['grupo' => 'ZZ','descripcion' => 'Tester','status' => '1'],
        ]);
    }
}
