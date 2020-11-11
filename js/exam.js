$("form :input").attr("autocomplete", "off");

var page = 1;

function next(){
    document.getElementById('dq'+page).setAttribute("hidden",true);
    page ++;
    document.getElementById("number").innerHTML = "("+ page +" de 10)";
    document.getElementById('dq'+page).removeAttribute("hidden");
    if(page >= 10){
        document.getElementById("btn1").setAttribute("hidden",true);
        document.getElementById('btn2').removeAttribute("hidden");
    }
    document.getElementById("btn1").setAttribute("disabled",true);
}

function check(){
    document.getElementById('btn1').removeAttribute("disabled");
}

function end(){
    document.getElementById("form").submit();
}