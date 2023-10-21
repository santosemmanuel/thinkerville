<?php include("includes/header.php"); ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="d-flex flex-column flex-shrink-0 p-3 p-3 border-end" id="sidebar-wrapper" style="background-color: #F5FEFD; z-index:2000">
        <div class="pb-3 mb-3 border-bottom">
            <div style="width: 100%;" class="">
                <a href="#" class="text-decoration-none">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="assets/images/ThinkerVille_04.png" alt="thinkerville" srcset="" class="mr-5" style="width: 250px; height: 40px">
                </a>
            </div>
            <div class="">
                <i class="fa-solid fa-xmark fs-5" style="float:right; margin-top: -8%; color:#4084C3" id="sidebarClose"></i>
            </div>
        </div>
        <ul class="list-unstyled ps-0">
            <div id="scroll-SideContent">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-black" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        About Civil Service Exam
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="my-2 list-item">
                                <a href="#AboutCSE1" class="rounded active-item">What is the Philippine Civil Service Exam?</a>
                            </li>
                            <li class="my-2 list-item">
                                <a href="#AboutCSE2" class="rounded">Am I qualified to take the Civil Service Exam?</a>
                            </li>
                            <li class="my-2 list-item"><a href="#AboutCSE3" class="rounded">What is the examination coverage of the CSE?</a></li>
                            <li class="my-2 list-item"><a href="#AboutCSE4" class="rounded">What is the CSE passing rate?</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-black" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Application Process
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="my-2 list-item"><a href="#AppProcess1" class="rounded">Civil Service Exam Schedule and Application</a></li>
                            <li class="my-2 list-item"><a href="#AppProcess2" class="rounded">Application Process & Requirements</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed text-left text-black" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Frequently Asked Questions
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-black">
                            <li class="my-2 list-item"><a href="#FAQ1" class="rounded scroll-link">Can I take the Civil Service Exam if I haven't completed college or high school?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ2" class="rounded scroll-link">Where can I find my school assignment for the Civil Service Exam?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ3" class="rounded scroll-link">What is the appropriate attire for the Civil Service Exam, and what clothing items are not allowed?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ4" class="rounded scroll-link">Are calculators allowed to be used during the Civil Service Exams?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ5" class="rounded scroll-link">What are the required documents and items I need to bring for the Civil Service Exam?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ6" class="rounded content-link">What are the important reminders for the day of the Civil Service Examination?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ7" class="rounded scroll-link">Who are exempted from taking the Civil Service Exams, and what criteria make them eligible for exemption?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ8" class="rounded scroll-link">What benefits do individuals receive upon passing the Civil Service Exam?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ9" class="rounded scroll-link">How many times can take the Civil Service Exam?</a></li>
                            <li class="my-2 list-item"><a href="#FAQ10" class="rounded scroll-link">Does Civil Service eligibility have an expiration date, and how is it regarded by government agencies during job applications?</a></li>
                        </ul>
                    </div>
                </li>
            </div>
            <li class="border-top mt-5"></li>
        </ul>
        <div class="dropdown mt-auto">
            <div class="dropdown">
                <div class="d-grid">
                    <a class="btn btn-lg" type="button" id="dropdownMenuButton1" href="assesment.php" aria-expanded="false" style="background-color: #4084C3; color:#F7D965">
                        <i class="fa-regular fa-circle-play" style="margin-right: 12px"></i><strong>START QUIZ</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapped" style="position: relative">
        <!-- Top navigation-->
        <nav id="navbar_top" class="p-3 navbar navbar-expand-lg navbar-light bg-light border-0">
            <div class="container-fluid">
            <i class="fa-solid fa-bars-staggered fs-5 text-primary d-none" id="sidebarOpen"></i>
                <a class="navbar-brand" href="#">
                    <img src="assets/images/ThinkerVille_04.png" id="thinkervilleHeaderLogo" alt="thinkerville" style="width: 199px; height: 38px; margin-left: 6%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link" style="color: #4084C3;" href="assesment.php"><i class="fa-regular fa-circle-play mt-1" style="font-size: 17.5px;"></i> Take a Quiz</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: #4084C3;" href="https://docs.google.com/forms/d/e/1FAIpQLSctA-E2f84JFiisREonzui8YqMqrmsuua0MfePQf900K9DryA/viewform"><i class="fas fa-edit mt-1" style="font-size: 17.5px;"></i> Register Here</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: #4084C3;" href="https://www.facebook.com/ThinkerVilleEducation" target="_blank"><i class="fa-solid fa-users mt-1"></i> Join Community</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content-->
        <div class="" style="background-image: url('assets/images/White and Orange Modern Abstract Banner.png'); background-size: cover;">
            <div class="row d-flex align-item-center justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <div class="card shadow rounded" style="margin-top: 20%; margin-bottom: 20%">
                        <div class="card-body p-5 text-center">
                            <h2 class="card-title fw-bold">Civil Service Exam Practice Test</h2>
                            <p class="card-text text-muted">Based on Actual Civil Service Examination</p>
                            <div class="d-grid">
                                <a class="btn btn-lg" type="button" id="dropdownMenuButton1" href="assesment.php" aria-expanded="false" style="background-color: #4084C3; color:#F7D965">
                                    <i class="fa-regular fa-circle-play" style="margin-right: 12px"></i><strong>START QUIZ</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-5 pt-2">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card shadow-sm bg-body rounded mt-5" style="width: 90%">
                        <div class="card-header" style="background-color: #4084C3;">
                            <strong style="font-size: 25px; color: white">Announcements</strong>
                        </div>
                        <div class="card-body p-4">
                            <ul>
                                <li><a href="https://www.csc.gov.ph/announcements/announcement-board-of-foreign-service-examinations">Announcement - Board of Foreign Service Examinations</a></li>
                                <hr>
                                <li><a href="https://www.csc.gov.ph/examination-advisories/exam-announcements-no-04-s-2023">Examination Announcement No. 04 s. 2023 - CSE PPT Exam Calendar CY 2024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="AboutCSE1">
                        <h1 class="mt-5 fw-bold">What is the Philippine Civil Service Exam?</h1>
                        <div class="cse-content">
                            <p style="text-align: justify">The Philippine Civil Service Exam, formally referred to as the Career Service Exam, stands as a pivotal qualification assessment administered by the Civil Service Commission.
                                Its successful completion opens the doors for individuals to engage in full-time, permanent employment within the Philippine government. This biannual examination comes in two tiers – Professional and Sub-professional. </p>
                            <p style="text-align: justify">
                                Opting for the Sub-professional level equips you for clerical and entry-level roles, whereas conquering the Professional level not only awards you 2nd level eligibility but also paves your way towards
                                supervisory and managerial positions (2nd level positions). The choice between the Professional and Sub-professional levels lies in your hands.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="AboutCSE2">
                <h1 class="mt-5 fw-bold">Am I qualified to take the Civil Service Exam?</h1>
                <div class="cse-content">
                    <p style="text-align: justify">Everyone is qualified to take the Civil Service Examination <mark><i>regardless of your educational attainment</i></mark> as long as you met the following: </p>
                    <ul>
                        <li class="mb-1">You must be a Filipino citizen, at least 18 years of age at the time of filing the application.</li>
                        <li class="mb-1">You must be of good moral character, have no criminal record, or have not been convicted of an offense involving moral turpitude.</li>
                        <li class="mb-1">Must not have been dishonorably discharged from the military, police, fire, or jail service or even dismissed for cause from any civilian position in the government.</li>
                        <li class="mb-1">Must not have taken the same level of career service examination either through PPT or CSC Computerized Examination (CSC COMEX) within three (3) months from the last examination taken.</li>
                    </ul>
                </div>

            </div>

            <div id="AboutCSE3">
                <h1 class="fw-bold">What is the examination coverage of the CSE?</h1>
                <div class="cse-content">
                    <p style="text-align: justify">The content of the Civil Service Exam varies based on whether you are opting for the Professional or Sub-Professional level. For those taking the Professional level,
                        the subjects comprise Numerical Ability, Analytical Ability, Verbal Ability, and General Information. Conversely, the Sub-Professional level entails Numerical Ability, Clerical Ability, Verbal Ability,
                        and General Information. Explore the specifics outlined below:</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: #4084C3; color:#F7D965">
                                <th class="text-center fw-bolder" width="50%">Professional</th>
                                <th class="text-center" width="50%">Sub-Professional</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-3">
                                        <p>In English and Filipino:</p>
                                        <br>
                                        <strong class="mb-1">Numerical Ability</strong>
                                        <ul>
                                            <li class="mt-1">Basic Operations</li>
                                            <li class="mt-1">Word Problems</li>
                                        </ul>
                                        <br>
                                        <strong class="mb-1">Analytical Ability</strong>
                                        <ul>
                                            <li class="mt-1">Word association</li>
                                            <li class="mt-1">Identifying assumptions and conclusions</li>
                                            <li class="mt-1">Logic</li>
                                            <li class="mt-1">Data Interpretation</li>
                                        </ul>
                                        <br>
                                        <strong class="mb-1">Verbal Ability</strong>
                                        <ul>
                                            <li class="mt-1">Grammar and Correct Usage</li>
                                            <li class="mt-1">Vocabulary</li>
                                            <li class="mt-1">Paragraph Organization</li>
                                            <li class="mt-1">Reading Comprehension</li>
                                        </ul>
                                    </td>
                                    <td class="p-3">
                                        <p>In English and Filipino:</p>
                                        <br>
                                        <strong class="mb-1">Numerical Ability</strong>
                                        <ul>
                                            <li class="mt-1">Basic Operations</li>
                                            <li class="mt-1">Word Problems</li>
                                        </ul>
                                        <br>
                                        <strong class="mb-1">Clerical Ability</strong>
                                        <ul>
                                            <li class="mt-1">Filing</li>
                                            <li class="mt-1">Spelling</li>
                                        </ul>
                                        <br>
                                        <strong class="mb-1">Verbal Ability</strong>
                                        <ul>
                                            <li class="mt-1">Grammar and Correct Usage</li>
                                            <li class="mt-1">Vocabulary</li>
                                            <li class="mt-1">Paragraph Organization</li>
                                            <li class="mt-1">Reading Comprehension</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-3" colspan="2">
                                        <strong class="mb-1">General Information</strong>
                                        <ul>
                                            <li class="mt-1">Philippine Constitution</li>
                                            <li class="mt-1">Code of Conduct for Public Officials and Employees (R.A. 6713)</li>
                                            <li class="mt-1">Peace and Human Rights Issues and Concepts</li>
                                            <li class="mt-1">Environmental Management and Protection</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="AboutCSE4">
                <h1 class="mt-5 fw-bold">What is the CSE passing rate?</h1>
                <div class="cse-content">
                    <p style="text-align: justify">To pass the test, an examinee should get a general rating of at least <mark><strong>80%</strong></mark></p>
                </div>
            </div>

            <div id="AppProcess1">
                <h1 class="mt-5 fw-bold">Civil Service Exam Schedule and Application</h1>
                <div class="cse-content">
                    <p style="text-align: justify">For 2024, here’s the schedule:</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: #4084C3; color:#F7D965">
                                <th class="text-center fw-bolder">Application Date</th>
                                <th class="text-center fw-bolder">Date of Examination</th>
                                <th class="text-center fw-bolder">Release of Result</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nov. 20, 2023 - Jan 3, 2024</td>
                                    <td>Mar. 3, 2024</td>
                                    <td>May 12, 2024</td>
                                </tr>
                                <tr>
                                    <td>May 13, 2024 - Jun 13, 2024</td>
                                    <td>Aug. 11, 2024</td>
                                    <td>Oct. 20, 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="fw-bolder my-4">Time allotment & number of items</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: #4084C3; color:#F7D965">
                                <th class="text-center fw-bolder">Level</th>
                                <th class="text-center fw-bolder">No. of hours</th>
                                <th class="text-center fw-bolder">No. of items</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Professional</td>
                                    <td>3 hours and 10 minutes</td>
                                    <td>170 items</td>
                                </tr>
                                <tr>
                                    <td>Subprofessional</td>
                                    <td>2 hours and 40 minutes</td>
                                    <td>165 items</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="AppProcess2">
                <h1 class="mt-5 fw-bold">Application Process & Requirements</h1>
                <div class="cse-content px-4 py-3">
                    <p style="text-align: justify">For you to be allowed to take the Civil Service Examination, follow the steps below:</p>
                    <ol>
                        <li class="mt-1">Go to the nearest Civil Service Commission Office. They are open from Monday to Friday from 8:00 AM to 5:00PM (except for holidays).</li>
                        <li class="mt-1">
                            Submit the Requirements
                            <ul>
                                <li class="mt-1">Application form
                                    <a href="https://www.csc.gov.ph/phocadownload/userupload/erpo/forms/CS%20Form%20100_Revised%20September%20%202016.pdf" style="text-decoration: none;" target="_blank">
                                        (click here to get it)
                                    </a>
                                </li>
                                <li class="mt-1">4 identical ID pictures (passport size, white background)</li>
                                <li class="mt-1">
                                    Original and photocopy of school, company or government issued IDs
                                    <ul>
                                        <li class="mt-1">Passport</li>
                                        <li class="mt-1">Driver’s License</li>
                                        <li class="mt-1">SSS ID</li>
                                        <li class="mt-1">GSIS ID</li>
                                        <li class="mt-1">Philhealth ID</li>
                                        <li class="mt-1">Current Company/Office ID</li>
                                        <li class="mt-1">Current School ID</li>
                                        <li class="mt-1">Postal ID</li>
                                        <li class="mt-1">BIR ID (TIN)</li>
                                        <li class="mt-1">Barangay ID</li>
                                        <li class="mt-1">Voter’s ID</li>
                                        <li class="mt-1">Police Clearance</li>
                                    </ul>
                                </li>
                                <li class="mt-1">PSA birth certificate (if ID has no birth date)</li>
                                <li class="mt-1">Pay registration fee at the cashier (Php 500.00)</li>
                            </ul>
                        </li>
                        <li class="mt-1">Wait for your school assignment (examination venue).</li>
                        <li class="mt-1">Take the test on the designated day. <mark><i>(Remember to bring all the requirements and follow all the required protocols on the examination day. Check our FAQs to get the list)</i></mark></li>
                        <li class="mt-1">Wait for the result. <mark><i>(Check announcements for updates)</i></mark></li>
                    </ol>
                </div>
            </div>

            <div>
                <h1 class="mt-5 fw-bold">FAQs: Frequently Asked Questions</h1>
                <div class="cse-content px-4 py-3">
                    <ol>
                        <li id="FAQ1" class="mt-1 fs-5">Can I take the Civil Service Exam if I haven't completed college or high school?<br>
                            <div class="m-3 fs-6">
                                <i>Yes. You can take the Civil Service Exam regardless of your educational attainment.</i>
                            </div>
                        </li>
                        <li id="FAQ2" class="mt-1 fs-5">Where can I find my school assignment for the Civil Service Exam?<br>
                            <div class="m-3 fs-6">
                                <i>The school assignment is available 2 weeks before examination day at the CSC website
                                    <a href="https://www.csc.gov.ph/" style="text-decoration: none;" target="_blank">www.csc.gov.ph</a>
                                </i>
                            </div>
                        </li>
                        <li id="FAQ3" class="mt-1 fs-5">What is the appropriate attire for the Civil Service Exam, and what clothing items are not allowed?<br>
                            <div class="m-3 fs-6">
                                <i>During the examination, you should wear a proper attire (sleeveless shirt/blouse, short pants or slippers are not allowed). White polo or polo shirt is advised to be used. </i>
                            </div>
                        </li>
                        <li id="FAQ4" class="mt-1 fs-5">Are calculators allowed to be used during the Civil Service Exams?<br>
                            <div class="m-3 fs-6">
                                <i>The use of calculators as aids during the exam is prohibited. When candidates sit for the Civil Service Examination, they are expected to rely solely on their mental calculations and
                                    problem-solving skills without the assistance of electronic devices like calculators.</i>
                            </div>
                        </li>
                        <li id="FAQ5" class="mt-1 fs-5">What are the required documents and items I need to bring for the Civil Service Exam?<br>
                            <div class="m-3 fs-6">
                                <i>
                                    The following items should be brought during the CS Examination:
                                    <ul>
                                        <li>Valid ID</li>
                                        <li>Original PSA Birth Certificate</li>
                                        <li>Application Receipt with Official Receipt</li>
                                        <li>Notice of Assignment</li>
                                        <li>Black ballpen</li>
                                        <li>Clear transparent container (for water or any food)</li>
                                    </ul>
                                </i>
                            </div>
                        </li>
                        <li id="FAQ6" class="mt-1 fs-5">What are the important reminders for the day of the Civil Service Examination?<br>
                            <div class="m-3 fs-6">
                                <i>
                                    Important Reminders on the day of the examination
                                    <ul>
                                        <li>No ID, No Exam.</li>
                                        <li>Testing venue is opened at 6:00am. Gates are closed at 7:30am</li>
                                        <li>Failure to take the exam on schedule means forfeiture of examination fee and slot.</li>
                                        <li>Gadgets, calculators and any printed materials are not allowed.</li>
                                    </ul>
                                </i>
                            </div>
                        </li>
                        <li id="FAQ7" class="mt-1 fs-5">Who are exempted from taking the Civil Service Exams, and what criteria make them eligible for exemption?<br>
                            <div class="m-3 fs-6">
                                <i>
                                    The following list comprises all individuals exempted from taking the Civil Service Examination:
                                    <ul>
                                        <li>Bar and Board Exam Passers (in accordance with RA 1080)</li>
                                        <li>
                                            Barangay Health Workers (pursuant to RA 7883):
                                            <ul>
                                                <li>
                                                    Candidates should possess at least two (2) years of college education leading to a college degree and five (5)
                                                    years of active and satisfactory service in their respective fields.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Barangay Officials (based on RA 7160, Local Government Code of 1991):
                                            <ul>
                                                This category includes:
                                                <li>Barangay Captain</li>
                                                <li>Sangguniang Barangay Members</li>
                                                <li>Sangguniang Kabataan Chairmen</li>
                                                <li>Barangay Treasurers</li>
                                                <li>Barangay Secretaries</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Barangay Nutrition Scholars (based on PD 1569):
                                            <ul>
                                                <li>Individuals should have engaged in at least 2 years of active and effective nutrition services and other
                                                    health-related activities.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Electronic Data Processing Specialists (based on CSC Resolution No. 90-083, Jan. 22, 1990):
                                            <ul>
                                                <li>Those who have passed System Analysis and Design, Java, Microsoft Access, or Microsoft Visual Basic.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Foreign School Honor Graduates (based on CSC Resolution No. 1302714, Dec. 17, 2013):
                                            <ul>
                                                <li>Including Summa Cum Laude, Magna Cum Laude, and Cum Laude distinctions.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Honor Graduates (based on PD 907, Mar. 11, 1976):
                                            <ul>
                                                <li>Summa Cum Laude, Magna Cum Laude, and Cum Laude honors are considered.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Sanggunian Members (based on RA 10156):
                                            <ul>
                                                <li>Including Sangguniang Bayan, Sangguniang Panlungsod, and Sangguniang Panlalawigan.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Scientific and Technological Specialists (based on PD 997):
                                            <ul>
                                                <li>Encompassing Natural Sciences (Astronomy, Biological Sciences, Geological Sciences, Meteorology, Oceanography, Physics/Applied Physics)
                                                    and Engineering Sciences.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Skills Eligibility (based on CSC MC No. 11, s. 1996):
                                            <ul>
                                                <li>For roles such as plant electricians, automotive mechanics, heavy equipment operators, laboratory technicians, carpenters, draftsmen, shine
                                                    curators, plumbers, and others.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Veterans Preference Eligibility (based on EO No. 132, s. 1948, and EO No. 790, s. 1982):
                                            <ul>
                                                <li>This includes the veteran, their spouse, and their children.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </i>
                            </div>
                        </li>
                        <li id="FAQ8" class="mt-1 fs-5">What benefits do individuals receive upon passing the Civil Service Exam?<br>
                            <div class="m-3 fs-6">
                                <i>Individuals who pass the CSE are granted permanent positions. Consequently, they become eligible for customary benefits such as SSS, Pag-IBIG, PhilHealth, holiday pay, and more.
                                    (Non-permanent or job order employees do not have access to these privileges.)</i>
                            </div>
                        </li>
                        <li id="FAQ9" class="mt-1 fs-5">How many times can one take the Civil Service Exam?<br>
                            <div class="m-3 fs-6">
                                <i>You are allowed to take the civil service exam as many times as necessary. It's important to note, however, that you can only attempt the same level of the exam once every three months.</i>
                            </div>
                        </li>
                        <li id="FAQ10" class="mt-1 fs-5">Does Civil Service eligibility have an expiration date, and how is it regarded by government agencies during job applications?<br>
                            <div class="m-3 fs-6">
                                <i>Civil Service eligibility does not come with an expiration date. Moreover, government agencies tend to favor this certification when considering candidates for positions.</i>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="my-5">
            <center>
                <h2 class="text-center fw-bolder">CHALLENGE YOURSELF NOW!</h2>
            </center>
        </div>
    </div>

</div>
<?php include("includes/footer.php"); ?>
<script>

</script>