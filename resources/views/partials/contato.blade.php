<div class="panel @if($pessoa->sexo == 'F') panel-danger @else panel-info @endif ">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'F')
                <i class="fa fa-female"></i>
            @else
                <i class="fa fa-male"></i>
            @endif
            {{$pessoa->apelido}}
            <span class="pull-right">
                <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                <a href="{{route('pessoa.delete',['id' => $pessoa->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>{{$pessoa->nome}}</h3>
        <p><a href="#" class="label label-primary">Novo Telefone</a></p>
        <table class="table table-hover">
            @foreach($pessoa->telefones as $telefone)
                <tr>
                    <td>{{$telefone->descricao}}</td>
                    <td>{{$telefone->numero}}</td>
                    <td>
                        <a href="{{route('telefone.delete', ['id' => $telefone->id])}}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar Telefone">
                            <i class="fa fa-minus-circle"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>