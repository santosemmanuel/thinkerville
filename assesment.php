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
            <div class="col-6" id="card-questionaire">
                <div class="d-flex justify-content-between">
                    <h5>1/5</h5>
                    <h5 class="text-muted"><span class="hr">01</span>:<span class="min">00</span>:<span class="sec">00</span></h5>
                </div>
                <input type="text" id="totalNumber" name="totalNumber" disabled>
                <!-- Your pager content will go here -->
                <div class="card">
                    <div class="card-body">
                        <div id="contentContainer">
                            <center>
                                <div id="spinner-wait" class="spinner-grow text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-warning mr-2 text-white" onclick="showPrevious()" id="prevButton">Previous</button>
                                <button class="btn btn-warning text-white" onclick="showNext()" id="nextButton">Next</button>
                                <button class="btn btn-warning text-white" onclick="checkData()" id="submitButton">Submit</button>
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