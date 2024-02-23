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
            <th>Campo di utilizzo</th>
            <th>Tipo</th>
            <th>Immagine</th>
            <th>Descrizione</th>
            <th>Data Pubblicazione</th>
            <th>Tecnologia</th>
            <th>Uso Tecnologia</th>
        </tr>

        @foreach ( $types as $type)

            @foreach ( $type -> projects as $project)

                @foreach ( $project -> technologies as $tec)
           
                    <tr>
                        <td>{{$project -> id}}</td>
                        
                        <td>{{$project -> nome}}</td>

                        <td>     
                            {{$type -> campo_uso}}
                        </td>

                        <td>{{$type -> nome}}</td>

                        <td>

                        <img src="{{$project -> img_riferimento}}" alt="Girl in a jacket" width="50" height="60">
                        
                        </td>

                        <td>{{$project -> descrizione}}</td>
                        
                        <td>{{$project -> data_pubblicazione}}</td>

                        <td>{{$tec -> nome}}</td>

                        <td>{{$tec -> campo_uso}}</td>
                    
                    </tr>

                @endforeach
                    
            @endforeach

        @endforeach 

@endsection
