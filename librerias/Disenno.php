<?php
error_reporting(E_ALL ^ E_NOTICE);
@session_start();

class Disenno {

    function displayHeader() {

        $config = Config::singleton();
        ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
  <head>
    <meta content="text/html" http-equiv="content-type" charset="UTF-8"  >
    <title>Banco Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link rel="shortcut icon" href="http://apple.com/favicon.ico" />
    <link rel="icon" type="image/ico" href="http://www.apple.com/favicon.ico" />
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../../dist/css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../dist/css/ionicons-2.0.1/css/ionicons.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.css"  media="screen,projection"/>
    <!--sweetalert--->
    <script src="../../dist/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/sweetalert.css">
            <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>


            <script src="../../dist/js/jquery-1.11.1.js" ></script>

     <style>
          /*body {*/
              /*overflow: hidden;*/
          /*}*/
          #preloader {
              position: fixed;
              top:0; left:0;
              right:0; bottom:0;
              background: white;
              z-index: 100;
          }

          #loader {
              width: 100px;
              height: 100px;
              position: absolute;
              left:50%; top:50%;
              background: url(../../img/Loader.gif) no-repeat center 0;
              margin:-50px 0 0 -50px;
          }

      </style>

      <script>
          //Preloader
          $(window).load(function() {
          });
          function show() {
              $('#preloader').fadeOut(500);
              $('#canvas').delay(500).fadeIn(function() {
                  window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
                      responsive: true
                  });
              });
          };

          setTimeout(show, 3000);

          //Chart.js
          var radarChartData = {
              labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
              datasets: [
                  {
                      label: "My First dataset",
                      fillColor: "rgba(220,220,220,0.2)",
                      strokeColor: "rgba(220,220,220,1)",
                      pointColor: "rgba(220,220,220,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(220,220,220,1)",
                      data: [65,59,90,81,56,55,40]
                  },
                  {
                      label: "My Second dataset",
                      fillColor: "rgba(151,187,205,0.2)",
                      strokeColor: "rgba(151,187,205,1)",
                      pointColor: "rgba(151,187,205,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(151,187,205,1)",
                      data: [28,48,40,19,96,27,100]
                  }
              ]
          };

      </script>
  </head>
   <body class="skin sidebar-mini">

        <div class="valign-wrapper" id="preloader" style="height: 100%;">

            <div class="valign center-align" style="width: 100%;">
                <div class="preloader-wrapper big active" style="width: 100px; height: 100px">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left"><div class="circle"></div></div>
                        <div class="gap-patch"><div class="circle"></div></div>
                        <div class="circle-clipper right"><div class="circle"></div></div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left"><div class="circle"></div></div>
                        <div class="gap-patch"><div class="circle"></div></div>
                        <div class="circle-clipper right"><div class="circle"></div></div>
                    </div>
                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left"><div class="circle"></div></div>
                        <div class="gap-patch"><div class="circle"></div></div>
                        <div class="circle-clipper right"><div class="circle"></div></div>
                    </div>
                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left"><div class="circle"></div></div>
                        <div class="gap-patch"><div class="circle"></div></div>
                        <div class="circle-clipper right"><div class="circle"></div></div>
                    </div>
                </div>
                <p>Cargando...</p>
            </div>
        </div>

     <div class="wrapper">

        <?php
                $this->header();
            }
// displayHeader
            function header() {
                $config = Config::singleton();
                require_once '../../app/header.php';
            }
// Content Wrapper.
            function displayFooter() {
                require_once '../../app/content.php';
            }
// header
            function displayContent() {
                include '../../app/sidebar.php';
                ?>           
                <?php
            }
// displayHeader
        }
        