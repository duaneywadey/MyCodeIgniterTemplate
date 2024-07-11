<?php 

class Categories extends CI_controller
{
	public function create() {

		$this->form_validation->set_rules('category_name', 'category_name', 'required');

		if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('categories/create');
				$this->load->view('templates/footer');
		} else {
			$this->Category_model->createCategory();
			redirect('posts');
		}
	}

}

?>