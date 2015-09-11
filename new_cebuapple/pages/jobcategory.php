<style>
    ul{
        list-style-type: none;
    }
    .save-header{
        font-size: 35px;
    } 
     .jobcateg{
        background-color: #EE6E73;
        margin-bottom: 20px;
        color: white;
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 13px;
    }
    span.job-title{
        font-size: 40px;
    }
</style>
<div id="pcont" class="container-fluid ">
    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand save-header">Job Categories</span>
                    <span> <input type="button" value="Update Categories" id="update-category" class="btn btn-success"> </span>
                </h2>
            </div>

            <div class="col-lg-4 hidden-xs">
                <ul>
                <div class="jobcateg">
                    <input type="checkbox"><label> &nbsp; Accounting / Finance </label>
                    <ul>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory1">
                            <label class="check-label" for="subcategory1"> &nbsp; Accountant </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory2">
                            <label class="check-label" for="subcategory2"> &nbsp; Auditor </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory3">
                            <label class="check-label" for="subcategory3"> &nbsp; Bookkeeper </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory4">
                            <label class="check-label" for="subcategory4"> &nbsp; Call Center / BPO </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory5">
                            <label class="check-label" for="subcategory5"> &nbsp; CPA </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory6">
                            <label class="check-label" for="subcategory6"> &nbsp; Finance / Banking </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory8">
                            <label class="check-label" for="subcategory8"> &nbsp; Payroll </label>
                        </li>
                        <li onclick="check(this)">
                            <input type="checkbox" id="subcategory9">
                            <label class="check-label" for="subcategory9"> &nbsp; Virtual / Home-based </label>
                        </li>
                    </ul>
                </div> <!--job categ accounting-->







                        <li>
                            <input type= checkbox>
                            <div class="job"> <input type= checkbox> asdf</div>
                        </li>
                    </a>
                </ul>

            </div> <!--job categ-->
        </div> <!-- row -->
    </div> <!-- content -->
</div> <!--container -->


<script type="text/javascript">
    var nav = $('#head-nav'); 
    var nav_class = 'scrollnav'; 
    var threshold = 30;

    $(window).scroll(function () {
        var distance = $(this).scrollTop();
        if (distance > threshold) {
            nav.addClass(nav_class); 
        } else { 
            if (nav.hasClass(nav_class)) { 
                nav.removeClass(nav_class);
            }
        }
    });


</script>