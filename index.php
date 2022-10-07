<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipement</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a5a23010e7.js" crossorigin="anonymous"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f87064e2901b920769365bd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
    <div class="container">
        <nav class="rnav" id="rtnav">
            <a href="index.php" class="logo">HOME GYM EQ</a>
            <a href="index.php" class="">Home</a>
            <a href="info.html" class="">Infomation</a>
            <a href="register.php" class="">Wanted</a>
            <a href="workshop.html" class="">Workshop</a>
            <a href="gallery.html" class="">Gallery</a>
            <a href="contact.php" class="">Contact</a>
            <a href="featured.html" class="">Featured</a>

            <input type="text" class="search" name="search" placeholder="Search..">

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
             </a>
        </nav>

        <div class="slider">
            <div id="slider">
                <figure>
                    <div>
                        <img class=" vid" src="video/home.JPG" alt="">
                        <div class="txt">
                            <h4 class="font1">Get inspired from our Home Gym Equipement</h4>
                            <h1 class="font2">Design your home gym</h1>

                            <button>Browse Equipements</button>
                        </div>
                    </div>

                    <div>




                        <div class="txt">
                            <h4 class="font1">Supreme running performance</h4>
                            <h1 class="font2">Enjoy running</h1>

                            <button>Discover more</button>
                        </div>
                        <video class="vid" loop autoplay muted plays-inline preload="metadata">
                            <source src="video/threadmill.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div>
                        <video class="vid" loop autoplay muted plays-inline preload="metadata">
                            
                            <source src="video/gain.mp4" type="video/mp4">
            
                        </video>
                        <div class="txt">
                            <h4 class="font1">Get Suprerior Gains faster</h4>
                            <h1 class="font2">GYM EQ Home App</h1>
                            <button>Discover more</button>
                        </div>
                    </div>
                    <div>
                        <img class="pic vid" src="video/home2.JPG" alt="">
                        <div class="txt dior">
                            <h4>An exciting design</h4>
                            <h1>GYM EQ Dior Limited Edition</h1>
                            <button class="dior-b">Discover more</button>
                        </div>
                    </div>
                </figure>
            </div>
        </div>

        <div class="Row">
            <div class="c1 flex Prp1">
                <h1>Bench Press</h1>
                <img class="EQ" src="images/black.PNG" alt="" width="100" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
            <div class="c1 flex Prp2">
                <h1 class="blk">Threadmill</h1>
                <img class="EQ" src="images/yellow.PNG" alt="" width="200" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
            <div class="c1 flex Prp3">
                <h1>Dumbell</h1>
                <img class="EQ" src="images/red.PNG" alt="" width="160" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
        </div>

        <div class="Row">
            <div class="c1 flex  Pro1">
                <h1>Threadmill</h1>

                <img class="EQ" src="images/gray.PNG" alt="" width="100" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
            <div class="c1 flex Pro2">
                <h1>Cycle</h1>
                <img class="EQ" src="images/green.PNG" alt="" width="160" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
            <div class="c1 flex Pro3">
                <h1>Dumdell</h1>

                <img class="EQ" src="images/blue.PNG" alt="" width="100" height="100">
                <button class="shop">
                    shop
                </button>
            </div>
        </div>

        <div class="Row1">
            <div class="dsc"> <i class="fa-solid fa-truck-fast"></i></div>
            <div class="dsc"> 💪 </div>
            <div class="dsc"> <i class="fa-solid fa-dumbbell"></i></div>
            <div class="dsc"> <i class="fa-solid fa-person-walking"></i></div>
        </div>




        <footer>
            <div class="fnav">
                <a href="#" class="logo">GYM EQ</a>
                <a href="#" class="">Home</a>
                <a href="#" class="">Infomation</a>
                <a href="#" class="">Wanted</a>
                <a href="#" class="">Workshop</a>
                <a href="#" class="">Gallery</a>
                <a href="#" class="">Contact</a>
                <a href="#" class="">Featured</a>
            </div>

            <div>
                <h2> Your at the home</h2>
                <?php
// Connect to server and select database.
$con      = mysqli_connect("localhost", "root", "", "hge_database") or die(mysqli_error());

//select values from visitor_counter table
$sql     = "SELECT * FROM visitor_counter";
$result  = mysqli_query($con, $sql);
$row     = mysqli_fetch_array($result);
$counter = $row['counts'];

