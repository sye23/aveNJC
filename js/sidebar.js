/* global $ */
(function(){
'use strict';
var weekdayZmanim = $('#weekdayZmanim'),
    shabbosZmanim = $('#shabbosZmanim'),
    shiurim = $('#shiurim'),
    shabbos = $('#shabbos'),
    weekPrev = null,
    weekCurr = null,
    shabbosPrev = null,
    shabbosCurr = null,
    shiurimCurr = null,
    shiurimPrev = null;
    


//weekday zmanim----------------------------
    setInterval(function() {
        $.getJSON("data/weekdayZmanim.json", function(json) {
            weekCurr = JSON.stringify(json);            
            if (weekPrev && weekCurr && weekPrev !== weekCurr) {
                console.log('refresh');
                location.reload();
            }
            weekPrev = weekCurr;
        });                       
    }, 600000);   

        $.getJSON("data/weekdayZmanim.json", function(data) {
          $('<tr>'+
                '<th>Sunday</th>' +
                '<td>' + data.sunday.shachris + '</td>' +
                '<td>' + data.sunday.mincha + '</td>' +
                '<td>' + data.sunday.marriv + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Monday</th>' +
                '<td>' + data.monday.shachris + '</td>' +
                '<td>' + data.monday.mincha + '</td>' +
                '<td>' + data.monday.marriv + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Tuesday</th>' +
                '<td>' + data.tuesday.shachris + '</td>' +
                '<td>' + data.tuesday.mincha + '</td>' +
                '<td>' + data.tuesday.marriv + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Wednesday</th>' +
                '<td>' + data.wednesday.shachris + '</td>' +
                '<td>' + data.wednesday.mincha + '</td>' +
                '<td>' + data.wednesday.marriv + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Thursday</th>' +
                '<td>' + data.thursday.shachris + '</td>' +
                '<td>' + data.thursday.mincha + '</td>' +
                '<td>' + data.thursday.marriv + '</td>' +
            '</tr>'+
                '<th>Friday</th>' +
                '<td>' + data.friday.shachris + '</td>' +
                '<td>' + data.friday.mincha + '</td>' +
                '<td></td>' +
            '</tr>'
        ).insertAfter(weekdayZmanim);
    });

    //shabbos zmanim------------------         

    setInterval(function() {
        $.getJSON("data/shabbosZmanim.json", function(json) {
            shabbosCurr = JSON.stringify(json);            
            if (shabbosPrev && shabbosCurr && shabbosPrev !== shabbosCurr) {
                console.log('refresh');
                location.reload();
            }
            shabbosPrev = shabbosCurr;
        });                       
    }, 600000);   

        $.getJSON("data/shabbosZmanim.json", function(data) {
          $(shabbos).append(data.parsha);
          $(shabbosZmanim).append(
            '<tr>'+
                '<th>Candle Lighting</th>' +
                '<td>' + data.candleLighting + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'+
            '<tr>'+
                '<th>Friday Mincha</th>' +
                '<td>' + data.fridayMincha + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'+
            '<tr>'+
                '<th>Shachris</th>' +
                '<td>' + data.shachris + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'+
            '<tr>'+
                '<th>Mincha</th>' +
                '<td>' + data.mincha + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'+
            '<tr>'+
                '<th>Marriv</th>' +
                '<td>' + data.marriv + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'+
                '<th>Shabbat Ends</th>' +
                '<td>' + data.shabbosEnds + '</td>' +
                '<td></td>' +
                '<td></td>' +
            '</tr>'
        ); 
    });           


// shiurim-----------------------------------------------
 setInterval(function() {
        $.getJSON("data/shiurim.json", function(json) {
            shiurimCurr = JSON.stringify(json);            
            if (shiurimPrev && shiurimCurr && shiurimPrev !== shiurimCurr) {
                console.log('refresh');
                location.reload();
            }
            shiurimPrev = shiurimCurr;
        });                       
    }, 600000);   

 $.getJSON("data/shiurim.json", function(data) {
          $(shiurim).append(
            '<tr>'+
                '<th>Sunday</th>' +
                '<td>' + data.sunday[0] + '</td>' +
                '<td>' + data.sunday[1] + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Mon-Fri</th>' +
                '<td>' + data.monFri[0] + '</td>' +
                '<td>' + data.monFri[1] + '</td>' +
            '</tr>'+
            '<tr>'+
                '<th>Shabbat</th>' +
                '<td>' + data.shabbat[0] + '</td>' +
                '<td>' + data.shabbat[1] + '</td>' +
            '</tr>'
        ); 
    });         

}());