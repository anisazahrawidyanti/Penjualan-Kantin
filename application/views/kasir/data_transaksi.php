<div class="container-fluid">

  <div class="card shadow mb-4">

    <div class="card-body">
      <h3><i class="fas fa-file-invoice mr-2"></i> Data Transaksi</h3><hr>
      <table class="table table-bordered">
          <tr class="text-center">
              <th>ID Transaksi</th>
              <th>ID User</th>
              <th>ID Order</th>
              <th>Tanggal</th>
              <th>Total Harga</th>
              <th>Total Bayar</th>
              <th>Total Kembali</th>
              <th colspan="3">Aksi</th>
          </tr>

          <?php 
              foreach($transaksi as $trans) : ?>

              <tr>
                  <td class="text-center"><?php echo $trans->id_transaksi ?></td>
                  <td class="text-center"><?php echo $trans->id_user ?></td>
                  <td class="text-center"><?php echo $trans->id_order ?></td>
                  <td class="text-center"><?php echo $trans->tanggal ?></td>
                  <td>Rp. <?php echo $trans->total_harga ?></td>
                  <td>Rp. <?php echo $trans->total_uang ?></td>
                  <td>Rp. <?php echo $trans->total_kembali ?></td>
                  <td class="text-center">
                  <?php echo anchor('kasir/data_transaksi/edit/'.$trans->id_transaksi, '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>')?>  
                  </td>
                  <td class="text-center">
                  <?php echo anchor('kasir/data_transaksi/hapus/'.$trans->id_transaksi, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>  
                  </td>
                  <td class="text-center">
                  <?php echo anchor('kasir/data_transaksi/struk/'.$trans->id_transaksi, '<div class="btn btn-dark btn-sm"><i class="fas fa-print"></i></div>')?>  
                  </td>
              </tr>

          <?php endforeach;?>

      </table>
    </div>
  </div>
</div>