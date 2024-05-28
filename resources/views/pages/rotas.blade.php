@extends('layouts.base')
@section('macon')
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Lista de Rotas</h4>
                   </div>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table id="datatable" class="table data-table table-striped table-bordered" >
                         <thead>
                            <tr>
                               <th>Nº</th>
                               <th>Partida</th>
                               <th>Destino</th>
                               <th>Preço</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($rotas as $valor)
                                <tr>
                                    <td>{{$valor->partida}}</td>
                                    <td>{{$valor->destino}}</td>
                                    <td>{{$valor->preco}}</td>
                                    <td>
                                        <a href="btn text-primary"><i class="fa fa-edit"></i></a>
                                        <a href="btn text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
@endsection