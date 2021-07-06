<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating_ctrl extends CI_Controller {

  public function __construct(){

    parent::__construct();
		$this->logged_in = $this->session->userdata('logged_in');
  }

  // Update rating
  public function updateRating(){

    // userid
    $userid = $this->logged_in['id'];
    // POST values
    $mealid = $this->input->post('mealid');
    $rating = $this->input->post('rating');

    // Update user rating and get Average rating of a post
    $averageRating = $this->Rating_mdl->userRating($userid,$mealid,$rating);

    echo $averageRating;
    exit;
  }

}
