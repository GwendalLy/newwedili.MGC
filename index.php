 <!DOCTYPE html>
<html lang="fr">     
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initscale=1.0">
        <meta name="description" content="projet wetransfert"/>
        <meta name="keywords" content="web, wetransfert"/>
        <meta http-equiv="Content-Language" content="fr"/>
        <meta name="reply-to" content=""/>
        <meta name="robots" content="all"/>
        <meta name="revisit-after" content="7 days"/>
        <meta name="author" content=""/>
        <meta name="copyright" content=""/>
       
        <title>Wedili</title>

        <link rel="stylesheet" href="style.css" type="text/css">      
    </head>
    <body> 

        <form action="contact_me.php" method="post" name="posterArticle" id="envoiMessage" enctype="multipart/form-data" novalidate>
            <div>
                <div>
                    <label>Votre adresse :</label>
                    <input type="text" class="formControl" placeholder="Votre adresse :" id="adresse" name="adresse" required data-validation-required-message="Entrez votre nom.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div>
                <div>
                    <label>Envoyer a :</label>
                    <input type="text" class="formControl" placeholder="Envoyer a :" id="destinataire" name="destinataire" required data-validation-required-message="Entrez l'adresse du destinataire.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div>
                <div>
                    <label>Votre message :</label>
                    <textarea class="formControl" placeholder="Contenu :" id="message" name="message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div>
                <div>
                    <label>Fichier :</label>
                    <input type="file" name="fichier"/>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div id="success"></div>
            <div>
                <div>
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
        
        <script type="text/javascript" src="contact_me.php"></script>
            <?php
            $fn = (isset($_SERVER['HTTP_X_FILE_NAME']) ? $_SERVER['HTTP_X_FILE_NAME'] : false);
            $targetDir = 'tmp/';

            if ($fn) {
                if (isFileValid($fn)) {
                // AJAX call
                    file_put_contents(
                        $targetDir . $fn,
                            file_get_contents('php://input')
                        );
                    removeFile($fn);
                }
            }

            function removeFile($file) {
                unlink($targetDir . $file);
            }
            ?>

    </body>
</html>
