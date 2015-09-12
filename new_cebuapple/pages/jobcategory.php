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
        <div class="row">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand save-header">Job Categories</span>
                    <span style="float: right;"> <input type="button" value="Update Categories" id="update-category" class="btn btn-danger"> </span>
                </h2>
            </div> <!--end of col-md-12 headline-->
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-4"> <!--left-->
                    <div class="jobcateg" id="accounting">
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
                    <div class="jobcateg" id="airline">
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
                    <div class="jobcateg" id="domestic">
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
                    <div class="jobcateg" id="food">
                        <label class="categ-title"> &nbsp; Food / Restaurant</label>
                        <ul>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory14">
                                <label class="check-label" for="subcategory14"> &nbsp; xfzxdsfg </label>
                            </li>
                        </ul>
                    </div> <!--end of food -->
                    <div class="jobcateg" id="medical">
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
                    <div class="jobcateg" id="intern">
                        <label class="categ-title"> &nbsp; Internship </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of Intern-->
                    <div class="jobcateg" id="logistics">
                        <label class="categ-title"> &nbsp; Logistics / Warehousing </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of logistics-->
                    <div class="jobcateg" id="purchasing">
                        <label class="categ-title"> &nbsp; Purchasing / Buyer </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of purchasing-->
                    <div class="jobcateg" id="sports">
                        <label class="categ-title"> &nbsp; Sports / Athletics </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of sports-->
                </div> <!--end of Left Column-->

                <!--Center-->

                <div class="col-lg-4">
                    <div class="jobcateg" id="admin">
                        <label class="categ-title"> &nbsp; Admin / Office / Clerical </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory29">
                                    <label class="check-label" for="subcategory29"> &nbsp; Operations </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory30">
                                    <label class="check-label" for="subcategory30"> &nbsp; Secretary / Receptionist </label>
                                </li>
                                <li onclick="check(this)" class="active-check">
                                    <input type="checkbox" id="subcategory31">
                                    <label class="check-label" for="subcategory31"> &nbsp; Virtual / Home-based </label>
                                </li>
                            </ul>
                    </div>  <!--end of admin-->
                    <div class="jobcateg" id="arts">
                        <label class="categ-title"> &nbsp; Arts / Media / Design </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory32">
                                    <label class="check-label" for="subcategory32"> &nbsp; Interior Design </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory33">
                                    <label class="check-label" for="subcategory33"> &nbsp; Radio / Music </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory34">
                                    <label class="check-label" for="subcategory34"> &nbsp; Video / TV </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory35">
                                    <label class="check-label" for="subcategory35"> &nbsp; Virtual / Home-based </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory36">
                                    <label class="check-label" for="subcategory36"> &nbsp; Writers </label>
                                </li>
                            </ul>
                    </div> <!--end of arts-->
                    <div class="jobcateg" id="education">
                        <label class="categ-title"> &nbsp; Education / Schools </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of education-->
                    <div class="jobcateg" id="foreign">
                        <label class="categ-title"> &nbsp; Foreign Language </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div> <!--end of foreign-->
                    <div class="jobcateg" id="spa">
                        <label class="categ-title"> &nbsp; Hotel / Spa / Salon </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory39">
                                    <label class="check-label" for="subcategory39"> &nbsp; Hotel / Resort </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory40">
                                    <label class="check-label" for="subcategory40"> &nbsp; Salon </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory41">
                                    <label class="check-label" for="subcategory41"> &nbsp; Spa </label>
                                </li>
                            </ul>
                    </div> <!--end of spa-->
                    <div class="jobcateg" id="it">
                        <label class="categ-title"> &nbsp; IT / Computers </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory42">
                                    <label class="check-label" for="subcategory42"> &nbsp; mobile Development </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory43">
                                    <label class="check-label" for="subcategory43"> &nbsp; Network / System Administrator </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory44">
                                    <label class="check-label" for="subcategory44"> &nbsp; Operations / HR </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory45">
                                    <label class="check-label" for="subcategory45"> &nbsp; Programming / Development </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory46">
                                    <label class="check-label" for="subcategory46"> &nbsp; QA / Testing </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory47">
                                    <label class="check-label" for="subcategory47"> &nbsp; Sales </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory48">
                                    <label class="check-label" for="subcategory48"> &nbsp; SEO / Online Marketing </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory49">
                                    <label class="check-label" for="subcategory49"> &nbsp; Technical Support </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory50">
                                    <label class="check-label" for="subcategory50"> &nbsp; Technician </label>
                                </li>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory51">
                                    <label class="check-label" for="subcategory51"> &nbsp; Virtual / Home-based </label>
                                </li>
                            </ul>
                    </div> <!--end of it-->
                    <div class="jobcateg" id="maritime">
                        <label class="categ-title"> &nbsp; Maritime / Seabased </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory52">
                                    <label class="check-label" for="subcategory52"> &nbsp; Seaman </label>
                                </li>
                            </ul>
                    </div> <!--end of maritime-->
                    <div class="jobcateg" id="sales">
                        <label class="categ-title"> &nbsp; Sales / Marketing / Retail </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory53">
                                    <label class="check-label" for="subcategory53"> &nbsp; Sales Lady </label>
                                </li>
                            </ul>
                    </div> <!--end of sales-->
                </div> <!--end of center-->

                <!-- right -->

                <div class="col-lg-4">
                    <div class="jobcateg" id="agriculture">
                        <label class="categ-title"> &nbsp; Agriculture / Veterinary</label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory33">
                                    <label class="check-label" for="subcategory33"> &nbsp; hfghfgh </label>
                                </li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="callcenter">
                        <label class="categ-title"> &nbsp; Call Center / BPO </label>
                            <ul>
                                <li onclick="check(this)">
                                    <input type="checkbox" id="subcategory34">
                                    <label class="check-label" for="subcategory34"> &nbsp; njghghj </label>
                                </li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="engineering">
                        <label class="categ-title"> &nbsp; Engineering / Architecture </label>
                        <ul>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory35">
                                <label class="check-label" for="subcategory35"> &nbsp; Chemical Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory36">
                                <label class="check-label" for="subcategory30"> &nbsp; Civil Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory37">
                                <label class="check-label" for="subcategory37"> &nbsp; ECE </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory38">
                                <label class="check-label" for="subcategory38"> &nbsp; Electrical Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory39">
                                <label class="check-label" for="subcategory39"> &nbsp; Industrial Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory40">
                                <label class="check-label" for="subcategory40"> &nbsp; Interior Design </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory41">
                                <label class="check-label" for="subcategory41"> &nbsp; Maritime </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory42">
                                <label class="check-label" for="subcategory42"> &nbsp; Mechanical Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory43">
                                <label class="check-label" for="subcategory43"> &nbsp; QA / QC </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory44">
                                <label class="check-label" for="subcategory44"> &nbsp; Safety </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory45">
                                <label class="check-label" for="subcategory45"> &nbsp; Sales Engineering </label>
                            </li>
                            <li onclick="check(this)">
                                <input type="checkbox" id="subcategory46">
                                <label class="check-label" for="subcategory46"> &nbsp; Virtual / Home-based </label>
                            </li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="government">
                        <input type="checkbox" id="category18" class="nosub">
                        <label class="categ-title"> &nbsp; Government / Non-profit </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="hr-rec-training">
                        <input type="checkbox" id="category18" class="nosub">
                        <label class="categ-title">&nbsp; HR / Recruitment / Training</label>
                            <ul>
                                <li style="cursor:default" class="nosub"></li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="legal-doc">
                        <input type="checkbox" id="category18" class="nosub">
                        <label class="categ-title" for="category18" onclick="categorypick(this)">
                            &nbsp; Legal / Documentation
                        </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="prod-manufacturing">
                        <input type="checkbox" id="category22" class="nosub">
                        <label class="categ-title" for="category22" onclick="categorypick(this)">
                            &nbsp; Production / Manufacturing
                        </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="skill-tech">
                        <input type="checkbox" id="category25" class="nosub">
                        <label class="categ-title" for="category25" onclick="categorypick(this)">
                            &nbsp; Skilled Work / Technical
                        </label>
                        <ul>
                            <li style="cursor:default" class="nosub"></li>
                        </ul>
                    </div>
                </div>
            </div> <!--end of right-->

            </div> <!-- End of Container -->
        </div> <!-- End of Row -->
    </div> <!-- cl-mcont -->
</div> <!-- fluid container -->


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