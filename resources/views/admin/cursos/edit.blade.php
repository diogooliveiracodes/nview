@extends('layouts.admin-dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="row justify-content-center">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$curso->name}}</div>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <img src="{{ $curso->url }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <form action="{{route('admin.cursos.update', ['curso' => $curso])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 p-0" style="overflow:hidden">
                    <label for="formFileSm" class="form-label">Foto de Capa:</label><br>
                    <input type="file" class="form-control-file mt-2 @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection