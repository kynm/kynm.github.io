<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/index.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/animation.css" media="screen">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <title>Css3 transform 2D</title>
    </head>

    <body>
        <div id="header-wrapper">
            <div id="header">
                <div id="content">
                    <ul id="nav">
                        <li class="left"><a href="index.html">Transform 2D</a></li>
                        <li class="right"><a href="index2.html">Transform 3D</a></li>
                        <li class="right"><a href="index3.html">Animation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <div id="content-wrapper-left">
            </div>
            <div id="content-wrapper-right">
                <div>
                    <h2>1. The original image</h2>
                    <pre>
                        img {
                            width: 210px;
                            height:100px;
                        }
                    </pre>
                    <img id="original" src="img/demo.jpg" />
                </div>
                <div>
                    <h2>2. Translate</h2>
                    <pre>
                        #translate:hover {
                            transition: 1s ease-in-out;
                            transform:translate(500px);
                        }
                    </pre>
                    <img id="translate" src="img/demo.jpg" />
                </div>
                <div>
                    <h2>3. Scale</h2>
                    <pre>
                        #scale:hover {
                            transition: 1s ease-in-out;
                            transform:scale(1,0.5);
                        }
                    </pre>
                    <img id="scale" src="img/demo.jpg" />
                    <img id="scale1" src="img/demo.jpg" />
                    <img id="scale2" src="img/demo.jpg" />
                </div>
                <div>
                    <h2>4. Rotare</h2>
                    <pre>
                        #rotare:hover {
                            transition: 1s ease-in-out;
                            transform:rotate(45deg);
                        }
                    </pre>
                    <img id="rotare" src="img/demo.jpg" />
                    <img id="rotare1" src="img/demo.jpg" />
                </div>
                <div>
                    <h2>5. Skew</h2>
                    <pre>
                        #skew:hover {
                            transition: 1s ease-in-out;
                            transform:skew(35deg);
                        }
                    </pre>
                    <img id="skew" src="img/demo.jpg" />
                    <img id="skew1" src="img/demo.jpg" />
                </div>

                <div>
                    <h2>5. Muntiple transform</h2>
                    <pre>
                        #muntiple:hover {
                            transform: rotate(-20deg) skewX(-10deg) scale(0.8);
                        }
                    </pre>
                    <img id="muntiple" src="img/demo.jpg" />
                    <img id="muntiple1" src="img/demo.jpg" />
                </div>
            </div>
        </div>
        <div id="footer-wrapper">
            <div id="footer">
            </div>
        </div>
    </body>
</html>
<?php echo 'helloword';?>