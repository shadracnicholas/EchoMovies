<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTicket extends Model
{
    protected $table = "book_tickets";

    protected $guarded = [];


    public static function BookTicket($request) {
    	$data = BookTicket::create([
            'movie_id'                                        =>  $request->movieId,
            'schedule_id'                                   =>  $request->scheduleId,
            'ticket_quantity'                              =>  $request->counter,
            'ticket_plan'                                     =>  $request->seats,
            'ticket_booked_person'                  =>  $request->name,
            'ticket_booked_person_phone'      =>  $request->phone
        ]);
    }

}
