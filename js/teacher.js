$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "php/students.php",
      data: "",
      success:function(response){
        document.getElementById("table").innerHTML= response;
      }
    });
  });

  function getExams(id,name,lastname){
    $.ajax({
      type: "post",
      url: "php/tests.php",
      data: {
        id:id,
        name:name,
        lastname:lastname,
      },
      success:function(response){
        document.getElementById("tests").innerHTML= response;
      }
    });
  }