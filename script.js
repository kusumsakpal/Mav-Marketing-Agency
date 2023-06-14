$("#menuBtn").click(function(){
    $("#line-1").toggleClass("active")
    $("#line-2").toggleClass("active")
    $("#line-3").toggleClass("active")
    $("#menu").toggleClass("active")
})


$(document).ready(function(){
    $(".counter").counterUp({
        delay : 10,
        time : 700
    })
})

let toggles = document.getElementsByClassName("toggle")
let contentDiv = document.getElementsByClassName("content")
let icons = document.getElementsByClassName("icon")
let vl = document.getElementsByClassName("vl")
var isOpen = false

for(let i = 0; i < toggles.length; i++){
    console.log("hello")
    toggles[i].addEventListener('click', () => {
        if(parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight){
            contentDiv[i].style.height = contentDiv[i].scrollHeight + "px"
            vl[i].classList.add("minus")
        }
        else{
            contentDiv[i].style.height = "0px";
            vl[i].classList.remove("minus")
        }
    })   
    
}

window.addEventListener('scroll', function() {
    var whatsappFixed = document.querySelector('.whatsapp-fixed');
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrollPosition > 100) {
      whatsappFixed.classList.add('show');
    } else {
      whatsappFixed.classList.remove('show');
    }
  });
  





