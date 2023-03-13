@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col lg 12">
                <h1 class="page_title">Example Page</h1>
            </div>
            <form action="{{ route('example.store') }}" method="POST">
                @csrf
                <div class="col lg 12 mt-5">
                    <div class="row">
                        <div class="col col-lg-10">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Enter Task"  name= "title" aria-label="default input example">
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col lg 12 mt-5">
                <div>
                    <table class="table table-success table-striped" >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task -> title }}</td>
                                <td>
                                    @if ($task -> done == 0)
                                        <span class="badge bg-warning">Not Completed</span>
                                    @else
                                        <span class="badge bg-success">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('example.delete',$task->id) }}" class="btn btn-danger" ><i class="bi bi-trash3"></i></a>
                                    <a href="{{ route('example.done',$task->id) }}" class="btn btn-success" ><i class="bi bi-check-square"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')

<style>
    .page_title{
            padding-top: 10vh;
            color: cadetblue;
            text-align: center;
            font-family: cursive;
            font-size: 4ch;
    }
</style>

@endpush
