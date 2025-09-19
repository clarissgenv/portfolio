<?php

// File ini berfungsi sebagai database untuk konten portofolio.
// Cukup ubah teks di sini, dan halaman index.php akan otomatis terupdate.

return [
    'profile' => [
        'name' => 'Clarissa Geneviere The',
        'title' => 'UI/UX Enthusiast & Business Information Technology Student',
        'email' => 'clarissa.geneviere@email.com',
        'linkedin' => 'linkedin.com/in/clarissagenevierethe',
        'portfolio_url' => 'your-portfolio-link.com' // Ganti jika sudah punya domain
    ],

    'about' => [
        'heading' => 'Tentang Saya',
        'intro' => 'Halo! Saya Clarissa Geneviere The, mahasiswa Business Information Technology di BINUS UNIVERSITY dengan minat mendalam pada UI/UX Design. Saya memiliki semangat untuk menjembatani kesenjangan antara kebutuhan bisnis dan solusi teknologi melalui desain yang intuitif dan berpusat pada pengguna (user-centered).',
        'passion' => 'Saya mengubah ide kompleks menjadi pengalaman digital yang disukai pengguna. Dengan fondasi dari jurusan Business Information Technology dan hasrat pada UI/UX Design, saya terlatih untuk tidak hanya mendesain tampilan yang indah, tetapi juga merancang sistem yang efisien dan menjawab kebutuhan nyata. Saya siap menerapkan energi dan keahlian ini untuk menciptakan solusi nyata di lingkungan kerja yang dinamis.'
    ],

    'skills' => [
        'hard' => [
            'title' => 'Hard Skills',
            'list' => [
                'UI/UX Design: User Research, Wireframing, Prototyping, User Flow, Usability Testing',
                'Analisis Proses Bisnis: Pemetaan proses dan identifikasi kebutuhan fungsional.',
                'Manajemen Database: Desain dan kueri database dasar menggunakan SQL.',
                'Dasar Pemrograman: Logika dan struktur pengembangan software (Java).',
                'Desain Grafis: Membuat aset visual pendukung antarmuka.'
            ]
        ],
        'soft' => [
            'title' => 'Soft Skills',
            'list' => [
                'Pemecahan Masalah (Problem Solving)',
                'Komunikasi & Empati',
                'Kerja Tim & Kolaborasi',
                'Berpikir Analitis & Kritis',
                'Adaptif & Cepat Belajar'
            ]
        ]
    ],

    'tools' => [
        'heading' => 'Software & Tools',
        'list' => [
            'Figma', 'Canva', 'Adobe Illustrator', 'MySQL', 'Java'
        ]
    ],

    'projects' => [
        'heading' => 'Proyek Pilihan',
        'list' => [
            [
                'title' => 'Redesain Aplikasi Mobile Banking XYZ',
                'description' => 'Studi kasus pribadi untuk merancang ulang alur transfer pada aplikasi Mobile Banking XYZ yang sering dikeluhkan pengguna karena prosesnya yang rumit. Tujuannya adalah untuk menyederhanakan proses dan meningkatkan kepuasan pengguna.',
                'role' => 'Peran Saya: UI/UX Designer (Riset, Wireframing, Prototyping, Desain Visual)',
                'tools' => 'Tools: Figma, Google Forms',
                'result' => 'Hasil: Menghasilkan prototipe interaktif dengan alur transfer yang lebih singkat (dari 7 menjadi 4 langkah). Berdasarkan usability testing, desain baru ini 40% lebih cepat dan mendapatkan skor kepuasan 9/10.',
                'link' => '#' // Ganti dengan link Behance/Figma
            ],
            [
                'title' => 'Desain Website untuk UMKM "Kopi Senja"',
                'description' => 'Proyek akademis untuk membantu UMKM "Kopi Senja" go-digital dengan merancang sebuah website e-commerce yang informatif dan mudah digunakan untuk pemesanan online.',
                'role' => 'Peran Saya: UI/UX Designer & Business Analyst',
                'tools' => 'Tools: Figma, Canva',
                'result' => 'Hasil: Merancang website dengan fitur katalog produk, sistem pemesanan sederhana, dan halaman "Tentang Kami" yang menarik. Desain ini dirancang untuk meningkatkan brand awareness dan membuka kanal penjualan baru.',
                'link' => '#' // Ganti dengan link Behance/Figma
            ]
        ]
    ],

    'experience' => [
        'heading' => 'Pengalaman Kerja',
        'list' => [
            [
                'role' => 'Social Media Intern',
                'company' => 'Monstrans',
                'period' => 'Mulai - Selesai',
                'tasks' => [
                    'Mengelola dan membuat konten visual dan tulisan untuk media sosial, berhasil meningkatkan engagement rate sebesar 15% dalam 3 bulan.',
                    'Menganalisis performa konten mingguan untuk mengidentifikasi tren dan memberikan rekomendasi strategi.',
                    'Berinteraksi dengan audiens untuk membangun komunitas dan citra positif perusahaan.'
                ]
            ]
        ]
    ],
    
    'certification' => [
        'heading' => 'Sertifikasi',
        'list' => [
            'Cisco Certified Support Technician (CCST) Cybersecurity - Diterbitkan 2023'
        ]
    ],

    'contact' => [
        'heading' => 'Kontak',
        'text' => 'Saya sangat antusias untuk berdiskusi lebih lanjut mengenai peluang magang dan bagaimana saya dapat memberikan kontribusi. Jangan ragu untuk menghubungi saya!',
    ]
];