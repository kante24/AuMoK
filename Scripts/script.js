$(document).ready(function() {

    $('#Password').keyup(function(event) {
        pwd = event.target.value;

        //Parse password value here for a match up after
        $('#isSame').val(pwd);
    });

})


//Load Page Gif
document.onreadystatechange = function() {
    document.getElementById('content').style.visibility = "hidden";
    var state = document.readyState
    if (state == 'complete') {
        setTimeout(function() {
            // document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
            document.getElementById('content').style.visibility = "visible";
        }, 1000);
    }
}

//Function Redirection to another page
function Relocation(page) {
    window.location.href = "/dashboard/AuMoK/" + page;
}

function nene() {
    document.write("manger")
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