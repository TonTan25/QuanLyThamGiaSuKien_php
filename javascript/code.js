//mở đóng lisabar
function openNav() {
  document.getElementById("myLisatbar").style.width = "200px";
  document.getElementById("Lisatmain").style.marginLeft = "200px";
}

function closeNav() {
  document.getElementById("myLisatbar").style.width = "0";
  document.getElementById("Lisatmain").style.marginLeft= "0";
}
//xác nhận đăng ký thành công
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
