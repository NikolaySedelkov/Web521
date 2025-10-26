<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function showList() {
        return view('country.list', ['countries' => Country::all()]);
    }

    public function showCountry($id) {
        $county = Country::query()->with('cities')->find($id);

        return view('country.index', ['country' => $county]);
    }

    public function showAddCountry() {
        return view('country.add');
    }

    public function addCountry(Request $request) {
        $country = new Country();
        $country->country = $request->input('name');

        if($country->save()) {
            return redirect()->route('country.list');
        }
    }

    public function deleteCountry($id) {
        return Country::find($id)->deleteOrFail();
    }

    public function updateCountry(Request $request, $id) {
        $country = Country::findOrFail($id);
        $country->country = $request->input('name', $country['country']);

        return $country->updateOrFail();
    }

    public function showUpdateCountry($id) {
        $country = Country::findOrFail($id);

        return view('country.update', ['country' => $country]);
    }
}
