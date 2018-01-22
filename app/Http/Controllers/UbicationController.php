<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ubication;
use App\Service\UbicationService;

class UbicationController extends Controller
{
    public function createUbicationView() {

        return view('create_ubication');
    }

    public function createUbication(Request $request) {
        $ubication = new Ubication();
        $ubication->createUbication($request->ubication);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteUbication($id) {

        UbicationService::deleteChilds($id);

        Ubication::borrarUbicacion($id);

        return redirect()->action('HomeController@adminZone');
    }

    public function editUbicationView($id) {
        $e = Ubication::findOrFail($id);

        return view('edit_ubication', ['ubication' => $e]);
    }

    public function editUbication(Request $request, $id) {
        Ubication::editUbication($request->ubication, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
