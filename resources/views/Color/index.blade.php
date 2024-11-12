@extends('layouts.app')
@section('content')
@section('title', 'karosszéria (GET Bodies')

<div>
    <a class="btn" href="{{route("createColor")}}">Új szín hozzáadása</a>
    <a class="order" href="{{route("colors", ["sort_by" => "name", "sort_dir" => "asc"])}}" title="ABC">ABC</a>
    <a class="order" href="{{route("colors", ["sort_by" => "name", "sort_dir" => "desc"])}}" title="ZYX">ZYX</a>

    <table class="editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Színek</th>
                <th>Színkódok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->name}}</td>
                    <td>{{$entity->color_code}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
