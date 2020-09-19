<?php

class Invoice extends CI_Controller{
    public function detail($id_order)
    {
        $data['orders'] = $this->model_invoice->ambil_id_order($id_order);
        // $data['orders'] = $this->model_invoice->ambil_id_order($id_order);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer'); 
    }
}

?>