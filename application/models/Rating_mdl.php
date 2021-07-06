<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Rating_mdl extends CI_Model {

  public function __construct() {
    parent::__construct();
		// $this->logged_in = $this->session->userdata('logged_in');
  }

  // Fetch records
  public function getAllPosts($id) {
		$this->db->select('ROUND(AVG(rating),1) as averageRating');
		$this->db->from('posts_rating');
		$this->db->where("mealid", $id);
		$ratingquery = $this->db->get();

		$postResult = $ratingquery->result_array();

		$rating = $postResult[0]['averageRating'];

		if($rating == ''){
			 $rating = 0;
		}
		return $rating;

  }

  // Save user rating
  public function userRating($userid,$mealid,$rating){
    $this->db->select('*');
    $this->db->from('posts_rating');
    $this->db->where("mealid", $mealid);
    $this->db->where("userid", $userid);
    $userRatingquery = $this->db->get();

    $userRatingResult = $userRatingquery->result_array();
    if(count($userRatingResult) > 0){

      $postRating_id = $userRatingResult[0]['id'];
      // Update
      $value=array('rating'=>$rating);
      $this->db->where('id',$postRating_id);
      $this->db->update('posts_rating',$value);
    }else{
      $userRating = array(
        "mealid" => $mealid,
        "userid" => $userid,
        "rating" => $rating
      );

      $this->db->insert('posts_rating', $userRating);
    }

    // Average rating
    $this->db->select('ROUND(AVG(rating),1) as averageRating');
    $this->db->from('posts_rating');
    $this->db->where("mealid", $mealid);
    $ratingquery = $this->db->get();

    $postResult = $ratingquery->result_array();

    $rating = $postResult[0]['averageRating'];

    if($rating == ''){
       $rating = 0;
    }

    return $rating;
  }

}
