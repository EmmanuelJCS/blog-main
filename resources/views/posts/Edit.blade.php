{{--@extends('layouts.app') --}}

@extends('adminlte::layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}" title="Regresar">
                        <svg version="1.1" width="26px" height="26px" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M142.716,293.147l-94-107.602l94-107.602c7.596-8.705,6.71-21.924-1.995-29.527c-8.705-7.596-21.917-6.703-29.527,1.995
                               L5.169,171.782c-6.892,7.882-6.892,19.65,0,27.532l106.026,121.372c4.143,4.729,9.94,7.157,15.771,7.157
                               c4.883,0,9.786-1.702,13.755-5.169C149.427,315.071,150.319,301.852,142.716,293.147z"/></g></g><g><g>
                           <path d="M359.93,164.619H20.926C9.368,164.619,0,173.986,0,185.545c0,11.558,9.368,20.926,20.926,20.926H359.93
                               c60.776,0,110.218,49.441,110.218,110.211S420.706,426.893,359.93,426.893H48.828c-11.558,0-20.926,9.368-20.926,20.926
                               c0,11.558,9.368,20.926,20.926,20.926H359.93c83.844,0,152.07-68.219,152.07-152.063S443.781,164.619,359.93,164.619z"/>
                            </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Sucedio un problema al llenar los datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <textarea class="form-control" style="height:50px" name="body"
                        placeholder="Contenido">{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>

    </form>
@endsection
