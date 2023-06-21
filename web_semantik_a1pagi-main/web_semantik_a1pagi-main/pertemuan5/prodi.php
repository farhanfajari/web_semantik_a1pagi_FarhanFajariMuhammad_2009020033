<h1>Pembelian Produk</h1>

<div class="row">
    <div class="col-sm-6">

        <p id="notif_berhasil"></p>
    
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" id="nama_produk" class="form-control" placeholder="Input Nama Produk">
            <p class="peringatan" id="lihat_nama_produk"></p>
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="number" class="form-control" id="harga" placeholder="Input Harga Produk">
            <p class="peringatan" id="lihat_harga"></p>
        </div>
        <div class="form-group">
            <label for="">Qty Produk</label>
            <input type="number" class="form-control" id="qty" placeholder="Input Qty Produk">
            <p class="peringatan" id="lihat_qty"></p>
        </div>
        <div class="form-group">
            <label for="">Jumlah Pembayaran</label>
            <input type="number" name="" id="jum_bayar" class="form-control" placeholder="Input Jumlah Pembayaran">
            <p class="peringatan" id="lihat_jum_bayar"></p>
        </div>
        <div class="form-group" style="text-align:right;">
            <button class="btn btn-warning mt-2" id="clear">Clear</button>
            <button class="btn btn-info mt-2" id="pay">Pay</button>
        </div>
    </div>
    <div class="col-sm-6" id="total_pembayaran">
        
    </div>
</div>

<script>
    $("#clear").click(function(){
        $("#nama_produk").val("")
        $("#harga").val("")
        $("#qty").val("")
        $("#jum_bayar").val("")
        $("#notif_berhasil").html("")
    })
    $("#pay").click(function(){
        var nama_produk = $("#nama_produk").val()
        if (nama_produk == "") {
            $("#lihat_nama_produk").text("Nama Produk masih kosong!")
        }else{
            $("#lihat_nama_produk").text("")
        }
        var harga = $("#harga").val()
        if (harga == "") {
            $("#lihat_harga").text("Harga Produk masih kosong!")
        }else{
            $("#lihat_harga").text("")
        }
        var qty = $("#qty").val()
        if (qty == "") {
            $("#lihat_qty").text("Qty Produk masih kosong!")
        }else{
            $("#lihat_qty").text("")
        }
        var jum_bayar = $("#jum_bayar").val()
        if (jum_bayar == "") {
            $("#lihat_jum_bayar").text("Jumlah bayar tidak boleh kosong!")
        }else{
            var total_bayar = qty * harga
            if (total_bayar > jum_bayar) {
                $("#lihat_jum_bayar").text("Jumlah bayar tidak mencukupi!")
            }else{
                $("#lihat_jum_bayar").text("")
            }
        }

        if (nama_produk != "" && harga != "" && qty != "" && jum_bayar != "" && jum_bayar >= total_bayar) {
            var sisa = jum_bayar - total_bayar
            $("#notif_berhasil").html(`
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully!</strong> Terimakasih telah melakukan pembelian.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            `)
            $("#total_pembayaran").html(`
            <h4>Total Pembayaran</h4>
        <div class="row">
            <div class="col-sm-4">
                Nama Produk
            </div>
            <div class="col-sm-8">
                `+nama_produk+`
            </div>
            <div class="col-sm-4">
                Harga Produk
            </div>
            <div class="col-sm-8">
                `+harga+`
            </div>
            <div class="col-sm-4">
                Qty Pembelian
            </div>
            <div class="col-sm-8">
                `+qty+`
            </div>
            <div class="col-sm-4">
                Total Bayar
            </div>
            <div class="col-sm-8">
                <h4>`+total_bayar+`</h4>
            </div>
            <div class="col-sm-4">
                Jumlah Bayar
            </div>
            <div class="col-sm-8">
                `+jum_bayar+`
            </div>
            <div class="col-sm-4">
                Jumlah Kembalian
            </div>
            <div class="col-sm-8">
                <h2 class="text-danger">`+sisa+`</h2>
            </div>
        </div>
            `)
        }

    })
</script>