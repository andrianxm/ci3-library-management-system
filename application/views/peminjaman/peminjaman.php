<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<html>
<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <style>
        body {
            background-color: #f9f9f9;
        }
        .container {
            margin-top: 50px;
        }
        .title {
            font-size: 40px;
            font-weight: bold;
            color: #6b3e2e;
        }
        .form-label {
            font-weight: bold;
            margin-top: 20px;
        }
        .form-control {
            background-color: #f8ebe1;
            border: none;
            border-radius: 10px;
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #6b3e2e;
            color: white;
            border-radius: 20px;
            padding: 5px 20px;
            margin-top: 20px;
        }
        .btn-custom:hover {
            background-color: #925945;
            color: white;
        }
        .book-image {
            height: 100%;
            max-height: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Peminjaman Buku</h1>
        <div class="row">
            <div class="col-md-4">
                <img alt="Book cover of 'Cantik Itu Luka'" class="book-image" height="300" src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg" width="300"/>
            </div>
            <div class="col-md-8">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label form-label" for="id_buku">Id_buku</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="id_buku" type="text"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label form-label" for="nama">Nama</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="nama" type="text"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label form-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="tanggal_pinjam" type="date"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label form-label" for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="tanggal_jatuh_tempo" type="date"/>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-custom" type="submit">Pinjam</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>