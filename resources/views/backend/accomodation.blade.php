@extends('layouts.app')

@section('content')

<div class="notification_cards_wrapper">
    <x-notification-card type="alert-2">
        NOTICE: THE ONLINE SYSTEM FOR ACCOMMODATION RESERVATION FOR FULLTIME STUDENTS HAS CLOSED, 
        STUDENTS WHO DID NOT MANAGE TO RESERVE ARE INFORMED TO MAKE ALTERNATIVE ARRANGEMENTS BEFORE 
        REPORTING TO THE UNIVERSITY. REGISTRATION/REPORTING FOR NEW FULLTIME STUDENTS WILL BEGIN ON 
        SUNDAY 25TH AUGUST 2024 (FRESHMEN), AND FOR RETURNING STUDENTS ON SUNDAY 1ST SEPTEMBER 2024, 
        THANK YOU!
    </x-notification-card>
</div>

<div id="housing_information_table">
    <x-key-value-table1 title="Housing Information" columnsType="t_style2" :content="$studentHousingInfo"/>
</div>

@endsection