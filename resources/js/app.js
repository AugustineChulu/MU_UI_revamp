import "./bootstrap";
import "../css/app.css";
import "../css/tailwind.css";
import "../assets/fontawesome-free-6.5.1-web/css/all.css";

// LAYOUTS
import "../css/layouts/layouts.css";
import "../css/layouts/navbar.css";
import "../css/layouts/sidebar.css";

// BACKEND
import "../css/backend/dashboard.css";
import "../css/backend/personal_information.css";
import "../css/backend/accomodation.css";

// COMPONENTS
import "../css/components/notification-card.css";
import "../css/components/key-value-table1.css";

const menu_btn = document.getElementById("menu_btn");
const sidebar_body = document.getElementById("sidebar_body");

const toggleMenu = (event) => {
    if (sidebar_body.classList.contains("expanded")) {
        sidebar_body.classList.remove("expanded");
        // menu_btn.setAttribute("style", "transform: rotate(0deg);");
    } else {
        sidebar_body.classList.add("expanded");
        // menu_btn.setAttribute("style", "transform: rotate(90deg);");
    }
};

menu_btn.addEventListener("click", (e) => toggleMenu(e));

const collapse_toggle = document.getElementById("collapse_toggle");

const toggleCollapsableContainer = () => {
    document
        .querySelector("#collapsible_welcome_msg_container")
        .classList.toggle("collapse");
};

collapse_toggle.addEventListener("click", (e) => toggleCollapsableContainer());
