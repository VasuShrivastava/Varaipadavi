<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <title>வரைபடவி - Varaipadavi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="http://www.filippobello.com/assets/images/favicon.gif" type="image/gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* (document.documentElement.innerText.match(new RegExp("is", "g") */
        /* For device width smaller than 400px: */

        .stopwatch {
            color: #DF3D82;
            font-size: 50px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
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
            padding-left: 5%;
            background-repeat: no-repeat;
            background-image: url("Bg/bb.png");
        }
        /* For device width 400px and larger: */

        @media only screen and (min-device-width: 500px) {
            body {
                background-image: url("Bg/bb.jpg");
            }
        }

        .map-area {
            color: #008b00;
            cursor: default;
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
            color: red;
            float: left;
            background-color: white;
            height: 593px;
            width: 420px;
            border: 3px solid #111197;
        }


        #rank-t {
            
            font-size: 12px;
            width: 408px;
            height: 583px;
            border-collapse: collapse;
            background: url('table-images/pattern.png');
        }

        #rank-t thead tr {
            background: url('table-images/pattern.png');
        }

        #rank-t th {
            font-size: 13px;
            font-weight: normal;
            padding: 8px;
            border-bottom: 1px solid #fff;
            color: #039;
        }

        #rank-t td {
            padding: 8px;
            border-bottom: 1px solid #fff;
            color: #669;
            border-top: 1px solid transparent;
        }

        #rank-t tbody tr:hover td {
            color: #339;
            background: #fff;
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
            padding-top: 2.5%;
            height: 600px;
        }
    </style>

    <title></title>
</head>

