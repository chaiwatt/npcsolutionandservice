<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LineClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('line_clients')->insert([
            [
                'client_id' => 'EgZxcmnu8BOTubAGfxLx5d',    
                'client_secret' => 'wamEBJlAJKHNtDZ08SjRFTrNyXhvS7T3gkWvRW7BSsY',  
            ]
        ]);
    }
}
