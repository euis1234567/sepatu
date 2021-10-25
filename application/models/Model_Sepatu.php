<?php
class Model_Sepatu extends CI_Model
{

  public function getSepatu()
  {
      $sepatu = [
          ['merek' => '', 'harga' => ''],
          ['merek' => '', 'harga' => ''],
      ];
  }

  public $jumlahbeli, $harga, $total;

  public function kali($jml = null, $hrg = null)
  {
    $this->jumlahbeli = $jml;
    $this->harga = $hrg;
    $this->total = $this->jumlahbeli * $this->harga;
    return $this->total;
  }
	public function getAllPost(){
		// $post =[];
		// foreach ($_POST as $p) {
		// 	$post[] = $p;
		// }
		return $this->input->post();
	}
}
