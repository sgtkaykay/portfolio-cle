<!-- Side navigation -->
<div class="sidenav">
  <a href="index.php?page=cssdemo&task=rotate">rotate()</a>
  <a href="index.php?page=cssdemo&task=scale">scale()</a>
  <a href="index.php?page=cssdemo&task=skew">skew()</a>
  <a href="index.php?page=cssdemo&task=translate">translate()</a>
  <a href="index.php?page=cssdemo&task=logo1">Logo #1</a>
  <a href="index.php?page=cssdemo&task=logo2">Logo #2</a>
  <a href="index.php?page=cssdemo&task=trans">CSS Transition</a>
  <a href="index.php?page=cssdemo&task=anime">CSS Animation</a>
  <a href="index.php?page=cssdemo&task=webele1">Hovered Animated Element #1</a>
  <a href="index.php?page=cssdemo&task=webele2">Hovered Animated Element #2</a>
  <a href="index.php?page=cssdemo&task=awe">Animated Web Element</a>
</div>

<!-- Page content -->
<div class="main">
  <?php
  switch ($task) {
    case 'rotate':
        require_once('CSSWorks/rotate.php');
            break;
    case 'scale':
        require_once('CSSWorks/scale.php');
            break;
    case 'skew':
        require_once('CSSWorks/skew.php');
            break;
    case 'translate':
        require_once('CSSWorks/translate.php');
            break;
    case 'logo1':
        require_once('CSSWorks/logo1.php');
            break;
    case 'logo2':
        require_once('CSSWorks/logo2.php');
            break;
    case 'trans':
        require_once('CSSWorks/trans.php');
            break;
    case 'anime':
        require_once('CSSWorks/anime.php');
            break;
    case 'webele1':
        require_once('CSSWorks/webele1.php');
            break;
    case 'webele2':
        require_once('CSSWorks/webele2.php');
            break;
    case 'awe':
        require_once('CSSWorks/awe.php');
            break;
    default:
        require_once('CSSWorks/rotate.php');
            break;
    }
  ?>
</div>
