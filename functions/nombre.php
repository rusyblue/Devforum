 <?php
                  function nombre($theme)
                        {
                          try {


                            $requete0 = $bbd->prepare("SELECT DISTINCT(id) FROM postsujet WHERE id = ?");
                            $requete0->execute(array($theme));
                            $result0 = $requete0->rowCount();
                            $accord = $result0>1?"s":"";
                            return $result0. "id" .$accord;
                            
                          } catch (Exception $e) {
                            echo "Erreur de connexion" .$e->getMessage();
                          }
                        }

                ?>