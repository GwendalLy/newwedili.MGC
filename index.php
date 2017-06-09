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
              
        <!--favicon-->

        <link rel="stylesheet" href="style.css" type="text/css">      
    </head>
    <body> 
             <!-- CHANGE THE ACTION TO THE PHP SCRIPT THAT WILL PROCESS THE FILE VIA AJAX -->
            <!--<form id="file-upload-form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                 <input id="file-upload" type="file" name="fileUpload" />
                <label for="file-upload" id="file-drag">
                     Select a file to upload
                    <br />OR
                    <br />Drag a file into this box
                    <br /><br /><span id="file-upload-btn" class="button">Add a file</span>
                </label>

                <progress id="file-progress" value="0">
                    <span>0</span>%
                </progress>

                <output for="file-upload" id="messages"></output>
            </form> -->

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

            <?php
            // $fn = (isset($_SERVER['HTTP_X_FILE_NAME']) ? $_SERVER['HTTP_X_FILE_NAME'] : false);
            // $targetDir = 'tmp/';

            // if ($fn) {
            //     if (isFileValid($fn)) {
            //     // AJAX call
            //         file_put_contents(
            //             $targetDir . $fn,
            //                 file_get_contents('php://input')
            //             );
            //         removeFile($fn);
            //     }
            // }

            // function removeFile($file) {
            //     unlink($targetDir . $file);
            // }
            ?>

    </body>
</html>
