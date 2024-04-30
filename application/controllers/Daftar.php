<?php
class Daftar extends CI_Controller
{
    public function index()
    {
         $this->load->view('view-form-data');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nim', 'NIM',
        'required|min_length[3]', [
         'required' => 'NIM harus berupa angka',
         'min_lenght' => 'Nim terlalu pendek']);
         
         $this->form_validation->set_rules('nama', 'Nama',
        'required|min_length[3]', [
         'required' => 'Nama Harus berupa huruf',
         'min_lenght' => 'Nama terlalu pendek']);

         $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir',
         'required|min_length[3]', [
          'required' => 'Tempat lahir Harus berupa huruf',
          'min_lenght' => 'Nama terlalu pendek']);

        $this->form_validation->set_rules('alamat', 'Alamat',
          'required|min_length[3]', [
           'required' => 'Alamat Harus diisi',
           'min_lenght' => 'Nama terlalu pendek']);

         if ($this->form_validation->run() != true) {
            $this->load->view('view-form-data');
         } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat')
    
        ];

         $this->load->view('view-data-data', $data);
        }
    }
}