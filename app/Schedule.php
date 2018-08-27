<?php

namespace VolunteerSignUp;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    public function __construct(array $attributes = array())
    {

        $numberofdays = 3;
        $starttimes = [9, 9, 7];
        $endtimes = [20, 2, 15];
        $year = 2018;
        $month = 9;
        $startdate = 14;
        $this->intervallengt = 2; //The lengt of each interval that a volkunteer can sign up to

        $this->days = $this->generateEvent($numberofdays, $starttimes, $endtimes, $year, $month, $startdate);

        parent::__construct($attributes);
    }

    private function generateEvent($numberofdays, $starttimes, $endtimes, $year, $month, $startdate)
    {
        $days = [];
        for ($i = 0; $i < 3; $i++) {


            $start = Carbon::create($year, $month, $startdate + $i, $starttimes[$i], 0, 0);
            $end = Carbon::create($year, $month, $startdate + $i, $endtimes[$i], 0, 0);

            if($endtimes[$i] < 6) {

                $end->addDay(1); //All times before 6 belongs to the day before
            }
                $days[$i] = new Day($start, $end);
        }

        return $days;
    }


    public function getTimeList()
    {

        $resarray = [];
        $i = 1;
        foreach ($this->days as $day) {

            $timeslots = [];
            $current = $day->getStartTime();
            $end = $day->getEndTime();
            $day_of_week = $current->dayOfWeek; // save date of week as it might change later
            $date = $current->toDateString();
            while (true) {
                $res = $current->toTimeString(); //eg 15:00
                $res = $res . ' - '; //eg 15:00 -

                $current->addHours($this->intervallengt); // Calculate interval ending and store

                if ($current->gte($end)) {
                    $current->subHours($this->intervallengt); // Revert
                    break;
                }

                $res = $res . $current->toTimeString(); // eg 15:00 - 17:00
                $timeslots[$res] = ['available' => false];

                error_log($current->toTimeString());

            }

            if($current->diffInHours($end) > 0) {
                $res = $current->toTimeString() . ' - ' . $end->toTimeString();
            }

            $timeslots[$res] = ['available' => false];

            // TODO: Add remaining time in day that is lesser than remaining interval
            //https://stackoverflow.com/questions/33575239/carbon-difference-in-time-between-two-dates-in-hhmmss-format

            $times['times'] = $timeslots; //Save timeslot list as array
            $datear['date'] = $date;
            $weekday['weekday'] = $day_of_week;
            $resarray[$i] = [$times, $datear, $weekday];
            $i++;

        }

        return $resarray;
    }
}
