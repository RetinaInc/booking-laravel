<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class RoomController extends Controller {

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
        $room_types = RoomType::where('property_id', '=', $property_id)->lists('name', 'id');
        return view('room.create')->with('property_id', $property_id)->with('room_types', $room_types);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($property_id)
	{
		//
        $room = new Room();
        $room->property_id = $property_id;
        $room->room_type_id = Input::get('type_id');
        $room->name = Input::get('name');
        $room->description = Input::get('description');
        $room->is_published = (Input::get('is_approved') == 'on' ? TRUE : FALSE);
        $room->save();
        return Redirect::to('room/facilities/'.$property_id."/create");
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
