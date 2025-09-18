@extends('layouts.app')

@section('content')

    <div id="collapsible_welcome_msg_container">
        <div class="thin_scroll_bar">
            <h1 id="welcome_msg_header">
                ONLINE APPLICATION AND REGISTRAION
            </h1>
            <p>
                You are using our student information management system: <b>edurole</b>. Where you can register your courses,
                see your grades and much more in the near future.
                This platform allows students and staff access to information relevant to them. Incase you run into any
                problems
                please contact ICT support in the library or Computer lab. You may also open a help-desk ticket through the
                menu
            </p>
            <h>
                to all new 2022/2023 students. Best of luck!
            </h>

            <div id="options">
                <a id="libraryContainer" class="optionCard">
                    <i class="fa-solid fa-book fa-2x icon"></i>
                    <span>Library</span>
                </a>

                <a id="gradesContainer" class="optionCard">
                    <i class="fa-solid fa-square-check fa-2x icon"></i>
                    <span>Grades</span>
                </a>

                <a id="calendarContainer" class="optionCard">
                    <i class="fa-solid fa-calendar-days fa-2x icon"></i>
                    <span>Calendar</span>
                </a>

                <a id="filesContainer" class="optionCard">
                    <i class="fa-regular fa-folder-open fa-2x icon"></i>
                    <span>Files</span>
                </a>

                <a id="assignmentsContainer" class="optionCard">
                    <i class="fa-solid fa-file-pen fa-2x icon"></i>
                    <span>Assignments</span>
                </a>

                <a id="paymentsContainer" class="optionCard">
                    <i class="fa-solid fa-wallet fa-2x icon"></i>
                    <span>Payments</span>
                </a>

                <a id="helpContainer" class="optionCard">
                    <i class="fa-solid fa-circle-question fa-2x icon"></i>
                    <span>Help</span>
                </a>
            </div>
        </div>

        <div id="credit">
            <i>-ICT Department - Admin</i>
        </div>
        <button type="button" id="collapse_toggle" title="collapse">
            <i class="fa-solid fa-xl fa-circle-info"></i>
        </button>
    </div>

    <div id="news_wrapper">
        <div class="notification_cards_wrapper">
            <x-notification-card type="regular-1">
                Your edu mail account was created successfully kindly login here with the username: XXXXXXX@mu.edu.zm
                And password: XXXXXXXXXXXXX
            </x-notification-card>

            <x-notification-card type="alert-1">
                Warning: Beware of false advertisers claiming that Mulungushi University is offering 100% bursaries for
                August intake.
                Government sponsorship is only offered through Higher Education Loans and Scholarship Board (HELSB).
                Do not make any payments to unknown individuals
            </x-notification-card>
        </div>

        <div id="news_cards_wrapper">
            <div id="news_title">News and Updates</div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 1
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 2
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 3
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 4
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 1
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 2
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 3
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>

            <div class="notification_card news">
                <div id="news_txt">
                    Sample topic 4
                </div>
                <div id="timestamp">
                    2024-01-01
                    <br>
                    01:01:01
                </div>
            </div>
        </div>

    </div>

@endsection