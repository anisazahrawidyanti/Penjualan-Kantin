<div class="container-fluid">
    <div class="card shadow mb-4" style="width: 22rem; height: 26rem; position: absolute; top: 55%; left: 55%; transform: translate(-50%, -50%); ">
    
        <div class="card-body">
            <h3 class="text-center">Struk</h3>


            <?php foreach($transaksi as $trans) : ?>

                <table class="table">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><?php echo $trans->tanggal ?></td>
                    </tr>
                    <tr>
                        <td>ID Transaksi</td>
                        <td>:</td>
                        <td><?php echo $trans->id_transaksi ?></td>
                    </tr>
                    <tr>
                        <td>ID Order</td>
                        <td>:</td>
                        <td><?php echo $trans->id_order ?></td>
                    </tr>
                    <tr>
                        <td>Harga Total</td>
                        <td>:</td>
                        <td>Rp. <?php echo $trans->total_harga ?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>:</td>
                        <td>Rp. <?php echo $trans->total_uang ?></td>
                    </tr>
                    <tr>
                        <td>Total Kembali</td>
                        <td>:</td>
                        <td>Rp. <?php echo $trans->total_kembali ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><a href="<?php echo site_url('kasir/data_transaksi/cetak_struk');?>" class="btn btn-sm btn-primary">Cetak</a></button></td>
                    </tr>
                </table>

            <?php endforeach; ?>
        </div>
    </div>
</div>