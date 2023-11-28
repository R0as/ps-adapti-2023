//dark mode
window.addEventListener("load", () => {
    const checkbox = document.getElementById("checkbox");
    checkbox.addEventListener("change", () => {
        if (document.body.classList.contains("dark")) {
            document.body.classList.remove("dark");
            localStorage.setItem("theme", "light");
        } else {
            document.body.classList.add("dark");
            localStorage.setItem("theme", "dark");
        }
    });

    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        checkbox.checked = true;
    } else {
        document.body.classList.remove("dark");
        checkbox.checked = false;
    }
});

//scroll to top

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

window.onscroll = function () {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Mostrar ou ocultar o botão com base na rolagem da página
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }
};
