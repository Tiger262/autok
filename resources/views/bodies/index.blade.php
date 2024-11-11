@extends('layouts.app')
@section('content')
@section('title', 'karosszéria (GET Bodies')

<div>
    <a class="btn" href="{{route("createFuel")}}">Új Fuel hozzáadása</a>
    <a class="order" href="{{route("fuels", ["sort_by" => "name", "sort_dir" => "asc"])}}" title="ABC">ABC</a>
    <a class="order" href="{{route("fuels", ["sort_by" => "name", "sort_dir" => "desc"])}}" title="ZYX">ZYX</a>

    <table class="editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Karosszériák</th>
                <th>Gombok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->name}}</td>
                    <td>
                        <input type="button" class="btn" onclick="editRow()" value="Módosít">
                        <input style="display: none;" type="button" class="btn" onclick={{route('saveBody', $entity->id)}}
                            value="Mentés">
                        <input type="button" class="btn" onclick="{{route('deleteBody', $entity->id)}}" value="Töröl">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
