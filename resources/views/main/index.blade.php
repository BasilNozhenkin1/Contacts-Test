@extends('layouts/main')

@section('content')
<h1 class="page-title">Список всех контактов</h1>
<div class="col-12">
    <div class="card-body table-responsive p-0">
        @if (!empty($contacts))
            <table class="table table-head-fixed text-nowrap" style="background: white">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection