@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Cartorio</div>
                <div class="card-body">



                <div class="row">
 <div class="col-sm-12">
   
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cartorios.update',$cartorio->id)}}">
          @csrf
          @method('PUT')
                         <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{$cartorio->nome}}"  placeholder="Nome">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputPassword4">Razao</label>
                        <input type="text" name="razao" class="form-control"value="{{$cartorio->razao}}" placeholder="Razao" >
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputZip">Documento</label>
                        <input type="text" name="documento" class="form-control"value="{{$cartorio->documento}}" placeholder="Documento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Endereco</label>
                        <input type="text" name="endereco" class="form-control" id="inputAddress"value="{{$cartorio->endereco}}" placeholder="Endereco">
                    </div>
                   
                    <div class="form-row">
                       <div class="form-group col-md-4">
                        <label for="inputCity">Bairro</label>
                        <input type="text" name="bairro" class="form-control"value="{{$cartorio->bairro}}" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputCity">Cidade</label>
                        <input type="text"name="cidade" class="form-control" value="{{$cartorio->cidade}}" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">UF</label>
                        <input type="text" name="uf" class="form-control" value="{{$cartorio->uf}}"placeholder="UF">
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">CEP</label>
                        <input type="text"name="cep" class="form-control"value="{{$cartorio->cep}}" placeholder="CEP">
                        </div>
                    </div>

                     
                    <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="inputCity">Telefone</label>
                        <input type="text" name="telefone" class="form-control"value="{{$cartorio->telefone}}" placeholder="Telefone">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputCity">Email</label>
                        <input type="email"name="email" class="form-control"value="{{$cartorio->email}}" placeholder="Email">
                        </div>                
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Tabeliao</label>
                        <input type="text" name="tabeliao" class="form-control"value="{{$cartorio->tabeliao}}" id="inputAddress" placeholder="Tabeliao">
                    </div>


                        
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 ">Ativo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="ativo" @if($cartorio->ativo=='1')checked @endif id="gridRadios1" value="1">
                            <label class="form-check-label" for="gridRadios1">
                               Sim
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="ativo" @if($cartorio->ativo=='0')checked @endif id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                               Nao
                            </label>
                            </div>
                            
                        </div>
                        </div>
                    </fieldset>
                    <hr>
              
                    <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
  </div>
</div>
</div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection