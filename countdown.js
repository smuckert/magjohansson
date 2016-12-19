﻿var deadline = '2018-01-15';
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor(( t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
         return {
         'total': t,
         'days': days,
         'hours': hours,
         'minutes': minutes,
         'seconds': seconds
         };
     }

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var dayEl = clock.querySelector('.dayItem');
    var hourEl = clock.querySelector('.hourItem');
    var timeinterval = setInterval(function () {
        var t = getTimeRemaining(endtime);
        dayEl.innerHTML = '<span>days:</span>'+t.days;
        hourEl.innerHTML = '<span>hours:</span>' + t.hours;
       
        //clock.innerHTML = 'days: ' + t.days + '<br>' +
        //                  'hours: ' + t.hours;
                          
        if (t.total <= 0) {
            clearInterval(timeinterval);
        };
    }, 1000);
}
