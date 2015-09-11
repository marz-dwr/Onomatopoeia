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
        <div class="left">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand save-header">Job Categories</span>
                    <span> <input type="button" value="Update Categories" id="update-category" class="btn btn-success"> </span>
                </h2>
            </div>
            <div class="col-lg-4 hidden-xs">
            <div id="left">
        <div class="block-content">
        <div class="jobcateg">
            <label> &nbsp; Accounting / Finance</label>
            <ul>
                <li onclick="check(this)" class="active-check">
                    <input type="checkbox" id="subcategory1"><label class="check-label" for="subcategory1">&nbsp; Accountant</label></li><li onclick="check(this)" class="active-check"><input type="checkbox" id="subcategory2"><label class="check-label" for="subcategory2">&nbsp; Auditor</label></li><li onclick="check(this)" class="active-check"><input type="checkbox" id="subcategory3"><label class="check-label" for="subcategory3">&nbsp; Bookkeeper</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory4"><label class="check-label" for="subcategory4">&nbsp; Call Center / BPO</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory5"><label class="check-label" for="subcategory5">&nbsp; CPA</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory6"><label class="check-label" for="subcategory6">&nbsp; Finance / Banking</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory8"><label class="check-label" for="subcategory8">&nbsp; Payroll</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory9"><label class="check-label" for="subcategory9">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" id="category4" class="nosub"><label class="check-label" for="category4" onclick="categorypick(this)">&nbsp; Airline / Airport</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category7" class="nosub"><label class="check-label" for="category7" onclick="categorypick(this)">&nbsp; Domestic / Caretaker</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category10" class="nosub"><label class="check-label" for="category10" onclick="categorypick(this)">&nbsp; Food / Restaurant</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Health / Medical / Science</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory45"><label class="check-label" for="subcategory45">&nbsp; Laboratory</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory46"><label class="check-label" for="subcategory46">&nbsp; Med Tech</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory47"><label class="check-label" for="subcategory47">&nbsp; More Tech</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory49"><label class="check-label" for="subcategory49">&nbsp; Nurse / Midwife</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory50"><label class="check-label" for="subcategory50">&nbsp; Pharmacist</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory51"><label class="check-label" for="subcategory51">&nbsp; PT / OT</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory52"><label class="check-label" for="subcategory52">&nbsp; Rad Tech</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory53"><label class="check-label" for="subcategory53">&nbsp; Sales</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory54"><label class="check-label" for="subcategory54">&nbsp; Transcriptionist</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory55"><label class="check-label" for="subcategory55">&nbsp; Veterinarian</label></li></ul></div><div class="category-background"><input type="checkbox" id="category16" class="nosub"><label class="check-label" for="category16" onclick="categorypick(this)">&nbsp; Internship</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category19" class="nosub"><label class="check-label" for="category19" onclick="categorypick(this)">&nbsp; Logistics / Warehousing</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category23" class="nosub"><label class="check-label" for="category23" onclick="categorypick(this)">&nbsp; Purchasing / Buyer</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category26" class="nosub"><label class="check-label" for="category26" onclick="categorypick(this)">&nbsp; Sports / Athletics</label><ul><li style="cursor:default" class="nosub"></li></ul></div></div>
    </div>  <!--end of left-->
    <div id="center">
        <div class="col-lg-4 hidden-xs">
            <div class="category-background">
                <input type="checkbox" disabled="">
                <label>&nbsp; Admin / Office / Clerical</label>
                <ul>
                    <li onclick="check(this)"><input type="checkbox" id="subcategory12"><label class="check-label" for="subcategory12">&nbsp; Operations</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory13"><label class="check-label" for="subcategory13">&nbsp; Secretary / Receptionist</label></li><li onclick="check(this)" class="active-check"><input type="checkbox" id="subcategory14"><label class="check-label" for="subcategory14">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Arts / Media / Design</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory18"><label class="check-label" for="subcategory18">&nbsp; Interior Design</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory20"><label class="check-label" for="subcategory20">&nbsp; Radio / Music</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory21"><label class="check-label" for="subcategory21">&nbsp; Video / TV</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory22"><label class="check-label" for="subcategory22">&nbsp; Virtual / Home-based</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory23"><label class="check-label" for="subcategory23">&nbsp; Writers</label></li></ul></div><div class="category-background"><input type="checkbox" id="category8" class="nosub"><label class="check-label" for="category8" onclick="categorypick(this)">&nbsp; Education / Schools</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category11" class="nosub"><label class="check-label" for="category11" onclick="categorypick(this)">&nbsp; Foreign Language</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Hotel / Spa / Salon</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory57"><label class="check-label" for="subcategory57">&nbsp; Hotel / Resort</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory59"><label class="check-label" for="subcategory59">&nbsp; Salon</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory60"><label class="check-label" for="subcategory60">&nbsp; Spa</label></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; IT / Computers</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory64"><label class="check-label" for="subcategory64">&nbsp; mobile Development</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory66"><label class="check-label" for="subcategory66">&nbsp; Network / System Administrator</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory67"><label class="check-label" for="subcategory67">&nbsp; Operations / HR</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory68"><label class="check-label" for="subcategory68">&nbsp; Programming / Development</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory69"><label class="check-label" for="subcategory69">&nbsp; QA / Testing</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory70"><label class="check-label" for="subcategory70">&nbsp; Sales</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory71"><label class="check-label" for="subcategory71">&nbsp; SEO / Online Marketing</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory72"><label class="check-label" for="subcategory72">&nbsp; Technical Support</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory73"><label class="check-label" for="subcategory73">&nbsp; Technician</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory74"><label class="check-label" for="subcategory74">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" id="category20" class="nosub"><label class="check-label" for="category20" onclick="categorypick(this)">&nbsp; Maritime / Seabased</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category24" class="nosub"><label class="check-label" for="category24" onclick="categorypick(this)">&nbsp; Sales / Marketing / Retail</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category27" class="nosub"><label class="check-label" for="category27" onclick="categorypick(this)">&nbsp; Others</label><ul><li style="cursor:default" class="nosub"></li></ul></div></div>
    </div> <!--end of center-->






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