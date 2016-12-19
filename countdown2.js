start();
function start()
{
    v = setInterval(mytimer, 1000);
    x=  setInterval(mytimer2, 1000);
}
function stop()
{
    clearInterval(v);
}


function mytimer() // counter 1
{
    var obj = getTime('2018-01-15');

    var kvar = "Dagar:" + obj.days +'<br>'+ " Timmar:" + obj.hours;
    document.getElementById("clockdiv").innerHTML = kvar;
}

function mytimer2() // counter 2
{
    var obj = getTime('2018-05-31');
    if(obj.days==0 && obj.hours==0)  {
        clearInterval(v); //Stoppa timern
        alert("Tiden är slut");
    }
    var kvar = "Dagar:" + obj.days +'<br>'+ " Timmar:" + obj.hours;
    document.getElementById("clockdiv2").innerHTML = kvar;
}


//time calculator
function getTime(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
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