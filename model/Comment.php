<?php
	class  Comment{
		private $id_c=null;
		private $id_u=null;
		private $pseudo_u=null;
		private $message=null;
		private $date_c=null;
        private $id_post=null;

		function __construct( $id_c, $id_u, $pseudo_u, $message, $date_c, $id_post ){
			$this->id_c=$id_c;
            $this->id_u=$id_u;
			$this->pseudo_u=$pseudo_u;
			$this->message=$message;
			$this->date_c=$date_c;
            $this->id_post=$id_post;

		}
		function getIdc(){
			return $this->id_c;
		}
		function getIdu(){
			return $this->id_u;
		}
		function getPseudou(){
			return $this->pseudo_u;
		}
		function getMessage(){
			return $this->message;
		}
		function getDatec(){
			return $this->date_c;
		}
        function getIdpost(){
			return $this->id_post;
		}

        function setIdc($id_c){
			$this->id_c=$id_c;
		}
        function setIdu($id_u){
			$this->id_u=$id_u;
		}
		function setPseudou($pseudo_u){
			$this->pseudo_u=$pseudo_u;
		}
		function setMessage(string $message){
			$this->message=$message;
		}
		function setDatec(string $date_c){
			$this->date_c=$date_c;
		}
        function setIdpost($id_post){
			$this->id_post=$id_post;
		}

		
	}


?>