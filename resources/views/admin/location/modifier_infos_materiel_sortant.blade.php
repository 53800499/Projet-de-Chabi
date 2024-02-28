@extends('layout.header')
@section('contenu')
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form class="cmxform" id="signupForm" method="get" action="#">
                    <fieldset>
                      <div class="form-group">
                        <label for="date_sortir">Date de sortir</label>
                        <input id="date_sortir" class="form-control" value="21/02/2002" name="date_sortir" type="text">
                      </div>
                      <div class="form-group">
                        <label for="date_entre">Date d'entrée</label>
                        <input id="date_entre" class="form-control" value="21/02/2002" name="date_entre" type="text">
                      </div>
                      <div class="form-group">
                        <label for="codification">Codification</label>
                        <input id="codification" class="form-control" value="56-e-5456" name="codification" type="text">
                      </div>
                      <div class="form-group">
                        <label for="nom_du_personnel">Nom du personnel</label>
                        <input id="nom_du_personnel" class="form-control" value="INSTI" name="nom_du_personnel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="lieu_utilisation">Lieux d'utilisation</label>
                        <input id="lieu_utilisation" value="Lokossa" class="form-control" name="lieu_utilisation" type="text">
                      </div>
                      <div class="form-group">
                        <label for="motif">Motif</label>
                        <input id="motif" class="form-control" value="4dze" name="motif" type="motif">
                      </div>
                      <input class="btn btn-primary" type="submit" value="Modifier">
                      <input class="btn btn-danger" type="submit" value="Supprimer">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection  
          