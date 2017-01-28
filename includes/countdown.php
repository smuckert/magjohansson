<style>

#countdown, #countdown1{
	text-align: center;
}
p {
	margin-top: 0px;
}

/*

div#countdown{color: #353535;}

div#countdown p{
	width: 100%;
	display: inline-block;
	text-align: center;
}



p.strings{
	width: 100%;
	height: auto;
	padding: 30px 0;
	background: ; //färg på days hours etc
	color: #FFFFFF;
}

div.cd-box{
	width: 100px;
	height: 200px;
	background: ;
	float: left;
	padding: 25px 0 0 0;
	margin: 30px 15px 0 0;
	
}

/* footer */





  </style>
  </head>
<div id="wrapper">


    <div id="countdown">
    <h1>Dagar till LIA</h1>
      <div class="cd-box">
      	<p class="strings timeRefDays">Days</p>
        <p class="numbers days">00</p>
      </div>
      <div class="cd-box">
      	<p class="strings timeRefHours">Hours</p>
        <p class="numbers hours">00</p>
      </div>
      
    
    </div>

    <div id="countdown1">
    <h1>Dagar till Examen</h1>
    	<div class="cd-box">
      	<p class="strings timeRefDays">Days</p>
        <p class="numbers days">00</p>
      </div>
      <div class="cd-box">
      	<p class="strings timeRefHours">Hours</p>
        <p class="numbers hours">00</p>
      </div>
    </div>
   
    
</div>
<script>
$(document).ready(function(){
	//
  (function(e){
		e.fn.countdown = function (t, n){
			function i(){
				eventDate = Date.parse(r.date) / 1e3;
				currentDate = Math.floor(e.now() / 1e3);
				//
				if(eventDate <= currentDate){
					n.call(this);
					clearInterval(interval)
				}
				//
				seconds = eventDate - currentDate;
				days = Math.floor(seconds / 86400);
				seconds -= days * 60 * 60 * 24;
				hours = Math.floor(seconds / 3600);
				seconds -= hours * 60 * 60;
				minutes = Math.floor(seconds / 60);
				seconds -= minutes * 60;
				//
				days == 1 ? thisEl.find(".timeRefDays").text("Days") : thisEl.find(".timeRefDays").text("Days:");
				hours == 1 ? thisEl.find(".timeRefHours").text("Hours") : thisEl.find(".timeRefHours").text("Hours:");
				minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minutes") : thisEl.find(".timeRefMinutes").text("Minutes");
				seconds == 1 ? thisEl.find(".timeRefSeconds").text("Seconds") : thisEl.find(".timeRefSeconds").text("Seconds");
				//
				if(r["format"] == "on"){
					days = String(days).length >= 2 ? days : "0" + days;
					hours = String(hours).length >= 2 ? hours : "0" + hours;
					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
				}
				//
				if(!isNaN(eventDate)){
					thisEl.find(".days").text(days);
					thisEl.find(".hours").text(hours);
					thisEl.find(".minutes").text(minutes);
					thisEl.find(".seconds").text(seconds)
				}
        else{
          errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
					alert(errorMessage);
					console.log(errorMessage);
					clearInterval(interval)
				}
			}
			//
			var thisEl = e(this);
			var r = {
				date: null,
				format: null
			};
			//
			t && e.extend(r, t);
			i();
			interval = setInterval(i, 1e3)
		}
	})(jQuery);
	//
	$(document).ready(function(){
		function e(){
			var e = new Date;
			e.setDate(e.getDate() + 60);
			dd = e.getDate();
			mm = e.getMonth() + 1;
			y = e.getFullYear();
			futureFormattedDate = mm + "/" + dd + "/" + y;
			return futureFormattedDate
		}
		//
		$("#countdown").countdown({
			date: "31 July 2017 23:59:59", // change date/time here - do not change the format!
			format: "on"
		});

		$("#countdown1").countdown({
			date: "20 July 2017 23:59:59", // change date/time here - do not change the format!
			format: "on"
		});
	});
});
</script>