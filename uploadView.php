<!DOCTYPE html>
<html>
    <head>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="loginView.css"> -->
    </head>


    <body>
            <div class="container" id="login-container">
                    <div>
                       <h1 id="login">Upload File</h1>
                    </div>
                    <div>
                    <?php
                        require("getFileNames.php");
                    ?>
                    </div>
                    <form enctype="multipart/form-data" action="uploadCtrl.php" method="POST">
                        <div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
                            <h4 id="user-id">Choose File</h4>
                            <input name="uploadedfile" id="user-id-input"type="file">
                        </div>
                        <div>
                             <input id="submit-button" type="submit" value="Upload File">
                        </div>
                    </form>
                </div>
    </body>
</html>