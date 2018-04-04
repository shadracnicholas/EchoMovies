<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Schedule;
use App\BookTicket;
use Illuminate\Http\Request;

class BookTicketController extends Controller
{
    // Show Movie Schedule And Book View
    public function index(Movie $movie, Schedule $schedule)
    {
        // Return Movie And Schedule Details
        $data = BookTicket::where('movie_id' , $movie->id)
                                        ->where('schedule_id' , $schedule->id)
                                        ->groupBy('ticket_plan')
                                        ->get();
        return $data;
        return view('book.index' , compact('movie',  'schedule'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Initalize And Save
        $data = BookTicket::BookTicket($request);
        
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
