<?php include("includes/header.php"); ?>

<div style='background-color: #253C78;' class="h-100 p-5">

  <div class="shadow container bg-white h-100 mx-auto p-4 rounded-3" style="width: 80%">

    <h1 class="text-center fw-bolder py-3">Pass the actual Civil Service Exam!</h1>

    <p class="text-center fw-bold mb-5" style="font-size: 90px;">75% OFF</p>

    <div class="row">
      <div class="col">
        <h6 class="text-center fw-bold" style="font-size: 30px;">Before</h6>
        <p class="text-center fw-bolder" style="font-size: 60px;">&#8369; <del>2,000.00</del></p>
      </div>

      <div class="col">
        <h6 class="text-center fw-bold" style="font-size: 30px;">Now</h6>
        <p class="text-center fw-bolder" style="font-size: 60px;">&#8369; 500.00</p>
      </div>

    </div>


    <div class="row" style="margin-top: 8%; margin-bottom: 8%">
      <div class="col-6">
        <h6 class="text-center fw-bold mb-5" style="font-size: 25px">Inclussions: (w/pictures)</h6>
        <p style="margin-left: 20%"><img src="assets/images/Red_Check.png" class="red_check"/> Detailed Video Disscussions</p>
        <p style="margin-left: 20%"><img src="assets/images/Red_Check.png" class="red_check"/> Summarized Lecture Notes</p>
        <p style="margin-left: 20%"><img src="assets/images/Red_Check.png" class="red_check"/> Comprehebsive Test & Quizzers</p>
      </div>
      <div class="col-6">
        <div id="display-vid"></div>
      </div>
    </div>


    <div class="row" style="margin-top: 8%; margin-bottom: 8%">

      <div class="col-12">
        <h1 class="text-center fw-bold mb-4" style="font-size: 25px">Enrollment Process</h1>
        <ul class="step-wizard-list">
          <li class="step-wizard-item">
            <span class="progress-icon"><i class="fa-regular fa-file-lines"></i></span>
            <span class="progress-count">1</span>
            <span class="progress-label">Fill up the Form</span>
            <button type="button" class="btn btn-link">Click Here</button>
          </li>
          <li class="step-wizard-item">
          <span class="progress-icon"><i class="fa-regular fa-credit-card"></i></span>
            <span class="progress-count">2</span>
            <span class="progress-label">Pay the review fee</span>
            <ul class="progress-fee mt-1">
                <li class="">Bank</li>
                <li>Gcash - 09283171889</li>
              </ul>
          </li>
          <li class="step-wizard-item">
            <span class="progress-icon"><i class="fa-solid fa-envelope-circle-check"></i></span>
            <span class="progress-count">3</span>
            <span class="progress-label">Check Email for Confirmation</span>
          </li>
        </ul>
      </div>

    </div>

    <div class="text-center mb-5">
      <button type="button" class="btn btn-primary btn-xl">Enroll Now!!</button>
    </div>

  </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop='static'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fa-solid fa-lightbulb"></i>&nbsp; We have something special just for you!</h5>
      </div>
      <div class="modal-body p-4 text-center">
        <h1 class="py-5">Ace the actual <b>CSE</b> for <b>75%</b> OFF!</h1>
        <button type="button" class="btn btn-primary btn-lg mb-5" data-bs-dismiss="modal" aria-label="Close">Check details here</button>
      </div>
    </div>
  </div>
</div>


<?php include("includes/footer.php"); ?>
<script type="text/javascript">
  var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
  myModal.show();
</script>
<script type="text/javascript" src="assets/js/script.js"></script>