<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use gateweb\common\DateTime;
use gateweb\common\Presenter;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 
        $resources = Room::orderBy('title')->select('id','title')->get();

        foreach (\App\Session::all() as $session) { 
           $crudFieldValue = $session->getOriginal('start'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $session->title; 
           $prefix         = ''; 
           $suffix         = ''; 
           $dataFieldValue = trim($prefix . "S$session->id. " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'end'   => (new DateTime($crudFieldValue))->addTime($session->duration)->sql(), 
                'url'   => route((Presenter::before(\Route::currentRouteName(),'.') == 'admin')?'admin.sessions.show':'frontend.sessions.show', $session->id),
                'resourceId' => $session->room_id,
                'color' => (isset($session->color))? $session->color->value : '',
           ];
        }

        /**
         * show availability time slots
         */
          foreach (\App\Availability::all() as $slot) {
            $events[] =[
              'title' => $slot->notes, 
              'start' => $slot->start, 
              'end'   => $slot->end, 
              'resourceId' => $slot->room_id,
              'rendering' => 'background',
              'color' => $slot->color->value
            ];
          }

       return view('admin.calendar' , compact('events','resources')); 
    }

}
