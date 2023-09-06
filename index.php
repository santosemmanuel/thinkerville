<?php include("includes/header.php"); ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="d-flex flex-column flex-shrink-0 p-3 p-3 border-end" id="sidebar-wrapper" style="width: 400px; background-color: #BB4430">
        <div class="pb-3 mb-3 border-bottom">
            <div style="width: 100%;" class="">
                <a href=" https://getbootstrap.com/" class="link-dark text-decoration-none">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="assets/images/ThinkerVille Logo white with icon.png" alt="thinkerville" srcset="" class="mr-5" style="width: 200px; height: 30px">
                </a>
            </div>
            <div class="">
                <i class="fa-solid fa-xmark fs-5 text-white" style="float:right; margin-top: -8%;" id="sidebarClose"></i>
            </div>
        </div>
        <ul class="list-unstyled ps-0">
            <div id="scroll-SideContent">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-white" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        About Civil Service Exam
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What is the Philippine Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Am I qualified to take the Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What is the examination coverage of the CSE?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What is the CSE passing rate?</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Application Process
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Civil Service Exam Schedule and Application</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Application Process & Requirements</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-left" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Frequently Asked Questions
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Can I take the Civil Service Exam if I haven't completed college or high school?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Where can I find my school assignment for the Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What is the appropriate attire for the Civil Service Exam, and what clothing items are not allowed?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Are calculators allowed to be used during the Civil Service Exams?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What are the required documents and items I need to bring for the Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What are the important reminders for the day of the Civil Service Examination?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Who are exempted from taking the Civil Service Exams, and what criteria make them eligible for exemption?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">What benefits do individuals receive upon passing the Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">How many times can take the Civil Service Exam?</a></li>
                            <li class="my-2"><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded text-white">Does Civil Service eligibility have an expiration date, and how is it regarded by government agencies during job applications?</a></li>
                        </ul>
                    </div>
                </li>
            </div>
            <li class="border-top mt-5"></li>
        </ul>
        <div class="dropdown mt-auto">
            <div class="dropdown">
                <div class="d-grid">
                    <button class="btn btn-lg dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #253C78;">
                        <i class="fa-regular fa-circle-play" style="margin-right: 12px"></i>Start Quiz
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-center" style="cursor: pointer;" id="easy-select">EASY</a></li>
                        <li><a class="dropdown-item text-center"style="cursor: pointer;" id="hard-select">HARD</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapped">
        <!-- Top navigation-->
        <nav class="p-3 navbar navbar-expand-lg navbar-light border-0">
            <div class="container-fluid">
                <i class="fa-solid fa-bars-staggered fs-5 text-primary d-none" id="sidebarOpen"></i>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="#!"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"><i class="fa-regular fa-circle-play"></i> Take a Quiz</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"><i class="fa-solid fa-users"></i> Join Community</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid px-5 pt-2">
            <div id="div-content">
                <h1 class="mt-5 fw-bold">What is the Philippine Civil Service Exam?</h1>
                <div class="px-4 py-3">
                    <p style="text-align: justify">The Philippine Civil Service Exam, formally referred to as the Career Service Exam, stands as a pivotal qualification assessment administered by the Civil Service Commission. Its successful completion opens the doors for individuals to engage in full-time,
                        permanent employment within the Philippine government. This biannual examination comes in two tiers – Professional and Sub-professional.</p>
                    <p style="text-align: justify">
                        Opting for the Sub-professional level equips you for clerical and entry-level roles, whereas conquering the Professional level not only awards you 2nd level eligibility but also paves your way towards supervisory and managerial positions (2nd level positions).
                        The choice between the Professional and Sub-professional levels lies in your hands.
                    </p>
                </div>
                <h1 class="mt-5 fw-bold">Am I qualified to take the Civil Service Exam?</h1>
                <div class="px-4 py-3">
                    <p>Everyone is qualified to take the Civil Service Examination regardless of your educational attainment as long as you met the following: </p>
                    <p>
                        Opting for the Sub-professional level equips you for clerical and entry-level roles, whereas conquering the Professional level not only awards you 2nd level eligibility but also paves your way towards supervisory and managerial positions (2nd level positions).
                        The choice between the Professional and Sub-professional levels lies in your hands.
                    </p>
                </div>
            </div>
            <div class="container-fluid px-5 pt-2" id="card-questionaire">
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
</div>


<?php include("includes/footer.php"); ?>