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
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Exam</button>
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
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Exam</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold border border-3 border-primary text-primary">HARD</h3><br>
                        <img src="" alt="ThinkerVilleEasy" />
                        <p>50 items for 1 hour</p><br>
                        <div class="d-grid">
                            <button class="btn btn-warning btn-lg rounded-5 text-white" type="button"><i class="fa-regular fa-circle-play"></i> Start Exam</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- main container -->
    <div class="container h-100">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="col-6">
                <div class="d-flex justify-content-between">
                    <h5>1/5</h5>
                    <h5 class="text-muted"><span class="hr">01</span>:<span class="min">12</span>:<span class="sec">14</span></h5>
                </div>
                <input type="text" id="totalNumber" name="totalNumber" disabled>
                <!-- Your pager content will go here -->   
                <div class="card">
                    <div class="card-body">
                        <div id="contentContainer">
                            <center>
                                <div id="spinner-wait"class="spinner-grow text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-warning mr-2 text-white" onclick="showPrevious()" id="prevButton">Previous</button>
                            <button class="btn btn-warning text-white" onclick="showNext()" id="nextButton">Next</button>
                            <button class="btn btn-warning text-white" onclick="checkData()" id="submitButton">Submit</button>
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
    <!-- <div class="container-fluid">
        <div class="fixed-bottom border-top">
            <h1 class="text-center">Footer - Thinker Ville</h1>
        </div>
    </div> -->  
</body>
<?php include("includes/footer.php"); ?>