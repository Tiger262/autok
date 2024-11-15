@extends('layouts.app')
@section('content')
@section('title', 'karosszéria (GET Bodies')

<div>
    <a class="btn" href="{{route("createBody")}}">Új karosszéria hozzáadása</a>
    <a class="order" href="{{route("bodies", ["sort_by" => "name", "sort_dir" => "asc"])}}" title="ABC">ABC</a>
    <a class="order" href="{{route("bodies", ["sort_by" => "name", "sort_dir" => "desc"])}}" title="ZYX">ZYX</a>

    <table class="editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Karosszériák</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
