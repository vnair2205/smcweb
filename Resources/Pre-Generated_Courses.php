<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO Meta Tags for SeekMYCOURSE -->
<meta name="description" content="SeekMYCOURSE is a revolutionary AI-powered learning platform that generates personalized courses on any topic, in over 45 languages. Start your learning journey today.">
<meta name="keywords" content="AI Course Generator, Online Learning Platform, EdTech, Personalized Learning, Multilingual Education, Skill Development, Online Courses, AI Tutor">
<meta name="author" content="Seek My Course AI Technologies Pvt Ltd">

<!-- Favicon -->
<link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />

<!-- Page Title -->
<title>SeekMYCOURSE | Pre-Generated Courses</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/remixicon.css">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/iconsax.css" />

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/aos.css">

    <!-- swiper slider css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/swiper-bundle.min.css" />

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/course.css">



</head>

<body class="inner-bg">

   <!-- header start -->
<?php include '../header2.php'; ?>
    <!-- header end -->

<!-- breadcrumb section start -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div>
                            <h2><img src="../assets/images/breadcrumb-title.png" class="img-fluid"
                                    alt="title-effect">Explore 8,500+ Online Courses to Advance Your Career
                            </h2>
                            <p><i class="ri-subtract-line"></i>"Dive into our extensive library of over 8,500 expert-led courses across development, design, business, and more. Whatever your goal, start your learning journey with SeekMyCourse and master the skills of tomorrow."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="../assets/svg/service-vector.svg" class="img-fluid" alt="service">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->


  <!-- Main Course Section Start -->
    <section class="course-page-section section-b-space">
        <div class="container">
            <div class="row">
                <!-- Filters Sidebar (Left) -->
                <div class="col-lg-3">
                    <div class="filters-sidebar">
                        <h4>Categories</h4>
                        <div class="filter-list">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryFilter" id="cat-all" value="all" checked>
                                <label class="form-check-label" for="cat-all">All</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryFilter" id="cat-dev" value="Development">
                                <label class="form-check-label" for="cat-dev">Development</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryFilter" id="cat-design" value="Design">
                                <label class="form-check-label" for="cat-design">Design</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryFilter" id="cat-business" value="Business">
                                <label class="form-check-label" for="cat-business">Business</label>
                            </div>
                             <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryFilter" id="cat-it" value="IT & Software">
                                <label class="form-check-label" for="cat-it">IT & Software</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Grid (Right) -->
                <div class="col-lg-9">
                    <div class="course-grid-area">
                        <!-- Search Bar -->
                        <div class="search-container">
                            <div class="search-wrapper">
                                <input type="text" id="course-search-input" class="form-control" placeholder="Search by course title or category..." autocomplete="off">
                                <div id="search-suggestions" class="suggestions-list"></div>
                            </div>
                            <button id="search-btn" class="btn">Search</button>
                        </div>

                        <!-- Course Cards Grid -->
                        <div class="row g-4" id="course-grid">
                            <!-- We now have 20 cards to demonstrate the feature -->
                            <?php for ($i = 1; $i <= 20; $i++) {
                                $courses = [
                                    ['title' => 'Full-Stack Web Development Bootcamp', 'category' => 'Development', 'img' => '7F56D9/FFFFFF?text=Dev'],
                                    ['title' => 'Complete Figma UI/UX Design Course', 'category' => 'Design', 'img' => '2170FF/FFFFFF?text=Design'],
                                    ['title' => 'The Complete Financial Analyst Course', 'category' => 'Business', 'img' => '027A48/FFFFFF?text=Business'],
                                    ['title' => 'Ethical Hacking From Scratch', 'category' => 'IT & Software', 'img' => 'B42318/FFFFFF?text=IT'],
                                    ['title' => 'Python for Data Science and Machine Learning', 'category' => 'Development', 'img' => '7F56D9/FFFFFF?text=Dev'],
                                    ['title' => 'Graphic Design Masterclass', 'category' => 'Design', 'img' => '2170FF/FFFFFF?text=Design'],
                                    ['title' => 'Digital Marketing Masterclass', 'category' => 'Business', 'img' => '027A48/FFFFFF?text=Business'],
                                    ['title' => 'Cyber Security Essentials', 'category' => 'IT & Software', 'img' => 'B42318/FFFFFF?text=IT'],
                                    ['title' => 'React - The Complete Guide', 'category' => 'Development', 'img' => '7F56D9/FFFFFF?text=Dev'],
                                    ['title' => 'Adobe Illustrator for Beginners', 'category' => 'Design', 'img' => '2170FF/FFFFFF?text=Design'],
                                    ['title' => 'Introduction to Project Management', 'category' => 'Business', 'img' => '027A48/FFFFFF?text=Business'],
                                    ['title' => 'CompTIA Security+ Certification', 'category' => 'IT & Software', 'img' => 'B42318/FFFFFF?text=IT'],
                                    ['title' => 'JavaScript Algorithms and Data Structures', 'category' => 'Development', 'img' => '7F56D9/FFFFFF?text=Dev'],
                                    ['title' => 'Canva for Beginners', 'category' => 'Design', 'img' => '2170FF/FFFFFF?text=Design'],
                                    ['title' => 'Business Analytics with Excel', 'category' => 'Business', 'img' => '027A48/FFFFFF?text=Business'],
                                    ['title' => 'AWS Certified Cloud Practitioner', 'category' => 'IT & Software', 'img' => 'B42318/FFFFFF?text=IT'],
                                    ['title' => 'Vue - The Complete Guide', 'category' => 'Development', 'img' => '7F56D9/FFFFFF?text=Dev'],
                                    ['title' => 'Motion Graphics with Adobe After Effects', 'category' => 'Design', 'img' => '2170FF/FFFFFF?text=Design'],
                                    ['title' => 'E-commerce Management', 'category' => 'Business', 'img' => '027A48/FFFFFF?text=Business'],
                                    ['title' => 'Linux for Beginners', 'category' => 'IT & Software', 'img' => 'B42318/FFFFFF?text=IT'],
                                    
                                ];
                                $course = $courses[($i - 1) % 20];
                            ?>
                            <div class="col-md-6 course-card-wrapper" data-category="<?php echo $course['category']; ?>" data-title="<?php echo $course['title']; ?>">
                                <div class="course-card-new">
                                    <div class="course-thumb">
                                        <img src="https://placehold.co/600x400/<?php echo $course['img']; ?>" alt="course thumbnail">
                                    </div>
                                    <div class="course-content">
                                        <span class="category-badge"><?php echo $course['category']; ?></span>
                                        <div class="title-wrapper">
                                            <h3 class="title"><?php echo $course['title']; ?></h3>
                                            <a href="#" class="btn btn-enroll">Enroll</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <!-- No Results Message -->
                        <div id="no-results-message" style="display: none; text-align: center; padding: 40px;">
                            <h4>No courses found.</h4>
                            <p>Try adjusting your search or filter settings.</p>
                        </div>
                        
                        <!-- Load More Button Container -->
                        <div class="load-more-container">
                            <button id="load-more-btn" class="btn">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Course Section End -->




<?php include '../footer2.php'; ?>

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i class="iconsax" data-icon="chevron-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->


    <!--custom cursor start  -->
    <div id="cursor"></div>
    <div id="cursor-border"></div>
    <!--custom cursor start  -->


    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- slider js-->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/custom-slider.js"></script>

    <!-- custom cursor -->
    <script src="../assets/js/custom-cursor.js"></script>

    <!-- aos animation -->
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/custom-aos.js"></script>

    <!-- iconsax js -->
    <script src="../assets/js/iconsax.js"></script>

    <!-- header sticky js -->
    <script src="../assets/js/header_sticky.js"></script>

    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/course.js"></script>


</body>

</html>