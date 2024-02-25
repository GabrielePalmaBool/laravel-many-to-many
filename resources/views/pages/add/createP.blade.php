@extends('layouts.main-layout')
@section('head')
    <title>Create Project</title>
@endsection
@section('content')

<h1>Nuovo progetto</h1>


    <!-- tabella lista tipi,tecnologie e aggiunta nuovi progetti  -->
    <table class="create">

        <tr>

            <th>Nome progetto</th>

            <th>Immagine progetto</th>

            <th>Descrizione</th>

            <th>Data pubblicazione</th>

            <th>Tipi disponibili</th>

            <th>Tecnologie disponibili</th>

            <th class="add">INSERISCI</th>

        </tr>

        <tr>

            <form action="{{route('projects.storeProject')}}" method="POST">

            @csrf
            @method('POST')


                <td>
                    <input type="text" name="nome">
                </td>
                <td>
                    <input class="form-control" type="file" name="img_riferimento">
                </td>
                <td>
                    <textarea name="descrizione" rows="3"> </textarea>
                </td>
                <td>
                    <input type="date" name="data_pubblicazione">
                </td>
                <td>
                    <select name="type_id" >

                        @foreach ( $types as $type )

                            <option value="{{ $type -> id}}">

                                {{ $type ->nome}}

                            </option>    

                        @endforeach

                    </select>
                </td>

                <td>
                  
                    @foreach ( $technologies as $technology )

                        <input class="form-check-input" type="checkbox" name="tech_id[]" value="{{ $technology -> id}}"> {{ $technology ->nome}}
   
                    @endforeach

                </td>

                <td>
                    <input type="submit"  value="AGGIUNGI">
                </td>

            </form>
            
        </tr>

    </table>


@endsection
