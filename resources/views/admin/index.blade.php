@extends('layouts.admin-dashboard')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- ESTE MÊS -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ ucfirst($mes) }} - {{ $ano }}</h1>
    </div>

    
    <div class="row">

        <!-- Quantidade de matriculas -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Matriculas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $matriculas = 152}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de matriculas -->

        <!-- Quantidade de alunos pagantes -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ativos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ativos = 92}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de alunos pagantes -->



        <!-- Conversão de usuários gratuitos para usuários pagos -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Conversão</div>
                            <div class="row no-gutters align-items-center">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ round($conversao = ($ativos * 100) / $matriculas , 2)}}%</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ round($conversao = ($ativos * 100) / $matriculas , 2)}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Conversão de usuários gratuitos para usuários pagos -->

        <!-- Quantidade de usuários que renovaram o curso -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Renovação</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de usuários que renovaram o curso -->

        <!-- Valor recebido -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Valor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R${{ $valor = $ativos * 20}},00</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Valor recebido -->

    </div>
    <!-- FIM ESTE MÊS -->

    <hr>

    <!-- TOTAL -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Total</h1>
    </div>

    
    <div class="row">

        <!-- Quantidade de matriculas -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Matriculas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $matriculas = 52}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de matriculas -->

        <!-- Quantidade de alunos pagantes -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ativos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ativos = 41}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de alunos pagantes -->



        <!-- Conversão de usuários gratuitos para usuários pagos -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Conversão</div>
                            <div class="row no-gutters align-items-center">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ round($conversao = ($ativos * 100) / $matriculas , 2)}}%</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ round($conversao = ($ativos * 100) / $matriculas , 2)}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Conversão de usuários gratuitos para usuários pagos -->

        <!-- Quantidade de usuários que renovaram o curso -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Renovação</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de usuários que renovaram o curso -->

        <!-- Quantidade de usuários que renovaram o curso -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Valor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$18,00</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de usuários que renovaram o curso -->

    </div>
    <!-- FIM ESTE MÊS -->

    <hr>

   

</div>
<!-- /.container-fluid -->


@endsection