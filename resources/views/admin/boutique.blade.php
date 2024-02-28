@extends('layouts.appAdmin')
@section('titre')
    Liste des matériaux
@endsection
<input type="hidden" name="" value="{{$increment=1}}">
@section('contenu')

          <div class="card">
            <div class="card-body">
              <h3 class="container text-center"> Listes de nos matériels</h3>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Nn</th>
                            <th>Image du matériel</th>
                            <th>Nom du matériel</th>
                            <th>Description</th>
                            <th>Nombre en stock</th>
                            <th>Nombre fonctionnel</th>
                            <th>Nombre defectueux</th>
                            <th>Codification</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($boutique as $boutique)
                        <tr>
                          <td>{{$increment}}</td>
                          <td><img src="storage/image_materiel/{{$boutique ->image_materiel}}" alt=""></td>
                          <td>{{ $boutique ->nom_materiel }}</td>
                          <td>{{ $boutique ->description_materiel }}</td>
                          <td>{{ $boutique ->nbre_stoker }}</td>
                          <td>{{ $boutique ->nbre_fonctionnel }}</td>
                          <td>{{ $boutique ->nbre_deffectueux }}</td>
                          <td>{{ $boutique ->codification }}</td>
                          <td>
                            @if ($boutique->status==1)
                                <label class="badge badge-info">Activé</label>
                            @else
                               <label class="badge badge-danger">Désactivé</label> 
                            @endif
                          </td>
                          <td>
                            <button class="btn btn-outline-primary" onclick="window.location='{{url('edits-boutique/'.$boutique->id_materiel)}}'">Edit</button>
                            <a href="{{url('delete-boutique/'.$boutique->id_materiel)}}"  id="delete" class="btn btn-outline-danger">Delete</a>
                            @if ($boutique->status==1)
                            <button class="btn btn-outline-warning" onclick="window.location='{{url('desactiver-boutique/'.$boutique->id_materiel)}}'">Désactiver</button>      
                            @else
                            <button class="btn btn-outline-success" onclick="window.location='{{url('activer-boutique/'.$boutique->id_materiel)}}'">activer</button> 
                            @endif
                          </td>
                        </tr>
                        <input type="hidden" name="" value="{{$increment=$increment+1}}">
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>    
@endsection  



          