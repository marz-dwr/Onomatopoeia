<style>
    ul{
        list-style-type: none;
    }
    .list li{
        background-color: #EE6E73;
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
        padding-left: 20px;
    }
    .job-list{
        background-color: #EE6E73;
        margin-bottom: 20px;
        color: white;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .list-header{
        font-size: 35px;
    }
    /* anchor tag for class job-desc-sm */
    .job-desc-sm, a.job-desc-sm:visited, a.job-desc-sm:hover{
        color: white;
    }
    /***********************************/
    span.job-title{
        font-size: 20px;
    }
</style>
<div id="pcont" class="container-fluid ">
    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand list-header">Job Feeds</span></h2>
            </div>

            <div class="col-lg-12 hidden-xs">
                <ul class="list">
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">
                                
                                    <span class="job-title">
                                        <i class="fa fa-exclamation-triangle"></i>
                                        <span>Wanted Labandera</span>
                                    </span>
                                    <br>
                                    <span>WASSAP MADAPAKDOT!.</span>
                                
                            </div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                    <a href="#" class="job-desc-sm">
                        <li>
                            <div class="job-list">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</div>
                        </li>
                    </a>
                </ul>
            </div>
        </div><!-- .row -->
    </div>
</div>
<script type="text/javascript" href="../assets/dist/js/material.js"></script>
<script type="text/javascript" href="../assets/dist/js/material.min.js"></script>
<script type="text/javascript" href="../assets/dist/js/ripple.js"></script>
<script type="text/javascript" href="../assets/dist/js/ripple.min.js"></script>
<script type="text/javascript" href="../assets/scripts/material.js"></script>
<script type="text/javascript" href="../assets/scripts/ripple.js"></script>
<script type="text/javascript">
    var nav = $('#head-nav'); // Change to nav div
    var nav_class = 'scrollnav'; // Change to class name
    var threshold = 30; // Change to pixels scrolled

    $(window).scroll(function () {
        var distance = $(this).scrollTop();
        if (distance > threshold) { // If scrolled past threshold
            nav.addClass(nav_class); // Add class to nav
        } else { // If user scrolls back to top
            if (nav.hasClass(nav_class)) { // And if class has been added
                nav.removeClass(nav_class); // Remove it
            }
        }
    });
</script>