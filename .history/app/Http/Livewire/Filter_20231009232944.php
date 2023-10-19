<?php

namespace App\Http\Livewire;

use App\Models\PlaceDetails;
use App\Models\Place;
use App\Models\Observation;
use App\Models\User;
use DB;
use Livewire\Component;

class Filter extends Component
{
    // public $places;

    public $selected_places = [];

    public function select_place($id)
    {
        array_push($this->selected_places, $id);
    }

    public function updateMap()
    {

        foreach ($this->selected_places as $value) {

            $data =  PlaceDetails::where('id', $value)->first();

            // dd($data);

            if ($data->is_home == 1) {
                PlaceDetails::where('id', $value)->update([
                    'is_home' => 0
                ]);
            }
            if ($data->is_home == 0) {
                PlaceDetails::where('id', $value)->update([
                    'is_home' => 1
                ]);
            }
        }

        $this->emit('success', 'Map updated successfully');
    }

    public function render()
    {
        $userid = backpack_auth()->user()->id;

        // $places = PlaceDetails::where('user_id', $userid)->where()
         
    //     $places = PlaceDetails::where('user_id', $userid)
    // ->select('place_id', 'observation_id')
    // ->distinct()
    // ->orderBy('id', 'desc')
    // ->get();

    $uniquePlacesAndObservations = DB::table('place_details')
    ->select('place_id', 'observation_id', 'description', 'latitude', 'longitude')
    ->where('user_id', $userid)
    ->groupBy('place_id', 'observation_id')
    ->orderBy('id') // Order by the original order in place_details table
    ->get();

// You can now iterate over $uniquePlacesAndObservations to access the data.
foreach ($uniquePlacesAndObservations as $data) {
    var_dump($data->place_id);
    echo '<br>';
    echo '<br>';
    echo '<br>';
}
    


        

    die();


        return view('livewire.filter', compact('places'));
    }
}