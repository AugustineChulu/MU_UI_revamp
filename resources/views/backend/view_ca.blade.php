@extends('layouts.app')

@section('content')
<div class="notification_cards_wrapper">
    <x-notification-card type="alert-2">
        If you have a missing CA please contact your course lecturer
    </x-notification-card>

    <x-notification-card type="alert-1">
        No CA has been recorded
    </x-notification-card>
</div>
@endsection