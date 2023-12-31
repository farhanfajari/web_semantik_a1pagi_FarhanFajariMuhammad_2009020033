<h1>Halaman Program Studi</h1>

<p id="berhasil"></p>

<div class="row">
    <div class="col-sm-10">
        <label for="">Nama Prodi</label>
        <input type="text" class="form-control" id="nama_prodi" placeholder="Input Nama Prodi">
        <p class="peringatan" id="lihat_nama_prodi"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>

<script>
    $("#simpan_prodi").click(function() {
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $("#lihat_nama_prodi").text("Nama Prodi masih kosong!")
        } else {
            $.ajax({
                type: "POST",
                url: "controller/simpan_prodi.php",
                data: "nama_prodi=" + nama_prodi,
                success: function(data) {
                    if (data == "berhasil") {
                        $("#berhasil").html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successfully!</strong> Data berhasil ditambahkan.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `)
                    } else if (data == "gagal") {
                        $("#berhasil").html(`
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Warning!</strong> Data yang sama sudah ada sebelumnya.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `)
                    }
                }
            })
            $("#lihat_nama_prodi").text("")
        }
    })
</script>