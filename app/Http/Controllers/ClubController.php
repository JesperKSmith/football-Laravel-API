<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\club;

class ClubController extends Controller
{
    /* Get all clubs
        @returns: all clubs
    */
    public function index() 
    {
        return club::all();
    }

    /* Get specific club
        @params: $id - id of club
        @returns: club
    */
    public function show(club $club)
    {
        return $club;
    }

    /* Create a club
        @params: $request - Request consisting of data for new club
        @returns: json response of created club, with 201
    */
    public function create(Request $request)
    {
        $club = club::create($request->all());
        return response()->json($club, 201);
    }

    /* Update a club
        @params: 
            $request - Request consisting of new data for existing club
            $id - id of the club up for editing
        @return: the updated club
    */
    public function update(Request $request, club $club)
    {
        $club->update($request->all());
        return response()->json($club, 200);
    }


    /* Delete a club
        @params: 
            $id - id of the club up for deletion
        @return: 204 Success, no content
    */
    public function delete(club $club)
    {
        $club->delete();

        return response()->json(null, 204);
    }
}
