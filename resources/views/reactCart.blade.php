@extends('layout')

@section('content')

<div id="root" data-produits="{{ json_encode($produits) }}"></div>

<script src="{{ mix('js/reactCart.js') }}"></script>

@endsection