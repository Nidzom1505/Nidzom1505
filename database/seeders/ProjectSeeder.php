<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->truncate();

        $projects = [
            [
                'id' => 1,
                'nama_project' => 'E-Government Service Portal',
                'slug' => Str::slug('E-Government Service Portal'),
                'deskripsi' => 'Sebuah platform komprehensif yang dirancang untuk merampingkan permintaan layanan publik dan alur kerja administratif di kantor pemerintah daerah.',
                'tantangan' => 'Mengintegrasikan berbagai departemen pemerintah yang memiliki standar data berbeda-beda ke dalam satu sistem terpadu yang aman.',
                'solusi' => 'Membangun arsitektur microservices dengan API Gateway yang terpusat untuk standarisasi komunikasi antar layanan.',
                'link_github' => 'https://github.com/nidzom/e-gov-portal',
                'link_project' => 'https://demo.example.com/egov',
                'jenis' => 'Fullstack Development',
                'tahun' => 2026,
                'image' => 'project-egov.jpg',
                'kontribusi' => 'Lead Developer & System Architect',
                'konteks' => 'Proyek Magang di Dinas Komunikasi dan Informatika',
                'tech_stack' => json_encode(['Laravel 11', 'Tailwind CSS', 'PostgreSQL', 'Redis']),
                'screenshots' => json_encode(['egov-ss1.jpg', 'egov-ss2.jpg']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_project' => 'Intelligent Academic Chatbot',
                'slug' => Str::slug('Intelligent Academic Chatbot'),
                'deskripsi' => 'Asisten bertenaga AI yang memanfaatkan Retrieval-Augmented Generation (RAG) untuk memberikan informasi akademik instan bagi mahasiswa universitas.',
                'tantangan' => 'Memastikan chatbot memberikan jawaban yang akurat berdasarkan dokumen PDF kampus yang tidak terstruktur dan sering berubah.',
                'solusi' => 'Mengimplementasikan teknologi Vector Database (Pinecone) dan pemrosesan dokumen menggunakan LangChain untuk ekstraksi konteks yang akurat.',
                'link_github' => 'https://github.com/nidzom/rag-chatbot',
                'link_project' => null,
                'jenis' => 'AI & Integration',
                'tahun' => 2025,
                'image' => 'project-ai.jpg',
                'kontribusi' => 'Backend Engineer (AI Integration)',
                'konteks' => 'Kelompok 4 - Matakuliah Manajemen Web Profesional (MWP)',
                'tech_stack' => json_encode(['Python', 'FastAPI', 'OpenAI API', 'React']),
                'screenshots' => json_encode(['ai-ss1.jpg']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama_project' => 'IoT Smart Agriculture System',
                'slug' => Str::slug('IoT Smart Agriculture System'),
                'deskripsi' => 'Sistem pemantauan kelembaban tanah dan lingkungan secara real-time yang terintegrasi dengan dashboard web untuk pertanian presisi.',
                'tantangan' => 'Konektivitas sensor di area pertanian yang minim sinyal internet stabil untuk pengiriman data real-time.',
                'solusi' => 'Menggunakan protokol MQTT yang ringan dan fitur caching offline pada perangkat keras ESP32 sebelum sinkronisasi ke cloud.',
                'link_github' => 'https://github.com/nidzom/smart-agri',
                'link_project' => 'https://iot.example.com',
                'jenis' => 'IoT & Systems',
                'tahun' => 2025,
                'image' => 'project-iot.jpg',
                'kontribusi' => 'Firmware Developer',
                'konteks' => 'Final Project Semester 4',
                'tech_stack' => json_encode(['ESP32', 'C++', 'Node.js', 'InfluxDB']),
                'screenshots' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nama_project' => 'Personal Finance Manager',
                'slug' => Str::slug('Personal Finance Manager'),
                'deskripsi' => 'Aplikasi web sederhana untuk mencatat pemasukan dan pengeluaran harian dengan visualisasi grafik bulanan.',
                'tantangan' => null,
                'solusi' => null,
                'link_github' => null,
                'link_project' => null,
                'jenis' => 'Basic Web App',
                'tahun' => 2024,
                'image' => 'finance-app.jpg',
                'kontribusi' => 'Independent Developer',
                'konteks' => 'Latihan Pribadi (Self Learning)',
                'tech_stack' => json_encode(['Bootstrap 5', 'Vanilla JS', 'PHP Native']),
                'screenshots' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($projects as $project) {
            DB::table('projects')->insert($project);
        }
    }
}
