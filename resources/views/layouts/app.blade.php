<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <title>EduRole Student Information System</title>

    @vite([
        'resources/js/app.js',
    ])
</head>

<body class="antialiased">

    <div id="root_container">

        <div id="navbar_wrapper">

            @include('layouts.navbar')

        </div>

        <div id="sidebar_content_wrapper">

            <div id="sidebar_wrapper">

                @include('layouts.sidebar')

            </div>

            <div id="content_wrapper" class="thin_scroll_bar">

                @yield('content')

            </div>

        </div>

    </div>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentRouteName = `{{ Route::currentRouteName() }}`;
        activateTab(currentRouteName);
    });

    const activateTab = (tab) => {
        var selectedTab = document.querySelector(`a[tab="${tab}"]`);

        var sidebar_position_val = window
            .getComputedStyle(document.querySelector("#sidebar_body"))
            .getPropertyValue("position");

        if (sidebar_position_val == "absolute") {
            selectedTab.classList.add("hide_active_tab");

            document.querySelector("#active_tab").textContent =
                selectedTab.textContent;
        } else {
            selectedTab.classList.add("activeTab");

            if (tab == "dashboard") {
                document
                    .querySelector("#content_wrapper")
                    .classList.add("tab1style");
            } else {
                document
                    .querySelector("#content_wrapper")
                    .classList.remove("tab1style");
            }
        }
    };
</script>

</html>