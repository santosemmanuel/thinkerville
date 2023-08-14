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
            <div class="row" id="leveSelection">
                <div class="col-md-12">
                    <div class="card bg-primary" style="width: 500px;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mt-3">
                                <div style="font-size: 20px">
                                    <i class="text-white fa-solid fa-star"></i>
                                    <i class="text-white fa-regular fa-star"></i>
                                    <i class="text-white fa-regular fa-star"></i>
                                </div>
                                <p class="text-white" style="font-size: 15px">10 items for 15 minutes</p>
                            </div>
                            <button id="easy-btn" class="btn btn-warning btn-lg rounded-5 text-white w-100 d-flex justify-content-between fw-bolder" type="button">
                                EASY<i class="fa-regular fa-circle-play h4 mt-1"></i>
                            </button>
                            <div class="d-flex justify-content-between mt-3">
                                <div style="font-size: 20px">
                                    <i class="text-white fa-solid fa-star"></i>
                                    <i class="text-white fa-solid fa-star"></i>
                                    <i class="text-white fa-regular fa-star"></i>
                                </div>
                                <p class="text-white" style="font-size: 15px">25 items for 30 minutes</p>
                            </div>
                            <button id="medium-btn" class="btn btn-warning btn-lg rounded-5 text-white w-100 d-flex justify-content-between fw-bolder" type="button">
                                MIDIUM<i class="fa-regular fa-circle-play h4 mt-1"></i>
                            </button>
                            <div class="d-flex justify-content-between mt-3">
                                <div style="font-size: 20px">
                                    <i class="text-white fa-solid fa-star"></i>
                                    <i class="text-white fa-solid fa-star"></i>
                                    <i class="text-white fa-solid fa-star"></i>
                                </div>
                                <p class="text-white" style="font-size: 15px">50 items for 1 hour</p>
                            </div>
                            <button id="hard-btn" class="btn btn-warning btn-lg rounded-5 text-white w-100 d-flex justify-content-between fw-bolder" type="button">
                                HARD<i class="fa-regular fa-circle-play h4 mt-1"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" id="card-questionaire">
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