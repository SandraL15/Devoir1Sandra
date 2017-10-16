
<html>
    <head>
        <title>Gestion supermarché</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/LesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
          $(
                function()
                {
                    $('#lstSect').change
                    (
                        function(){ AfficherLesRayons();}
                    );

                }
                
//           function()
//           {
//                $('#lstSect').change
//             (
//                 function(){AfficherLesEmployes();}      
//                );
//            }
    
   );      
    </script>
    </head>
    <body>
         <h4>Liste des secteurs</h4>
        <select id="lstSect">
           
  <?php 
    foreach($lesSecteurs as $sect){
        
        echo"<option value='".$sect->numS."'>".$sect->nomS;
            echo "<br>";
    
    }
    ?>
    </select>
         
         <h4>Liste des rayons</h4>
         <div id="divRay"></div>
<!--         <h4>Liste des employés</h4>
         <div id="divEmp"></div>-->
</body>
        
</html>
