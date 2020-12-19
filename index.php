<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
  $task = (isset($_GET['task']) && $_GET['task'] != '') ? $_GET['task'] : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> CF Portfolio </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="header">
      <img class="pLogo" src="home/logo.svg" alt="PortfolioLogo">
      <h1 class="head">Portfolio</h1>
      <div class="nav">
        <nav role="navigation">
          <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="#">CSS</a>
              <ul class="dropdown">
                <li><a href="index.php?page=cssdemo">CSS Demo</a></li>
                <li><a href="index.php?page=csscle">Culminating Learning Evidence</a></li>
              </ul>
            </li>
            <li><a href="#">SVG</a>
              <ul class="dropdown">
                <li><a href="index.php?page=svg6-1">Learning Task 6.1</a></li>
                <li><a href="index.php?page=svg6-2">Learning Task 6.2</a></li>
                <li><a href="index.php?page=svgcle">Culminating Learning Evidence</a></li>
              </ul>
            </li>
            <li><a href="index.php?page=cnv7-1">Canvas</a></li>
            <li><a href="index.php?page=about">Faus</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="content">
			<?php
			switch ($load) {
				case 'home':
				    require_once('home.php');
				        break;
				case 'css':
			      require_once('css.php');
			          break;
        case 'svg6-1':
            require_once('SVG/lt6-1.php');
                break;
        case 'svg6-2':
            require_once('SVG/lt6-2.php');
                break;
        case 'svgcle':
            require_once('SVG/cle.php');
                break;
        case 'csscle':
            require_once('CSSWorks/cle.php');
                break;
        case 'cnv7-1':
            require_once('Canvas/lt7-1.php');
                break;
        case 'cssdemo':
            require_once('CSSWorks/cssdemo.php');
                break;
        case 'about':
            require_once('about.php');
                break;
				default:
					  require_once('home.php');
					      break;
				}
			?>
    </div>
  </body>
  <footer>
	   <p>© 2020 Christian Faustinorio</p>
  </footer>
</html>
