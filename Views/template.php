<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        
        <!-- bootstrap pour navbar -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- CDN Bootstrap v4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        
        
        <!-- Bootstrap v4.3.1 .min.css -->
        <!--
        <link rel="stylesheet" href="Content/Lib/bootstrap-4.3.1/dist/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="Content/Lib/bootstrap-4.3.1/dist/css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="Content/Lib/bootstrap-4.3.1/dist/css/bootstrap.min.css" />
        -->
        
        <!--FontAwesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
        <!-- jQuery -->
       
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- style.css -->
        <link rel="stylesheet" href="Content/CSS/style.css" />
        
        <link rel="stylesheet" href="Content/CSS/nivo-slider.css" />
        
        <title><?= $title ?></title><!-- Specifique element -->
    </head>
    <body>
        
        
        
      
           
         
        
        <?php 

            include 'Frontend/navbarView.php'; 

        ?>
                
               
        
        <div class="container">

           <div class="row">
               
               
               <div class="col-lg-12">
                
                   
                   
                    <div id="content">
                            <?= $content ?> <!-- Specific element -->
                            <br />
                            <br />
                            <br />
                    </div><!-- #content -->
        
               </div>
               
           </div>

           
       </div>
            
       
            
              
                
        
        
                   
        <!-- JAVASCRIPT -->
        <script src="Content/JS/btnNavbar.js"></script> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="Content/JS/work.js"></script>
        
        <script src="Content/JS/jquery.nivo.slider.pack.js"></script>
        
        <!-- CDN Bootstrap v4.3.1 -->
        
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        
        <!-- Bootstrap v4.3.1 .min.js -->
        <!--
        <script src="Content/Lib/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="Content/Lib/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
        <script src="Content/Lib/jquery_v3.4.1.js"></script>
        -->
        
    </body>
</html>