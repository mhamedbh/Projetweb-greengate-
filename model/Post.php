<?php
	class Post {
		private $id_post=null;
		private $title=null;
		private $description_p=null;
		private $category=null;
		private $id_author=null;
		private $pseudo_author=null;
        private $date_pub=null;

		function __construct( $id_post, $title, $description_p, $category, $id_author ,$pseudo_author, $date_pub){
			$this->id_post=$id_post;
            $this->title=$title;
			$this->description_p=$description_p;
			$this->category=$category;
			$this->id_author=$id_author;
			$this->pseudo_author=$pseudo_author;
			$this->date_pub=$date_pub;
		}
		function getIdpost(){
			return $this->id_post;
		}
		function getTitle(){
			return $this->title;
		}
		function getdescription(){
			return $this->description_p;
		}
		function getCategory(){
			return $this->category;
		}
		function getIdauthor(){
			return $this->id_author;
		}
		function getPseudo(){
			return $this->pseudo_author;
		}
        function getDatepub(){
			return $this->date_pub;
		}
        function setIdpost($id_post){
			$this->id_post=$id_post;
		}
        function setTitle($title){
			$this->title=$title;
		}
		function setDescription($description_p){
			$this->description_p=$description_p;
		}
		function setCategory(string $category){
			$this->category=$category;
		}
		function setIdauthor(string $id_author){
			$this->id_author=$id_author;
		}
		function setPseudo(string $pseudo_author){
			$this->pseudo_author=$pseudo_author;
		}
		function setDatepub(string $date_pub){
			$this->date_pub=$date_pub;
		}
		
	}


?>