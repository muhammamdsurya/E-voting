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
    </style>
</head>

<body class="text-center text-bg-dark">
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

        <main class="container text-light my-5">
            <div class="row g-4 mx-auto">
                <div class="col-md-6 col-lg-4">
                    @foreach ($kandidatList as $kandidat)

                    <div class="card" >
                        <img src="{{ asset('img/dilla.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body shadow">
                            <h5 class="card-title mb-3">{{$kandidat->nama}}</h5>
                            <button class="btn btn-secondary w-100 py-3 mb-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#visi" aria-expanded="false" aria-controls="collapseExample">
                                VISI
                            </button>
                            <div class="collapse my-1 shadow" id="visi">
                                <div class="card card-body">
                                {{$kandidat->visi}}
                                </div>
                            </div>
                            <button class="btn btn-secondary w-100 py-3" type="button" data-bs-toggle="collapse"
                                data-bs-target="#misi" aria-expanded="false" aria-controls="collapseExample">
                                MISI
                            </button>

                            <div class="collapse my-1 shadow" id="misi">
                                <div class="card card-body">
                                    {{$kandidat->misi}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Sistem E-Voting SMAN 99 Karawang</p>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

</body>

</html>
