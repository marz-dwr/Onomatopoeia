<style>
    ul{
        list-style-type: none;
    }

    div.sender-container{
        background-color: #eeaa32;
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
    }

    div.message-content{
        background-color: white;
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
    }

    .sender:hover{
        font-weight: bold;
    }

    .list-header{
        font-size: 35px;
    }

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
                <div class="col-xs-6 col-md-4">
                    <div class="sender-container">
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
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="message-content">
                        Display Message here...
                        <br/>
                        <br/>
                        <br/>
                    </div>
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