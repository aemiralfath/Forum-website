<?php
    include("../config.php");
    $id = $_GET['id'];
    $sql = $db->query("select * from course where id_course = $id");
    $value = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php");?>
<body class="single-courses-page">
    <div class="page-header">
        <?php include("partials/navcourses.php");?>

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php echo $value['title']; ?></h1>

                            <div class="ratings flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(4 votes)</span>
                            </div><!-- .ratings -->
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="featured-image">
                    <img src="../images/<?php echo $value['photo']; ?>" alt="">

                    <div class="course-cost">Free</div>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-1">
                <div class="post-share">
                    <h3>share</h3>

                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-thumb-tack"></i></a></li>
                    </ul>
                </div><!-- .post-share -->
            </div><!-- .col -->

            <div class="col-12 col-lg-8">
                <div class="single-course-wrap">
                    <div class="course-info flex flex-wrap align-items-center">
                        <div class="course-author flex flex-wrap align-items-center mt-3">
                            <img src="images/course-author.jpg" alt="">

                            <div class="author-wrap">
                                <label class="m-0">Teacher</label>
                                <div class="author-name"><a href="#">Ms. Lara Croft</a></div>
                            </div><!-- .author-wrap -->
                        </div><!-- .course-author -->

                        <div class="course-cats mt-3">
                            <label class="m-0">Categories</label>
                            <div class="author-name"><a href="#">Web design</a></div>
                        </div><!-- .course-cats -->

                        <div class="course-students mt-3">
                            <label class="m-0">Student</label>
                            <div class="author-name"><a href="#">26 (REGISTERED)</a></div>
                        </div><!-- .course-students -->

                        <div class="buy-course mt-3">
                            <a class="btn" href="#">ADD to cart</a>
                        </div><!-- .buy-course -->
                    </div><!-- .course-info -->

                    <div class="single-course-cont-section">
                        <h2>What Will I Learn?</h2>

                        <ul class="p-0 m-0 green-ticked">
                            <li>Learn C++, the games industry standard language.</li>
                            <li>Develop strong and transferrable problem solving skills.</li>
                            <li>Gain an excellent knowledge of modern game development.</li>
                            <li>Learn how object oriented programming works in practice.</li>
                            <li>Gain a more fundamental understanding of computer operation.</li>
                        </ul>

                        <h2>Requirements</h2>

                        <ul class="p-0 m-0 black-doted">
                            <li>64-bit PC capable of running Unreal 4 (recommended).</li>
                            <li>Or a Mac capable of running Unreal 4 (must support Metal).</li>
                            <li>About 15GB of free disc space.</li>
                        </ul>

                        <h2>Description</h2>

                        <p>EW Testing Grounds FPS shipped, including...</p>
                        <p>Much more C++ and Blueprint.</p>
                        <p>AI Blackboards & Behavior Trees.</p>
                        <p>Environmental Query System (EQS).</p>
                        <p>Humanoid Animation Blending.</p>
                        <p>Never-ending Level Design.</p>
                        <p>The course now has high quality hand written subtitles throughout, available as closed captions so you can turn them on or off at your convenience.</p>
                        <p>This course started as a runaway success on Kickstarter. Get involved now, and get access to all future content as it's added. The final course will be over 50 hours of content and 300+ lectures.</p>
                        <p>Learn how to create and mod video games using Unreal Engine 4, the free-to-use game development platform used by AAA studios and indie developers worldwide.</p>
                        <p>We start super simple so you need no prior experience of Unreal or coding! With our online tutorials, you'll be amazed what you can achieve.</p>
                        <p>Benefit from our world-class support from both other students, and the instructors who are on the forums regularly. Go on to build several games including a tank game, and a First Person Shooter.</p>
                        <p>You will have access to a course forum where you can discuss topics on a course-wide basis, or down to the individual video. Our thriving discussion forum will help you learn and share ideas with other students.</p>
                        <p>You will learn C++, the powerful industry standard language from scratch. By the end of the course you'll be very confident in the basics of coding and game development, and hungry to learn more.</p>
                        <p>"Any serious game programmer needs to know C++"Jason Gregory, Lead Programmer at Naughty Dog (creators of Uncharted & The Last of Us)</p>
                        <p>Anyone who wants to learn to create games: Unreal Engine is a fantastic platform which enables you to make AAA-quality games. Furthermore these games can be created for Windows, consoles, MacOS, iOS, Android and Web from a single source!</p>
                        <p>If you're a complete beginner, we'll teach you all the coding and game design principles you'll need. If you're an artist, we'll teach you to bring your assets to life. If you're a coder, we'll teach you game design principles.</p>
                        <p>What this course DOESN'T cover...</p>
                        <p>Whereas this course is already huge, we can't possibly cover everything in that time. Here are some things we will not be covering...</p>

                        <h2>Who is the target audience?</h2>

                        <ul class="p-0 m-0 black-doted">
                            <li>Competent and confident with using a computer.</li>
                            <li>Artists who want to bring their assets alive in a game engine.</li>
                            <li>Developers who want to re-skill across to coding.</li>
                            <li>Complete beginners who are willing to work hard.</li>
                            <li>Existing programmers who want to re-skill to game development.</li>
                        </ul>
                    </div>

                    <div class="single-course-accordion-cont mt-3">
                        <header class="entry-header flex flex-wrap justify-content-between align-items-center">
                            <h2>Curriculum For This Course</h2>

                            
                        </header><!-- .entry-header -->

                        <div class="entry-contents">
                            <div class="accordion-wrap type-accordion">
                                <?php
                                    $sql = $db->query("select * from curriculum where course_id = $id");
                                    while($cur = $sql->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                <h3 class="entry-title flex flex-wrap justify-content-between align-items-lg-center active">
                                    <span class="arrow-r"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <span class="lecture-group-title"><?php echo $cur['title'] ?></span>
                                    <span class="number-of-lectures"></span>
                                    <span class="total-lectures-time"></span>
                                </h3>
                                        
                                <div class="entry-content">
                                    <ul class="p-0 m-0">
                                        <?php
                                        $idt = $cur['id_cur'];
                                            $sql2 = $db->query("select * from materi where curriculum_id = $idt");
                                            while($materi = $sql2->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        <li class="flex flex-column flex-lg-row align-items-lg-center"><span class="lecture-title"><?php echo $materi['title'] ?></span><span class="lectures-preview"></span><span class="lectures-time text-left text-lg-right"></span></li>
                                            <?php } ?>
                                    </ul>
                                </div>
                                    <?php } ?>
                                
                            </div>
                        </div><!-- .entry-contents -->
                    </div><!-- .single-course-accordion-cont  -->

                    <div class="instructors-info">
                        <header class="entry-heading">
                            <h2 class="entry-title">Instructors</h2>
                        </header><!-- .entry-heading -->

                        <div class="instructor-short-info flex flex-wrap">
                            <div class="instructors-stats">
                                <img src="images/instructor.jpg" alt="">

                                <ul class="p-0 m-0 mt-3">
                                   <li><i class="fa fa-star"></i> 4.7 .7 Average rating</li>
                                    <li><i class="fa fa-comment"></i> 25,182 Reviews</li>
                                    <li><i class="fa fa-user"></i> 11,085 Students</li>
                                    <li><i class="fa fa-play-circle"></i> 2 Courses</li>
                                </ul>
                            </div><!-- .instructors-stats -->

                            <div class="instructors-details">
                                <div class="ratings flex align-items-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> (4 votes)</span>
                                </div><!-- .ratings -->

                                <h2 class="entry-title mt-3">The Unreal Engine Developer Course Learn C++ & Make Games</h2>

                                <div class="course-teacher mt-3">
                                    Teacher: <a href="#">Ms. Lara Croft</a>
                                </div><!-- .course-teacher -->

                                <div class="entry-content mt-3">
                                    <p>Hi! I'm Colt. I'm a developer with a serious love for teaching. I've spent the last few years teaching people to program at 2 different immersive bootcamps where I've helped hundreds of people become web developers and change their lives. My graduates work at companies like Google, Salesforce, and Square.</p>
                                </div><!-- .entry-content -->
                            </div><!-- .instructors-details -->
                        </div><!-- .instructor-short-info -->
                    </div><!-- .instructors-info -->

                    <div class="related-courses">
                        <header class="entry-heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">Related Courses</h2>

                            <a href="#">View all</a>
                        </header><!-- .entry-heading -->

                        <div class="row mx-m-25">
                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/3.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">The Complete Digital Marketing Course</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">Ms. Lucius</a></div>

                                                <div class="course-date">Dec 18, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                $55 <span class="price-drop">$78</span>
                                            </div><!-- .course-cost -->

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>

                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->

                            <div class="col-12 col-lg-6 px-25">
                                <div class="course-content">
                                    <figure class="course-thumbnail">
                                        <a href="#"><img src="images/2.jpg" alt=""></a>
                                    </figure><!-- .course-thumbnail -->

                                    <div class="course-content-wrap">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="#">The Ultimate Drawing Course Beginner to Advanced</a></h2>

                                            <div class="entry-meta flex flex-wrap align-items-center">
                                                <div class="course-author"><a href="#">Michelle Golden</a></div>

                                                <div class="course-date">Mar 14, 2018</div>
                                            </div><!-- .course-date -->
                                        </header><!-- .entry-header -->

                                        <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                            <div class="course-cost">
                                                <span class="free-cost">Free</span>
                                            </div><!-- .price-drop -->

                                            <div class="course-ratings flex justify-content-end align-items-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>

                                                <span class="course-ratings-count">(4 votes)</span>
                                            </div><!-- .course-ratings -->
                                        </footer><!-- .entry-footer -->
                                    </div><!-- .course-content-wrap -->
                                </div><!-- .course-content -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .related-course -->
                </div><!-- .single-course-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

  <?php include("partials/logo.php") ?>

  <?php include("partials/footer"); ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
