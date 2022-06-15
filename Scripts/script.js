$(document).ready(function() {

    $('#Password').keyup(function(event) {
        pwd = event.target.value;
        //Parse password value here for a match up after
        $('#isSame').val(pwd);
    });

})



//Load Page Gif
document.onreadystatechange = function() {
    var state = document.readyState
    if (state == 'complete') {
        setTimeout(function() {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
            document.getElementById('content').style.visibility = "visible";
        }, 1000);
    } else {
        document.getElementById('content').style.visibility = "hidden";
    }
}

//Function Redirection to another page
function Relocation(page) {
    window.location.href = "/dashboard/AuMoK/" + page;
}

function nene() {
    $("#popupLogIn").css("visibility", "visible")
        // document.write($("#popupLogIn").css("visibility"))
}




// document.onreadystatechange = function() {
//     var state = document.readyState
//     if (state == 'complete') {
//         setTimeout(function() {
//             document.getElementById('interactive');
//             document.getElementById('load').style.visibility = "hidden";
//         }, 1000);
//     }
// }