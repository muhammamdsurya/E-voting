<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>E - VOTING</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        body {
            position: relative;
            /* Diperlukan untuk mengatur posisi pseudoelemen */
            z-index: 1;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/bg.jpeg') }}');
            opacity: 0.5;
            /* Nilai opacity yang lebih rendah membuat gambar lebih redup */
            z-index: -1;
            /* Pastikan pseudoelemen berada di belakang elemen body */
        }

        .countdown-container {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .countdown-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 120px;
            /* Atur lebar kotak */
            height: 120px;
            /* Atur tinggi kotak */
            box-shadow: 0 2px 4px rgba(250, 250, 250, 0.5);
        }


        .countdown-value {
            font-size: 40px;
            font-weight: bold;
        }

        .countdown-label {
            font-size: 16px;
        }
    </style>
</head>

<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
                <div class="container">
                    <a class="navbar-brand" href="#">E-Voting</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3 fs-5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/menu">Kandidat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container text-light mb-3">
            <p class="display-3">PILIH KANDIDATMU DALAM : </p>
            <div class="countdown-container my-3">
                <div class="countdown-box">
                    <div class="countdown-value" id="days">0</div>
                    <div class="countdown-label">Hari</div>
                </div>
                <div class="countdown-box">
                    <div class="countdown-value" id="hours">0</div>
                    <div class="countdown-label">Jam</div>
                </div>
                <div class="countdown-box">
                    <div class="countdown-value" id="minutes">0</div>
                    <div class="countdown-label">Menit</div>
                </div>
                <div class="countdown-box">
                    <div class="countdown-value" id="seconds">0</div>
                    <div class="countdown-label">Detik</div>
                </div>
            </div>

            <p class="lead">Pemilihan hanya akan dimulai ketika <span class="text-danger fw-bold"><u>hari sudah
                        tiba</u></span>.
                Sambil
                menunggu waktu pemilihan, kamu
                bisa melihat siapa saja kandidatnya serta visi & misi di <span class="text-danger fw-bold"><u>menu
                        kandidat</u></span>. silahkan kembali lagi nanti!
            </p>

            <a href="/menu" id="kandidatButton" class="btn btn-lg btn-light fw-bold px-4">Kandidat</a>
            <a href="/login" id="loginButton" class="btn btn-lg btn-light fw-bold d-none px-4">Login</a>


        </main>

        <footer class="mt-auto text-white-50">
            <p>Sistem E-Voting SMAN 99 Karawang</p>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript-->

    <script>
        // Tanggal akhir countdown (YYYY, MM (0-11), DD, HH, mm, ss)
        // Tanggal akhir countdown (YYYY, MM (0-11), DD, HH, mm, ss)
        const countdownDate = new Date(2024, 6, 31, 23, 59, 59).getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = countdownDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            const text = document.querySelector('.lead');

            if (distance <= 0) {
                // Jika countdown berakhir, tampilkan tombol "Login" dan sembunyikan tombol "Kandidat"
                document.getElementById('kandidatButton').classList.add('d-none');
                document.getElementById('loginButton').classList.remove('d-none');
                text.innerHTML =
                    'Pemilihan ketua OSIS <span class="text-danger fw-bold">sudah tiba!</span> Silahkan pilih kandidatmu sesuai kriteria kamu tanpa adanya paksaan dari pihak manapun. <span class="text-danger fw-bold">Laporkan</span> admin jika terdapat kandidat yang melakukan tindakan suap!';
            } else {
                // Jika countdown belum berakhir, tampilkan tombol "Kandidat" dan sembunyikan tombol "Login"
                document.getElementById('kandidatButton').classList.remove('d-none');
                document.getElementById('loginButton').classList.add('d-none');

                // Perbarui nilai countdown
                document.getElementById('days').innerText = days;
                document.getElementById('hours').innerText = hours;
                document.getElementById('minutes').innerText = minutes;
                document.getElementById('seconds').innerText = seconds;
            }
        }

        // Memperbarui countdown setiap 1 detik
        setInterval(updateCountdown, 1000);

        // Memanggil fungsi untuk memperbarui countdown agar tampilan terlihat saat pertama kali dibuka
        updateCountdown();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

</body>

</html>
