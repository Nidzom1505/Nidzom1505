<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Profile::create([
            'nickname' => 'Nidzzz',
            'headline' => 'I build digital experiences that matter.',
            'biografi_pendek' => 'Mahasiswa Information Systems yang fokus pada Full-stack Web Development.',
            'biografi_lengkap' => 'Saya adalah mahasiswa yang berbasis di Surabaya. Fokus saya adalah Laravel dan ekosistem modern web lainnya...',
            'lokasi' => 'Surabaya, ID',
        ]);

        \App\Models\Experience::create([
            'posisi' => 'Intern E-Government',
            'instansi' => 'Dinkominfo Surabaya',
            'period' => 'Feb 2026 - Present',
            'deskripsi_tugas' => 'Mengembangkan sistem informasi untuk layanan publik.',
        ]);
    }
}