<body onload="LoggedIn()">
    <div style="min-width: 1280px; margin: 0 auto;">
        <nav class="te-main-menu navbar-fixed-side">
            <ul>
                <li>
                    <a href="http://localhost/home.html">
                        <i class="te-fa te-fa-2x glyphicon glyphicon-home"></i>
                        <span class="nav-text">
                            முகப்பு
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="About.html">
                        <i class="te-fa te-fa-2x glyphicon glyphicon-tasks"></i>
                        <span class="nav-text">
                            மேலும் அறிக
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="te-fa te-fa-2x glyphicon glyphicon-phone-alt"></i>
                        <span class="nav-text">
                            தொடர்பு கொள்க
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="/Quiz.html" class="te-disable te-active">
                       <i class="te-active te-fa te-fa-2x glyphicon glyphicon-education"></i>
                        <span class="te-active nav-text">
                            போட்டி
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="/Rank.html">
                       <i class="te-fa te-fa-2x glyphicon glyphicon-signal"></i>
                        <span class="nav-text">
                            தரவரிசை
                        </span>
                    </a>

                </li>
            </ul>

            <ul class="logout">
                <li onclick="document.getElementById('tel-ac').style.display='block'">
                    <a id="cr-ac">
                         <i class="te-fa te-fa-2x glyphicon glyphicon-edit"></i>
                        <span class="nav-text">
                            புதிய கணக்கை திற
                        </span>
                    </a>
                </li>
                <li id="lg-in" onclick="document.getElementById('tel-lg').style.display='block'">
                    <a>
                         <i class="te-fa te-fa-2x glyphicon glyphicon-log-in"></i>
                        <span class="nav-text">
                            புகுபதிகை
                        </span>
                    </a>
                </li>
                <li id="us-na">
                    <a>
                         <i class="te-fa te-fa-2x glyphicon glyphicon-user"></i>
                        <span id="un-fi" class="nav-text">
                        </span>
                    </a>
                </li>
                <li id="lg-out" onclick="ClearCookie()">
                    <a>
                         <i class="te-fa te-fa-2x glyphicon glyphicon-log-out"></i>
                        <span class="nav-text">
                            விடுபதிகை
                        </span>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="tel-lg" class="tel-modal">

            <div class="tel-modal-content animate">
                <div class="tel-modal-header">
                    <span onclick="document.getElementById('tel-lg').style.display='none'" class="close"><b>&times;</b></span>
                    <h1>புகுபதிகை</h1>
                </div>
                <div class="tel-imgcontainer">
                    <img src="Avatar.png" alt="Avatar" class="tel-avatar">
                </div>

                <div class="tel-container">
                    <label><b>பயனர் பெயர்</b></label>
                    <input type="text" placeholder="உங்கள் பயனர் பெயரை உள்ளிடுக" name="lguname" required>

                    <label><b>கடவுச்சொல்</b></label>
                    <input type="password" placeholder="உங்கள் கடவுச்சொல்லை உள்ளிடுக" name="l-psw" required>

                    <button onclick="callScriptFunction('GetPsw')">புகுபதிகை</button>
                    <input type="checkbox" id="remember"> இடுபதிந்தே இருக்கவிடவும் (30 நாட்கள்)
                </div>

                <div class="tel-container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('tel-lg').style.display='none'" class="tel-cancelbtn">இரத்து செய்</button>
                    <span class="tel-psw">பயனர் கணக்கு இல்லையா? <a onclick="OpenAccount()">புதியதை உருவாக்குக!</a></span>
                </div>
            </div>
        </div>
        <div id="tel-ac" class="tel-modal">

            <div class="tel-modal-content animate">
                <div style='background-color:#1773b3' class="tel-modal-header">
                    <span onclick="document.getElementById('tel-ac').style.display='none'" class="close"><b>&times;</b></span>
                    <h2>புதிய கணக்கை உருவாக்கவும்</h2>
                </div>
                <div class="tel-imgcontainer">
                    <img src="Avatar2.png" alt="Avatar" class="tel-avatar">
                </div>

                <div class="tel-container">
                    <div id="tel-falname" class="row">
                        <div class="col-xs-6"><label><b>முதற்பெயர்</b></label>
                            <input class="tel-input" type="text" placeholder="முதற்பெயரை உள்ளிடுக" name="fname" required>
                        </div>
                        <div class="col-xs-6"><label><b>இறுதிப்பெயர்</b></label>
                            <input class="tel-input" type="text" placeholder="இறுதிப்பெயரை உள்ளிடுக" name="lname" required>
                        </div>
                    </div>
                    <div id="tel-UN">
                        <label><b>பயனர் பெயர்</b></label>
                        <input class="tel-input" type="text" placeholder="பயனர் பெயரை உள்ளிடுக" name="uname" required>
                    </div>
                    <div id="tel-email">
                        <label><b>மின்னஞ்சல்</b></label>
                        <input class="tel-input" type="email" placeholder="மின்னஞ்சல் முகவரியை உள்ளிடுக" name="email" required>
                    </div>
                    <div id="tel-scl">
                        <label>
                            <b>பாடசாலை</b>
                            </label>
                        <span data-type="selectors" data-name="birthday_wrapper" id="dobs">
                <select aria-label="Scl" name="scl" id="scl" title="scl">
                  <option value="" selected="1">பாடசாலை</option>
                  <option value="யாழ்ப்பாணம் இந்துக் கல்லூரி">யாழ்ப்பாணம் இந்துக் கல்லூரி</option>
                  <option value="யாழ் இந்து மகளிர் கல்லூரி">யாழ் இந்து மகளிர் கல்லூரி</option>
                  <option value="வேம்படி மகளிர் உயர்தரப் பாடசாலை">வேம்படி மகளிர் உயர்தரப் பாடசாலை</option>
                  <option value="யாழ் மத்திய கல்லூரி">யாழ் மத்திய கல்லூரி</option>
                  <option value="யாழ்ப்பாணக் கல்லூரி">யாழ்ப்பாணக் கல்லூரி</option>
                </select>
            </span>
                    </div>
                    <div id="tel-dis">
                        <label>
                            <b>மாவட்டம்</b>
                            </label>
                        <span data-type="selectors" data-name="birthday_wrapper" id="dobs">
                <select aria-label="Dis" name="dis" id="dis">
                  <option value="" selected="1">மாவட்டம்</option>
                  <option value="யாழ்ப்பாணம்">யாழ்ப்பாணம்</option>
                  <option value="கிளிநொச்சி">கிளிநொச்சி</option>
                  <option value="மன்னார்">மன்னார்</option>
                  <option value="முல்லைத்தீவு">முல்லைத்தீவு</option>
                  <option value="வவுனியா">வவுனியா</option>
                </select>
            </span>
                    </div>
                    <div id="tel-Password">
                        <label><b>கடவுச்சொல்</b></label>
                        <input class="tel-input" type="password" placeholder="கடவுச்சொல்லை உள்ளிடுக" name="psw" required>
                        <label><b>கடவுச்சொல்லை உறுதிசெய்க</b></label>
                        <input class="tel-input" type="password" placeholder="கடவுச்சொல்லை மீளவும் இடுக" name="cpsw" required>
                    </div>
                    <div>
                        <label>
                            <b>பிறந்த தினம்</b>
                            </label>
                        <span data-type="selectors" data-name="birthday_wrapper" id="dobs">
                <select aria-label="Day" name="day" id="day" title="Day">
                  <option value="" selected="1">திகதி</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select aria-label="Month" name="month" id="month" title="Month">
                  <option value="" selected="1">மாதம்</option>
                  <option value="1">சன</option>
                  <option value="2">பெப்</option>
                  <option value="3">மார்</option>
                  <option value="4">ஏப்</option>
                  <option value="5">மே</option>
                  <option value="6">சூன்</option>
                  <option value="7">சூலை</option>
                  <option value="8">ஓக</option>
                  <option value="9">செப்</option>
                  <option value="10">ஒக்</option>
                  <option value="11">நவ</option>
                  <option value="12">திச</option>
                </select>
                <select aria-label="Year" name="year" id="year" title="Year">
                  <option value="" selected="1">வருடம்</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                </select>
            </span>
                    </div>
                    <div id="notify"></div>
                    <button style="background-color:#1773b3;" onclick="CreateAccount()">உங்களது கணக்கை உருவாக்குக</button>
                </div>

                <div class="tel-container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('tel-ac').style.display='none'" class="tel-cancelbtn">இரத்து செய்</button>
                    <span class="tel-psw">முதலே <a onclick="OpenLogin()">கணக்கு</a> உள்ளதா?</span>
                </div>
            </div>
        </div>
        <div id="quiz">
            <div class="r-area">
                <table id="rank-t">
                </table>
            </div>
            <div class="q-area">
                <div class="stopwatch"></div>
                <div id="quest"></div>
                <button id="start" onclick="runphp()">தொடங்குக</button>
                <button id="adti" onclick="gettime()">புள்ளியை சேர்</button>
                <div id="text"></div>
                <div id="datatr"></div>
            </div>
            <center>
                <div style="display: block; background-size: contain; position: relative; padding: 0px; width: 500px; height: 593px;" class="map">
                    <img align="center" src='lkmap.png' usemap='#lkmap' class='imgmap_css_container' title='imgmap201293016112'
                        alt='imgmap201293016112' id='lkmap' />
                </div>
                <map id='innermap' name='lkmap'>
