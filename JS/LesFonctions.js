function AfficherLesRayons(numS)
            {
                $.ajax
                (
                        {
                           type:'get',
                           url:"index.php/Ctrl_Accueil/afficherLesRayons",
                            data:"numS="+$('#lstSect').val(),
                           success:function(data)
                           {
                               $('#divRay').empty();
                               $('#divRay').append(data);
                           },
                           error:function()
                           {
                              alert("impossible de récupérer les rayons des secteurs"); 
                           }
                        }
                );
            }

