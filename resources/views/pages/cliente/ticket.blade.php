@extends('layouts.base')
@section('macon')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Bilhete</h4>
                   <a href="#Cadastrar" onclick="limpar()" data-toggle="modal"><i class="fa fa-plus-circle"></i></a>
                </div>
            </div>
            <div class="head-body">
                <div class="container-fluid base">
                    <div class="bilhete">
                        <div class="baseTop">
                            <i class="fa fa-bus"></i><h5>bilhete Macon</h5><i class="fa fa-bus"></i>
                        </div>
                        <div class="corpo">
                            <p>Nome: <b>{{Auth::user()->name}}</b></p>
                            <p>Partida: <b>{{$finde->horario->rotas->partida}}</b></p>
                            <p>Destino: <b>{{$finde->horario->rotas->destino}} - {{$finde->horario->local}}</b></p>
                            <p>Preço: <b>{{number_format($finde->horario->rotas->preco,2,',',' ')}} Kz</b></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Plataforma</th>
                                        <th>Hora</th>
                                        <th>Acesso</th>
                                        <th>Carro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>---</td>
                                        <td>{{$finde->horario->hora}}</td>
                                        <td>---</td>
                                        <td>{{$finde->carro->numero}}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        {{-- <div class="footbutt">
                            <a href="{{route('acento',$finde->id)}}">Avançar</a>
                        </div> --}}
                    </div>
                </div>
                <div class="acentos">
                    <div class="container-fluid base">
                        <div class="bilhete">
                            <div class="baseTop">
                                <i class="fa fa-bus"></i><h5>Acentos</h5><i class="fa fa-bus"></i>
                            </div>
                            <div class="acentos">
                                <div class="row" id="lugarBase">
                                    @for ($i =1 ; $i <= 45; $i++)
                                        <div class="col-4 col-md-2 col-lg-2 lugarBase" >
                                            @if($finde->acento($finde->id,$i))
                                                <div class="lugar" >
                                                    {{$i}}
                                                </div>
                                            @else
                                                <div class="lugar-diseble">
                                                    {{$i}}
                                                </div>
                                            @endif
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="musaico">
                                0
                            </div>  
                        </div>
                    </div>    
                </div>
                <div class="acentos">
                    <div class="container-fluid base">
                      <form action="{{route('bilhete.store')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$finde->id}}" name="viagen_id">
                        <input type="hidden" value="{{Auth::user()->cliente->id}}" name="cliente_id">
                        <input type="hidden" name="acento" id="acento">
                        <div class="form-group">
                            <label for="">Informações sobre o Bilhete (Opcional) </label>
                            <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Comprar</button>
                            <a href="{{route('client.index')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                      </form>
                    </div>    
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            $('.lugarBase').on('click', '.lugar', function(event) {
                $(".musaico").html(event.target.innerText)
                $('#acento').val(event.target.innerText)
            });
        });
    </script>
@endpush
@endsection