</map>
            </center>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('tel-lg');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            var modall = document.getElementById('tel-ac');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modall) {
                    modall.style.display = "none";
                }
            }
            function OpenLogin() {
                modall.style.display = "none";
                modal.style.display = "block";
            }
            function OpenAccount() {
                modal.style.display = "none";
                modall.style.display = "block";
            }
            var Glodata = {};
            // Client ID and API key from the Developer Console
            var CLIENT_ID = '954333455549-c4t57ivcuhem7cnjn9bc1nn998aug7ei.apps.googleusercontent.com';

            // Array of API discovery doc URLs for APIs used by the quickstart
            var DISCOVERY_DOCS = ["https://script.googleapis.com/$discovery/rest?version=v1"];

            // Authorization scopes required by the API; multiple scopes can be
            // included, separated by spaces.
            var SCOPES = 'https://www.googleapis.com/auth/spreadsheets';

            /**
             *  On load, called to load the auth2 library and API client library.
             */
            function handleClientLoad() {
                gapi.load('client:auth2', initClient);
            }

            /**
             *  Initializes the API client library and sets up sign-in state
             *  listeners.
             */
            function initClient() {
                gapi.client.init({
                    discoveryDocs: DISCOVERY_DOCS,
                    clientId: CLIENT_ID,
                    scope: SCOPES
                }).then(function () {
                    // Listen for sign-in state changes.
                    gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

                    // Handle the initial sign-in state.
                    updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
                });
            }

            /**
             * Load the API and make an API call.  Display the results on the screen.
             */
            var answers = 0;
            var time = "";
            var cuname = "";
            function gettime() {
                time += stopwatch.lap();
                callScriptFunction('AddTime');
            }


            function callScriptFunction(funcall) {
                // Initialize parameters for function call.
                var uname = $("input[name=uname]").val();
                var psw = $("input[name=psw]").val();
                var fname = $("input[name=fname]").val();
                var lname = $("input[name=lname]").val();
                var email = $("input[name=email]").val()
                var dob = $("#day").val() + '/' + $("#month").val() + '/' + $("#year").val();
                var scl = $("#scl").val();
                var dis = $("#dis").val();
                var lguname = $("input[name=lguname]").val();
                var l_psw = $("input[name=l-psw]").val();
                var scriptId = "1KHjxpz7SgZaBUwTjyKbqFuT0NFOM8hsAGprza5oLBsuKC2MwfL5XWK3F";

                // Create execution request.
                if (funcall == 'GetData') {
                    var request = {
                        'function': 'GetData',
                        'devMode': true   // Optional.
                    };
                } else if (funcall == 'GetPsw') {
                    var request = {
                        'function': 'GetPsw',
                        'parameters': [lguname],
                        'devMode': true   // Optional.
                    };
                } else if (funcall == 'AddTime') {
                    var request = {
                        'function': 'AddTime',
                        'parameters': [cuname, time],
                        'devMode': true   // Optional.
                    };
                } else if (funcall == 'GetTime') {
                    var request = {
                        'function': 'GetTime',
                        'devMode': true   // Optional.
                    };
                } else {
                    var request = {
                        'function': 'AddData',
                        'parameters': [uname, psw, scl, dis, fname, lname, email, dob],
                        'devMode': true   // Optional.
                    };
                }


                // Make the request.
                var op = gapi.client.request({
                    'root': 'https://script.googleapis.com',
                    'path': 'v1/scripts/' + scriptId + ':run',
                    'method': 'POST',
                    'body': request
                });

                // Log the results of the request.
                op.execute(function (resp) {
                    if (resp.error && resp.error.status) {
                        // The API encountered a problem before the script started executing.
                        alert('Error calling API: ' + JSON.stringify(resp, null, 2));
                    } else if (resp.error) {
                        // The API executed, but the script returned an error.
                        var error = resp.error.details[0];
                        alert('Script error! Message: ' + error.errorMessage);
                    } else {
                        // Here, the function returns an array of strings.
                        var data = resp.response.result;
                        if (funcall == 'GetData') {
                            var text = "";
                            var i = 0;
                            while (i < 15) {
                                text += '<area shape="circle" coords="' + data[i][1] + ', 13"  onclick="Doit(\'' + data[i][0] + '\')" alt="imgmap201293016112-0" class="map-area" />'
                                i++;
                            }
                            document.getElementById('innermap').innerHTML = text;
                            document.getElementById('start').style.display = 'none';
                            Maquest(data);
                        } else if (funcall == 'GetPsw') {
                            if (l_psw == data) {
                                document.getElementById('tel-lg').style.display = 'none';
                                setCookie("username", lguname, 30);
                                LoggedIn();
                            } else {
                                alert('Wrong Password');
                            }
                        } else if (funcall == 'AddTime') {
                            alert('உங்களது புள்ளி சேர்க்கப்பட்டது.');
                        } else if (funcall == 'GetTime') {
                            var text = "";
                            var i = 0;
                            while (i < 10) {
                                var l = i + 1;
                                text += '<tr><td>' + l + '.</td><td>' + data[i][0] + '<br>' + data[i][2] + '</td><td>' + data[i][1] + '</td></tr>'
                                i++;
                            }
                            var ltext = '<tr><th>நிலை</th><th>பயனர்</th><th>நேரம்</th></tr>' + text;
                            document.getElementById('rank-t').innerHTML = ltext;

                            document.getElementById('st-q').style.display = 'none';
                            document.getElementById('quiz').style.display = 'block';
                        } else {
                            document.getElementById('tel-ac').style.display = 'none';
                            notify('உங்களது கணக்கு உருவாக்கப்பட்டது', "success");
                            location.reload();
                        }

                    }
                });
            }
            function shuffle(array) {
                var currentIndex = array.length, temporaryValue, randomIndex;

                // While there remain elements to shuffle...
                while (0 !== currentIndex) {

                    // Pick a remaining element...
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex -= 1;

                    // And swap it with the current element.
                    temporaryValue = array[currentIndex];
                    array[currentIndex] = array[randomIndex];
                    array[randomIndex] = temporaryValue;
                }

                return array;
            }
            function Ditext(Distext) {
                document.getElementById("text").innerHTML = Distext;
            }
            function Maquest(data) {
                var places = [data[0][0], data[1][0], data[2][0], data[3][0], data[4][0], data[5][0], data[6][0], data[7][0], data[8][0], data[9][0], data[10][0], data[11][0], data[12][0], data[13][0], data[14][0]];
                var shuffled = shuffle(places);
                var i = 0;
                while (i < 10) {
                    quest += "<div class='row'><div class='col-sm-6'>" + shuffled[i] + "</div><div class='totick col-sm-2' id='" + shuffled[i] + "'></div></div>";
                    i++;
                }
                document.getElementById("quest").innerHTML = quest.replace("[object HTMLDivElement]", "");
                stopwatch.start();
            }
            function Doit(element) {
                var place = element;
                if (place == 'Wrong') {
                    alert("இவ்விடை தவறு");
                } else {
                    alert(place);
                    document.getElementById(place).innerHTML = '✓';
                    answers += 1;

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
                    document.getElementById('lg-in').style.display = "block";
                    document.getElementById('cr-ac').style.display = "block";
                    alert('Login First');
                    modal.style.display = "block";
                }
            }
            function ClearCookie() {
                document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                location.reload();
            }
            setInterval(StopTimer, 1000);
            function StopTimer() {
                if (answers == 10) {
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
            function CreateAccount() {
                var uname = $("input[name=uname]").val();
                var psw = $("input[name=psw]").val();
                var cpsw = $("input[name=cpsw]").val();
                var fname = $("input[name=fname]").val();
                var lname = $("input[name=lname]").val();
                var email = $("input[name=email]").val()
                var dob = $("#day").val() + '/' + $("#month").val() + '/' + $("#year").val();
                var scl = $("#scl").val();
                var dis = $("#dis").val();
                if (uname == "" || psw == "" || fname == "" || lname == "" || email == "" || dob == "//" || scl == "" || dis == "") {
                    notify("Please Fill All Inputs", "alert");
                } else if (psw !== cpsw) {
                    notify("Passwords Doesn't Match", "alert");
                } else {
                    callScriptFunction('AddData');
                }
            }
            function notify(par, type) {
                if (type == "alert") {
                    document.getElementById('notify').innerHTML = '<div class="alert alert-danger" role="alert">' + par + '</div>';
                } else {
                    document.getElementById('notify').innerHTML = '<div class="alert alert-success" role="alert">' + par + '</div>';
                }
            }

            function addarea(place, coords) {
                            var text = "";
                                text += '<area shape="circle" coords="' + coords + ', 23"  onclick="Doit(\'' + place + '\')" alt="imgmap201293016112-0" class="map-area" />'
                            document.getElementById('innermap').innerHTML = document.getElementById('innermap').innerHTML + text;
}
            function addquest(place) {
                            var text = place;
                            document.getElementById('innermap').innerHTML = document.getElementById('quest').innerHTML + text;
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
echo '<script type="text/javascript">';
foreach ($info as $data) {
    $text .= 'addarea("'.$data[place].'", "'.$data[coords].'");';
}
echo $text;
echo '</script>';
while ($row_user = $result->fetch_assoc())
    $info[] = $row_user;
shuffle($info);
echo '<script type="text/javascript">';
foreach ($info as $data) {
    $text .= 'addquest("'.$data[place].'");';
}
echo $text;
echo '</script>';
$conn->close();
?>
<script>
    function runphp() {
         document.write('<?php  ?>')
</body>

</html>