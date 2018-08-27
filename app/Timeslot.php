<?php

namespace VolunteerSignUp;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{


    public $choosen = false;

    public function __construct($description = null, array $attributes = array())
    {
        $this->description = $description;

        parent::__construct($attributes);
    }



    /**
     * @return boolean
     */
    public function isChoosen()
    {
        return $this->choosen;
    }

    /**
     * @param boolean $choosen
     */
    public function setChoosen($choosen)
    {
        $this->choosen = $choosen;
    }

}
