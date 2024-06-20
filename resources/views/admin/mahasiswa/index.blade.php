<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - SIPKopi Admin Dashboard</title>



    <link rel="shortcut icon" href="{{ asset('assets/ic/ic_logokopi.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/simple-datatables/style.css">


    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/compiled/css/table-datatable.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/compiled/css/app.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/compiled/css/app-dark.css">

</head>

<body>
    <script src="{{ asset('mazer') }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <img src="{{ asset('assets/ic/ic_logokopi_lands.png') }}" height="35" />
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>


                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Quiz</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item">
                                    <a href="{{ route('admin.quiz.daftar_quiz.index') }}" class="submenu-link">Daftar
                                        Quiz</a>
                                </li>

                        </li>

                        <li class="submenu-item  ">
                            <a href="{{ route('admin.quiz.question.index') }}" class="submenu-link">Daftar
                                Pertanyaan</a>

                        </li>

                        <li class="submenu-item  ">
                            <a href="{{ route('admin.quiz.option.index') }}" class="submenu-link">Jawaban</a>

                        </li>

                    </ul>

                    <li class="sidebar-title">Manajemen Akun</li>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ route('admin.mahasiswa.index') }}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Data Mahasiswa</span>
                        </a>
                    </li>
                    </ul>
                    <ul class="menu" style="margin-top: 350px">
                        <li class="sidebar-item mt-4">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="" class="sidebar-link"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="bi"></i>
                                        <span>Keluar</span>
                                    </a>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Daftar Mahasiswa</h3>
                        <p class="text-subtitle text-muted">Melihat hasil nilai mahasiswa yang ditampilkan berbentuk
                            data pada
                            tabel simpel.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DaftarMahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Tabel Daftar Nilai Mahasiswa</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result->user }}</td>
                                <td>{{ $result->skor }}</td>
                                @endforeach
                            </tbody>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
            <!-- Modal add-->
            <div class="modal fade" id="tambahMahasiswaModal" tabindex="-1"
                aria-labelledby="tambahMahasiswaModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahMahasiswaModalLabel">Form Tambah Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form {{-- action="{{ route('admin.mahasiswa.daftar_mahasiswa.store') }}"  --}} method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="judulMahasiswa"
                                                            class="col-md-4 col-form-label">Judul
                                                            Mahasiswa</label>
                                                        <div class="col-md-8">
                                                            <input type="text" id="judulMahasiswa"
                                                                class="form-control" name="title"
                                                                placeholder="cth: Merawat Tanaman Kopi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary me-1 mb-1"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2024 &copy; SIP Coffee</p>
                </div>
                <div class="float-end">
                    <p>Crafted by <a href="https://polije.ac.id" target="_blank">Politeknik Negeri Jember</a></p>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="{{ asset('mazer') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset('mazer') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset('mazer') }}/assets/compiled/js/app.js"></script>



    <script src="{{ asset('mazer') }}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{ asset('mazer') }}/assets/static/js/pages/simple-datatables.js"></script>

</body>

</html>
