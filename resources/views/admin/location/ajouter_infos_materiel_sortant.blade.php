@extends('layouts.appAdmin')
@section('titre')
    Formulaire de location
@endsection
@section('contenu')
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Formulaire de location</h3>
                  <!-- @if(session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                  @endif -->
                  <form class="cmxform" id="signupForm" method="post" action="{{ route('sauvegarder_infos_materiel_sortant') }}">
                    @csrf
                    <fieldset>
                      <div class="form-group">
                        <label for="date_sortir">Date de sortir</label>
                        <input id="date_sortir" class="form-control" name="date_sortir" type="date">
                      </div>
                      <div class="form-group">
                        <label for="date_entre">Date du retour</label>
                        <input id="date_entre" class="form-control" name="date_retour" type="date">
                      </div>
                      <div class="form-group">
                        <label for="codification">Codification</label>
                        <input id="codification" class="form-control" name="codification" type="text">
                      </div>
                      <div class="form-group">
                        <label for="nom_personnel">Nom du personnel</label>
                        <input id="nom_personnel" class="form-control" name="nom_personnel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="contact_personnel">Contact du personnel</label>
                        <input id="contact_personnel" class="form-control" name="contact_personnel" type="text">
                      </div>
                      <div class="form-group">
                        <label for="lieu_utilisation">Lieux d'utilisation</label>
                        <input id="lieu_utilisation" class="form-control" name="lieu_utilisation" type="text">
                      </div>
                      <div class="form-group">
                        <label for="motif">Motif</label>
                        <input id="motif" class="form-control" name="motif" type="text">
                      </div>
                      <input class="btn btn-primary" type="submit" value="Enregister">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        
@endsection

