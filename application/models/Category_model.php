<?php  

class Category_model extends CI_Model
{
	
	public function __construct() {
		$this->load->database();
	}
	public function createCategory() {
		$data = array(
			'category_name' => $this->input->post('category_name')
		);
		return $this->db->insert('categories_codeigniter', $data);

	}
	public function showAllCategories() {
		$sql = "SELECT * FROM categories_codeigniter";
		return $this->db->query($sql)->result_array();
	}
}

?>