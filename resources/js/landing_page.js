import "./bootstrap";
import "../css/app.css";
import "../css/tailwind.css";
import "../assets/fontawesome-free-6.5.1-web/css/all.css";

// LANDING PAGE / WELCOME
import "../css/welcome.css";

// run only once at load
const vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

const usernameField = document.getElementById("unField");
const passField = document.getElementById("pwField");

const handleFieldFocus = (event, type) => {
    if (type === "focus")
        event.target.parentNode.children[0].classList.add("focused");
    else if (type === "blur")
        if (event.target.value == "" || event.target.value == null) {
            event.target.parentNode.children[0].classList.remove("focused");
        }
};

usernameField.addEventListener("focus", (e) => handleFieldFocus(e, "focus"));
usernameField.addEventListener("blur", (e) => handleFieldFocus(e, "blur"));
passField.addEventListener("focus", (e) => handleFieldFocus(e, "focus"));
passField.addEventListener("blur", (e) => handleFieldFocus(e, "blur"));
