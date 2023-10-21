<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div  class="fixed-top bg-light">
        <div class="d-flex justify-content-center p-2">
            <a href="index.php">
                <img id="header_Logo" src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="" style="width: 250px; height: 40px">
            </a>
        </div>
    </div>
</div>

<!-- main container -->
<div class="container-fluid h-100">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    
        <div class="col-xs-12 col-md-8 mt-2" id="card-questionaire">
        <input type="text" id="totalNumber" style="display:none;" name="totalNumber" disabled>
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
    <div class="">
        <p class="text-center fw-lighter p-2 text-muted">&copy <?= date('Y') ?> Copyright - Thinker Ville</p>
    </div>
</div>
<script type="text/javascript" src="assets/js/timer.js"></script>
<?php include("includes/footer.php"); ?>