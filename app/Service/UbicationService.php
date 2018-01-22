<?php

namespace App\Service;

use Carbon\Carbon;

use App\Ubication;
use App\Show;
use DB;

class UbicationService{

	public static function deleteChilds($ubicationId){
        $shows = DB::table('shows')->where('ubication_id', $ubicationId)->get();
        
        foreach ($shows as &$show) {
            Show::borrarShow($show->id);
        }
	}
}