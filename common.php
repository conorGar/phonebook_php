

<?php


/**
  * Escapes HTML for output
  *
  */

  

  function escape($html) { //still don't understand what this does
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
  }

?>