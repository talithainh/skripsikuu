<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    private $filename = "import_data";

	 public function __construct()
     {

        parent ::__construct();

        //load model
        $this->load->model('model_data'); 
        $this->load->library('form_validation');
        $this->load->helper('url');

    }
    public function index()
    {
        $this->session->set_userdata('pages', 'Data Kuesioner');
    	$data['data']=$this->model_data->getDataResponden();
        $data['content'] = $this->load->view('data_responden',$data, TRUE);
        $this->load->view('element/main', $data);
    }

    public function form_data()
    {
        $this->session->set_userdata('pages', 'Import Data Kuesioner');
        $data = array(); 
        // Buat variabel $data sebagai array        
        if(isset($_POST['preview'])){ 
            // Jika user menekan tombol Preview pada form      
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php      
            $upload = $this->model_data->upload_file($this->filename);            
            if($upload['result'] == "success"){ 
                // Jika proses upload sukses        
                // Load plugin PHPExcel nya        
                include APPPATH.'third_party/PHPExcel/PHPExcel.php';                
                $excelreader = new PHPExcel_Reader_Excel2007();        
                $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
                // Load file yang tadi diupload ke folder excel        
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);                
                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php        
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya        
                $data['sheet'] = $sheet;       
            }
            else{ 
                // Jika proses upload gagal        
                $data['upload_error'] = $upload['error']; 
                // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan      
            }    
        }        
        $data['content'] = $this->load->view('form_data',$data, TRUE);
        $this->load->view('element/main', $data);
    }

    public function tambah_data()
    {
        $object['data']=$this->model_data->getDataResponden();
        $this->load->view('form_data',$object);
    }
    
    public function create(){
        // Load plugin PHPExcel nya    
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';        
        $excelreader = new PHPExcel_Reader_Excel2007();    
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
        // Load file yang telah diupload ke folder excel    
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);        
        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database    
        $data = array();        
        $numrow = 1;    
        foreach($sheet as $row){      
            // Cek $numrow apakah lebih dari 1      
            // Artinya karena baris pertama adalah nama-nama kolom      
            // Jadi dilewat saja, tidak usah diimport      
            if($numrow > 1){        
                // Kita push (add) array data ke variabel data        
                array_push($data, array(          
                    'nama'=>$row['A'], // Insert data nis dari kolom A di excel          
                    'masa_dewasa'=>$row['B'], // Insert data nama dari kolom B di excel          
                    'kuisioner1'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel          
                    'kuisioner2'=>$row['D'], // Insert data alamat dari kolom D di excel        
                    'kuisioner3'=>$row['E'],'kuisioner4'=>$row['F'],'kuisioner5'=>$row['G'],
                    'kuisioner6'=>$row['H'],'kuisioner7'=>$row['I'],
                    'kuisioner8'=>$row['J'],'kuisioner9'=>$row['K'],
                    'kuisioner10'=>$row['L'],'kuisioner11'=>$row['M'],
                    'kuisioner12'=>$row['N'],'kuisioner13'=>$row['O'],
                    'kuisioner14'=>$row['P'],'kuisioner15'=>$row['Q'],
                    'kuisioner16'=>$row['R'],'kuisioner17'=>$row['S'],
                    'kuisioner18'=>$row['T'],'kuisioner19'=>$row['U'],
                    'kuisioner20'=>$row['V'],'kuisioner21'=>$row['W'],
                    'kuisioner22'=>$row['X'],'kuisioner23'=>$row['Y'],
                    'kuisioner24'=>$row['Z'],'kuisioner25'=>$row['AA'],
                    'kuisioner26'=>$row['AB'],'kuisioner27'=>$row['AC'],
                    'kuisioner28'=>$row['AD'],'kuisioner29'=>$row['AE'],
                    'kuisioner30'=>$row['AF'],'kuisioner31'=>$row['AG'],
                    'kuisioner32'=>$row['AH'],'kuisioner33'=>$row['AI'],
                    'kuisioner34'=>$row['AJ'],'kuisioner35'=>$row['AK'],
                    'kuisioner36'=>$row['AL'],'kuisioner37'=>$row['AM'],
                    'kuisioner38'=>$row['AN'],'kuisioner39'=>$row['AO'],
                    'kuisioner40'=>$row['AP'],'kuisioner41'=>$row['AQ'],
                    'kuisioner42'=>$row['AR'],'kuisioner43'=>$row['AS'],
                    'kuisioner44'=>$row['AT'],'kuisioner45'=>$row['AU'],
                    'kuisioner46'=>$row['AV'],'kuisioner47'=>$row['AW'],
                    'kuisioner48'=>$row['AX'],'kuisioner49'=>$row['AY'],
                ));      
            }            
            $numrow++; // Tambah 1 setiap kali looping    
        }    
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model    
        $this->model_data->insert_multiple($data);        
        redirect("Data"); // Redirect ke halaman awal (ke controller siswa fungsi index)
    }

    public function update()
    {
    	 // $this->form_validation->set_rules('id_responden','id_responden','trim|required');
        $this->form_validation->set_rules('nama','nama','trim|required');
        $this->form_validation->set_rules('asal_suku','asal_suku','trim|required');
        $this->form_validation->set_rules('kuisioner1','kuisioner1','trim|required');
        $this->form_validation->set_rules('kuisioner2','kuisioner2','trim|required');
        $this->form_validation->set_rules('kuisioner3','kuisioner3','trim|required');
        $this->form_validation->set_rules('kuisioner4','kuisioner4','trim|required');
        $this->form_validation->set_rules('kuisioner5','kuisioner5','trim|required');
        $this->form_validation->set_rules('kuisioner6','kuisioner6','trim|required');
        $this->form_validation->set_rules('kuisioner7','kuisioner7','trim|required');
        $this->form_validation->set_rules('kuisioner8','kuisioner8','trim|required');

       $object['data']=$this->model_data->getDataResponden($id);
            $this->load->view('edit_data',$object);
        }
    
    		
    	// 	);
    	// $this->model_data->simpan($data);
    	// $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan cuy.
    	// 	</div');
    	// redirect('data/');


    // public function edit($id_responden)
    // {
    // 	$id_responden = $this->uri->segment(3);
    // 	$data = array(
    // 		'title' => 'Edit Data Responden',
    // 		'data_responden' => $this->model_data->edit($id_responden));
    // 	$this->load->view('edit_data', $data);

    // }


    public function delete($id)
    {
        $this->model_data->delete($id);
        redirect('data_responden','refresh');
    	// $id['id_responden'] = $this->uri->segment(3);
    	// $this->model_data->hapus($id);

    	// redirect('data/');
    }
 }