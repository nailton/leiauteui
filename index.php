<!doctype html>
<!--[if IE 8]>
         <html class="no-js lt-ie9" lang="pt" >
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="pt" > 
         <!--<![endif]-->
         <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width">
          <title>Leiaute UI - Responsive (Modernizr e Grid)</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>
          <div class="geral">
            <div class="row">
              <header id="header" class="header">
                <div class="large-6 columns">
                 <a href=""> <p><img src="http://www.rcinterativa.com.br/assinatura.png" alt="placeholder+image"></p></a>                </div>
                 <div class="large-6 columns">
                  <!-- <div class="limite-header"> -->

                  <p>   Nosso header</p>
                  <!-- </div> -->
                </div>
              </header>
            </div><!-- /row header -->
            
            <div class="content">

              <div class="row">
                <div class="large-12 columns">
                  <div class="panel">
                    <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>

                    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                    <h2>Header Level 2</h2>

                    <ol>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>

                    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

                    <h3>Header Level 3</h3>

                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                    </ul>

                    <pre><code>
                      #header h1 a { 
                      display: block; 
                      width: 300px; 
                      height: 80px; 
                    }
                  </code></pre>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="large-6 columns">
                <div class="panel">
                  <p>Six columns</p>
                </div>
              </div>
              <div class="large-6 columns">
                <div class="panel">
                  <p>Six columns</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="large-4 columns">
                <div class="panel">
                  <p>Four columns</p>
                </div>
              </div>
              <div class="large-4 columns">
                <div class="panel">
                  <p>Four columns</p>
                </div>
              </div>
              <div class="large-4 columns">
                <div class="panel">
                  <p>Four columns</p>
                </div>
              </div>
            </div>

          </div><!-- /content -->

          <footer id="footer" class="footer">
            <div class="row">
              <div class="large-4 columns">            
               <a href=""> <p><img src="http://www.rcinterativa.com.br/assinatura.png" alt="placeholder+image"></p></a>                </div>
             <div class="large-8 columns">            
              <!-- <div class="limite-footer"> -->
              <p>Esse é o nosso rodape, sempre na base - Copyright <?php echo date('Y'); ?></p>
              <!-- </div>           -->
              </div>
            </div><!-- /row footer -->
          </footer><!-- /footer -->


        </div><!-- /geral -->      

        <script type="text/javascript" src="js/custom.modernizr.js"></script>
      </body>
      </html>