
const menu = document.querySelector(".menu")
const navlinks = document.querySelector(".nav")

menu.addEventListener("click", () =>{
    navlinks.classList.toggle("open")
    menu.classList.toggle('toggle');
})

