@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-info">
                                <tr>
                                    <th>Si</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @php
                            $i = 1;
                            @endphp

                            @foreach($departments as $value)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="#">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="float-right">
                            {{ $departments->render() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
