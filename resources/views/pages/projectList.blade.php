@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Lista progetti</h1>
    
    <table class="project">
        
        <tr>
            <th>Id Progetto</th>
            <th>Nome Progetto</th>
            <th class="ty">Campo di utilizzo</th>
            <th class="ty">Tipo</th>
            <th>Immagine</th>
            <th>Descrizione</th>
            <th>Data Pubblicazione</th>
            <th class="tech">Tecnologia</th>
            <th class="tech">Uso Tecnologia</th>
        </tr>

        @foreach ( $projects as $project)

                    <tr>
                        <td>{{$project -> id}}</td>
                        
                        <td>{{$project -> nome}}</td>

                        <td>{{$project -> type -> campo_uso}}</td>

                        <td>{{$project -> type -> nome}}</td>

                        <td>

                        <img src="{{$project -> img_riferimento}}" alt="Girl in a jacket" width="50" height="60">
                        
                        </td>

                        <td>{{$project -> descrizione}}</td>
                        
                        <td>{{$project -> data_pubblicazione}}</td>

                        <td>

                            @foreach ( $project -> technologies as $tec)

                                {{$tec -> nome}},

                            @endforeach

                        </td>

                        <td>

                            @foreach ( $project -> technologies as $tec)

                                {{$tec -> campo_uso}},

                            @endforeach

                        </td>
                    
                    </tr>

        @endforeach 

@endsection
