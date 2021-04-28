<?php
    include "includes/header.php";
?>
        
        <div class="resume-main-container">
            <div class="resume">
                <div class="basic-info">
                    <a href="https://www.facebook.com/nguyencaonhan2712">
                        <img src="images/profile.jpg" alt="">
                    </a>
                    <a href="https://www.facebook.com/nguyencaonhan2712"><h1>Nguyễn Cao Nhân</h1></a>
                    <h2>Address: Dist. 3, Ho Chi Minh City</h2>
                    <h2>Tel: +84704448681</h2>
                    <h2>Email: 1959024@itec.hcmus.edu.vn</h2>
                </div>
                <div class="education">
                    <h1>Education</h1>
                    <div class="row">
                        <div class="col--2 col-md-6 col-sm-12">
                            <img src="images/HCMUS.png" alt="">
                            <p class="title">
                                VNUHCM - University of Science (2023)
                            </p>
                            <p class="edu-description">
                                Major in Information Technology (Software Development, Computer Intelligence and IT Service Science).
                            </p>
                        </div>
                        <div class="col--2 col-md-6 col-sm-12">
                            <img src="images/PTNK.jpg" alt="">
                            <p class="title">
                                VNUHCM - High School for the Gifted (2019)
                            </p>
                            <p class="edu-description">
                                Major in Information Technology.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="skills">
                    <h1>Skills</h1>
                    <div class="resume-row-3 row">
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/skill1.png" alt="">
                            <p>
                                Software Development
                            </p>
                        </div>
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/skill2.png" alt="">
                            <p>
                                Microsoft Office
                            </p>
                        </div>
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/skill3.jpg" alt="">
                            <p>
                                English Communication
                            </p>
                        </div>
                    </div>
                </div>
                <div class="experience">
                    <h1>Experience</h1>
                    <div class="resume-row-3 row">
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/ex1.png" alt="">
                            <p>
                                Mobile App Development
                            </p>
                        </div>
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/ex2.jpg" alt="">
                            <p>
                                Database
                            </p>
                        </div>
                        <div class="resume-col-3 col-md-4 col-sm-12">
                            <img src="images/ex3.jpg" alt="">
                            <p>
                                Web Development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <h1>Contact me</h1>
                    <?php
                        if (empty($_POST)) {
                            include "includes/form.php";
                        } else {
                            if (htmlspecialchars($_POST['name']) == '') {
                                echo "<p style='color: #49a09d;'>You forgot to submit your name, please try again!</p>";
                                include "includes/form.php";
                            } else {
                                echo "<h3 style='color: #49a09d;'>Thank you for submitting the form, ".htmlspecialchars($_POST['name'])."!</h3>";
                            }
                        }
                    ?>
                    <div class="row-3-contact">
                        <div class="col-3-contact">
                            <a href="https://www.facebook.com/nguyencaonhan2712">
                                <img class="contact-img" src="images/fb.png" alt="">
                            </a>
                        </div>
                        <div class="col-3-contact">
                            <a href="https://github.com/nguyencaonhan271201">
                                <img class="contact-img" src="images/gh.png" alt="">
                            </a>
                        </div>
                        <div class="col-3-contact">
                            <a href="mailto:1959024@itec.hcmus.edu.vn">
                                <img class="contact-img" src="images/gm.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    include "includes/footer.php";
?>