<?php  

class Posts extends CI_controller
{
	public function index() {
		$data['title'] = 'Latest Posts';
		$data['posts'] = $this->Post_model->get_posts();
		$this->load->view('templates/header.php');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer.php');
	}

	public function view($id) {
		
		$data['post'] = $this->Post_model->get_posts($id);
		$this->load->view('templates/header.php');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer.php');	
	}


	public function edit($id) {
		$data['post'] = $this->Post_model->get_posts($id);
		$data['categories'] = $this->Category_model->showAllCategories();
		$this->load->view('templates/header.php');
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer.php');	
	}

	public function update() {
		if ($this->Post_model->editPost()) {
			redirect('posts');
		}
		else {
			echo "string";
		}
	}

	public function delete($id) {
		$this->Post_model->deletePost($id);
		redirect('posts');
	}

	public function create() {

		$data['title'] = 'Create post';
		$data['categories'] = $this->Category_model->showAllCategories();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		}

		else {
			$this->Post_model->createPost();
			redirect('posts');
		}

	}


}

?>