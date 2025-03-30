@extends('components.layouts.master')

@section('meta-title', 'Đăng nhập')

@section('content')
    <div>
        <livewire:auth.profile-user :id="$id" />
    </div>
@endsection
