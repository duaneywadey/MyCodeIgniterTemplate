<?php
class Post_model extends CI_Model{
	
	public function __construct() {
		$this->load->database();
	}
	public function get_posts($id=null) {
		if ($id === null) {
			$sql = "SELECT 
						blog_codeigniter.post_id AS post_id,
						blog_codeigniter.title AS title,
						blog_codeigniter.body AS body,
						categories_codeigniter.category_name AS category_name
					FROM blog_codeigniter
					JOIN categories_codeigniter 
						ON blog_codeigniter.category_id = categories_codeigniter.category_id
					";
			return $this->db->query($sql)->result_array();
		}
		else {
			$sql = "SELECT 
						blog_codeigniter.post_id AS post_id,
						blog_codeigniter.title AS title,
						blog_codeigniter.body AS body,
						categories_codeigniter.category_name AS category_name
					FROM blog_codeigniter
					JOIN categories_codeigniter 
						ON blog_codeigniter.category_id = categories_codeigniter.category_id
					WHERE blog_codeigniter.post_id = ?
					";
			return $this->db->query($sql,array($id))->row_array();
		}

	}
	public function createPost() {
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id')
		);
		return $this->db->insert('blog_codeigniter',$data);
	}

	public function editPost() {

		$title = $this->input->post('title');
		$body = $this->input->post('body');
		$post_id = $this->input->post('post_id');
		$category_name = $this->input->post('category_name');

		$sql = "UPDATE blog_codeigniter 
				SET title = ?, body = ? 
				WHERE post_id = ?";

		return $this->db->query($sql, array($title,$body,$post_id));
		
	}

	public function deletePost($id) {
		$sql = "DELETE FROM blog_codeigniter WHERE post_id = ?";
		return $this->db->query($sql, array($id));
	}
}