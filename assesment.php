<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
    <div class="fixed-top">
        <h1 class="text-center">header - Thinker Ville Logo</h1>
    </div>
</div>

<!-- main container -->
<div class="container">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-6">
            <div class="d-flex justify-content-between">
                <h3>5/10</h3>
                <h3 class="text-muted">12:14</h3>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <h5>1. This is a card</h5><br>
                    <div style="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-warning btn-lg">Previous</button>
                <button type="button" class="btn btn-warning btn-lg">Next</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="fixed-bottom border-top">
        <h1 class="text-center">Footer - Thinker Ville</h1>
    </div>
</div>
<?php include("includes/footer.php"); ?>