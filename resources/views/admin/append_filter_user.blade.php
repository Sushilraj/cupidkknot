@if($user)
<?php $n = 1; ?>
@foreach($user as $user)
    <tr>
        <td>{{$n++}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['dob']}}</td>
        <td>{{$user['gender']}}</td>
        <td>{{$user['anual_incom']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['occupation']}}</td>
        <td>{{$user['provider']}}</td>
    </tr>
@endforeach
@endif