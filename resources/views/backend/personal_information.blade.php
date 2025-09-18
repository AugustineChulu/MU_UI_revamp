@extends('layouts.app')

@section('content')

    <div id="userinfo_wrapper">

        <div id="user_account_details">

            <div id="greeting">
                Hi user
            </div>

            <div id="account_details">

                <div id="account_status">Account status</div>
                <div id="learning">Fulltime student</div>
                <img id="user_picture" src="{{ asset('/images/avatar.png') }}" alt="user_picture">

                <a class="interactive_detials">
                    Registry files
                </a>
                <a class="interactive_detials">
                    Edit user information
                </a>
                <a class="interactive_detials">
                    Show grades
                </a>
                <a class="interactive_detials">
                    Show payments
                </a>

            </div>

        </div>

        <div id="user_information">

            <div id="ui_section1">

                <x-key-value-table1 title="STUDENT INFORMATION" columnsType="t_style2" :content="$studentInformation"/>

                <x-key-value-table1 title="PROGRAM INFORMATION" columnsType="t_style2" :content="$programeInformation"/>     
                
            </div>

            <div id="ui_section3" class="details_card my-16">

                <div class="dc_title">STUDENT CONTACT INFORMATION</div>

                <div id="student_contact_cards_wrapper">

                    <x-key-value-table1 title="STUDENT CONTACT DETAILS" columnsType="t_style2" :content="$studentContactDetails"/>

                    <x-key-value-table1 title="NEXT OF KIN CONTACT DETAILS" columnsType="t_style2" :content="$nextOfKinDetails"/>

                    <x-key-value-table1 title="EDUCATION HISTORY" columnsType="t_style2" :content="$educationHistory"/>

                </div>

            </div>

            <div id="ui_section2" class="details_card">

                <div class="dc_title">COURSE PROGRATION</div>

                <div id="semester_card_wrapper">

                    <div class="semester_card">

                        <div class="semester_title">
                            <span class="semester_period">2021/2022 - Sem. 1</span>
                        </div>
    
                        <div class="courses_list">
                            <div class="course">MSM111 - Mathematical Methods I</div>
                            <div class="course">BIO111 - Bio-molecules and Cells</div>
                            <div class="course">PHY101 - Fundamentals of Physics</div>
                            <div class="course">CHE111 - Introductory Chemistry</div>
                        </div>
                    </div>
    
                    <div class="semester_card">
    
                        <div class="semester_title">
                            <span class="semester_period">2021/2022 - Sem. 2</span>
                        </div>
    
                        <div class="courses_list">
                            <div class="course">MSM111 - Mathematical Methods I</div>
                            <div class="course">BIO111 - Bio-molecules and Cells</div>
                            <div class="course">PHY101 - Fundamentals of Physics</div>
                            <div class="course">CHE111 - Introductory Chemistry</div>
                        </div>
                    </div>

                    <div class="semester_card">
    
                        <div class="semester_title">
                            <span class="semester_period">2022/2023 - Sem. 1</span>
                        </div>
    
                        <div class="courses_list">
                            <div class="course">MSM111 - Mathematical Methods I</div>
                            <div class="course">BIO111 - Bio-molecules and Cells</div>
                            <div class="course">PHY101 - Fundamentals of Physics</div>
                            <div class="course">CHE111 - Introductory Chemistry</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection