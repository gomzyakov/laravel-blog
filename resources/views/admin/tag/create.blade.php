@extends('layouts.wrapper-admin', ['title' => 'Tag'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление тэга</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <row>
                    <div class="w-25">
                        <form method="post" action="{{ route('admin.tag.store') }}">
                            @csrf
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Название тэга</label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="Название тэга">
                                    @error('title')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
