@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<h1>Modifica progetto</h1>
@if ($errors->any())

    <table class="edit">
        <tr>
            @foreach ($errors->all() as $error)
                <th>{{$error}}</th>
            @endforeach
        </tr>
    </table>  

@endif

<table class="edit">
        <tr>
            <th>Titolo fumetto</th>
            <th>Casa editrice</th>
            <th>Genere</th>
            <th>Data di uscita</th>
            <th>Tipo</th>
            <th>Tecnologia</th>
            <th>MODIFICA</th>
        </tr>
    
    <form action="{{route('projects.updateProject', $project -> id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <td>
            <input type="text" name="nome_progetto" value="{{$project->nome_progetto}}">
        </td>
        <td>
            <input class="form-control" type="file"  name="img_riferimento" value="{{$project->img_riferimento}}">
        </td>
        <td>
            <input type="text" name="descrizione" value="{{$project->descrizione}}">
        </td>
        <td>
            <input type="date" name="data_pubblicazione" value="{{$project->data_pubblicazione}}">
        </td>

        <td>
            <select name="type_id" >

            @foreach ( $types as $type )

                <option value="{{ $type -> id}}" @selected ($project -> type ->id === $type -> id) >

                    {{ $type ->nome_tipo}}

                </option>    

            @endforeach

            </select>
        </td>

        <td>
            
            @foreach ( $technologies as $technology )

                <input class="form-check-input" type="checkbox" name="tech_id[]" value="{{ $technology -> id}}"

                    @foreach ( $project -> technologies as $Ptech)

                        @checked ($Ptech ->id === $technology -> id)

                    @endforeach
                
                > 
                
                {{ $technology ->nome_tecnologia}}
            

            @endforeach

        </td>
    
        <td>
            <input type="submit" value="UPDATE">
        </td>

    </form>

</table>


@endsection
