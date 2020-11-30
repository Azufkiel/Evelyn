<hmtl>
    <head>
        <title>Happy Birthday Evelyn</title>
        <link rel="stylesheet" href="style.css">
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
                <!--div class='tooltip'>
                    Dede<span class='tooltiptext'>a</span>
                </div-->
            </h2>
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
</hmtl>