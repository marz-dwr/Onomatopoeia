<style>
    ul{
        list-style-type: none;
    }
    div.container-fluid{
        height: 100% !important;
    }
    div.cl-mont{
        height: 100% !important;
    }
    div.row{
        height: 100% !important;
    }

    div.sender-container{
        background-color: #EE6E73;
        box-shadow: 0px 9px 30px -7px rgba(0,0,0,0.75);
        height: 40em;
        padding: 10px;
    }
    div.sender-container:hover{
        overflow-x: hidden; 
        overflow-y: auto;
    }

    div.msg-content{
        background-color: white;
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
    }

    div.selected.msg-sender{
        background-color: rgba(250,250,250,0.75);
        color: black;
    }

    div.msg-sender{
/*        border: solid-bottom;
        border-color: white;
        border-width: 1px;*/
        margin-bottom: 5px;
        color: white;
    }
    div.msg-sender:hover{
        background-color: rgba(250,250,250,0.75);
        color: black;
    }

    .sender:hover{
        font-weight: bold;
    }

    .new-msg{
        color: white;
        text-align: middle;
    }

    .new-msg:hover{
        color: white;
    }

    .btn{
        border-radius: 4px;
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
        <div class="row">
            <div class="col-md-1">
                <div class="container">
                    <div class="msg-menu" style="float: left;">
                        <a href="#" class="btn btn-primary new-msg" data-toggle="tooltip" title="Create Message">
                            New &nbsp;<i class="fa fa-envelope"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <br />
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <div class="sender-container">
                        <?php
                            // $msg = array(
                            //             array("Ace", "Subject", "Message"),
                            //             array("Kenneth", "HAHA", "HAHAHAHA"),
                            //             array("Reymark", "HOHO", "HOHOHOHO"),
                            //         );
                            // echo "<ul>";
                            // for($x = 0; $x < 3; $x++){
                            //     echo "<a href='#' class='sender'>";
                            //     echo "<li>".$msg[$x][0]."</li>";
                            //     echo "</a>";
                            // }
                            // echo "</ul>";
                        ?>
                        <a href="#">
                            <div class="msg-sender selected">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar3_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="msg-sender">
                                <img alt="Avatar" src="../assets/img/avatar4_30.jpg"><span>Lorenz Calang</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="message-content">
                        Display Message here...
                        <br/>
                        <br/>
                        <br/>
                    </div>
                    <div class="message-reply">
                        <form class="form-group">
                            <textarea class="form-control" style="resize: vertical;"></textarea>
                            <br />
                            <a href="#" class="btn btn-default">
                                Reply&nbsp;
                                <span>
                                    <i class="fa fa-reply"></i>
                                </span>
                            </a>
                            <a href="#" class="btn btn-danger" style="float: right;">
                                Delete Message&nbsp;
                                <span>
                                    <i class="fa fa-trash-o"></i>
                                </span>
                            </a>
                        </form>
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