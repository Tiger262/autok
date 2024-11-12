@extends('layouts.app')
@section('content')
@section('title', 'Gyártók (GET Maker)')

<div>
    <table class="editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Gyártó</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <a href="{{route('getCarModelsByMaker', ['id'=>$entity->id])}}">
                <tr>
                    
                        <td id="{{$entity->id}}">{{$entity->id}}</td>
                        <td>{{$entity->name}}</td>
                    
                </tr>
            </a>
            @endforeach
        </tbody>
    </table>
</div>
@endsection