<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div class="fixed-top" style="background-color: #BB4430;">
        <div class="d-flex justify-content-center p-2">
            <img src="assets/images/ThinkerVille Logo white with icon.png" alt="ThinkerVille" srcset="" style="width:400px; height: 60px;">
        </div>
    </div>
</div>

<!-- main container -->
<div class="container-fluid h-100" style="background-color: #F8F9FA">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-8" id="card-questionaire">
            <input type="text" id="totalNumber" name="totalNumber" disabled>
            <!-- Your pager content will go here -->
            <div id="contentContainer">
                <center>
                    <div id="spinner-wait" class="spinner-grow text-danger" role="status">
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