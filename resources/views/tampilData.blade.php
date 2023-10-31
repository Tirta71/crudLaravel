<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tambah Data Mahasiswa</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <h1 class="text-center mb-5">Edit Data Mahasiswa</h1>

        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/updateData/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Nim</label
                                >
                                <input type="text" class="form-control" name="nim" value="{{ $data -> nim }}"/>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Nama</label
                                >
                                <input type="text" class="form-control" name="nama" value=" {{ $data -> nama  }}" />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >No Telpn</label
                                >
                                <input type="number" class="form-control" name="notlpn" value="{{ $data -> notlpn }}"/>
                            </div>
                            <div class="form-floating">
                                <select
                                    class="form-select"
                                    id="floatingSelect"
                                    aria-label="Floating label select example"
                                    name="jeniskelamin"
                                >
                                    <option selected>
                                       {{ $data -> jeniskelamin }}
                                    </option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <label for="floatingSelect"
                                    >Silahkan Pilih Jenis Kelamin</label
                                >
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
    </body>
</html>
