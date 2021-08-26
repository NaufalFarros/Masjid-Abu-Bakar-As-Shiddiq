document.getElementById("cancel-search").addEventListener("click", hideSearch);

var searchButton = document.getElementsByClassName("btn-search");
for (var i = 0; i < searchButton.length; i++) {
  searchButton[i].addEventListener("click",showSearch);
}

function showSearch(e) {
  e.preventDefault();
  document.getElementById("search-wrapper").classList.remove("d-none");
}

function hideSearch(e) {
  e.preventDefault();
  document.getElementById("search-wrapper").classList.add("d-none");
}

//JQ Halaman About
$(document).ready(function () {
    

  $('#hideAll').click(function (e) { 
    e.preventDefault();
    $('#kebersihan_epl').hide();
    $('#humas_epl').hide();
    $('#imam_epl').hide();

  });



    $("#kebersihan_epl").hide();
    $("#kebersihan").click(function (e) {
      e.preventDefault();
      $("#imam_epl").hide();
      $("#humas_epl").hide(); 
          
      $("#kebersihan_epl").show("slow");
        $('html,body').animate({
        scrollTop: $("#kebersihan_epl").offset().top},
        'slow');
      
    
    // if(hasil == false){
    //   $('html,body').animate({
    //     scrollTop: $("#kebersihan").offset().top},
    //     'slow');
    // }
  
    });


    $("#humas_epl").hide();
    $("#humas").click(function (e) { 
      e.preventDefault();
      $("#imam_epl").hide();
      $("#kebersihan_epl").hide();
      $("#humas_epl").show("slow");
        $('html,body').animate({
        scrollTop: $("#humas_epl").offset().top},
        'slow');
    });

    $('#imam_epl').hide();
    $('#imam').click(function (e) { 
      e.preventDefault();
      $("#kebersihan_epl").hide();
      $("#humas_epl").hide();
      $('#imam_epl').show("slow");
      $('html,body').animate({
        scrollTop: $("#imam_epl").offset().top},
        'slow');
    });

});