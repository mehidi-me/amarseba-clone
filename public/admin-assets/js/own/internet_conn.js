
//console.log(navigator.onLine);
window.addEventListener("online",function() {
    document.getElementById('internet_conn').innerHTML="<span class='alert alert-dismiss my_font' style='background: white; padding: 15px 20px; font-size: 18px; display: inline-block; position: fixed; left: 20px; bottom: 10px; box-shadow: 0px 0px 6px 0px; z-index: 1050;'><i class='bx bx-wifi' style='color: green; font-size: 20px;'></i> আপনি অনলাইনে আছেন<a href='#' class='close d-none' data-dismiss='alert' aria-label='close'>&nbsp; <i class='fa fa-close' style='color: black;'></i></a></span>";
});

window.addEventListener("offline",function() {
    document.getElementById('internet_conn').innerHTML="<span class='alert alert-dismiss my_font' style='background: white; padding: 15px 20px; font-size: 18px; display: inline-block; position: fixed; left: 20px; bottom: 10px; box-shadow: 0px 0px 6px 0px; z-index: 1050;'><i class='bx bx-wifi-off' style='color: red; font-size: 20px;'></i> আপনি অফলাইনে আছেন<a href='#' class='close d-none' data-dismiss='alert' aria-label='close'>&nbsp; <i class='fa fa-close' style='color: black;'></i></a></span>";
});
