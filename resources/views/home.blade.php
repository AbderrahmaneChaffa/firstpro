<h3>salam alaykoum {{$nom}} ,  {{$prenom}}</h3>
@if (count($langages) > 0)
<h4>Cours :</h4>
<table border="1" width ="100%">
    <tr>
        <th>Cours</th>
    </tr>    
    
    @foreach ($langages as $langages )
    <tr>
        <td>
            {{$langages}}
        </td>
    </tr>
        @endforeach
    

</table>
@else 
pas de cours pour l'instant
@endif

@empty($nom)
yeees
@endempty