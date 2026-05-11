<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PWEB - Layout Grid Sempurna</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        /* Background utama halaman (Abu-abu) */
        body {
            background-color: #e9ecef;
            padding: 40px 0;
            margin: 0;
        }

        /* Kotak Putih Utama di Tengah */
        .white-box {
            max-width: 1080px; /* Membatasi lebar maksimal kotak putih */
            margin: 0 auto;    /* Memastikan kotak tetap di tengah */
            background-color: white;
            padding: 60px 80px 0 80px; /* Bawah 0 agar menyatu dengan logo bar */
        }

        .section-title {
            font-weight: 800;
            color: #333;
            letter-spacing: 1px;
            margin-bottom: 60px;
        }

        /* Testimonial Items */
        .testimonial-item {
            margin-bottom: 50px;
            padding: 0 40px;
        }

        .avatar-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #eee;
        }

        .testimonial-text {
            font-style: italic;
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .client-info h6 {
            font-weight: bold;
            margin-bottom: 0;
            font-size: 0.9rem;
            color: #333;
        }

        .client-info small {
            color: #999;
        }

        /* Section Logo yang menyatu di bawah kotak putih */
        .logo-bar {
            background-color: #adb5bd; /* Warna abu-abu lebih gelap sesuai gambar */
            padding: 30px 0;
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            text-align: center;
        }

        .logo-item {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col-12 col-lg-12 white-box">

            <div class="text-center">
                <h2 class="section-title">OUR CLIENTS LOVE US</h2>
            </div>

            <div class="row">
                <div class="col-md-6 testimonial-item">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQF-lOpkpVtBXA/profile-displayphoto-shrink_800_800/B56Zc8DkeMH8Ac-/0/1749059259546?e=1775088000&v=beta&t=wBf90iUDQwvKoGCHQjSTJrVcU2Q4YdVv5NF5a78HnqE" alt="Client" class="avatar-img">
                        </div>
                        <div class="col-8">
                            <p class="testimonial-text">"Sistem manajemen konten yang ditawarkan sangat membantu tim kreatif kami dalam mengorganisir aset visual secara efisien. Sangat direkomendasikan untuk perusahaan yang fokus pada branding."</p>
                            <div class="client-info">
                                <h6>Nail Ayyasy</h6>
                                <small>CMO of Figma</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQHSWTEmk4GcPA/profile-displayphoto-crop_800_800/B56ZvTzpm6KwAI-/0/1768785091483?e=1775088000&v=beta&t=X2CtPxZcHGr5WvStml-aVYx6lnOZt8lB1_mhqF1YHws" alt="Client" class="avatar-img">
                        </div>
                        <div class="col-8">
                            <p class="testimonial-text">"Kolaborasi yang Gacor! UI/UX yang dibangun sangat intuitif dan memudahkan user kami untuk berinteraksi lebih lama di dalam aplikasi. Hasil kerja  sangat rapi."</p>
                            <div class="client-info">
                                <h6>A. Kezia J.I. Manurung</h6>
                                <small>Founder of PETA Scholar</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQEPg0GqEPK7HQ/profile-displayphoto-shrink_800_800/B56ZcKPXWJHoAc-/0/1748223490120?e=1775088000&v=beta&t=C04ddZDa5MIpEJnQ3w0_d8pim-J27JpYkhV_YIxvQIQ" alt="Client" class="avatar-img">
                        </div>
                        <div class="col-8">
                            <p class="testimonial-text">"Pekerjaan yang sangat detail dan presisi. Kami sangat terbantu dengan solusi desain yang modern dan performa website yang sangat cepat setelah dilakukan optimasi secara menyeluruh."</p>
                            <div class="client-info">
                                <h6>Fayza Vicka Khairina</h6>
                                <small>CEO of Kumo Photostudio</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="https://media.licdn.com/dms/image/v2/D4D03AQFGsLKkwCUH9Q/profile-displayphoto-shrink_800_800/B4DZeHjB6yH4Ak-/0/1750325797267?e=1775088000&v=beta&t=B0qCOhqeSDHxJ_0seAopWBnYsdmJN8jGf879rFqrVBg" alt="Client" class="avatar-img">
                        </div>
                        <div class="col-8">
                            <p class="testimonial-text">"Inovasi teknis yang diberikan melampaui ekspektasi kami. Integrasi sistem grid yang diterapkan membuat platform kami tampil sempurna di berbagai ukuran layar desktop maupun mobile."</p>
                            <div class="client-info">
                                <h6>Aiman Rediansyah</h6>
                                <small>Ketua Polda Metrojaya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="logo-bar">
                <div class="row no-gutters">
                   <div class="col-2"><img src="https://logo.clearbit.com/google.com" class="logo-img" alt="Google"></div>
                    <div class="col-2"><img src="https://logo.clearbit.com/spotify.com" class="logo-img" alt="Spotify"></div>
                    <div class="col-2"><img src="https://logo.clearbit.com/netflix.com" class="logo-img" alt="Netflix"></div>
                    <div class="col-2"><img src="https://logo.clearbit.com/airbnb.com" class="logo-img" alt="Airbnb"></div>
                    <div class="col-2"><img src="https://logo.clearbit.com/slack.com" class="logo-img" alt="Slack"></div>
                    <div class="col-2"><img src="https://logo.clearbit.com/tesla.com" class="logo-img" alt="Tesla"></div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
