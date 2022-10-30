@extends('default')

@section('content')
  <EquipAllComponent></EquipAllComponent>
@endsection

@section('styles')
  <link rel="stylesheet" href="{{asset('css/equipements/index.css')}}">
@endsection

@section('scripts')
  <script src="{{asset('js/equipements.js')}}"></script>
@endsection