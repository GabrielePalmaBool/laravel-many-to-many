@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Lista Tipi</h1>
    
    <table class="project">
        
        <tr>
            <th>Id Tipo</th>
            <th class="ty">Campo di utilizzo</th>
            <th class="ty">Nome Tipo</th>
           
        </tr>

        @foreach ( $types as $type)

                    <tr>
                        <td>{{$type -> id}}</td>

                        <td>{{$type -> nome}}</td>

                        <td>{{$type -> campo_uso}}</td>

                    </tr>

        @endforeach 
    </table>

    


@endsection
