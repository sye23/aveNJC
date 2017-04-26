/*global $ */

(function () {
    'use strict';


    /* $.ajax({
        type: "GET",
        url: 'components/navbar.html',
        dataType: 'html',
        success: function (data) {
            console.log(data);
            $(".navbar").append(data.toString());
        },
        error: function (data, errorThrown) {
            alert(errorThrown);
        }
    });



    $.ajax({
        type: "GET",
        url: 'components/footer.html',
        dataType: 'html',
        success: function (data) {
            console.log(data);
            $("#footer").append(data.toString());
        },
        error: function (data, errorThrown) {
            alert(errorThrown);
        }
    });*/

    //setInterval(function () {
    //console.log('hello');
    $.getJSON('admin/adminModel.php',
        function (zmanim) {
            $('#sunShachris').text(zmanim.sunShachris);
            console.log('hello');
        });

    //  }, 300000);
}());