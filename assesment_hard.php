<?php include("includes/header.php"); ?>

<body>

    <div class="container-fluid border-bottom">
        <div class="fixed-top">
            <div class="d-flex justify-content-center mt-1">
                <img src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="" style="width:400px; height: 60px;">
            </div>
        </div>
    </div>

    <!-- main container -->
    <div class="container h-100">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="col-8" id="card-questionaire">
                <input type="text" id="totalNumber" name="totalNumber" disabled>
                <!-- Your pager content will go here -->
                <div id="contentContainer">
                    <center>
                        <div id="spinner-wait" class="spinner-grow text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="fixed-bottom">
            <p class="text-center fw-lighter p-2 text-muted">&copy <?= date('Y') ?> Copyright - Thinker Ville</p>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>