<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DependentDropdown extends Component
{
    public $countries;
    public $states;
    public $cities;

    public $selectedCountry;
    public $selectedState;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedSelectedCountry($value)
    {
        $this->states = State::where('country_id', $value)->get();
        $this->cities = [];
    }

    public function updatedSelectedState($value)
    {
        $this->cities = City::where('state_id', $value)->get();
    }
    public function render()
    {
        return view('livewire.dependent-dropdown')->extends('layouts.app');;
    }
}
