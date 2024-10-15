@extends('layouts.wrapper-personal', ['title' => 'My personal blog'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование комментария</h1>
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
                        <form method="post" action="{{ route('personal.comment.update', $comment->id) }}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <textarea class="form-control" name="message" cols="10" rows="10">{{ $comment->message }}</textarea>
                                @error('message')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
