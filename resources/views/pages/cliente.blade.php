@extends('layouts.base')
@section('macon')
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Lista de Clientes</h4>
                   </div>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table id="datatable" class=" data-table" >
                         <thead>
                            <tr>
                               <th>Nº</th>
                               <th>Nome</th>
                               <th>Numero do Bilhete de Indentidade</th>
                               <th>Telefone 1 </th>
                               <th>Telefone 2</th>
                               <th>Data Nascimento</th>
                               <th>Opções</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($cliente as $valor)
                                <tr>
                                    <td>{{$valor->id}}</td>
                                    <td>{{$valor->nome}}</td>
                                    <td>{{$valor->nbi}}</td>
                                    <td>{{$valor->telefone1}}</td>
                                    <td>{{$valor->telefone2}}</td>
                                    <td>{{$valor->data_nascimento}}</td>
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