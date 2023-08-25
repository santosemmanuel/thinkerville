<?php include("includes/header.php"); ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-white p-3 border-end" id="sidebar-wrapper" style="width: 305px;">
        <div class="pb-3 mb-3 border-bottom">
            <div style="width: 100%;" class="">
                <a href=" https://getbootstrap.com/" class="link-dark text-decoration-none">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="assets/images/ThinkerVille Logo black.png" alt="thinkerville" srcset="" class="mr-5" style="width: 180px; height: 30px">
                </a>
            </div>
            <div class="">
                <i class="fa-solid fa-xmark fs-5 text-primary" style="float:right; margin-top: -8%" id="sidebarClose"></i>
            </div>
        </div>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                    About Civil Service Exam
                </button>
                <div class="collapse show" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded ml-2">What is the Civil Service Exam</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Why should I take the Civil Service Exam</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Who is eligible to take the Civil Service Exam</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">What are the different types of Civil Service Exams</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">What is the format of the Civil Service Exam</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">How can I prepare for the Civil Service Exam</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Are there study guides or resources available for the Civil Service Exam</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Application Process
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Overview</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Weekly</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Monthly</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Annually</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Scoring and Accommodations
                </button>
                <div class="collapse" id="orders-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">New</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Processed</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Shipped</a></li>
                        <li><a href="https://getbootstrap.com/docs/5.0/examples/sidebars/#" class="link-dark rounded">Returned</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
        </ul>
        <div class="dropdown mt-auto">
            <div class="dropdown">
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-circle-play" style="margin-right: 12px"></i>Start Quiz
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-center" href="#">EASY</a></li>
                        <li><a class="dropdown-item text-center" href="#">MEDIUM</a></li>
                        <li><a class="dropdown-item text-center" href="#">HARD</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="p-3 navbar navbar-expand-lg navbar-light border-0">
            <div class="container-fluid">
                <i class="fa-solid fa-bars-staggered fs-5 text-primary d-none" id="sidebarOpen"></i>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid px-5 pt-2">
            <h1 class="mt-4">Simple Sidebar</h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear
                non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>
                Make sure to keep all page content within the
                <code>#page-content-wrapper</code>
                . The top navbar is optional, and just for demonstration. Just create an element with the
                <code>#sidebarToggle</code>
                ID which will toggle the menu when clicked.
            </p>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>