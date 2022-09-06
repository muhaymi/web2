<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [
            'npm' => '2017051070',
            'nama'    => 'Muhaymi Nurdin',
            'alamat'    => 'Bandarlampung',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ],
        [
            'npm' => '2017051072',
            'nama'    => 'Dodit',
            'alamat'    => 'Palembang',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ],
        [
            'npm' => '2017051007',
            'nama'    => 'Muhamad Faiz',
            'alamat'    => 'Jakarta',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ]
        ];

        // Simple Queries
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}