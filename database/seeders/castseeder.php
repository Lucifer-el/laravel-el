<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
class castseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cast")->insert([
            'nama'=>Str::random(10),
            'umur'=>Str::random(10),
            'bio'=>Str::random(10),
        ]);
    }
}
