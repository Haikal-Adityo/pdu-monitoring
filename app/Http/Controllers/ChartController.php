<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use DateTime;

class ChartController extends Controller
{
    public function getData()
    {
        // Fetch data from the database
        $data = Master::all();

        // Fetch the records from the database sorted by Date-Time
        $records = Master::orderBy('Date-Time')->get();

        // Extract the start and end times based on the first and last records
        $startDateTime = $records->first()->getAttribute('Date-Time');
        $endDateTime = $records->last()->getAttribute('Date-Time');

        // Convert start and end date-time strings to PHP DateTime objects
        $start = new DateTime($startDateTime);
        $end = new DateTime($endDateTime);

        // Initialize the waktu array
        $waktu = [];

        // Generate the array of formatted time strings
        while ($start <= $end) {
            $hours = $start->format('H');
            $minutes = $start->format('i');
            $seconds = $start->format('s');
            
            // Push formatted time to array
            $waktu[] = "{$hours}:{$minutes}:{$seconds}";

            // Increment by 10 seconds
            $start->modify('+10 seconds');
        }

        // Convert the waktu array to JSON and pass it to the view
        $waktuJson = json_encode($waktu);

        // Pass the waktu variable to the view
        return view('index', ['data' => $data, 'waktu' => $waktuJson]);

    }
}

