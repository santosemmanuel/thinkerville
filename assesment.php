<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div  class="fixed-top" style="background-color: #BB4430;">
        <div class="d-flex justify-content-center p-2">
            <img id="header_Logo" src="assets/images/ThinkerVille Logo white with icon.png" alt="ThinkerVille" srcset="">
        </div>
    </div>
</div>

<!-- main container -->
<div class="container-fluid h-100" style="background-color: #F8F9FA">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    
        <div class="col-xs-12 col-md-8 mt-2" id="card-questionaire">
       
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