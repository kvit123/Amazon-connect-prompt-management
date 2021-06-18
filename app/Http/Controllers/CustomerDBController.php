<?php

namespace App\Http\Controllers;

use App\Customerprofile;
use Illuminate\Http\Request;

class CustomerDBController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$users = CustomerProfile::all();
		//dd($users);
		return view('customerprofile.index', compact('users'));

	}

	public function create(Request $request) {

		return view('customerprofile.create');

	}

	public function store(Request $request) {

		//$this->validateStore($request);
		$data = $request->all();
		CustomerProfile::create($data);
		return redirect()->route('customerprofile.index')->with('message', 'Message prompt added successfully');
		//
	}

	public function show($id) {
		//
	}

	public function edit($phone) {

		$user = CustomerProfile::findOrFail($phone);
		return view('customerprofile.edit', compact('user'));
	}

	public function update(Request $request, $phone) {

		//$this->validateStore($request);
		$data = $request->all();
		$agent = "You can also press 0 to reach an agent</speak>";

		$cus = CustomerProfile::where('phone', $phone)->first();

		$dataPrompt['msg'] = "<speak>please listen to the following options,,,,press 1 ,,,for" . $data['menu1'] . ",,,,press 2 ,,,for" . $data['menu2'] . ",,,,press 3 ,,,for" . $data['menu3'] . ",,," . $agent;
		$cus->update($dataPrompt);

		return redirect()->route('customerprofile.index')->with('message', 'You IVR Menu updated successfully');

	}

	public function destroy($id) {
		//
	}

	public function validateStore($request) {

		return $this->validate($request, [
			'phone' => 'required|unique:phone',
			'firstName' => 'required',
			'lastName' => 'required',
			'language' => 'required',

		]);
	}

	public function validateUpdate($request, $phone) {

		return $this->validate($request, [
			'phone' => 'required|unique:phone' . $phone,
			'firstName' => 'required',
			'lastName' => 'required',
			'language' => 'required',
		]);
	}
}
