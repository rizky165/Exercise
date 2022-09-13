<?php

defined('BASEPATH') or exit('Not Allowed Acess Direct');

class Mahasiswa_model extends CI_Model
{

    public function getDataMahasiswa()
    {
        $this->db->order_by('id_mhs','DESC');
        $data = $this->db->get('mahasiswa')->result();
        // select * from mahasiswa;
        return $data;
    }

    public function simpan_data($data)
    {
        $this->db->insert('mahasiswa', $data);
        return $this;
    }

    public function find($id_mhs){
        $this->db->where('id_mhs',$id_mhs);
        $data = $this->db->get('mahasiswa')->row();
        
        /* select * from mahasiswa where id_mhs = '$id_mhs'*/

        return $data;
    }

    public function edit_data($data,$id_mhs){
        $this->db->where('id_mhs',$id_mhs);
        $this->db->update('mahasiswa',$data);

        /* update nmahasiswa set id_mhs 'xxx',  where id_mhs='xxx'*/

        return $this;
    }

    public function delete($id_mhs){
        $this->db->where('id_mhs',$id_mhs);
        $this->db->delete('mahasiswa');
        return $this;
    }
}


?>