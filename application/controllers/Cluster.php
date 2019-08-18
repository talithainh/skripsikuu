<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cluster extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('model_cluster');

		}

		public function index()
		{
			$data['aktif'] = '6';
			$data['data'] = $this->M_cluster->getData();
			$data['datarandom'] = $this->M_cluster->getDataRand();
			$this->load->view('cluster/cluster_view', $data);
		}
		// public function lanjut()
		// {
		// 	$data['aktif'] = '6';
		// $data['datahasil'] = $this->M_knn->getDataHasil();
		// $data['datahasilrank'] = $this->M_knn->getDataHasilRank();
		// $this->load->view('cluster/cluster_view', $data);
		// }

	public function hitung_cluster()
	{
		//mengambil data kuesioner dari database
		$data = $this->model_cluster->getData();
		
		//step 1 : normalisasi data
		//membuat array dengan komponen setengah komponen tabel	
			
		$arr=array(array());
		for($xx=0; $xx<8; $xx++){
			echo "<table border=1>";
			for($zz=0; $zz<8; $zz++){
				echo "<table border=1>";
				$arr[$xx][$zz] = sqrt( //sqrt = fungsi untuk menghitung nilai akar pangkat 2
								pow($data[$xx]['kuisioner1']-$data[$zz]['kuisioner1'], 2)+ //pow = fungsi untuk menghitung nilai kuadrat
								pow($data[$xx]['kuisioner2']-$data[$zz]['kuisioner2'], 2)+
								pow($data[$xx]['kuisioner3']-$data[$zz]['kuisioner3'], 2)+
								pow($data[$xx]['kuisioner4']-$data[$zz]['kuisioner4'], 2)+
								pow($data[$xx]['kuisioner5']-$data[$zz]['kuisioner5'], 2)+
								pow($data[$xx]['kuisioner6']-$data[$zz]['kuisioner6'], 2)+
								pow($data[$xx]['kuisioner7']-$data[$zz]['kuisioner7'], 2)+
								pow($data[$xx]['kuisioner8']-$data[$zz]['kuisioner8'], 2)
								// pow($data[$i]['kuisioner9']-$data[$i+1]['kuisioner9'], 2)+
								// pow($data[$i]['kuisioner10']-$data[$i+1]['kuisioner10'], 2)+
								// pow($data[$i]['kuisioner11']-$data[$i+1]['kuisioner11'], 2)+
								// pow($data[$i]['kuisioner12']-$data[$i+1]['kuisioner12'], 2)+
								// pow($data[$i]['kuisioner13']-$data[$i+1]['kuisioner13'], 2)+
								// pow($data[$i]['kuisioner14']-$data[$i+1]['kuisioner14'], 2)+
								// pow($data[$i]['kuisioner15']-$data[$i+1]['kuisioner15'], 2)+
								// pow($data[$i]['kuisioner16']-$data[$i+1]['kuisioner16'], 2)+
								// pow($data[$i]['kuisioner17']-$data[$i+1]['kuisioner17'], 2)+
								// pow($data[$i]['kuisioner18']-$data[$i+1]['kuisioner18'], 2)+
								// pow($data[$i]['kuisioner19']-$data[$i+1]['kuisioner19'], 2)+
								// pow($data[$i]['kuisioner20']-$data[$i+1]['kuisioner20'], 2)+
								// pow($data[$i]['kuisioner21']-$data[$i+1]['kuisioner21'], 2)+
								// pow($data[$i]['kuisioner22']-$data[$i+1]['kuisioner22'], 2)+
								// pow($data[$i]['kuisioner23']-$data[$i+1]['kuisioner23'], 2)+
								// pow($data[$i]['kuisioner24']-$data[$i+1]['kuisioner24'], 2)+
								// pow($data[$i]['kuisioner25']-$data[$i+1]['kuisioner25'], 2)+
								// pow($data[$i]['kuisioner26']-$data[$i+1]['kuisioner26'], 2)+
								// pow($data[$i]['kuisioner27']-$data[$i+1]['kuisioner27'], 2)+
								// pow($data[$i]['kuisioner28']-$data[$i+1]['kuisioner28'], 2)+
								// pow($data[$i]['kuisioner29']-$data[$i+1]['kuisioner29'], 2)+
								// pow($data[$i]['kuisioner30']-$data[$i+1]['kuisioner30'], 2)+
								// pow($data[$i]['kuisioner31']-$data[$i+1]['kuisioner31'], 2)+
								// pow($data[$i]['kuisioner32']-$data[$i+1]['kuisioner32'], 2)+
								// pow($data[$i]['kuisioner33']-$data[$i+1]['kuisioner33'], 2)+
								// pow($data[$i]['kuisioner34']-$data[$i+1]['kuisioner34'], 2)+
								// pow($data[$i]['kuisioner35']-$data[$i+1]['kuisioner35'], 2)+
								// pow($data[$i]['kuisioner36']-$data[$i+1]['kuisioner36'], 2)+
								// pow($data[$i]['kuisioner37']-$data[$i+1]['kuisioner37'], 2)+
								// pow($data[$i]['kuisioner38']-$data[$i+1]['kuisioner38'], 2)+
								// pow($data[$i]['kuisioner39']-$data[$i+1]['kuisioner39'], 2)+
								// pow($data[$i]['kuisioner40']-$data[$i+1]['kuisioner40'], 2)+
								// pow($data[$i]['kuisioner41']-$data[$i+1]['kuisioner41'], 2)+
								// pow($data[$i]['kuisioner42']-$data[$i+1]['kuisioner42'], 2)+
								// pow($data[$i]['kuisioner43']-$data[$i+1]['kuisioner43'], 2)+
								// pow($data[$i]['kuisioner44']-$data[$i+1]['kuisioner44'], 2)+
								// pow($data[$i]['kuisioner45']-$data[$i+1]['kuisioner45'], 2)+
								// pow($data[$i]['kuisioner46']-$data[$i+1]['kuisioner46'], 2)+
								// pow($data[$i]['kuisioner47']-$data[$i+1]['kuisioner47'], 2)+
								// pow($data[$i]['kuisioner48']-$data[$i+1]['kuisioner48'], 2)+
								// pow($data[$i]['kuisioner49']-$data[$i+1]['kuisioner49'], 2)
							);
				}
					var_dump($arr);
			}
//ini kodingan dari pak ari buat nyari nilai terkecilnya.tapi di aku dia eror
			$index1=0;
			$index2=2;
			$min=$arr[$index1][$index2];
			for($xx=0; $xx<8; $xx++){
			for($zz=0; $zz<8; $zz++){
				if($arr[$xx][$zz]<$min){
				$min=$arr[$xx][$zz];
				$index1 = $xx;
				$index2 = $zz;

			}
		}
	}
}
}

		


	