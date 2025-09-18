<<<<<<< HEAD
nds('tenant::layouts.master')
=======
@extends('tenant::layouts.master')
>>>>>>> c6db7044 (.)

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('tenant.name') !!}
    </p>
@endsection
