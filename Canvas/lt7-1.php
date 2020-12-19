<!-- Side navigation -->
<div class="sidenav">
  <a href="index.php?page=cnv7-1&task=71">Android</a>
  <a href="index.php?page=cnv7-1&task=72">LG</a>
  <a href="index.php?page=cnv7-1&task=73">Microsoft</a>
  <a href="index.php?page=cnv7-1&task=74">Chanel</a>
  <a href="index.php?page=cnv7-1&task=75">Target</a>
  <a href="index.php?page=cnv7-1&task=76">Bandicam</a>
  <a href="index.php?page=cnv7-1&task=77">Faze Clan</a>
  <a href="index.php?page=cnv7-1&task=78">Mastercard</a>
  <a href="index.php?page=cnv7-1&task=79">Google</a>
  <a href="index.php?page=cnv7-1&task=70">Dominos</a>
</div>

<!-- Page content -->
<div class="main">
  <?php
  switch ($task) {
    case '71':
        require_once('Canvas/1.php');
            break;
    case '72':
        require_once('Canvas/2.php');
            break;
    case '73':
        require_once('Canvas/3.php');
            break;
    case '74':
        require_once('Canvas/4.php');
            break;
    case '75':
        require_once('Canvas/5.php');
            break;
    case '76':
        require_once('Canvas/6.php');
            break;
    case '77':
        require_once('Canvas/7.php');
            break;
    case '78':
        require_once('Canvas/8.php');
            break;
    case '79':
        require_once('Canvas/9.php');
            break;
    case '70':
        require_once('Canvas/10.php');
            break;
    default:
        require_once('Canvas/1.php');
            break;
    }
  ?>
</div>
