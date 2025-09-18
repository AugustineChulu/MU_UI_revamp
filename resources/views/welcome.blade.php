<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <title>login</title>

    @vite([
        'resources/js/landing_page.js',
    ])

</head>

<body class="antialiased thin_scroll_bar">
    <div id="root_container">
        <div id="page_header">
            <div id="logo_container">
                <div id="institution_logo"></div>
                <h1>MULUNGUSHI UNIVERSITY</h1>
                <h3>UNIVERSITY INFORMATION SYSTEM</h3>
            </div>

            <div id="redirect_links">
                <a id="link1" class="redirect_link">
                    <i class="fa-solid fa-globe"></i> website
                </a>

                <a id="link2" class="redirect_link">
                    <i class="fa-brands fa-google-scholar"></i> eLearning portal
                </a>

                <a id="link3" class="redirect_link">
                    <i class="fa-solid fa-envelope"></i> staff mail
                </a>

                <a id="link4" class="redirect_link">
                    <i class="fa-solid fa-envelope"></i> edu mail
                </a>
            </div>
        </div>

        <div id="page_body">
            <form id="login_form" action="{{ route('dashboard') }}" method="GET">
                <span id="login_container_header">
                    <h1>STUDENT AND STAFF LOGIN</h1>
                    Please use your student number or username and password to log in to the system.
                </span>

                <div class="input_boxes">
                    <label for="unField">
                        <i class="fa-solid fa-user-large"></i> Username/Student ID
                    </label>

                    <input type="text" id="unField" name="username" required autocomplete="true"
                        onfocus="return focusInputField(event)" onblur="return blurInputField(event)">
                </div>

                <div class="input_boxes">
                    <label for="pwField">
                        <i class="fa-solid fa-key"></i> Password
                    </label>

                    <input type="password" id="pwField" name="password" required autocomplete="true"
                        onfocus="return focusInputField(event)" onblur="return blurInputField(event)">
                </div>

                <input type="submit" value="Login">

                <a id="login_container_footer">forgot your password?</a>
            </form>

            <div id="registration_container">
                <span id="welcome_text">
                    <h1>ONLINE APPLICATION AND REGISTRAION</h1>
                    <p>Through the easy to use student portal you can complete your online registration. Students are
                        required to register there accounts only once.
                        <br>
                        For course registration you need to log in
                    </p>
                </span>

                <div id="application_buttons_container">

                    <button id="application_opt1"> Online Application Form For New Students </button>

                    <button id="application_opt2"> Short Course Application Form </button>

                </div>
            </div>
        </div>

        <div id="page_footer">
            <span id="copyright_info">
                copyright info place holder
            </span>
        </div>
    </div>
</body>

</html>