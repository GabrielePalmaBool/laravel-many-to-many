@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Lista Tecnologie</h1>
    
    <table class="project">
        
        <tr>
            <th>Id Tec</th>
            <th class="tech">Nome Tecnologia</th>
            <th class="tech">Uso Tecnologia</th>
        </tr>

        @foreach ( $technologies as $technology)

                    <tr>
                        
                        <td>{{$technology -> id}}</td>
                        
                        <td>{{$technology -> nome_tecnologia}}</td>

                        <td> {{$technology -> campo_uso}}</td>
                    
                    </tr>

        @endforeach 
    </table>

    


@endsection
