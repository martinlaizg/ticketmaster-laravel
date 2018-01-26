<?php

namespace App\Service;

use Carbon\Carbon;

use App\Ubication;
use App\Show;
use DB;

use App\Service\ShowService;

class UbicationService{

	public static function deleteChilds($ubicationId){
        $shows = DB::table('shows')->where('ubication_id', $ubicationId)->get();
        
        foreach ($shows as &$show) {
            ShowService::deleteChilds($show->id);
            Show::borrarShow($show->id);
        }
	}
}