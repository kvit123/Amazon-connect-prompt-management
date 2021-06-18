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
		//
		// $dbd = DynamoDb::table('CustDB')
		// ->setFilterExpression('#phones = :phones')
		// ->setExpressionAttributeNames(['#phones' => 'phones'])
		// ->setExpressionAttributeValues([':phones' => DynamoDb::marshalValue('+66818470263')])
		// ->prepare()->scan(); // supports any DynamoDbClient methods (e.g. batchWriteItem, batchGetItem, etc.)

		//$cus = new Customerprofile();
		$cus = Customerprofile::where('phone', '+66818470263')->first();
		//$cus->lastMenu = 4;
		//$cus->save();
		//$cus->where('phones','+66818470263')->get();
		dd($cus);
		return view('customerprofile');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function get_agent_online() {

		return response()->json(array('is_success' => true,
			'online_qty' => 5), 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
