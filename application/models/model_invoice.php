<?php

class Model_invoice extends CI_Model{
    public function index()
    {
        $no_meja        = $this->input->post('no_meja');
        $tanggal        = $this->input->post('tanggal');
        $id_user        = $this->input->post('id_user');
        $keterangan     = $this->input->post('keterangan');
        $total_harga    = $this->input->post('total_harga');
        $status_order   = 'Proses';

        $invoice = array(
            'no_meja'      => $no_meja,
            'tanggal'      => $tanggal,
            'id_user'      => $id_user,
            'keterangan'   => $keterangan,
            'total_harga'  => $total_harga,
            'status_order' => $status_order
        );

        $this->db->insert('orders',$invoice);
        $id_order = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_order'     => $id_order,
                'id_makanan'   => $item['id'],
                'nama_makanan' => $item['name'],
                'jumlah_beli'  => $item['qty'],
                'harga_satuan' => $item['price'],
                'subtotal'     => $item['subtotal']

            );
            $this->db->insert('detail_order', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('orders');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else{
            return FALSE;
        }
    }

    public function ambil_id_order($id_order)
    {
        $result =$this->db->where('id_order',$id_order)->limit(1)->get('orders');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_detail($id_order)
    {
        $result =$this->db->where('id_detail_order',$id_order)->limit(1)->get('detail_order');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}

?>