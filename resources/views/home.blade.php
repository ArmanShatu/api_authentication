@extends('layouts.app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $val)
            <li>{{$val->title ?? '' }}</li>
            @endforeach
        </div>
    </div>
</div>


@endsection

{{--  <script>
    $.ajax({
        url: "http://localhost:8000/api/user",
        headers : {'Authorization' : 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTkxYzZhZjg3YWU4YjkyODQ5ZWY3YWZjYTM0MDc3OTI3NzE2MmU2MjY1YzYyZjI3MDRkOTZlY2Q2ZGJiY2VjYWRmYmM3ZmViM2IwMmIzMGQiLCJpYXQiOjE2MDQxNjk4OTIsIm5iZiI6MTYwNDE2OTg5MiwiZXhwIjoxNjM1NzA1ODkyLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.aTYR8ZGi5DzhLz9tqzHClSdszXWxlnB8f5Jq4NF4ne17MXBoWRQ1chZZoSd8ggbL8yOjiMu9V3bYMF97bx7TbvWEifCN6XoUHyCQqNZ3ZbWhqLSMGtMekRweixR5JUi9rHkzGrKNGiwqvubRmxx40ltK4Sa5WMQOp9n8WYWDctzJKufO-Sqol08LAwGkqBaCt6m65wZnqLu85eF-vvqWRz7YkH4Du9oqmjTNLM3XldF-69-yJeoJpV80T79_UhNzfqyXEDShkdUwWej7uSztj31USLUDii6jt8uNM_i4Iv-J-A2ujUOZKrmdwCTsMzR1MvcyFUTW0yz0rNktIo0x4id5Wy_WcnDOXX7wgnvxkhTEEddk5bLkW3rTuMwwoGSLCRZzX-EXepjNg08KJ9Ht_QHJvvYAbIjVo__M84q3tPpce8HOND0eiIGTfUA_9zzuPNuuMLaiXPRXP2Wfd16n_W_SB-8aNQuLwkMxYQEAbd7h-1u62loTo834aTX5tNFyPq8hiarGYEt1I8N0f4i-XDCqeMAda0UXImD5lQ2aGCZRdWM1X4tF6P7cnpHGUW41zsqfKYNGhzaFcEGU4YqoQW4o_CFHytqOnS_CrWFdyu-Zefh71_jS8UDjT8E6O2uMTOafR3lFgJwuJvguR7iePEInm2rqaY7iaLH-lbygGdQ'},
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
            alert(res);
        }
    });
</script>  --}}
