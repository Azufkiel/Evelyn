<html>
    <head>
        <title>Happy Birthday Evelyn</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script>
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              h = checkTime(h);
              m = checkTime(m);
              s = checkTime(s);
              var waktu = h + ":" + m + ":" + s;
              document.getElementById('txt').innerHTML = waktu;
              var t = setTimeout(startTime, 500);
            }

            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
        </script>
    </head>
    <body onload="startTime()">
        <div class="wrapper">
            <h2 id="txt"></h2>
            <!--<h2 id="demo"></h2>-->
            <h2 class="line-1 anim-typewriter">
                <a id='text'>
                  Happy Birthday Evelyn<br>
                  We Wish You All The Best
                </a>
            </h2>
            <h3>This is just a simple web i made for you.. hope you like it :)</h3>
            <button class="btn btn-primary">Click Here.. i put a song for you</button>
            <div class="video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ib8DHcaTFag" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </body>
</html>