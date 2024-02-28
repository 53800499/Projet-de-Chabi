@extends('layouts.appAdmin')
@section('titre')
    Formulaire de location
@endsection
@section('contenu')
   <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Formulaire de la boutique</h3>
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
                  <form class="cmxform" id="signupForm" method="post" action="{{ route('save') }}">
                    {{ csrf_field() }}
                    <fieldset>
                      <div class="form-group">
                        <label for="nom_materiel">Nom du matériel</label>
                        <input id="nom_materiel" class="form-control" name="nom_materiel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="description_materiel">Description du matériel</label>
                        <input id="description_materiel" class="form-control" name="description_materiel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="nbre_stoker">Nombre en stock</label>
                        <input id="nbre_stoker" class="form-control" name="nbre_stoker" type="number">
                      </div>
                      <div class="form-group">
                        <label for="nbre_fonctionnel">Nombre fonctionnel</label>
                        <input id="nbre_fonctionnel" class="form-control" name="nbre_fonctionnel" type="number">
                      </div>
                      <div class="form-group">
                        <label for="nbre_deffectueux">Nombre deffectueux</label>
                        <input id="nbre_deffectueux" class="form-control" name="nbre_deffectueux" type="number">
                      </div>
                      <div class="form-group">
                        <label for="codification">Codification</label>
                        <input id="codification" class="form-control" name="codification" type="text">
                      </div>
                      <div class="form-group">
                        <label for="image_materiel">Image du matériel</label>
                        <input id="image_materiel" class="form-control" name="image_materiel" type="file">
                      </div>
                      <input class="btn btn-primary" type="submit" value="Enregister">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>   
@endsection    

        