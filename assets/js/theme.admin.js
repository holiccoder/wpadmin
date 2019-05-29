window.addEventListener("load", function(){
    var tabbtn = document.querySelectorAll("ul.nav-tabs > li > a");
    var tabbtnactive = document.querySelector("ul.nav-tabs > li > a.active");
    var tabpaneactive = document.querySelector("div.tab-content > div.active");

    for(var i=0; i<tabbtn.length; i++){
         tabbtn[i].addEventListener("click", switchTab);
    }

    function switchTab(event){
        event.preventDefault();
        var clickedTab = event.currentTarget;
        document.querySelector("ul.nav-tabs > li > a.active").classList.remove("active");
        clickedTab.classList.add("active");
        var href = clickedTab.getAttribute("href");
        document.querySelector("div.tab-content > div.active").style.display = "none";
        document.querySelector("div.tab-content > div.active").classList.remove("active");
        document.getElementById(href).style.display = "block";
        document.getElementById(href).classList.add("active");
    }
});