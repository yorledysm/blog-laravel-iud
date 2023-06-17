@extends('layouts.app')

@section('content')
<div class="container">
    Listar catergorias existentes 
     <div class="table-responsive">
    <table class="table table-dark table-hover">
        <thead>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria 1</th>
                <th scope="col">Cateria 3</th>
                <th scope="col">Categoria 3</th>
              </tr>
          
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
      </table>
    </div>
</div>

@endsection
