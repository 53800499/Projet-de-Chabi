<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Location;

class LocationController extends Controller
{
    //
    public function ajouter_infos_materiel_sortant() {
        return view('Admin.location.ajouter_infos_materiel_sortant');
    }
    
    public function sauvegarder_infos_materiel_sortant(Request $request) {
        
       $this -> validate($request ,['id'=>'required',
                                    'date_sortie'=>'required',
                                    'date_retour'=>'required',
                                    'codification'=>'required',
                                    'nom_personnel'=>'required',
                                    'lieux_utilisation'=>'required',
                                    'motifs'=>'required']);
        
        $location = new Location();
        $location ->date_sortie = $request->input('date_sortie');
        $location ->date_retour = $request->input('date_retour');
        $location ->nom_personnel = $request->input('nom_personnel');
        $location ->contact_personnel = $request->input('contact_personnel');
        $location ->lieu_utilisation = $request->input('lieu_utilisation');
        $location ->motif = $request->input('motif');
        $location ->status = $request->input('status');
        $location ->save();
        return redirect('/ajouter_infos_materiel_sortant')->with('status','Materiel a été inséré avec succcès !');
    }

    public function listes_materiels_location() {

       /*  $location ->Location::find($id);

        $location = Location::find($id);
        return view('Admin.listes_materiels_location')->with('location',$location)->with('location',$location); */
        return view('Admin.location.listes_materiels_location');
    }

    public function modifier_infos_materiel_sortant(/* $id */) {
        /* $location ->location::find($id);

        return view('Admin.location.modifier_materiel_location')->with('status',$location); */
        return view('Admin.location.modifier_infos_materiel_sortant');
    }

    public function sauver_modifier_infos_materiel_sortant(Request $request) {
        
        $this -> validate($request ,['id'=>'required',
                                     'date_sortie'=>'required',
                                     'date_retour'=>'required',
                                     'codification'=>'required',
                                     'nom_personnel'=>'required',
                                     'lieux_utilisation'=>'required',
                                     'motifs'=>'required']);


        $boutique ->Boutique::find($idMateriel);


         $location = new Location();
         $location ->idMateriel = $request->input('idMateriel');
         $location ->date_sortie = $request->input('date_sortie');
         $location ->date_retour = $request->input('date_retour');
         $location ->nom_personnel = $request->input('nom_personnel');
         $location ->contact_personnel = $request->input('contact_personnel');
         $location ->lieu_utilisation = $request->input('lieu_utilisation');
         $location ->motif = $request->input('motif');
         $location ->status = $request->input('status');
         $location ->update();

         return redirect('/listes_materiels_location')->with('status','Materiel modifié avec succcès !');
     }


    public function supprimer_infos_materiel_sortant() {
        $location ->Location::find($id);
        return view('Admin.location.listes_materiels_location');
    }
}
