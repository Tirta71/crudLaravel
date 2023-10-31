<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Mahasiswa</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <h1 class="text-center mb-5">Data Mahasiswa</h1>

        <div class="container">
            <a href="/tambahMahasiswa" class="btn btn-info text-white">
                Tambah Data
            </a>

            <div class="mb-3 mt-3">
                <form action="/mahasiswa" method="get">
                    <input type="text" id="search" class="form-control" name="search" placeholder="Cari data...">
                </form>
            </div>

            
            @if (isset($error))
                <div class="alert alert-danger mt-5" role="alert">
                    {{ $error }}
                </div>
            @endif
        


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th>Picture</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telpon</th>
                        <th>Created</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no = 1; @endphp @foreach ( $data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>
                            <img
                                src="{{ asset('fotomahasiswa/'.$row->foto) }}"
                                alt=""
                                style="width: 50px"
                            />
                        </td>
                        <td>{{ $row->nim }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->notlpn }}</td>
                        <td>{{ $row->created_at ->diffforhumans() }}</td>
                        <td>
                            <a
                                href="/tampilData/{{ $row-> id }}"
                                class="btn btn-warning"
                            >
                                Edit
                            </a>
                            <a
                                href="#"
                                class="btn btn-danger delete"
                                data-id="{{ $row -> id }}"
                                data-nama="{{ $row -> nama }}"
                            >
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script
            src="https://code.jquery.com/jquery-3.7.1.slim.js"
            integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
            crossorigin="anonymous"
        ></script>

        <script>
            $(".delete").click(function () {
                var MahasiswaId = $(this).attr("data-id");
                var nama = $(this).attr("data-nama");
                Swal.fire({
                    title: "Yakin",
                    text:
                        "Kamu Akan Menghapus Data Dengan Nama " +
                        nama +
                        ", Dan Id " +
                        MahasiswaId +
                        " ",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "/delete/ " + MahasiswaId + "";
                        Swal.fire(
                            "Deleted!",
                            "Data Berhasil Di hapus",
                            "success"
                        );
                    }
                });
            });
        </script>

        <script>
        @if (Session::has('success'))
        Swal.fire(
                "{{ Session::get('success') }}",
                "success"
            ); 
        @endif
            
          
        </script>

        
    </body>
</html>
