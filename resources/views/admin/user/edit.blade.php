@extends('layouts.wrapper-admin', ['title' => 'User'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
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
                        <form method="post" action="{{ route('admin.user.update', $user->id) }}">
                            @csrf
                            @method('patch')
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите имя пользователя:</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Имя пользователя" value="{{ $user->name }}">
                                    @error('name')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите электронную почту пользователя:</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Email" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите роль пользователя:</label>
                                    <select name="role" class="form-control">
                                        <option value="administrator" {{ $user->isAdministrator() ? 'selected' : '' }}>Администратор</option>
                                        <option value="reader" {{ $user->isReader() ? 'selected' : '' }}>Читатель</option>
                                    </select>
                                    @error('role')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
