/*global $ */

(function () {
    'use strict';
    var home = $('#home');





    $(home).click(function () {
        $("#mainbody").empty();
        $.ajax({
            type: "GET",
            url: 'components/home.html',
            dataType: 'html',
            success: function (data) {
                console.log(data);
                $("#mainbody").append(data.toString());
            },
            error: function (data, errorThrown) {
                alert(errorThrown);
            }
        });
    });



}());