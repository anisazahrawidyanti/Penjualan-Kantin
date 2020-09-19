<div class="container-fluid">

    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $order->id_order ?></div></h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>Nama Menu</th>
            <th>Jumlah Pesan</th>
            <th>Harga Satuan</th>
            <th>Sub-total</th>
        </tr>

        <?php
        
            $total = 0;
            foreach ($orders as $order) :
                $subtotal = $order->jumlah * $order->harga;
                $total += $subtotal; 
        ?>
        
        <tr>
            <td><?php echo $order->id_makanan ?></td>
            <td><?php echo $order->nama_makanan ?></td>
            <td><?php echo $order->jumlah_beli ?></td>
            <td><?php echo number_format($order->total_harga_beli, 0,',','.') ?></td>
            <td><?php echo number_format($subtotal, 0,',','.') ?></td>
        </tr>

        <?php endforeach ?>
    </table>
</div>