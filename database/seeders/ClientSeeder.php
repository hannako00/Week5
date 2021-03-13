<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Hayley Marshall',
                'address' => 'New Orleans, LA',
                'phone' => '096372832254',
                'capitalization' => 1000,
                'loan' => 500
            ],

            [
                'name' => 'Elijah Mikaelson',
                'address' => 'Alkansas, USA',
                'phone' => '09876672452',
                'capitalization' => 3000,
                'loan' => 2000
            ],

            [
                'name' => 'Marcellus Gerard',
                'address' => 'New York, USA',
                'phone' => '09223456213',
                'capitalization' => 4000,
                'loan' => 2000
            ]
        ];

        foreach($data as $client){
            \App\Models\Client::create($client);
        }
    }
}
