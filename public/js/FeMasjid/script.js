document.getElementById("cancel-search").addEventListener("click", hideSearch);

var searchButton = document.getElementsByClassName("btn-search");
for (var i = 0; i < searchButton.length; i++) {
  searchButton[i].addEventListener("click", showSearch);
}

function showSearch(e) {
  e.preventDefault();
  document.getElementById("search-wrapper").classList.remove("d-none");
}

function hideSearch(e) {
  e.preventDefault();
  document.getElementById("search-wrapper").classList.add("d-none");
}

function hideAll() {
  $('.kebersihan_epl').hide();
  $('#humas_epl').hide();
  $('#imam_epl').hide();
}

//JQ Halaman About
$(document).ready(function () {
  hideAll()


  $("#kebersihan").click(function (e) {
    e.preventDefault();
    if ($("#kebersihan").text() == "Show") {
      hideAll()
      $(".kebersihan_epl").show("slow");
      // $('html,body').animate({
      //   scrollTop: $("#kebersihan_epl_side").offset().top
      // },'slow');
        $("#kebersihan").html("Hide")
    } else if($("#kebersihan").text() == "Hide") {
      $('.kebersihan_epl').hide();
      $("#kebersihan").html("Show")
    }


    // if(hasil == false){
    //   $('html,body').animate({
    //     scrollTop: $("#kebersihan").offset().top},
    //     'slow');
    // }

  });

  $("#humas").click(function (e) {
    e.preventDefault();
    $("#humas_epl").show("slow");
    $('html,body').animate({
      scrollTop: $("#humas_epl").offset().top
    },
      'slow');
  });

  $('#imam_epl').hide();
  $('#imam').click(function (e) {
    e.preventDefault();
    $('#imam_epl').show("slow");
    $('html,body').animate({
      scrollTop: $("#imam_epl").offset().top
    },
      'slow');
  });

});