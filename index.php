<?php 
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to Webwizard,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4>Web App from <i><a href='https://lemonisn.github.io/webwizard-demo/'
      target='_blank'>Login to start.</a></i></h4>
    </div>
  </body>
</html>
_END;
?>
