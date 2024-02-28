<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    //
    public function add(){
        return view('admin.ajouter-location');
    }
    public function save(Request $request){
        
        $this->validate($request,[
                                    'date_sortie'=>'required',
                                    'date_retour'=>'required',
                                    'codification'=>'required',
                                    'nom_personnel'=>'required',
                                    'lieux_utilisation'=>'required',
                                    'motifs'=>'required'
                                ]);
        /* if($request->hasFile('locationImages')) {

            // 1:get files name with ext
            $fileNaleWithExt= $request->file('locationImages')->getClientOriginalName();
            // 2:get just files name 
            $fileName= pathinfo($fileNaleWithExt,PATHINFO_FILENAME);
            // 3:get just files extension
            $extension=$request->file('locationImages')->getClientOriginalExtension();
            // 4 : file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            // 5  uploder l'image
            $path=$request->file('locationImages')->storeAs('public/locationImages',
            $fileNameToStore);

        }

        else{
            $fileNameToStore='noimage.jpg';
        } */
        $location = new Location();
        $location ->date_sortie = $request->input('date_sortie');
        $location ->date_retour = $request->input('date_retour');
        $location ->nom_personnel = $request->input('nom_personnel');
        $location ->contact_personnel = $request->input('contact_personnel');
        $location ->lieu_utilisation = $request->input('lieu_utilisation');
        $location ->motif = $request->input('motif');
        $location ->status = 1;
        $location ->save();

        return redirect('ajouter-location')->with('status','Slider '.$location -> titres. ' enregistré avec succès');
    }
    public function location(){
            
        $location = location::get();
        return view('admin.location')->with('location',$location);
    }
    
    public function edits($id){

        $location = location::find($id);

        return view('admin.edits-location')->with('location', $location);
    }
    public function update(Request $request, $id){
        
        $this->validate($request,[
                                    'date_sortie'=>'required',
                                    'date_retour'=>'required',
                                    'codification'=>'required',
                                    'nom_personnel'=>'required',
                                    'lieux_utilisation'=>'required',
                                    'motifs'=>'required'
                                ]);
        /* if($request->hasFile('locationImages')) {

        // 1:get files name with ext
        $fileNaleWithExt= $request->file('locationImages')->getClientOriginalName();
        // 2:get just files name 
        $fileName= pathinfo($fileNaleWithExt,PATHINFO_FILENAME);
        // 3:get just files extension
        $extension=$request->file('locationImages')->getClientOriginalExtension();
        // 4 : file name to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        // 5  uploder l'image
        $path=$request->file('locationImages')->storeAs('public/locationImages',
        $fileNameToStore);

        }

        else{
        $fileNameToStore='noimage.jpg';
        } */
        $location = new Location();
        $location ->date_sortie = $request->input('date_sortie');
        $location ->date_retour = $request->input('date_retour');
        $location ->nom_personnel = $request->input('nom_personnel');
        $location ->contact_personnel = $request->input('contact_personnel');
        $location ->lieu_utilisation = $request->input('lieu_utilisation');
        $location ->motif = $request->input('motif');
        $location -> status = 1;
        $location ->update();

        return redirect('location')->with('status','location modifier avec succès');
    }
    public function delete($id){

        $location = location::find($id);


        if($location->locationImages != 'noimage.png'){
            Storage::delete('public/storage/'.$location->locationImages);
        }
        $location->delete();

        return redirect('location')->with('location',$location);
    }
    public function desactiver($id){

        $location= location::find($id);

        $location->status=1;
        $location->update();

        return redirect('location')->with('location',$location);
    }

    public function activer($id){

        $location= location::find($id);

        $location->status=0;
        $location->update();

        return redirect('location')->with('location',$location);
    }
}
