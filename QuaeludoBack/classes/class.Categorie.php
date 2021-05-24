<?php

    class Categorie  implements JsonSerializable{
        private $idcategorie = 0;
        private $nomcategorie = null;
        private $descriptioncategorie = null;
        private $imagecategorie = null;

        /**
         * Categorie constructor.
         * @param int $idcategorie
         * @param null $nomcategorie
         * @param null $descriptioncategorie
         * @param null $imagecategorie
         */
        public function __construct($idcategorie, $nomcategorie, $descriptioncategorie, $imagecategorie)
        {
            $this->idcategorie = $idcategorie;
            $this->nomcategorie = $nomcategorie;
            $this->descriptioncategorie = $descriptioncategorie;
            $this->imagecategorie = $imagecategorie;
        }


        public function getIdcategorie()		     {return $this->idcategorie;}
        public function getNomcategorie()            {return $this->nomcategorie;}
        public function getDescriptioncategorie()    {return $this->descriptioncategorie;}
        public function getimagecategorie()          {return $this->imagecategorie;}


        public function setIdcategorie($idcategorie)		            {$this->idcategorie = $idcategorie;}
        public function setNomcategorie($nomcategorie)	                {$this->nomcategorie = $nomcategorie;}
        public function setDescriptioncategorie($descriptioncategorie)	{$this->descriptioncategorie = $descriptioncategorie;}
        public function setimagecategorie($imagecategorie)              {$this->imagecategorie = $imagecategorie;}



        public function jsonSerialize(){
            return get_object_vars($this);
        }

    }