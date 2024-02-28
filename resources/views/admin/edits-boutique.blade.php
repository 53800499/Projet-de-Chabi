@extends('layouts.appAdmin')
@section('titre')
    Modifier le matériel
@endsection
@section('contenu')
   <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Modifier les matériels dans le parc</h3>
                  @if (Session::has('status'))
                  <div class="alert alert-success">
                      {{Session::get('status')}}
                  </div>
                  @endif
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                </ul>
                  </div>
                  @endif
                  <form class="cmxform" id="signupForm" method="post" action="{{ url('modifier-location/'.$boutique->id) }}">
                    {{ csrf_field() }}
                    <fieldset>
                      <div class="form-group">
                        <label for="nomMateriel">Nom du matériel</label>
                        <input id="nomMateriel" value="{{ $boutique ->nom_materiel }}" class="form-control" name="nomMateriel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="description_materiel">Description du matériel</label>
                        <input id="description_materiel" value="{{ $boutique ->description_materiel }}" class="form-control" name="description_materiel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="nbre_stoker">Nombre en stock</label>
                        <input id="nbre_stoker" value="{{ $boutique ->nbre_stoker }}" class="form-control" name="nbre_stoker" type="number">
                      </div>
                      <div class="form-group">
                        <label for="nbre_fonctionnel">Nombre fonctionnel</label>
                        <input id="nbre_fonctionnel" value="{{ $boutique ->nbre_fonctionnel }}" class="form-control" name="nbre_fonctionnel" type="number">
                      </div>
                      <div class="form-group">
                        <label for="nbre_deffectueux">Nombre deffectueux</label>
                        <input id="nbre_deffectueux" value="{{ $boutique ->nbre_deffectueux }}" class="form-control" name="nbre_deffectueux" type="number">
                      </div>
                      <div class="form-group">
                        <label for="codification">Codification</label>
                        <input id="codification" value="{{ $boutique ->codification }}" class="form-control" name="codification" type="text">
                      </div>
                      <div class="form-group">
                        <label for="image_materiel">Image</label>
                        <input id="image_materiel" value="{{ $boutique ->image_materiel }}" class="form-control" name="image_materiel" type="text">
                      </div>
                      <input class="btn btn-primary" type="submit" value="Modifier">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>   
@endsection    

        