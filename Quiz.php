<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <title>வரைபடவி - Varaipadavi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="http://www.filippobello.com/assets/images/favicon.gif" type="image/gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.maphilight.js"></script>
    <style>
        /* (document.documentElement.innerText.match(new RegExp("is", "g") */
        /* For device width smaller than 400px: */

        .stopwatch {
            color: #DF3D82;
            font-size: 50px;
            text-align: center;
        }
        .te-active {
            color: #ffffff;
        }

        .te-disable {
            cursor: default;
            pointer-events: none;
            background-color: #5fa2db;
        }

        body {
            padding-left: 1%;
            background-repeat: no-repeat;
            background-image: url("Bg/bb.png");
        }
        /* For device width 400px and larger: */

        @media only screen and (min-device-width: 500px) {
            body {
                background-image: url("Bg/bb.jpg");
            }
        }

        .m-area {
            display: none;
        }

        .q-area {
            float: right;
            background-color: white;
            height: 593px;
            width: 357px;
            padding: 15px;
            border: 3px solid #111197;
            margin-right: 10px;
        }

        .r-area {
            float: left;
            background-color: white;
            height: 593px;
            width: 420px;
            border: 3px solid #111197;
        }


table {
    border-collapse: collapse;
    width: 100%;
    background: #fff;
}

th {
    background-color: #0080ff;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
}

td, th {
    padding: 1em 1.5em;
    text-align: left;
}

tbody th {
	background-color: #0080ff;
}
tbody tr:nth-child(2n-1) {
    background-color: #f5f5f5;
    transition: all .125s ease-in-out;
}
tbody tr:hover {
    background-color: rgba(50,98,149,.3);
}

td.rank {
	text-transform: capitalize;
}

        #text {
            width: 151px;
        }

        .totick {
            border: 2px solid black;
        }

        #datatr,
        #lg-in,
        #cr-ac,
        #adti,
        #lg-out,
        #us-na {
            display: none;
        }

        .te-disable {
            pointer-events: none;
            cursor: default;
        }

        #quiz {
            padding-top: 4.3%;
            height: 600px;
        }
