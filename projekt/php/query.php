<?php
require_once('connect.php');
require_once('elastic_db.php');
require_once('return_result.php');
require_once('Conflict.php');
//require_once('image_scrape.php');
//require_once('wiki_scrape.php');
//require_once('special_scrape.php');

class Query {
	var $connect;
	var $fruit_name;
	var $nutri_info;
	//var $wiki;
	//var $images;
	//var $spec_prod;
	var $main_info;
	var $elasticdb;
	var $query_res;
	var $conflict_res;
	
	// constructor
	public function __construct() {
		$this -> connect = new Connect(); 
		//$this -> wiki = new Wiki();
		//$this -> images = new Images();
		//$this -> spec_prod = new SpecialProduce();
		$this -> conflict_res = new Conflict();
		$this -> elasticdb = new ElasticDB();
		$this -> query_res = new ReturnResult();
		$this -> fruit_name = $this -> connect -> con -> prepare( 'SELECT Name FROM Main_Fruits' );
		$this -> main_info = $this -> connect -> con -> prepare( 'SELECT * FROM Main_Fruits WHERE Name = :fruit' );
		$this -> nutri_info = $this -> connect -> con -> prepare( 'SELECT * FROM Fruits WHERE Name = :fruit' );
	}
	
	// returns the fruit name
	public function getAllFruit() {
		$this -> fruit_name -> execute();
		$fruits = $this -> fruit_name -> fetchAll();
		return $fruits;
	}
	
	// returns the nutrition info
	public function getNutri($fruit) {
		$this -> nutri_info -> bindParam( ':fruit', $fruit );
		$this -> nutri_info -> execute();
		$nutri = $this -> nutri_info -> fetchAll();
		return $nutri;
	}
	
/*	
	public function getImages($fruit) {
		return $this -> images -> imageArr($fruit);
	}
	
	public function getDes($fruit) {
		return $this -> wiki -> wikiArr($fruit);
	}	

	public function getSpecDes($fruit) {
		return $this -> spec_prod -> specProduceArr($fruit);
	}
*/

	public function getDes($fruit) {
		return $this -> elasticdb -> getDescript($fruit);
	}	
	
	public function getResult($query) {
		return $this -> query_res -> resultArr($query);
	}
	
	public function getMainInfo($fruit) {
		$this -> main_info -> bindParam( ':fruit', $fruit );
		$this -> main_info -> execute();
		$link_and_image = $this -> main_info -> fetchAll();
		return $link_and_image;
	}
	
	public function editDistance($query) {
		$edit_dist = $this -> conflict_res -> conflict_res($query);
		return $edit_dist;
	}
}

?>
