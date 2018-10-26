<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;

class MapController extends Controller
{
    //
    public function map()
    {
        $config['center'] = 'Griya Agung,Palembang City';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;

        $config['directions'] = true;
        $config['directionsStart'] = 'Flyover Simpang Polda,Palembang City';
        $config['directionsEnd'] = 'TOKO BAJU ZAVIERA KHANZA,Palembang City';
        $config['directionsDivID'] =  'directionsDiv';

        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = 'Flyover Simpang Polda,Palembang City';
        $marker['infowindow_content'] = 'Jalan Demang Lebar Daun';
        $gmap->add_marker($marker);


        $marker['position'] = 'TOKO BAJU ZAVIERA KHANZA,Palembang City';
        $marker['infowindow_content'] = 'Jalan Demang Lebar Daun';
        $gmap->add_marker($marker);

        $map = $gmap->create_map();
        return view('map',compact('map'));
    }
}
