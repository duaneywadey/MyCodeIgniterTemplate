<?php  

class Pages extends CI_controller
{
	public function view($page = 'home') {
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header.php');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer.php');
	}

	public function about() {
		$data['name'] = "Ivan";
		$this->load->view('templates/header.php');
		$this->load->view('pages/about.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function newPage() {
		$data['numList'] = array("Salary: Up to 25,000php basic + 1,500php subsidy + Night Diff and Complete Benefits", "MUST BE ABLE TO START ASAP", "Set up: Onsite reporting");
		$this->load->view('templates/header.php');
		$this->load->view('pages/newpage.php', $data);
		$this->load->view('templates/footer.php');
	}
}

?>