@extends('tryblade.layout')

@section('title', 'APP')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
<x-alert>
    <strong>Whooops!</strong>
</x-alert>

<x-alert>
    <strong>aleee!</strong>
</x-alert>
