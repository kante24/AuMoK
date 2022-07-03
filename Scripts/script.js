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

// Function Message
function Message(id, msg) {
    document.getElementById(id).innerHTML = msg
}

function Login() {
    var visibility = $(".popupLogIn").css("visibility")
    if (visibility == "hidden") {
        $(".popupLogIn").css("visibility", "visible")
    } else {
        $(".popupLogIn").css("visibility", "hidden")
    }
    // document.write($("#popupLogIn").css("visibility"))
}

function nene() {
    // document.write($("#p").text());
    document.write("Manger nene")
}

function manger() {
    document.getElementById("p").innerHTML = "Manger nene"
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