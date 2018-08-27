<?php

namespace VolunteerSignUp;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function __construct($start_time = null, $end_time = null, array $attributes = array())
    {
        $this->start_time = $start_time;
        $this->end_time = $end_time;

        parent::__construct($attributes);
    }

    /**
     * @return null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @return null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }



}
