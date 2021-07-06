<?php
class Recipe_ctrl extends CI_Controller
{
	public function index()
	{
		$data['categories'] = $this->Category_mdl->list();
		$this->load->view('recipe',$data);
	}

	public function list(){
		$id = $this->uri->segment(2);
		$data['categories'] = $this->Category_mdl->list();
		$data['meals'] = $this->Meal_mdl->list(array('meals_categoryid'=>$id));
		$data['category_name']  = $this->Category_mdl->list(array('categories_id'=>$id));
		$this->load->view('recipe_list',$data);
	}
	public function detail(){
		$id = $this->uri->segment(2);
		$data['categories'] = $this->Category_mdl->list();
		$data['meals'] = $this->Meal_mdl->list(array('meals_id'=>$id));
		$data['ratings'] = $this->Rating_mdl->getAllPosts($id);
		$this->load->view('recipe_detail',$data);
	}

















}

?>
