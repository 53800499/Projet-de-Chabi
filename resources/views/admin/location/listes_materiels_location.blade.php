@extends('layouts.appAdmin')
@section('titre')
    Matériels louer
@endsection
@section('contenu')
          <div class="card">
            <div class="card-body">
              <h3 class="container text-center"> Listes des matériels louer</h3>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>N</th>
                            <th>Date de sortie</th>
                            <th>Date de retour</th>
                            <th>Codification</th>
                            <th>Nom du personnel</th>
                            <th>Lieux d'utilisation</th>
                            <th>Motif</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>2012/08/03</td>
                            <td>15-f-5456</td>
                            <td>INSTI</td>
                            <td>Lokossa</td>
                            <td>Couffo</td>
                            <td>
                              <label class="badge badge-info">Dispo</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary" id="redirectionButton">Detail</button>
                            </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>2012/08/03</td>
                          <td>2012/08/03</td>
                          <td>15-f-5456</td>
                          <td>INSTI</td>
                          <td>Lokossa</td>
                          <td>Couffo</td>
                          <td>
                              <label class="badge badge-danger">Panne</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">Detail</button>
                            </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

      @endsection
