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
                <br>
            <button class="btn btn-primary" OnClick="vid()">Click Here.. i put a song for you</button>
            </h2>
            <div class="video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ib8DHcaTFag?autoplay=1" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
                <h3>This is just a simple web i made for you.. hope you like it :)</h3>
            </div>
            <div class="im">
                <div><img src="img/ballon2f.png"></div>
                <div><img src="img/ballon3.png"></div>
                <div><img src="img/unnamed.png"></div>
                <div><img src="img/cake2f.png"></div>
                <div><img src="img/cake2f.png"></div>
                <div><img src="img/ballon4.png"></div>
                <div><img src="img/cake2f.png"></div>
                <div><img src="img/ballon4.png"></div>
                <div><img src="img/ballon2f.png"></div>
                <div><img src="img/unnamed.png"></div>
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
    <script>
      function vid(){
        var vids = document.getElementsByClassName("video");
        var box = document.getElementsByClassName("box");
        var img = document.getElementsByClassName("im");

        vids[0].style.display = "block";
        box[0].style.display = "none";
        img[0].className = "img";
      }
    </script>
</html>