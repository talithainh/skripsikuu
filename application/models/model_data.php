<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_data extends CI_model{

    // public function get_all()
    // {
    //     $query = $this->db->select("*")
    //              ->from('tbl_responden')
    //              ->order_by('id_responden', 'DESC')
    //              ->get();
    //     return $query->result();
    // }
    public function insertData()
    {
        $object = array(
            // 'id_responden'=> $this->input->post('id_responden'),
            'nama'=> $this->input->post('nama'),
            'asal_suku'=> $this->input->post('asal_suku'),
            'kuisioner1'=> $this->input->post('kuisioner1'),
            'kuisioner2'=> $this->input->post('kuisioner2'),
            'kuisioner3'=> $this->input->post('kuisioner3'),
            'kuisioner4'=> $this->input->post('kuisioner4'),
            'kuisioner5'=> $this->input->post('kuisioner5'),
            'kuisioner6'=> $this->input->post('kuisioner6'),
            'kuisioner7'=> $this->input->post('kuisioner7'),
            'kuisioner8'=> $this->input->post('kuisioner8'),
            );
        $this->db->insert('tbl_responden',$object);
    }

    public function upload_file($filename){    
        $this->load->library('upload'); 
        // Load librari upload        
        $config['upload_path'] = './excel/';    
        $config['allowed_types'] = 'xlsx';    
        $config['max_size']  = '2048';    
        $config['overwrite'] = true;    
        $config['file_name'] = $filename;      
        $this->upload->initialize($config); 

        // Load konfigurasi uploadnya    
        if($this->upload->do_upload('file')){ 
            // Lakukan upload dan Cek jika proses upload berhasil      
            // Jika berhasil :      
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;    
        }
        else{      
            // Jika gagal :      
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
            return $return;    
        }  
    }    

    // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data  
    public function insert_multiple($data){    
        $this->db->insert_batch('tbl_responden', $data);  
    }

    public function getDataResponden()
    {
        $query = $this->db->query("select * from tbl_responden");
        return $query->result();
    }

   public function getData($id)
    {
        $this->db->where('id_responden',$id);
        $query = $this->db->get('tbl_responden');
        return $query->result();
    }
   
    public function updateById($id)
    {
        $object=array
        ( 
            // 'id_responden'=> $this->input->post('id_responden'),
            'nama'=> $this->input->post('nama'),
            'asal_suku'=> $this->input->post('asal_suku'),
            'kuisioner1'=> $this->input->post('kuisioner1'),
            'kuisioner2'=> $this->input->post('kuisioner2'),
            'kuisioner3'=> $this->input->post('kuisioner3'),
            'kuisioner4'=> $this->input->post('kuisioner4'),
            'kuisioner5'=> $this->input->post('kuisioner5'),
            'kuisioner6'=> $this->input->post('kuisioner6'),
            'kuisioner7'=> $this->input->post('kuisioner7'),
            'kuisioner8'=> $this->input->post('kuisioner8'),
            );
        $this->db->where('id_responden',$id);
        $this->db->update('tbl_responden',$object);
        if($this->db->affected_rows()==1){
            return true;
        }else{
            return false;
        }
       

    }

    public function delete($id)
    {

     $this->db->where('id_responden',$id);
     $this->db->delete('tbl_responden');

    }

}