@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title">Просмотр контакта </h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <tr>
                                <td>ID</td>
                                <td>{{ $contact->id }}</td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <td>Телефон</td>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection