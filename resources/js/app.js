import.meta.glob(["../image/**"]);

AOS.init()



window.onload = function () {

    const theme = localStorage.getItem("theme") ?? localStorage.setItem("theme", "light")

    if (theme === "light") {
        document.documentElement.className = "light"
        document.documentElement.setAttribute('data-theme', 'light')
    }

    else if (theme === "dark") {
        document.documentElement.className = "dark"
        document.documentElement.setAttribute('data-theme', 'dark')
    }

}




