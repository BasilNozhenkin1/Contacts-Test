@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title"> Контакты пользователя {{ $user->name }}</h3>
                        <a href="{{ route('contact.create') }}" class="btn btn-primary float-right">Добавить</a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        @if (!empty($contacts))
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Имя</th>
                                        <th>Телефон</th>
                                        <th colspan="2" class="text-center">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td class="text-center"><a href="{{ route('contact.show', $contact->id) }}">Показать</a></td>
                                        <td class="text-center">
                                            <form action="{{ route('contact.delete', $contact->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <span class="text-danger">Удалить</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection