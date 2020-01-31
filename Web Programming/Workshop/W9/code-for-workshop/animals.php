<?php

	/**
	*
	*	animals.php
	*	@author John Rooksby 
	*	2019
	*
	*	You do not need to edit this code.
	*
	*	The code is writen in object oreiented PHP.
	*	You can lean more about OO PHP in the Web App Integration course in the final year.
	*
	*	Try running this script in your browser. Try:
	*
	*	animals.php
	*	animals.php?xml
	*	animals.php?json
	*
	*	Make sure the necessary images are stored in an img/ subdirectory
	*
	***/

	/**
	* 
	*	Class Animal
	*	
	*	Creates a animal object
	*	The get_animal method returns an associative array 
	*	
	***/
	class Animal {
		private $img = "";
		private $creator = "";
		private $source = "";
		private $downloaded = "";
		private $description = "";

		public function __construct($img, $fname, $sname, $source, $downloaded, $description) {
			$this->img = $img;
			$this->creator = array('fname' => $fname, 'sname' => $sname);
			$this->source = $source;
			$this->downloaded = $downloaded;
			$this->description = $description;
		}

		public function get_animal() {
			return array('img' => $this->img, 'creator' => $this->creator, 'source' => $this->source, 'downloaded' => $this->downloaded, 'description' => $this->description);
		}
	}

	/**
	* 
	*	Class Response
	*	
	*	This takes an associative array (generated via a animal object) and
	*	returns html, json or xml (depending on the parameter passed via the URL, with html as default)
	*	
	***/
	class Response {
		private $head;
		private $body;
		private $format;
		public $output = "";

		public function __construct($animal) {
			$this->format = Utilites::getOutputType();
			$this->make_header();
			$this->make_body($animal);
		}

		private function make_header() {

			$headerType = array('json' => "application/json",  'xml' => "text/xml", 'html' => "text/html"); 
			header("Content-Type: " . $headerType[$this->format]);
			//header('Access-Control-Allow-Origin: *');
		}

		private function xmlLoop($animal) {
			foreach ($animal as $key => $value) {
					if (is_array($value)) {
						$this->output .=  "<$key>";
						$this->xmlLoop($value);
						$this->output .=  "</$key>";
					} 
					else {
 						$this->output .=  "<$key>$value</$key>";
 					}
				}
		}

		private function make_body($animal) {

			if ($this->format == "xml") {
				$this->output .= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
				$this->output .=  "<animal>";
				$this->xmlLoop($animal);
				$this->output .=  "</animal>";
			} 
			if ($this->format == "json") {
				$this->output .= json_encode($animal);
			} 
			if ($this->format == "html") {
				$this->output .=  "<img src=\"img/". $animal['img'] ."\" alt=\"animal\">";
				$this->output .=  "<p>Image by ". $animal['creator']['fname'] . " ". $animal['creator']['sname'] . " on " . $animal['source'] . " (" . $animal['description'] . ")</p>"; 
			} 
		}

	}

	/**
	* 
	*	Class Utilies
	*	
	*	This has some general utilities 
	*	This class should be used as a singleton and is not instantiated. 
	*	
	***/
	class Utilites {
		private static $randomNum;
		private static $outputType = "html";
		private static $params;

		private function __construct() {}

		static function getRandomNum($min, $max) {
			self::$randomNum = rand($min,$max);
			return self::$randomNum;
		}

		static function getOutputType() {
			self::$params = array_change_key_case($_GET, CASE_LOWER);
			
			if (isset(self::$params['xml'])) 
			{
				self::$outputType = "xml";
			}
			if (isset(self::$params['json'])) 
			{
				self::$outputType = "json";
			}
			return self::$outputType;
		}
	}



	/**
	* 
	*	Main 
	*	
	***/

	// Firstly, we create an array of animal objects
	$k = array();
	$k[] = new animal("cat1.jpg", "Kote", "Puerto", "Unsplash", "21-10-2018", "Photograph of a kitten sitting");
	$k[] = new animal("cat2.jpg", "Ramdan", "Authentic", "Unsplash", "21-10-2018", "Photograph of a kitten running");
	$k[] = new animal("cat3.jpg", "Zhan", "Zhang", "Unsplash", "22-10-2018", "Black and white photograph of a cat");
	$k[] = new animal("cat4.jpg", "Sereja", "Ris", "Unsplash", "2-11-2018", "Photograph of a kitten held in a hand");
	$k[] = new animal("cat5.jpg", "Jeb", "Buchman", "Unsplash", "5-11-2018", "Photograph of a white cat");
	$k[] = new animal("cat6.jpg", "edgar", "edgar", "unsplash", "23-10-2019", "Photograph of a kitten");
	$k[] = new animal("tiger1.jpg", "smit", "patel", "unsplash", "24-10-2019", "Photograph of a white tiger");
	$k[] = new animal("dog1.jpg", "jf", "brou", "unsplash", "24-10-2019", "Photograph of a white dog by a lake");
	$k[] = new animal("deer1.jpg", "laura", "college", "unsplash", "24-10-2019", "Photograph of a deer with antlers");
	$k[] = new animal("squirrel1.jpg", "radoslaw", "prekurat", "unsplash", "24-10-2019", "Photograph of a red squirrel eating");
	$k[] = new animal("elephant1.jpg", "zoe", "reeve", "unsplash", "24-10-2019", "Photograph of an elephant walking");
	$k[] = new animal("tiger2.jpg", "ian", "robinson", "unsplash", "24-10-2019", "Photograph of a tigers face");
	$k[] = new animal("racoon1.jpg", "gary", "bendig", "unsplash", "24-10-2019", "Photograph of a racoon");
	$k[] = new animal("hamster1.jpg", "ricky", "kharawala", "unsplash", "24-10-2019", "Photograph of a hamster standing on hind legs");
	$k[] = new animal("lion1.jpg", "francesco", "de-tommaso", "unsplash", "24-10-2019", "Photograph of a lion lying in grass");
	$k[] = new animal("puffin1.jpg", "ray", "hennessy", "unsplash", "24-10-2019", "Photograph of a puffin");
	$k[] = new animal("dog2.jpg", "josephine", "menge", "unsplash", "24-10-2019", "Photograph of a dog running");
	$k[] = new animal("sheep1.jpg", "sam", "carter", "unsplash", "24-10-2019", "Photograph of a sheeps face");
	$k[] = new animal("rabbit1.jpg", "waranya", "mooldee", "unsplash", "24-10-2019", "Photograph of a brown rabbit sitting on grass");
	$k[] = new animal("shark1.jpg", "david", "clode", "unsplash", "24-10-2019", "Photograph of a shark");
	$k[] = new animal("rhino1.jpg", "ronald", "gijezen", "unsplash", "24-10-2019", "Photograph of a rhino");
	$k[] = new animal("bird5.jpg", "annie", "spratt", "unsplash", "24-10-2019", "Photograph of a penguin");
	$k[] = new animal("bird4.jpg", "kalpesh", "patel", "unsplash", "24-10-2019", "Photograph of a pigeon");
	$k[] = new animal("bird1.jpg", "mathew", "schwartz", "unsplash", "24-10-2019", "Photograph of a small bird");
	$k[] = new animal("bird2.jpg", "vincent", "van-zalinge", "unsplash", "24-10-2019", "Photograph of a kingfisher bird");
	$k[] = new animal("bird3.jpg", "thomas", "millot", "unsplash", "24-10-2019", "Photograph of a swan");
	$k[] = new animal("horse1.jpg", "nikki", "jeffrey", "unsplash", "24-10-2019", "Photograph of a brown horse with long mane");
	$k[] = new animal("bat1.jpg", "natasha", "ong", "unsplash", "24-10-2019", "Photograph of a bat hanging upside down");

	// Secondly we generate a random number for chosing a random animal from the array
	$r = Utilites::getRandomNum(0,(count($k)-1));

	// Thirdly we generate a response (in xml, json or html) the randomly chosen animal in the array
	$response = new Response($k[$r]->get_animal());

	// Finally we return the response 
	echo $response->output;

?>

