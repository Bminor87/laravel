@extends('index')
@section('content')

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Oma Ruokakaappi</h2>
                    </div>
                    <div id="omaKaappi" class="list-group">
                        @if(count($ingredients))
                            @foreach($ingredients as $name)
                                    <div onclick="addIng('{{ $name }}','remove')" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-minus"></span>{{ $name }}</div>
                            @endforeach
                        @endif
                    </div>
                </div><!-- /panel -->
                <div id="reset" class="btn btn-default">Tyhjennä</div>
                <p><a class="btn btn-default" href="#" role="button">Löydä Reseptisi! &raquo;</a></p>
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                <h2>Ainekset</h2>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Etsi...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
                </div><!-- /input-group -->

                <p>&nbsp;</p>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Jääkaappi</h3>
                    </div>
                    <div class="list-group">
                        <div id="Juusto" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Juusto</div>
                        <div id="Sima" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Sima</div>
                        <div id="Maito" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Maito</div>
                        <div id="Voi" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Voi</div>
                        <div id="Margariini" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Margariini</div>
                        <div id="Kerma" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Kerma</div>
                        <div id="smthing" role="Mac & Cheese" class="list-group-item list-group-item-info"><span class="pull-right glyphicon glyphicon-plus"></span> Mac & Cheese</div>
                    </div>
                </div><!-- /panel -->

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pakastin</h3>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-danger"><span class="pull-right glyphicon glyphicon-plus"></span> Pakastemarjat</a>
                        <a href="#" class="list-group-item list-group-item-danger"><span class="pull-right glyphicon glyphicon-plus"></span> Vaniljajäätelö</a>
                        <a href="#" class="list-group-item list-group-item-danger"><span class="pull-right glyphicon glyphicon-plus"></span> Pakastevihannekset</a>
                        <a href="#" class="list-group-item list-group-item-danger"><span class="pull-right glyphicon glyphicon-plus"></span> Torttupohja</a>
                    </div>
                </div><!-- /panel -->

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Kuivakaappi</h3>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-plus"></span> Tonnikala</a>
                        <a href="#" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-plus"></span> Hapankorppu</a>
                        <a href="#" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-plus"></span> Näkkileipä</a>
                        <a href="#" class="list-group-item list-group-item-success"><span class="pull-right glyphicon glyphicon-plus"></span> Makaroni</a>
                    </div>
                </div><!-- /panel -->

                <p><a class="label label-success" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-sm-1">
                <p>&nbsp;</p>
            </div>
        </div>

        <hr>

@endsection
