<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'id' => '1',
                'nama_project' => 'E-Government Service Portal',
                'deskripsi' => 'A comprehensive platform designed to streamline public service requests and administrative workflows for local government offices.',
                'link_github' => 'https://github.com/nidzom/e-gov-portal',
                'link_project' => 'https://demo.example.com/egov',
                'jenis' => 'Fullstack Development',
                'tahun' => 2026,
                'image' => 'project-egov.jpg',
                'kontribusi' => 'Lead Developer, Database Architect',
            ],
            [
                'id' => '2',
                'nama_project' => 'Intelligent Academic Chatbot',
                'deskripsi' => 'An AI-powered assistant utilizing Retrieval-Augmented Generation (RAG) to provide instant academic information for university students.',
                'link_github' => 'https://github.com/nidzom/rag-chatbot',
                'link_project' => null,
                'jenis' => 'AI & Integration',
                'tahun' => 2025,
                'image' => 'project-ai.jpg',
                'kontribusi' => 'Backend Engineer, AI Researcher',
            ],
            [
                'id' => '3',
                'nama_project' => 'IoT Smart Agriculture System',
                'deskripsi' => 'Real-time soil moisture and environmental monitoring system integrated with a web dashboard for precision farming.',
                'link_github' => 'https://github.com/nidzom/smart-agri',
                'link_project' => 'https://iot.example.com',
                'jenis' => 'IoT & Systems',
                'tahun' => 2025,
                'image' => 'project-iot.jpg',
                'kontribusi' => 'Firmware Developer, Frontend Engineer',
            ],
            [
                'id' => '4',
                'nama_project' => 'Enterprise Resource Planning (ERP)',
                'deskripsi' => 'A scalable ERP solution focused on inventory management and automated financial reporting for small to medium enterprises.',
                'link_github' => null,
                'link_project' => 'https://erp-demo.com',
                'jenis' => 'Web Application',
                'tahun' => 2024,
                'image' => 'project-erp.jpg',
                'kontribusi' => 'Fullstack Developer',
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
