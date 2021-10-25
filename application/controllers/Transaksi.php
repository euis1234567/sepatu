<?php
class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Sepatu','sepatu');
	}
    public function index()
    {
        $this->load->view('view-form-transaksi');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli','required',
        [
        'required'   => 'Nama Pembeli Harus Diisi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Pembeli','required|numeric',
        [
        'required'   => 'No Pembeli Harus Diisi',
        'numeric'   => 'No Harus Berupa Angka'
        ]);
        $this->form_validation->set_rules('merek', 'Merek Sepatu','required',
        [
        'required'   => 'Merek Sepatu Harus Diisi'
        ]);
        $this->form_validation->set_rules('ukuran', 'ukuran ','required',
        [
        'required'   => 'ukuran Harus Diisi'
        ]);
        $this->form_validation->set_rules('jumlahbeli', 'Jumlah Beli ','required',
        [
        'required'   => 'Jumlah Beli Harus Diisi'
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-transaksi');
        } else {
        $nama = $this->input->post('nama');
        $merek = $this->input->post('merek');
        $no_hp = $this->input->post('no_hp');
        $ukuran = $this->input->post('ukuran');
        if ($merek == "Nike") {
            $harga = 375000;
        }
        else if ($merek == "Adidas") {
            $harga = 300000;
        }
        else if ($merek == "Kickers") {
            $harga = 250000;
        }
        else if ($merek == "Eiger") {
            $harga = 275000;
        }
        else if ($merek == "Bucherri") {
            $harga = 400000;
        }
        $jumlahbeli = $this->input->post('jumlahbeli');
        $total = $this->sepatu->kali($jumlahbeli,$harga);
        $data = [
			'nama' => $nama,
			'no_hp' => $no_hp,
			'merek' => $merek,
			'harga' => $harga,
			'ukuran' => $ukuran,
			'jumlahbeli' => $jumlahbeli,
			'total' => $total];
        $this->load->view('view-data-transaksi', $data);
    }
        }
    }

?>
