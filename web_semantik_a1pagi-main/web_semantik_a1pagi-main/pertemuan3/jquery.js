$("#simpan").click(function(){
    var npm = $("#npm").val()
    if (npm == "") {
        $("#lihat_npm").text("NPM Masih kosong!")
    }else{
        $("#lihat_npm").text("")
    }

    var nama_mahasiswa = $("#nama_mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#lihat_nama_mahasiswa").text("Nama Mahasiswa masih kosong!")
    }else{
        $("#lihat_nama_mahasiswa").text("")
    }

    var tgl_lahir = $("#tgl_lahir").val()
    if (tgl_lahir == "") {
        $("#lihat_tgl_lahir").text("Tanggal Lahir belum dipilih!")
    }else{
        $("#lihat_tgl_lahir").text("")
    }

    var jurusan = $("#jurusan").val()
    if (jurusan == "") {
        $("#lihat_jurusan").text("Jurusan belum dipilih!")
    }else{
        $("#lihat_jurusan").text("")
    }

    var alamat = $("#alamat").val()
    if (alamat == "") {
        $("#lihat_alamat").text("Alamat belum diisi!")
    }else{
        $("#lihat_alamat").text("")
    }

    if (npm != "" && nama_mahasiswa != "" && tgl_lahir != "" && jurusan != "" && alamat != "") {
        $("#alert_berhasil").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully!</strong> Data berhasil ditambahkan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)
        var tabel = document.getElementById("tabel_mahasiswa")
        var baris = tabel.insertRow(1)
        var kolom_npm = baris.insertCell(0)
        var kolom_mahasiswa = baris.insertCell(1)
        var kolom_tgl_lahir = baris.insertCell(2)
        var kolom_jurusan = baris.insertCell(3)
        var kolom_alamat = baris.insertCell(4)

        kolom_npm.innerHTML = npm
        kolom_mahasiswa.innerHTML = nama_mahasiswa
        kolom_tgl_lahir.innerHTML = tgl_lahir
        kolom_jurusan.innerHTML = jurusan
        kolom_alamat.innerHTML = alamat

        $("#npm").val("")
        $("#nama_mahasiswa").val("")
        $("#alamat").val("")

    }    

})