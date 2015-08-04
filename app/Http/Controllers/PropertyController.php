<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Property;
//use Symfony\Component\HttpFoundation\Session\Session;
use Validator;
use Auth;

class PropertyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $properties = Property::all();
        return view('property.index')->with('properties', $properties);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('property.create');
	}

    public function location(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = array_merge(Session::get('property'), Input::all());
            $data['user_id'] = Auth::user()->id;
            unset($data['_token']);
            $propertyId = Property::insert($data);
            return Redirect::to('property/room/type/'.$propertyId."/create");
        }
        return view('property.location');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $rules = array(
            'type_id' => 'required',
            'title' => 'required',
            'introduction'   => 'required',
            'full_description'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return Redirect::to('property/create')->withErrors($validator)->withInput();
        } else {
            Session::put('property', Input::all());
            return Redirect::to('property/location')->withErrors($validator)->withInput();
        }
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
