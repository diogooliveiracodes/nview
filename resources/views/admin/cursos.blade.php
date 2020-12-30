@extends('layouts.admin-dashboard')

@section('content')


<div class="container-fluid">

    <!-- Painel -->
    <div class="row">

        <!-- Quantidade de matriculas -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Cursos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 2 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de matriculas -->

        <!-- Quantidade de alunos pagantes -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Capítulos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 36 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Quantidade de alunos pagantes -->


        <!-- Quantidade de usuários que renovaram o curso -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Aulas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 96 }}</div>
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
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Atividades</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 96 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM - Valor recebido -->

    </div>
    <!-- Fim Painel -->

    <hr>

    <!-- Cursos Editar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cursos</h1>
    </div>

    <!-- Início Row -->
    <div class="row">

    </div>
    <!-- Fim Row -->
    <!-- FIM Cursos Editar -->












    <hr>

    <!-- Cursos Cadastrar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar</h1>
    </div>

    <!-- Início Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <form>
                                <div class="mb-3">
                                  <label for="nomecurso" class="form-label">Título:</label>
                                  <input type="text" class="form-control" id="nomecurso" required>
                                </div>
                                <div class="mb-3 p-0">
                                    <label for="formFileSm" class="form-label">Foto de Capa:</label><br>
                                    <input class="" id="formFileSm" type="file" required>
                                </div>
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

    </div>
    <!-- Fim Row -->
    <!-- FIM Cursos Cadastrar -->


</div>
<!-- /.container-fluid -->

@endsection