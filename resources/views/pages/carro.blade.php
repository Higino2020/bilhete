@extends('layouts.base')
@section('macon')
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Lista de Carros</h4>
                   </div>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table id="datatable" class="table data-table table-striped table-bordered" >
                         <thead>
                            <tr>
                               <th>Nº</th>
                               <th>Matricula</th>
                               <th>Lotação</th>
                               <th>Opções</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($carro as $valor)
                                <tr>
                                    <td>{{$valor->numero}}</td>
                                    <td>{{$valor->Natricula}}</td>
                                    <td>{{$valor->lotacao}}</td>
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