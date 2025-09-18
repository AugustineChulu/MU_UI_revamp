<div id="sidebar_root">

    <div id="sidebar_head">
        <div id="menu_btn_wrapper">
            <div id="menu_btn">
                <i class="fa-solid fa-bars fa-lg"></i>
            </div>
        </div>

        <div id="active_tab_wrapper">
            <div id="active_tab"></div>
        </div>
    </div>

    <div id="sidebar_body" class="thin_scroll_bar">
        <a href="{{ route('dashboard') }}" tab="dashboard">
            <i class="fa-solid fa-shapes"></i> &ensp;
            Dashboard
        </a>
    
        <a href="{{ route('personal-information') }}" tab="personal-information">
            <i class="fa-solid fa-circle-info"></i> &ensp;
            Personal Information
        </a>
    
        <a href="{{ route('accomodation') }}" tab="accomodation">
            <i class="fa-solid fa-bed"></i> &ensp;
            Accomodation
        </a>
    
        <a href="{{ route('view-ca') }}" tab="view-ca">
            <i class="fa-solid fa-square-poll-vertical"></i> &ensp;
            View CA
        </a>
    
        <a href="{{ route('grades') }}" tab="grades">
            <i class="fa-solid fa-square-check"></i> &ensp;
            Grades
        </a>
    
        <a href="{{ route('payments') }}" tab="payments">
            <i class="fa-solid fa-wallet"></i> &ensp;
            Payments
        </a>
    
        <a href="{{ route('time-table') }}" tab="time-table">
            <i class="fa-solid fa-table"></i> &ensp;
            Time Table
        </a>
    
        <a href="{{ route('course-evaluation') }}" tab="course-evaluation">
            <i class="fa-solid fa-check-double"></i> &ensp;
            Course Evaluation
        </a>
    
        <a href="{{ route('course-registration') }}" tab="course-registration">
            <i class="fa-solid fa-clipboard-check"></i> &ensp;
            Course Registration
        </a>
    
        <a href="{{ route('payment-options') }}" tab="payment-options">
            <i class="fa-solid fa-credit-card"></i> &ensp;
            Payment Options
        </a>
    
        <a href="{{ route('print-exam-docket') }}" tab="print-exam-docket">
            <i class="fa-solid fa-id-card"></i> &ensp;
            Print Exam Docket
        </a>

        <a href="{{ route('print-exam-docket') }}" tab="print-exam-docket">
            <i class="fa-solid fa-headset"></i> &ensp;
            HelpDesk
        </a>
    </div>

</div>