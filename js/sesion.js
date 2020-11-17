window.onload =function(){
$.ajax({
    type: "GET",
    url: "php/sesion.php",
    data: "",
        success:function(response){
            switch(response){
                case "student":
                    if(location.href.split("/").slice(-1) == "teacher.html"){
                        window.location.href = 'student.html';    
                    }
                break;
                case "teacher":
                    if(location.href.split("/").slice(-1) != "teacher.html"){
                        window.location.href = 'teacher.html';    
                    }
                break;
                default:
                    window.location.href = 'index.html';
                break;
            }
        }
    });
};