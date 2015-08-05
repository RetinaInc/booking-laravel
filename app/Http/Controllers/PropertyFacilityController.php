<?php namespace App\Http\Controllers;

use App\Facility;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PropertyFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PropertyFacilityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($property_id)
	{
		//
        $facilities  = Facility::all();
        return view('propertyfacility.create')
                ->with('property_id', $property_id)
                ->with('facilities', $facilities);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($property_id)
	{
		//
        foreach(Input::get('facility') as $facility_id => $is_on)
        {
            $propertyFacility = new PropertyFacility();
            $propertyFacility->property_id = $property_id;
            $propertyFacility->facility_id = $facility_id;
            $propertyFacility->save();
        }
        return Redirect::to('property/room/type?property_id='.$property_id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
