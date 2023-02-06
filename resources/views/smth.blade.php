@include('header')
<h1>Users List</h1>
@include('inner')

@foreach($users as $u)
    <h1>{{$u}}</h1>
@endforeach

@csrf
<script>
    let data=@json($users);
    console.warn(data[0]);
</script>
