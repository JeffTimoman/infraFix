@extends('layouts.app')
@section('title')
    Default
@endsection

@section('content')

    <div class="container-fluid p-3 my-5">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h1>Apa itu Infrafix?</h1>
            <div class="border" style="height: 1vh; border-radius: 8px;background-color: #A50000; width: 20%;"></div>
        </div>
        <div class="container mt-5" style="font-size: 25px;">
            <span>
                Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola
                secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara
                parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau
                bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan
                pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu
                untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya,
                masyarakat memiliki satu saluran pengaduan secara Nasional.
            </span>
            <br><br>
            <span>
                Untuk itu kami membuat Infrafix adalah layanan penyampaian semua aspirasi dan pengaduan masyarakat
                Indonesia melalui beberapa kanal pengaduan yaitu website www.infrafix.com. Infrafix adalah aplikasi
                inovatif yang dirancang untuk membantu pengguna dalam melaporkan infrastruktur yang rusak atau
                bermasalah di lingkungan mereka. Dengan menggunakan Infrafix, pengguna dapat dengan mudah
                mengidentifikasi, mendokumentasikan, dan melaporkan kerusakan pada berbagai jenis infrastruktur, seperti
                jalan, jembatan, gedung, dan fasilitas umum lainnya. Aplikasi ini menyediakan antarmuka yang
                user-friendly, memungkinkan pengguna untuk mengambil foto kerusakan, menambahkan deskripsi yang relevan,
                dan mengirim laporan secara instan ke pihak berwenang. Dengan Infrafix, kita dapat berkontribusi dalam
                menjaga dan memperbaiki infrastruktur publik, menciptakan lingkungan yang lebih aman dan nyaman untuk
                semua.
            </span>
            <br><br>
            <span>
                Infrafix dibentuk untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat
                agar laporan dari manapun dan jenis apapun akan disalurkan kepada pihak berwenang yang tepat untuk
                menanganinya. Infrafix bertujuan agar:
                <li>Pihak berwenang dapat mengelola laporan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan
                    terkoordinasi dengan baik;</li>
                <li>Pihak berwenang memberikan akses untuk partisipasi masyarakat dalam menyampaikan laporan; dan</li>
                <li>Meningkatkan kualitas pelayanan publik.</li>
            </span>
            <br><br>
            <span>
                Infrafix telah terhubung dengan 34 Kementerian, 96 Lembaga, dan 493 Pemerintah daerah di Indonesia
                <div class="d-flex justify-content-center">
                    <img src="https://www.lapor.go.id/themes/lapor/assets/images/map-summary.png" alt="">
                </div>
            </span>
            <br>
            <span>
                Jumlah pelapor per Januari 2019 adalah sebanyak 801.257 pengguna. Total laporan yang telah masuk
                sebanyak 1.389.891. Dari jumlah tersebut, sebanyak 1.389.891 laporan telah ditindaklanjuti oleh pihak
                yang berwenang.
            </span>
            <br><br>
            <span>
                Fitur-fitur yang ada dalam Infrafix:
                <li>Anonim: Fitur yang bisa dipilih oleh pelapor yang akan membuat identitas pelapor tidak akan
                    diketahui oleh pihak terlapor dan masyarakat umum.</li>
                <li>Rahasia: Seluruh isi laporan tidak dapat dilihat oleh publik.</li>
                <li>Tracking ID: Nomor unik yang berguna untuk meninjau proses tindak lanjut laporan yang disampaikan
                    oleh masyarakat.</li>
            </span>
        </div>
    </div>



    <style>
        .wrapper {
            max-width: 65%;
            margin: auto;
        }

        .wrapper>h1 {
            margin: 1.5rem 0;
            text-align: center;
            letter-spacing: 3px;
        }

        .accordion {
            /* background-color: #f1f1f1; */
            background-color: white;
            color: #444;
            cursor: pointer;
            font-size: 1.2rem;
            width: 100%;
            padding: 2rem 2.5rem;
            border: none;
            /* border: 1px solid rgba(0,0,0, 0.2); */
            outline: none;
            transition: 0.4s;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }

        .accordion i {
            font-size: 1.6rem;
        }

        .active,
        .accordion:hover {
            background-color: #f1f1f1;
        }

        /* .accordion.active{
                border: none;
            } */
        .pannel {
            background-color: #f1f1f1;
            padding: 0 2rem 2.5rem 2rem;
            display: none;
            overflow: hidden;
            /* border: solid red;         */
        }

        .pannel p {
            color: rgba(0, 0, 0, 0.7);
            font-size: 1.2rem;
            line-height: 1.4;
        }

        .faq {
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 10px 0;
        }

        .faq.active {
            /* border: none; */
            border: 1px solid rgba(0, 0, 0, 0.2);
        }
    </style>
    <div class="wrapper mt-5">
        <h1>Pertanyaan yang sering ditanyakan</h1>
        <div class="faq">
            <button class="accordion">
                Apa itu Infrafix?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Infrafix adalah aplikasi yang memungkinkan pengguna melaporkan infrastruktur yang rusak di sekitar
                    mereka.</p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
                Bagaimana cara melaporkan infrastruktur yang rusak?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Untuk melaporkan infrastruktur yang rusak, ikuti langkah-langkah berikut:

                    Buka aplikasi Infrafix.
                    Klik "Lapor".
                    Isi formulir laporan dengan informasi yang diminta, termasuk lokasi dan deskripsi kerusakan.
                    Unggah foto kerusakan (opsional).
                    Klik "Kirim".</p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
                Apakah laporan saya akan segera ditindaklanjuti?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Setiap laporan yang masuk akan diperiksa oleh tim Infrafix dan diteruskan ke pihak yang berwenang
                    untuk penanganan lebih lanjut. Waktu penanganan mungkin bervariasi tergantung pada jenis kerusakan
                    dan prioritas penanganan.</p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
                Apakah saya bisa melihat status laporan saya?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Ya, Anda bisa melihat status laporan Anda melalui menu "Lapor" di aplikasi Infrafix, lalu bisa klik tautan yang bertuliskan "klik Disini", dan masukkan Kode Laporan beserta Kode Akses laporan yang ingin di tuju. Anda akan
                    mendapatkan update mengenai status penanganan laporan tersebut. </p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
                Bagaimana cara memberikan komentar pada postingan?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Untuk memberikan komentar pada postingan, klik pada postingan yang ingin Anda komentari, ketik
                    komentar Anda di kolom yang disediakan, lalu klik icon " -> ".</p>
            </div>
        </div>
        <div class="faq">
            <button class="accordion">
                Apakah saya bisa melaporkan komentar yang tidak pantas?
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>Ya, jika Anda menemukan komentar yang tidak pantas atau melanggar aturan komunitas, Anda bisa
                    melaporkannya dengan mengklik icon report di sebelah komentar tersebut.</p>
            </div>
        </div>

    </div>
    <script>
        var acc = document.getElementsByClassName('accordion');
        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener('click', function() {
                this.classList.toggle('active');
                this.parentElement.classList.toggle('active');
                const pannel = this.nextElementSibling;
                if (pannel.style.display === 'block') {
                    pannel.style.display = 'none';
                } else {
                    pannel.style.display = 'block';
                }
            });
        }
    </script>

    <!-- footer -->
    <footer class="bg-body-tertiary text-center text-lg-start ">
        <div class="text-center p-5" style="background-color: #F7F8F9">
            &copy; Copyright 2024. Infrafix
        </div>
    </footer>
@endsection
@section('script')
@endsection
