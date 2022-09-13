<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }
    public function index()
    {
        $this->data['title']       = 'Mahasiswa';
        $this->data['mahasiswa']   = $this->mahasiswa_model->getDataMahasiswa();

        $this->load->view('mahasiswa/mahasiswa_list', $this->data);
    }

    public function add()
    {
        $this->data['title'] = "Tambah Data";
        $this->load->view('mahasiswa/mahasiswa_add', $this->data);

       
    }

    public function add_save()
    {

        $config['upload_path']            = './upload/';
        $config['allowed_types']          = 'gif|jpg|png';
        $config['max_size']               = 5000;

        $this->load->library('upload',$config);

        $upload = $this->upload->do_upload('foto_profile');

        if($upload) {

        $nama_file = $this->upload->data()['file_name'];   

        $data = array(
            'nama'          => $this->input->post('nama'),
            'nim'           => $this->input->post('nim'),
            'no_hp'         => $this->input->post('no_hp'),
            'email'         => $this->input->post('email'),
            'jurusan'       => $this->input->post('jurusan'),
            'foto_profile'  => $nama_file,
            'alamat'        => $this->input->post('alamat')

        );

        $simpan = $this->mahasiswa_model->simpan_data($data);

        if ($simpan) {
            redirect("mahasiswa");
        }
    }
    else {echo'Salah';}
}
    public function edit($id_mhs){
        $this->data['title'] ='Edit Data';
        $this->data['mahasiswa'] = $this->mahasiswa_model->find($id_mhs);

        $this->load->view('mahasiswa/mahasiswa_edit', $this->data);
    }

    public function edit_save() {
            $id_mhs = $this->input->post('id_mhs');
            $data = array (
                'nama'          => $this->input->post('nama'),
                'nim'           => $this->input->post('nim'),
                'no_hp'         => $this->input->post('no_hp'),
                'email'         => $this->input->post('email'),
                'jurusan'       => $this->input->post('jurusan'),
                
                'alamat'        => $this->input->post('alamat')
            );

            $edit = $this->mahasiswa_model->edit_data($data,$id_mhs);
        
            if($edit){
            redirect('mahasiswa');
        }             
    }

    public function hapus($id_mhs){
        $del = $this->mahasiswa_model->delete($id_mhs);
        if ($del){
            redirect('mahasiswa');
        }
    }   
}   
?>



