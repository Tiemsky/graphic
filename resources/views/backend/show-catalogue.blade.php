@extends('layouts.dashboard')
@section('content')
@livewire('backend.show-catalogue', ['catalogue_name' => $catalogue_name])
@endsection
