<style>
    ul{
        list-style-type: none;
    }
    .sender:hover{
        font-weight: bold;
    }

    .list-header{
        font-size: 35px;
    }
    /* anchor tag for class job-desc-sm */
    /*.job-desc-sm, a.job-desc-sm:visited, a.job-desc-sm:hover{
        color: white;
    }*/
    /***********************************/
    span.job-title{
        font-size: 20px;
    }
</style>
<div id="pcont" class="container-fluid ">
    <div class="cl-mont">
        <div class="row">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand list-header">Messages</span></h2>
            </div>
        </div><!-- first row -->
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="background-color: #eeaa32; height: 100%;">
                    <div>
                        <?php
                            $msg = array(
                                        array("Ace", "Subject", "Message"),
                                        array("Kenneth", "HAHA", "HAHAHAHA"),
                                        array("Reymark", "HOHO", "HOHOHOHO"),
                                    );
                            echo "<ul>";
                            for($x = 0; $x < 3; $x++){
                                echo "<a href='#' class='sender'>";
                                echo "<li>".$msg[$x][0]."</li>";
                                echo "</a>";
                            }
                            echo "</ul>";
                        ?>
                    </div>
                </div>
                <div class="col-md-8" style="background-color: gray; height: 100%;">
                    .col-md-8
                </div>
            </div><!-- second row -->
        </div><!-- container -->
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