.mapcan {
    position: relative;
}
.plte {
    background-color: transparent;
}
  .navbar {
      margin-bottom: 0;
      background-color: #0080ff;
      z-index: 9999;
      border: 0;
      font-size: 13px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 1px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0080ff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  button {
      background-color: #0080ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  button:hover {
      background-color: #3399ff;
  }
  .navbar-brand {
      font-size: 22px !important;
}
    </style>

    <title></title>
</head>

<body onload="LoggedIn()">
    <div style="min-width: 1280px; margin: 0 auto;">
               
        <div class="te-area"></div>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.kanimai.tk/">கணிமை</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="http://www.kanimai.tk/"><i class="te-fa te-fa-4x glyphicon glyphicon-home"></i> முகப்பு</a></li>
        <li><a href="http://www.kanimai.tk/About"><i class="te-fa te-fa-4x glyphicon glyphicon-globe"></i> எங்களை பற்றி</a></li>
        <li><a href="http://www.kanimai.tk/Contact"><i class="te-fa te-fa-4x glyphicon glyphicon-phone-alt"></i> தொடர்பு கொள்க</a></li>
        <li class="active"><a><i class="te-fa te-fa-4x glyphicon glyphicon-flag"></i> போட்டி </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                <li id="us-na">
                    <a href="http://www.kanimai.tk/Myprofile.php">
                         <i class="te-fa te-fa-2x glyphicon glyphicon-user"></i>
                        <span id="un-fi" class="nav-text">
                        </span>
                    </a>
                </li>
                <li id="lg-out" onclick="ClearCookie()">
                    <a href="#">
                         <i class="te-fa te-fa-2x glyphicon glyphicon-log-out"></i>
                        <span class="nav-text">
                            விடுபதிகை
                        </span>
                    </a>
                </li>
      </ul>
    </div>
  </div>
</nav>

        <div id="quiz">
            <div class="r-area">
                <table id="rank-t">
                <tr><th>நிலை</th><th>பயனர்</th><th>நேரம்</th>
                </table>
            </div>
            <div class="q-area">
                <div class="stopwatch"></div>
 <div id="question"></div>
                <button id="start" onclick="runphp()">தொடங்குக</button>
                <button id="restart" onclick="restart()">Restart</button>
                <button id="adti" onclick="addtime()">புள்ளியை சேர்</button>
                <div id="text"></div>
                <div id="datatr"></div>
            </div>
            <center>
<div class="container">
                    <img align="center" src='lkmap.png' usemap='#lkmap' class='map' title='imgmap201293016112'
                        alt='imgmap201293016112' id='lkmap' />
                    
</div>
                <map id='innermap' name='lkmap'>
</map>
            </center>
        </div>
        <script>
$(function() {
        $('.map').maphilight({
            fillColor: '008800'
        });
    });
      var Glodata = {};
            var answers = 0;
            var time = "";
            var cuname = "";
            function Ditext(Distext) {
                document.getElementById("text").innerHTML = Distext;
            }
            function Doit(element) {
                var place = element;
                if (place == 'Wrong') {
                    alert("இவ்விடை தவறு");
                } else {
                    if($("#" + place).length == 0) {
                        alert("இவ்விடை தவறு");
                    }  else {
                        document.getElementById(place).innerHTML = '✓';
                        answers += 1;
                        $(function() {
                        var c = $('#a-' + place).attr("coords");
                        var coord = c.split(',');
                        var tval = +coord[1] + 3;
                        $('#candiv').append('<div style="color: #0040ff; position: absolute; top: ' + tval + 'px; left: ' + coord[0] + 'px; font-size:10px;"><b>' + place + '</b></div>');
                        $('#a-' + place).attr("coords", coord[0] + ", " + coord[1] + ", 4");
                        var data = $('#a-' + place).mouseout().data('maphilight') || {};
                        data.alwaysOn = !data.alwaysOn;
                        $('#a-' + place).data('maphilight', data).trigger('alwaysOn.maphilight');
                        $('#a-' + place).attr("onclick", "alert('Already done');");
                            });
                    }
                }
            }
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            function LoggedIn() {
                var username = getCookie("username");
                if (username != "") {
                    cuname += username;
                    document.getElementById('un-fi').innerHTML = username;
                    document.getElementById('us-na').style.display = "block";
                    document.getElementById('lg-out').style.display = "block";
                    document.getElementById('lg-in').style.display = "none";
                    document.getElementById('cr-ac').style.display = "none";
                } else {
                    location.replace('http://www.kanimai.tk/quiz/Login.php');
                }
            }
            function ClearCookie() {
                document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                location.reload();
            }
            setInterval(StopTimer, 1);
            function StopTimer() {
                if (answers == 5) {
                    stopwatch.stop();
                    document.getElementById('adti').style.display = 'block';
                }
            }
            class Stopwatch {
                constructor(display, results) {
                    this.running = false;
                    this.display = display;
                    this.results = results;
                    this.laps = [];
                    this.reset();
                    this.print(this.times);
                }

                reset() {
                    this.times = [0, 0, 0];
                }

                start() {
                    if (!this.time) this.time = performance.now();
                    if (!this.running) {
                        this.running = true;
                        requestAnimationFrame(this.step.bind(this));
                    }
                }

                lap() {
                    let times = this.times;
                    let li = this.format(times);
                    return li;
                }

                stop() {
                    this.running = false;
                    this.time = null;
                }

                step(timestamp) {
                    if (!this.running) return;
                    this.calculate(timestamp);
                    this.time = timestamp;
                    this.print();
                    requestAnimationFrame(this.step.bind(this));
                }

                calculate(timestamp) {
                    var diff = timestamp - this.time;
                    // Hundredths of a second are 100 ms
                    this.times[2] += diff / 10;
                    // Seconds are 100 hundredths of a second
                    if (this.times[2] >= 100) {
                        this.times[1] += 1;
                        this.times[2] -= 100;
                    }
                    // Minutes are 60 seconds
                    if (this.times[1] >= 60) {
                        this.times[0] += 1;
                        this.times[1] -= 60;
                    }
                }

                print() {
                    this.display.innerText = this.format(this.times);
                }

                format(times) {
                    return `\
${pad0(times[0], 2)}:\
${pad0(times[1], 2)}:\
${pad0(Math.floor(times[2]), 2)}`;
                }
            }

            function pad0(value, count) {
                var result = value.toString();
                for (; result.length < count; --count)
                    result = '0' + result;
                return result;
            }

            function clearChildren(node) {
                while (node.lastChild)
                    node.removeChild(node.lastChild);
            }

            let stopwatch = new Stopwatch(
                document.querySelector('.stopwatch'),
                document.querySelector('.results'));

            function addarea(place, coords) {
                            var text = '<area id="a-' + place + '" class="m-area" style="display: none;" shape="circ" coords="' + coords + ', 14"  onclick="Doit(\'' + place + '\')" data-maphilight=\'{"strokeColor":"0000ff","strokeWidth":3,"fillColor":"00ff00","fillOpacity":0.6}\' data-clicked="0"/>'
                            document.getElementById('innermap').innerHTML = document.getElementById('innermap').innerHTML + text;
}

 
            function addquest(place) {
                            var text = "<div class='row'><div class='col-sm-6'>" + place + "</div><div class='totick col-sm-2' id='" + place + "'></div></div>";
                            document.getElementById('question').innerHTML = document.getElementById('question').innerHTML + text;
}
$("#question").hide();
$("#restart").hide();
$(".map").hide();
$(document).ready(function() {
    $("#start").on("click", function() {
       $("#question").show();
       stopwatch.start();
       $("#start").hide();
       $("#restart").show();
       $(".map").show();
    });
});
function restart() {
       location.reload();
}
function addtime() {
       var ltime = stopwatch.lap();
       var rtime = ltime.replace(/;/g,"a")
       $.post("addtime.php", { score: rtime })
    .done(function(data) {
        alert("Score Added");
        location.reload();
    });
$.post("rank.php")
    .done(function() {
    });
}
function addrank(rank, user, time) {
     var text = '<tr><td>' + rank + '</td><td>' + user + '</td><td>' + time + '</td></tr>';
     document.getElementById('rank-t').innerHTML = document.getElementById('rank-t').innerHTML + text;
}
        </script>
        <script async defer src="https://apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad();" onreadystatechange="if (this.readyState === 'complete') this.onload()">

        </script>
<?php
$servername = "localhost";
$username = "id2118232_malyn";
$password = "malynlbj";
$dbname = "id2118232_userreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT place, coords FROM LKCoords";
$result = $conn->query($sql);
$info = array();
$text = "";
while ($row_user = $result->fetch_assoc())
    $info[] = $row_user;
shuffle($info);
echo '<script type="text/javascript">';
foreach ($info as $data) {
    $text .= 'addarea("'.$data[place].'", "'.$data[coords].'");';
}
echo $text;
echo '</script>';
$asd = $newArray = array_slice($info, 0, 5, true);;
$dist = "";
     echo '<script type="text/javascript">';
     foreach ($asd as $qwe) {
          $dist .= 'addquest("'.$qwe[place].'");';
     }
     echo $dist;
     echo '</script>';

$sql2 = "SELECT * FROM Rank ORDER BY Time ASC LIMIT 10";
$result2 = $conn->query($sql2);
$info2 = array();
while ($row_user2 = $result2->fetch_assoc())
    $info2[] = $row_user2;
$text2 = "";
echo '<script type="text/javascript">';
$in = 1;
foreach ($info2 as $data2) {
    $text2 .= 'addrank('.$in.', "'.$data2[User].'", "'.$data2[Time].'");';
    $in++;
}
echo $text2;
echo '</script>';
$conn->close();
?>
</body>

</html>