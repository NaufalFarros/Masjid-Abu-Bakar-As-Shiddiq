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