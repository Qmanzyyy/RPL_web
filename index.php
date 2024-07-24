<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPlsite</title>
    <!-- style -->
    <link rel="stylesheet" href="./src/output.css">

    <style>
        #video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        @import url(https://fonts.googleapis.com/css?family=Khula:700);
        .console-container {
            font-family:Khula;
        }
        .hidden {
            opacity:0;
        }
        .console-underscore {
            display:inline-block;
            position:relative;
            top:-0.14em;
            left:10px;
        }
    </style>
    <!-- endstyle -->

    <!-- script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- endscript -->
</head>

<body class="h-screen">

        <?php include './component/header-index.php'; ?>

    <div class="relative w-full h-full text-white">
        <video id="video-background" class="-z-10 object-cover w-full h-full top-0 left-0 " autoplay muted loop >
            <source src="./Background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="flex flex-col items-center justify-center h-full backdrop-blur-sm">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-extrabold">Welcome To Our Website</h1>
            <div class='console-container md:text-3xl text-lg'>
                <span id='text'></span>
                <div class='console-underscore' id='console'>
                    &#95;
                </div>
            </div>
                <a href="./Menu.php" class=" mt-3 border text-lg p-3 flex items-center rounded-full bg-opacity-40 bg-black border-white hover:bg-white hover:text-black group focus:ring-offset-2 focus:ring-4 focus:ring-blue-600">
                    <span>Get Started</span>
                    <svg class="w-6 h-6 text-white group-hover:text-black group-hover:translate-x-1 transition-all aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>
                 </a>
        </div>
    </div>
     <!-- footer -->
     <?php 
        include './component/footer.php'
     ?>
    <!-- endfooter -->
</body>
<script>
    // function([string1, string2],target id,[color1,color2])    
 consoleText(['Make progress.', 'Be creative.', 'Make better.'], 'text',['white','white','white']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
</script>
</html>
