@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Добавить контакт для пользователя {{ $user->name }}</h3>
                    </div>
                    <div class="card-body table-responsive p-0 text-center col-8 offset-2">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Введите имя"
                                       value="{{ old('name') }}"
                                >
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @csrf
                            <div class="form-group">
                                <label>Телефон - (+79999999999)</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       placeholder="Введите телефон"
                                       value="{{ old('phone') }}"
                                >
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary mb-2" value="Добавить">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection