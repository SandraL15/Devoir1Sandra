function AfficherLesEmployes(numE)
            {
                $.ajax
                (
                        {
                           type:'get',
                           url:"index.php/Ctrl_Accueil/afficherLesEmployes",
                            data:"numE="+$('#lstSect').val(),
                           success:function(data)
                           {
                               $('#divEmp').empty();
                               $('#divEmp').append(data);
                           },
                           error:function()
                           {
                              alert("impossible de récupérer les Employes"); 
                           }
                        }
                );
            }
            