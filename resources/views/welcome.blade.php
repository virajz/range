@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ $from }} - {{ $to }}: {{ $all->count() }}</div>

                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>From</td>
                                <td>To</td>
                                <td>Range</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->from }}</td>
                                    <td>{{ $post->to }}</td>
                                    <td>{{ $post->from }} - {{ $post->to }}</td>
                                </tr>
                            @empty
                                <p>No users</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ $from }} - {{ $to }} : {{ $posts->count() }}</div>

                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>From</td>
                                <td>To</td>
                                <td>Range</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->from }}</td>
                                    <td>{{ $post->to }}</td>
                                    <td>{{ $post->from }} - {{ $post->to }}</td>
                                </tr>
                            @empty
                                <p>No users</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
