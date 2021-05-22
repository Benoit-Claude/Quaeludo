<?php

class Jeux{
    public $id = 0;
    public $nom = null;
    public $image = null;
    public $description = null;
    public $agemin = 0;
    public $agemax = 99;
    public $nbrjoueurmin = 1;
    public $nbrjoueurmax= 99;
    public $duree = 0;
    public $lien = null;

    /**
     * Jeux constructor.
     * @param int $id
     * @param null $nom
     * @param null $image
     * @param null $description
     * @param int $agemin
     * @param int $agemax
     * @param int $nbrjoueurmin
     * @param int $nbrjoueurmax
     * @param int $duree
     * @param null $lien
     */
    public function __construct($id, $nom, $image, $description, $agemin, $agemax, $nbrjoueurmin, $nbrjoueurmax, $duree, $lien)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->image = $image;
        $this->description = $description;
        $this->agemin = $agemin;
        $this->agemax = $agemax;
        $this->nbrjoueurmin = $nbrjoueurmin;
        $this->nbrjoueurmax = $nbrjoueurmax;
        $this->duree = $duree;
        $this->lien = $lien;
    }


}