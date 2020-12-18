function togglePopupOne() {
    document.getElementById("popupOne").classList.toggle("active");
}
function togglePopup() {
    document.getElementById("popup").classList.toggle("active");
}
//show gallery 
function showNaturalGallery() {
    document.getElementById("hidden-gallery-natural").style.display = "block";
}
//show natural gallery 
function showGallery() {
    document.getElementById("hidden-gallery").style.display = "block";
}
//show editorial gallery 
function showEditorialGallery() {
    document.getElementById("hidden-gallery-editorial").style.display = "block";
}
//hamburger navigation
function openNav() {
    document.getElementById("MenuItems").style.height = "55vh";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("MenuItems").style.height = "0%";
}
//popup dropdown navbar
function showNavDropDown() {
    document.getElementById("dropDown").classList.toggle("active");

}
// bootstrap gallery slider 
$(function () {
    var selectedClass = "";
    $(".filter").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
        setTimeout(function () {
            $("." + selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-150px";
    }
    prevScrollpos = currentScrollPos;
}
//Banner Text Animation

const text = document.querySelector('.ban-txt');
const strText = text.textContent;
const splitText = strText.split("");
text.textContent = "";

for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += "<span>" + splitText[i] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 50);

function onTick() {
    const span = text.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++
    if (char === splitText.length) {
        complete();
        return;
    }
}

function complete() {
    clearInterval(timer);
    timer = null;
}
