<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div class="fixed-top">
        <div class="d-flex justify-content-center mt-1">
            <img src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="" style="width:400px; height: 60px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-md-8 mr-auto">
            <canvas id="confetti"></canvas>
            <!-- if the user has passed the quiz show this -->
            <div id="pass">
                <h1 class="text-center fw-bold text-success">CONGRATULATIONS!</h1>
                <p class="text-center">You've <strong class="text-success">PASSED</strong> the Quiz with an average score of</p>
                <h1 class="text-center my-4 fw-bolder text-success" style="font-size: 70px">80%</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia facere dolorum? Illo rerum quibusdam
                    natus dicta eius, sequi eum ipsa iusto officia vero molestias error cum, saepe dolore delectus.</p>
            </div>
            <!-- end of user pass -->

            <!-- if the user has passed the quiz show this -->
            <!-- <div id="failed">
                <h1 class="text-center fw-bold text-danger">UNFORTUNATELY</h1>
                <p class="text-center">You've <strong class="text-danger">FAILED</strong> the Quiz with an average score of</p>
                <h1 class="text-center my-4 fw-bolder text-danger" style="font-size: 70px">65%</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia facere dolorum? Illo rerum quibusdam
                    natus dicta eius, sequi eum ipsa iusto officia vero molestias error cum, saepe dolore delectus.</p>
            </div> -->
            <!-- end of user pass -->
            <!-- <center>
                <buttan class="btn btn-warning btn-lg rounded-5 text-white px-5" type="button"><i class="fa-regular fa-circle-play"></i> Start Quiz</button>
            </center> -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="fixed-bottom">
        <p class="text-center fw-lighter p-2 text-muted">&copy <?= date('Y') ?> Copyright - Thinker Ville</p>
    </div>
</div>
<?php include("includes/footer.php"); ?>