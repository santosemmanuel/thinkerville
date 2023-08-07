<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div class="fixed-top">
        <div class="d-flex justify-content-center mt-1">
            <img src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="" style="width:400px; height: 60px;">
        </div>
    </div>
</div>

<!-- main container -->
<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold border border-3 border-primary text-primary">EASY</h3><br>
                        <img src="" alt="ThinkerVilleEasy" />
                        <p>10 items for 15 min.</p>
                        <div class="d-grid">
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Quiz</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold border border-3 border-primary text-primary">MEDIUM</h3><br>
                        <img src="" alt="ThinkerVilleEasy" />
                        <p>25 items for 30 min.</p>
                        <div class="d-grid">
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Quiz</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold border border-3 border-primary text-primary">HARD</h3><br>
                        <img src="" alt="ThinkerVilleEasy" />
                        <p>50 items for 1 hour</p>
                        <div class="d-grid">
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Quiz</button>
                        </div>
                    </div>
                </div>
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