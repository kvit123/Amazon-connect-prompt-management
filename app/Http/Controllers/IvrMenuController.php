<?php

namespace App\Http\Controllers;

use App\ivrMenu;
use Illuminate\Http\Request;

class IvrMenuController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$msgs = ivrMenu::all()->sortBy("index");
		//dd($msgs);

		return view('ivrmenu.index', compact('msgs'));

	}

	public function create(Request $request) {

		return view('ivrmenu.create');

	}

	public function store(Request $request) {

		//$this->validateStore($request);
		$data = $request->all();

		$index = ivrMenu::all()->sortByDesc('index')->first();

		$num = (int) $index['index'];
		$newId = $num + 1;
		$data['index'] = (string) $newId;
		ivrMenu::create($data);
		return redirect()->route('ivrmenu.index')->with('message', 'Message prompt added successfully');
	}

	public function show($id) {
		//
		$deleteIvr = ivrMenu::find($id);
		return view('ivrmenu.delete', compact('deleteIvr'));
	}

	public function edit($id) {

		$msg = ivrMenu::findOrFail($id);
		return view('ivrmenu.edit', compact('msg'));
	}

	public function update(Request $request, $id) {

		//$this->validateStore($request);

		$data = $request->all();

		$cus = ivrMenu::where('index', $id)->first();

		$cus->update($data);

		return redirect()->route('ivrmenu.index')->with('message', 'You prompt message updated successfully');

	}

	public function destroy($id) {

		$msg = ivrMenu::find($id);
		$msgDelete = $msg->delete();

		return redirect()->route('ivrmenu.index')->with('message', 'Prompt message deleted successfully');

	}

}
