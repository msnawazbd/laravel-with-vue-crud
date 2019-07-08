@extends('master')

@section('main-content')
    <example :title="'{{ $title }}'" :author="{{ $author }}" :university="'{{ $university }}'"></example>
@endsection
