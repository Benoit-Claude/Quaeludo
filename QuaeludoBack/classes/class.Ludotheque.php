<?php

class ludotheque{
    public $id = 0;
    public $nom = null;
    public $description = null;

    /**
     * ludotheque constructor.
     * @param int $id
     * @param null $nom
     * @param null $description
     */
    public function __construct($id, $nom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }


}