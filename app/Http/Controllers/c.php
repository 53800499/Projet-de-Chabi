<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boutique;
use Illuminate\Support\Facades\Storage;

class BoutiqueController extends Controller
{
    //
    public function add(){
        return view('admin.ajouter-boutique');
    }
    public function save(Request $request){
        
        $this->validate($request,[
                                    'nom_materiel'=>'required',
                                    'nbre_stoker'=>'required',
                                    'nbre_fonctionnel'=>'required',
                                    'nbre_deffectueux'=>'required',
                                    'codification'=>'required',
                                    'description_materiel'=>'required',
                                    'image_materiel'=>'required'
                                ]);
        if($request->hasFile('image_materiel')) {

            // 1:get files name with ext
            $fileNaleWithExt= $request->file('image_materiel')->getClientOriginalName();
            // 2:get just files name 
            $fileName= pathinfo($fileNaleWithExt,PATHINFO_FILENAME);
            // 3:get just files extension
            $extension=$request->file('image_materiel')->getClientOriginalExtension();
            // 4 : file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            // 5  uploder l'image
            $path=$request->file('image_materiel')->storeAs('public/image_materiel',
            $fileNameToStore);

        }

        else{
            $fileNameToStore='noimage.jpg';
        }
        $boutique = new Boutique();

        $boutique -> nom_materiel = $request -> input('nom_materiel');
        $boutique -> nbre_stoker = $request -> input('nbre_stoker');
        $boutique -> nbre_fonctionnel = $request -> input('nbre_fonctionnel');
        $boutique -> nbre_deffectueux = $request -> input('nbre_deffectueux');
        $boutique -> codification = $request -> input('codification');
        $boutique -> description_materiel = $request -> input('description_materiel');
        $boutique->image_materiel=$fileNameToStore;
        $boutique -> status = 1;
        $boutique ->save();

        return redirect('ajouter-boutique')->with('status','Boutique '.$boutique -> titres. ' enregistré avec succès');
    }
    public function boutique(){
            
        $boutique = Boutique::get();
        return view('admin.boutique')->with('boutique',$boutique);
    }
    
    public function edits($id){

        $boutique = Boutique::find($id);

        return view('admin.edits-boutique')->with('boutique', $boutique);
    }
    public function update(Request $request, $id){
        
        $this->validate($request,[
                                    'nom_materiel'=>'required',
                                    'nbre_stoker'=>'required',
                                    'nbre_fonctionnel'=>'required',
                                    'nbre_deffectueux'=>'required',
                                    'codification'=>'required',
                                    'description_materiel'=>'required',
                                    'image_materiel'=>'required'
                                ]);
        if($request->hasFile('image_materiel')) {

        // 1:get files name with ext
        $fileNaleWithExt= $request->file('image_materiel')->getClientOriginalName();
        // 2:get just files name 
        $fileName= pathinfo($fileNaleWithExt,PATHINFO_FILENAME);
        // 3:get just files extension
        $extension=$request->file('image_materiel')->getClientOriginalExtension();
        // 4 : file name to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        // 5  uploder l'image
        $path=$request->file('boutiqueImages')->storeAs('public/boutiqueImages',
        $fileNameToStore);

        }

        else{
        $fileNameToStore='noimage.jpg';
        }
        $boutique = Boutique::find($id);

        $boutique -> nom_materiel = $request -> input('nom_materiel');
        $boutique -> nbre_stoker = $request -> input('nbre_stoker');
        $boutique -> nbre_fonctionnel = $request -> input('nbre_fonctionnel');
        $boutique -> nbre_deffectueux = $request -> input('nbre_deffectueux');
        $boutique -> codification = $request -> input('codification');
        $boutique -> description_materiel = $request -> input('description_materiel');
        $boutique->image_materiel=$fileNameToStore;
        $boutique -> status = 1;
        $boutique ->update();

        return redirect('boutique')->with('status','boutique modifier avec succès');
    }
    public function delete($id){

        $boutique = Boutique::find($id);


        if($boutique->boutiqueImages != 'noimage.png'){
            Storage::delete('public/storage/'.$boutique->boutiqueImages);
        }
        $boutique->delete();

        return redirect('boutique')->with('boutique',$boutique);
    }
    public function desactiver($id){

        $boutique= Boutique::find($id);

        $boutique->status=1;
        $boutique->update();

        return redirect('boutique')->with('boutique',$boutique);
    }

    public function activer($id){

        $boutique= Boutique::find($id);

        $boutique->status=0;
        $boutique->update();

        return redirect('boutique')->with('boutique',$boutique);
    }
}
