<?php namespace Larazona\Http\Controllers\Home;

use Larazona\Http\Requests;
use Larazona\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MembersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    protected $api = 'https://api.meetup.com/2/';

	public function index()
	{
        $client = new \GuzzleHttp\Client(['base_uri' => $this->api]);
        $response = $client->get($this->api . 'members?key=' . env('MEETUP_API_KEY') . '&sign=true&group_urlname=' . env('MEETUP_URLNAME') . '&sign=true');
        $members = $response->json();

        return view('home.members', [
            'members' => $members
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
