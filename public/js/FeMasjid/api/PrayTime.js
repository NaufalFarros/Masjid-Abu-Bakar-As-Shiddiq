var url = "https://api.myquran.com/v1/sholat/jadwal/1607/";
var today = new Date();
var todayDate = today.getFullYear() + '/' + today.getMonth() + '/' + today.getDate();

$.get(url + todayDate, function (data) {
  var jadwal = data.data.jadwal;
  $("#subuh").html(jadwal.subuh);
  $("#zuhur").html(jadwal.dzuhur);
  $("#asar").html(jadwal.ashar);
  $("#magrib").html(jadwal.maghrib);
  $("#isya").html(jadwal.isya);
})