// setting counter = 1, if we have no counts value
if (empty($counter)) {
  $counter = 1;
  $sql1    = "INSERT INTO visitor_counter(counts) VALUES('$counter')";
  $result1 = mysqli_query($con, $sql1);
}

echo "You 're visitors No. ";
echo $counter;

// Incrementing counts value
$plus_counter = $counter+1;
$sql2         = "update visitor_counter set counts='$plus_counter'";
$result2      = mysqli_query($con, $sql2);

mysqli_close($con);
?>
<br>
                <input type="search" class="search" value="subcribe"><br/>
                <input  type="submit" value="subcribe to newsleter">
               
            </div>
            <div class="social">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </footer>
    </div>

</body>
<script>
    var free_cookieconsent = {
        cookievalue: "",
        cookiename: "FREE_CONSENT",
        reload: true,
        self: this,
        analytic: "checked",
        advertisements: "checked",
        personalisation: "checked",
        restorechecked: true,
        init: function(objname) {
            this.setCSS();
            this.createCC(objname);
            this.hideCC();
            this.setHeadText('<h3>We use cookies</h3>');
            this.setMainText('When you click &apos;Ok&apos;, you accept all cookies on our website. We can optimize our website. More info see <a href="/privacy-cookies">privacy- en cookies</a>');
            this.setAcceptButtonText('Ok');
            this.setRejectButtonText('No Thanks');
            if (this.getCookie(this.cookiename) == "") {
                this.showCC();
            }
        },
        setHeadText: function(text) {
            document.getElementById("headtext").innerHTML = text;
        },
        setMainText: function(text) {
            document.getElementById("maintext").innerHTML = text;
        },
        setAcceptButtonText: function(text) {
            document.getElementById("acceptbuttontext").innerHTML = text;
        },
        setRejectButtonText: function(text) {
            document.getElementById("rejectbuttontext").innerHTML = text;
        },
        hideCC: function() {
            document.getElementById('cookieConsent').style.display = "none";
        },
        showCC: function() {
            document.getElementById('cookieConsent').style.display = "block";
            var cc_cookie = this.getCookie(this.cookiename);
        },
        getGUID: function() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        },
        setCookie: function(cname, cvalue, exdays, cdomain) {
            var d = new Date();
            var ccdomain = "";
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            if (typeof(cdomain) != "undefined") {
                ccdomain = ";domain=" + cdomain;
            }
            document.cookie = cname + "=" + cvalue + ";" + expires + ccdomain + ";path=/";

        },
        getCookie: function(cname) {
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
        },
        okButton: function() {
            this.hideCC();
            this.setCookie(this.cookiename, "A" + this.cookievalue, 365, location.host);
        },
        setCSS: function() {
            var css = '.cookieConsent {' +
                'font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif;' +
                'position: fixed;' +
                'width: 100%;' +
                'bottom: 0;' +
                'background-color:#222222;' +
                'display: none;' +
                'z-index:999;' +
                '}' +
                ' .cookieConsent.open {' +
                '	 display: block;' +
                '}' +
                ' .cookieConsent__wrapper {' +
                'top:0;' +
                //'position: fixed;' + 
                'bottom: inherit;' +
                'z-index: 100;' +
                '-webkit-box-sizing: border-box;' +
                'box-sizing: border-box;' +
                'width: 100%;' +
                'padding: 25px 10px;' +
                'background-color: #eeeeee;' +
                'color: #ffffff;' +
                '}' +
                '.cookieConsent__container {' +
                ' padding: 5px;' +
                ' margin: 0 auto;' +
                '}' +
                '.cookieConsent__container a {' +
                ' color: #ffffff;' +
                ' text-decoration: underline;' +
                '}' +
                '.cookieConsent__container p {' +
                ' margin-top: 0;' +
                '}' +
                ' @media screen and (min-width: 760px) {' +
                ' .cookieConsent__container {' +
                '	 max-width: 770px;' +
                '	 margin: 0 auto;' +
                '}' +
                '}' +
                '.cookieConsent__form {' +
                ' display: -webkit-box;' +
                ' display: -ms-flexbox;' +
                ' display: flex;' +
                ' -webkit-box-pack: justify;' +
                ' -ms-flex-pack: justify;' +
                ' justify-content: space-between;' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .cookieConsent__form > div {' +
                ' -webkit-box-align: center;' +
                ' -ms-flex-align: center;' +
                ' align-items: center;' +
                '}' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .cookieConsent__form > div span {' +
                ' margin-right: 25px;' +
                '}' +
                '}' +
                '.cookieConsent__form-submit {' +
                ' width: 100%;' +
                ' display: -webkit-box;' +
                ' display: -ms-flexbox;' +
                ' display: flex;' +
                ' -webkit-box-align: end;' +
                ' -ms-flex-align: end;' +
                ' align-items: flex-end;' +
                ' -webkit-box-pack: end;' +
                ' -ms-flex-pack: end;' +
                ' justify-content: flex-end;' +
                '}' +

                ' .cookieConsent__form-submit > button {min-width: 180px; height: 48px;' +
                ' background-color: #64b265;' +
                ' padding: 5px 35px;' +
                ' border: none;' +
                ' border-radius: 6px;' +
                ' color: #ffffff;' +
                ' font-size: 16px;' +
                ' font-weight: 600;' +
                ' line-height: 24px;' +
                '}' +
                '.consentCategories {' +
                'display: -webkit-box;' +
                'display: -ms-flexbox;' +
                'display: none;' +
                '-webkit-box-orient: vertical;' +
                '-webkit-box-direction: normal;' +
                '-ms-flex-direction: column;' +
                'flex-direction: column;' +
                'font-weight: 600;' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .consentCategories {' +
                ' min-width: 70%;' +
                '}' +
                '}' +
                ' @media(max-width: 740px) {.cookieConsent__form-submit>button {width: 100%; margin-right: 0;}}' +
                ' @media(min-width: 740px) {button.accept-cookies {margin-right: 20px;}}' +
                'button.accept-cookies {background-color: #40b192;margin-bottom:12px;}' +
                'button.accept-cookies:hover{background-color: #328C73;cursor: pointer}' +
                'button.reject-cookies {background-color: #ffffff; border: 2px solid #40b192; color: #40b192; margin-bottom:12px;}' +
                'button.reject-cookies:hover{border-color: #328C73;color: #328C73;cursor: pointer}' +
                '.cookieConsent__form>div{flex-wrap:wrap; justify-content:flex-start; align-items:flex-start}' +
                '.cookieConsent__form>div label{ font-weight:normal; line-height:28px; padding-left:37px;}' +
                '.cookieConsent__container h3 {color: #4e4e4e; font-size:20px; margin: 12px 0; font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif; font-weight: 600;}' +
                '.cookieConsent__container p {color: #585858; margin-bottom: 12px;}' +
                '.cookieConsent__container a {color: #562772; border-bottom: none;}' +
                '.cookieConsent__container a:hover {color: #3c1b4f;}';
            head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            if (style.styleSheet) {
                // This is required for IE8 and below.
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
        },
        createCC: function(objname) {
            var self = this;
            var html = '<div id="cookieConsent" class="cookieConsent open">';
            html += '		<div class="cookieConsent__wrapper">';
            html += '		<div class="cookieConsent__container">';
            html += '			<div id="headtext"> </div>';
            html += '			<p id="maintext"> ';
            html += '			</p>';
            html += '			<form class="cookieConsent__form">';
            html += '				<div class="consentCategories">';
            html += '				</div>';
            html += '				<div class="cookieConsent__form-submit">';
            html += '					<button id="acceptbuttontext" type="button" class="accept-cookies" onclick="' + objname + '.setAllCookies();' + objname + '.okButton();"></button>';
            html += '					<button id="rejectbuttontext" type="button" class="reject-cookies" onclick="' + objname + '.setMinimalCookies();' + objname + '.okButton();"></button>';
            html += '				</div>';
            html += '			</form>';
            html += '		</div>';
            html += '	</div>';
            html += '</div>';
            var x = document.createElement("div");
            x.innerHTML = html;
            document.body.appendChild(x);
        },
        setAllCookies: function() {
            this.cookievalue = 'true';
        },
        setMinimalCookies: function() {
            this.cookievalue = 'false';
        }
    }
    var cc = Object.create(free_cookieconsent);
    cc.init("cc");
    //console.log('Init cookieconsent');
</script>
<script>
    function myFunction() {
        var x = document.getElementById("rtnav");
        if (x.className === "rnav") {
            x.className += " responsive";
        } else {
            x.className = "rnav";
        }
    }
</script>

</html>