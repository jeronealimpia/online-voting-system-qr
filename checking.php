<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1, maximum-scale=1, width=device-width" name="viewport">
    <title>Pure CSS Progress bar demo</title>
    <link href="build/stylesheets/application.css?1325743336" media="screen" rel="stylesheet" type="text/css" />
    <link href="build/stylesheets/ui-progress-bar.css?1325742643" media="screen" rel="stylesheet" type="text/css" />
    <script src="build/javascripts/application.js?1325742642" type="text/javascript"></script>
    
  </head>
  <body class="index" style="margin-top:22%;">
    <div id="container">
    
      
        <section class="work">
          <div class="ui-progress-bar ui-container" id="progress_bar">
            <div class="ui-progress" style="width: 7%;">
              <span class="ui-label" style="display:none;">
                Loading Database Resources
                <b class="value">3%</b>
              </span>
            </div>
          </div>
        </section>
        
		
		
        <section class="compatibility" style="display: none;">
          
          
          <article>
            <p>
             This is a web-based online voting system that will help you manage your elections easily and securely.
           
            </p>
          </article>
        </section>
		
		
		
		
		
        <section class="wild" style="display: none;">
          <h2>
            Vote your choice
            <span>Who's the next Leader?</span>
          </h2>
          <ol class="links">
              <li class="link"><a class="btn download" href="registerform.php"><span>Register</span></a></li>
              <li class="link"><a class="btn fork" href="index.php"><span>Sign in</span></a></li>
            </ol>
        </section>
      
      <script>
        //<![CDATA[
          $(function() {
            App.init();  
          });
        //]]>
      </script>
      <footer style="display: none;">
        <p class="copy">
          Another <a rel="twipsy" title="Follow Ivan on Twitter" href="http://twitter.com/IvanVanderbyl">Ivan Vanderbyl</a> project. Copyright &copy; 2012 Some Rights Reserved.
        </p>
      </footer>
    </div>
  </body>
</html>
