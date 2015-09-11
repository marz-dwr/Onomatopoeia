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
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
    }
    span.job-title{
        font-size: 40px;
    }
    .categ-title{
        font-size: 18px;
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
        <div class="jobcateg">
            <label class="categ-title"> &nbsp; Accounting / Finance</label>
            <ul>
                <li onclick="check(this)" class="active-check">
                    <input type="checkbox" id="subcategory1">
                    <label class="check-label" for="subcategory1"> &nbsp; Accountant </label>
                </li>
                <li onclick="check(this)" class="active-check">
                    <input type="checkbox" id="subcategory2">
                    <label class="check-label" for="subcategory2"> &nbsp; Auditor </label>
                </li>
                <li onclick="check(this)" class="active-check">
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
                    <label class="check-label" for="subcategory8"> &nbsp; Payroll</label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory9">
                    <label class="check-label" for="subcategory9"> &nbsp; Virtual / Home-based </label>
                </li>
            </ul>
        </div> <!--end of accounting -->
        <div class="jobcateg">
            <label class="categ-title">&nbsp; Airline / Airport</label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory10">
                    <label class="check-label" for="subcategory10"> &nbsp; Pilot </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory11">
                    <label class="check-label" for="subcategory11"> &nbsp; Flight Attendant </label>
                </li>
            </ul>
        </div> <!--end of Airline -->
        <div class="jobcateg">
            <label class="categ-title"> &nbsp; Domestic / Caretaker </label>
            <ul>
                 <li onclick="check(this)">
                    <input type="checkbox" id="subcategory12">
                    <label class="check-label" for="subcategory12"> &nbsp; aafdsgrfg </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory13">
                    <label class="check-label" for="subcategory13"> &nbsp; xfzxdsfg </label>
                </li>
            </ul>
        </div> <!--end of domestic -->
        <div class="jobcateg">
            <label class="categ-title"> &nbsp; Food / Restaurant</label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory14">
                    <label class="check-label" for="subcategory14"> &nbsp; xfzxdsfg </label>
                </li>
            </ul>
        </div> <!--end of food -->
        <div class="jobcateg">
            <label class="categ-title"> &nbsp; Health / Medical / Science </label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory15">
                    <label class="check-label" for="subcategory15"> &nbsp; Laboratory </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory16">
                    <label class="check-label" for="subcategory16"> &nbsp; Med Tech </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory17">
                    <label class="check-label" for="subcategory17"> &nbsp; More Tech </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory18">
                    <label class="check-label" for="subcategory18"> &nbsp; Nurse / Midwife </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory19">
                    <label class="check-label" for="subcategory19"> &nbsp; Pharmacist </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory20">
                    <label class="check-label" for="subcategory20"> &nbsp; PT / OT </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory21">
                    <label class="check-label" for="subcategory21"> &nbsp; Rad Tech </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory22">
                    <label class="check-label" for="subcategory22"> &nbsp; Sales </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory23">
                    <label class="check-label" for="subcategory23"> &nbsp; Transcriptionist </label>
                </li>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory24">
                    <label class="check-label" for="subcategory24"> &nbsp; Veterinarian </label>
                </li>
            </ul>
        </div> <!--end of medical-->
        <div class="jobcateg">
            <label class="categ-title"> &nbsp; Internship </label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory25">
                    <label class="check-label" for="subcategory25"> &nbsp; IT </label>
                </li>
            </ul>
        </div> <!--end of Intern-->
        <div class="jobcateg">
        <label class="categ-title"> &nbsp; Logistics / Warehousing </label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory26">
                    <label class="check-label" for="subcategory26"> &nbsp; asdasfs </label>
                </li>
            </ul>
        </div> <!--end of logistics-->
        <div class="jobcateg">
         <label class="categ-title"> &nbsp; Purchasing / Buyer </label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory27">
                    <label class="check-label" for="subcategory27"> &nbsp; asdasfs </label>
                </li>
            </ul>
        </div> <!--end of purchasing-->
        <div class="jobcateg">
        <label class="categ-title"> &nbsp; Sports / Athletics </label>
            <ul>
                <li onclick="check(this)">
                    <input type="checkbox" id="subcategory28">
                    <label class="check-label" for="subcategory28"> &nbsp; asdasfs </label>
                </li>
            </ul>
        </div> <!--end of sports-->
    </div> <!--end of col-->
    </div> <!--end of left-->
    <div id="center">
        <div class="col-lg-4 hidden-xs">
            <div class="jobcateg">
                <label class="categ-title">&nbsp; Admin / Office / Clerical</label>
                <ul>
                    <li onclick="check(this)">
                        <input type="checkbox" id="subcategory12">
                        <label class="check-label" for="subcategory12"> &nbsp; Operations</label>
                    </li>
                    <li onclick="check(this)">
                        <input type="checkbox" id="subcategory13">
                        <label class="check-label" for="subcategory13"> &nbsp; Secretary / Receptionist</label>
                    </li>
                    <li onclick="check(this)" class="active-check">
                        <input type="checkbox" id="subcategory14">
                        <label class="check-label" for="subcategory14">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Arts / Media / Design</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory18"><label class="check-label" for="subcategory18">&nbsp; Interior Design</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory20"><label class="check-label" for="subcategory20">&nbsp; Radio / Music</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory21"><label class="check-label" for="subcategory21">&nbsp; Video / TV</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory22"><label class="check-label" for="subcategory22">&nbsp; Virtual / Home-based</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory23"><label class="check-label" for="subcategory23">&nbsp; Writers</label></li></ul></div><div class="category-background"><input type="checkbox" id="category8" class="nosub"><label class="check-label" for="category8" onclick="categorypick(this)">&nbsp; Education / Schools</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category11" class="nosub"><label class="check-label" for="category11" onclick="categorypick(this)">&nbsp; Foreign Language</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Hotel / Spa / Salon</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory57"><label class="check-label" for="subcategory57">&nbsp; Hotel / Resort</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory59"><label class="check-label" for="subcategory59">&nbsp; Salon</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory60"><label class="check-label" for="subcategory60">&nbsp; Spa</label></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; IT / Computers</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory64"><label class="check-label" for="subcategory64">&nbsp; mobile Development</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory66"><label class="check-label" for="subcategory66">&nbsp; Network / System Administrator</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory67"><label class="check-label" for="subcategory67">&nbsp; Operations / HR</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory68"><label class="check-label" for="subcategory68">&nbsp; Programming / Development</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory69"><label class="check-label" for="subcategory69">&nbsp; QA / Testing</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory70"><label class="check-label" for="subcategory70">&nbsp; Sales</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory71"><label class="check-label" for="subcategory71">&nbsp; SEO / Online Marketing</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory72"><label class="check-label" for="subcategory72">&nbsp; Technical Support</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory73"><label class="check-label" for="subcategory73">&nbsp; Technician</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory74"><label class="check-label" for="subcategory74">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" id="category20" class="nosub"><label class="check-label" for="category20" onclick="categorypick(this)">&nbsp; Maritime / Seabased</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category24" class="nosub"><label class="check-label" for="category24" onclick="categorypick(this)">&nbsp; Sales / Marketing / Retail</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category27" class="nosub"><label class="check-label" for="category27" onclick="categorypick(this)">&nbsp; Others</label><ul><li style="cursor:default" class="nosub"></li></ul></div></div>
    </div> <!--end of center-->
    <div id="right">
        <div class="col-lg-4 hidden-xs">
        <div class="jobcateg"><input type="checkbox" id="category3" class="nosub"><label class="check-label" for="category3" onclick="categorypick(this)">&nbsp; Agriculture / Veterinary</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category6" class="nosub"><label class="check-label" for="category6" onclick="categorypick(this)">&nbsp; Call Center / BPO</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" disabled=""><label>&nbsp; Engineering / Architecture</label><ul><li onclick="check(this)"><input type="checkbox" id="subcategory29"><label class="check-label" for="subcategory29">&nbsp; Chemical Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory30"><label class="check-label" for="subcategory30">&nbsp; Civil Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory31"><label class="check-label" for="subcategory31">&nbsp; ECE</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory32"><label class="check-label" for="subcategory32">&nbsp; Electrical Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory33"><label class="check-label" for="subcategory33">&nbsp; Industrial Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory34"><label class="check-label" for="subcategory34">&nbsp; Interior Design</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory35"><label class="check-label" for="subcategory35">&nbsp; Maritime</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory36"><label class="check-label" for="subcategory36">&nbsp; Mechanical Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory37"><label class="check-label" for="subcategory37">&nbsp; QA / QC</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory38"><label class="check-label" for="subcategory38">&nbsp; Safety</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory39"><label class="check-label" for="subcategory39">&nbsp; Sales Engineering</label></li><li onclick="check(this)"><input type="checkbox" id="subcategory40"><label class="check-label" for="subcategory40">&nbsp; Virtual / Home-based</label></li></ul></div><div class="category-background"><input type="checkbox" id="category12" class="nosub"><label class="check-label" for="category12" onclick="categorypick(this)">&nbsp; Government / Non-profit</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category15" class="nosub"><label class="check-label" for="category15" onclick="categorypick(this)">&nbsp; HR / Recruitment / Training</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category18" class="nosub"><label class="check-label" for="category18" onclick="categorypick(this)">&nbsp; Legal / Documentation</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category22" class="nosub"><label class="check-label" for="category22" onclick="categorypick(this)">&nbsp; Production / Manufacturing</label><ul><li style="cursor:default" class="nosub"></li></ul></div><div class="category-background"><input type="checkbox" id="category25" class="nosub"><label class="check-label" for="category25" onclick="categorypick(this)">&nbsp; Skilled Work / Technical</label><ul><li style="cursor:default" class="nosub"></li></ul></div></div>
    </div> <!--end of right-->


        </div> <!--left-->
    </div> <!-- cl-mcont -->
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