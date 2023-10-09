<?php include("includes/header.php"); ?>

<div class="container-fluid border-bottom">
  <div class="fixed-top bg-light">
    <div class="d-flex justify-content-center p-2">
      <img id="header_Logo" src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="">
    </div>
  </div>
</div>

<div class="container">
  <div class="text-center" style="margin-top: 8%">
    <img src="assets/images/Favicon_5.png" alt="" style="height: 110px; width: 150px">
    <h1 style="font-size: 30px">Pass the actual Civil Service Exam!</h1>
    <h1 style="font-size: 70px">75% OFF</h1><br>
  </div>
  <div class="row my-5">
    <div class="col-6 d-flex align-items-center justify-content-center">
      <div class="card shadow bg-body rounded" style="width: 500px">
        <div class="card-header text-center" style="background-color: #4084C3;">
          <strong style="font-size: 30px; color: #F7D965;">BEFORE</strong>
        </div>
        <div class="card-body p-5">
          <h1 class="card-title text-center" style="font-size: 70px;">&#8369; <del>2,000</del></h1>
        </div>
      </div>
    </div>
    <div class="col-6 d-flex align-items-center justify-content-center">
      <div class="card shadow bg-body rounded" style="width: 500px">
        <div class="card-header text-center" style="background-color: #4084C3;">
          <strong style="font-size: 30px; color: #F7D965;">NOW</strong>
        </div>
        <div class="card-body p-5">
          <h1 class="card-title text-center" style="font-size: 70px;">&#8369; 500</h1>
        </div>
      </div>
    </div>
  </div>
  <center>
    <a type="button" class="btn btn-lg text-white px-5" style="background-color: #4084C3;" href="#inclussion">Learn More</a>
    <center>
</div>

<div class="container-fuild" style="margin-top: 3%; margin-bottom: 1%; background-color: #4084C3" id="inclussion">
  <div class="container">
    <div class="text-center">
      <h1 class="text-white" style="padding-top: 10%">INCLUSIONS</h1>
    </div>
    <div class="row my-3">
      <div class="col-6">
        <div class="card my-5 shadow-sm rounded">
          <div class="card-body" style="font-size: 20px">
            Detailed Video Disscussions
          </div>
        </div>
        <div class="card my-5 shadow-sm rounded">
          <div class="card-body" style="font-size: 20px">
            Summarized Lecture Notes
          </div>
        </div>
        <div class="card my-5 shadow-sm rounded">
          <div class="card-body" style="font-size: 20px">
            Comprehensive Test & Quizzers
          </div>
        </div>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="card shadow bg-body rounded" style="width: 500px">
          <div class="card-body p-5">
            <h1 class="card-title text-center" style="font-size: 70px;">&#8369; 500</h1>
          </div>
        </div>
      </div>
    </div>
    <center>
      <a href="#enroll" type="button" class="btn btn-outline-light btn-lg px-5 mb-5" style="background-color: #4084C3; color: #F7D965">Enroll Now</a>
      <center>
  </div>
</div>


<div class="container-fuild" style="margin-top: 0.5%; margin-bottom: 20%; " id="enroll">
  <div class="container">
    <div class="text-center">
      <h1 style="padding-top: 10%">Enrollment Proccess</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop='static'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4084C3; color: #F7D965">
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