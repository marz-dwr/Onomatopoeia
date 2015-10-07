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
    .categpick{
        padding-left: 30px;
    }
</style>
<div id="pcont" class="container-fluid ">
    <!-- <div class="container"> -->
    <div class="cl-mcont">
        <div class="row">
            <div class="col-lg-12 headline">
                <h2>
                    <span class="navbar-brand save-header">Job Categories</span>
                    <span style="float: right;"> <input type="button" value="Update Categories" id="update-category" class="btn btn-danger"> </span>
                </h2>
            </div> <!--end of col-md-12 headline-->
            <div class="categpick">
                <h4> 6 Categories to Pick </h4>
            </div>
        </div>
<form id="jobcateg" name="jobcateg">
        <div class="row">
            <div class="container">
                
<!--Left-->     <div class="col-lg-4 col-md-4 col-sm-4"> 
                    <div class="jobcateg" id="accounting">
                        <label class="categ-title"> &nbsp; Accounting / Finance</label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory1" name="category">
                                <label class="check-label" for="subcategory1"> &nbsp; Accountant </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory2" name="category">
                                <label class="check-label" for="subcategory2"> &nbsp; Auditor </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory3" name="category">
                                <label class="check-label" for="subcategory3"> &nbsp; Bookkeeper </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory4" name="category">
                                <label class="check-label" for="subcategory4"> &nbsp; Call Center / BPO </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory5" name="category">
                                <label class="check-label" for="subcategory5"> &nbsp; CPA </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory6" name="category">
                                <label class="check-label" for="subcategory6"> &nbsp; Finance / Banking </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory7" name="category">
                                <label class="check-label" for="subcategory7"> &nbsp; Payroll</label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory8" name="category">
                                <label class="check-label" for="subcategory8"> &nbsp; Virtual / Home-based </label>
                            </li>
                        </ul>
                    </div> <!--end of accounting -->
                    <div class="jobcateg" id="airline">
                        <label class="categ-title">&nbsp; Airline / Airport</label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory9" name="category">
                                <label class="check-label" for="subcategory9"> &nbsp; Pilot </label>
                            </li>
                            <li> 
                                <input type="checkbox" id="subcategory10" name="category">
                                <label class="check-label" for="subcategory10"> &nbsp; Flight Attendant </label>
                            </li>
                        </ul>
                    </div> <!--end of Airline -->
                    <div class="jobcateg" id="domestic">
                        <label class="categ-title"> &nbsp; Domestic / Caretaker </label>
                        <ul>
                             <li>
                                <input type="checkbox" id="subcategory11" name="category">
                                <label class="check-label" for="subcategory11"> &nbsp; aafdsgrfg </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory12" name="category">
                                <label class="check-label" for="subcategory12"> &nbsp; xfzxdsfg </label>
                            </li>
                        </ul>
                    </div> <!--end of domestic -->
                    <div class="jobcateg" id="food">
                        <label class="categ-title"> &nbsp; Food / Restaurant</label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory13" name="category">
                                <label class="check-label" for="subcategory13"> &nbsp; xfzxdsfg </label>
                            </li>
                        </ul>
                    </div> <!--end of food -->
                    <div class="jobcateg" id="medical">
                        <label class="categ-title"> &nbsp; Health / Medical / Science </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory14" name="category">
                                <label class="check-label" for="subcategory14"> &nbsp; Laboratory </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory15" name="category">
                                <label class="check-label" for="subcategory15"> &nbsp; Med Tech </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory16" name="category">
                                <label class="check-label" for="subcategory16"> &nbsp; More Tech </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory17" name="category">
                                <label class="check-label" for="subcategory17"> &nbsp; Nurse / Midwife </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory18" name="category">
                                <label class="check-label" for="subcategory18"> &nbsp; Pharmacist </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory19" name="category">
                                <label class="check-label" for="subcategory19"> &nbsp; PT / OT </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory20" name="category">
                                <label class="check-label" for="subcategory20"> &nbsp; Rad Tech </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory21" name="category">
                                <label class="check-label" for="subcategory21"> &nbsp; Sales </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory22" name="category">
                                <label class="check-label" for="subcategory22"> &nbsp; Transcriptionist </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory23" name="category">
                                <label class="check-label" for="subcategory23"> &nbsp; Veterinarian </label>
                            </li>
                        </ul>
                    </div> <!--end of medical-->
                    <div class="jobcateg" id="intern">
                        <label class="categ-title"> &nbsp; Internship </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory24" name="category">
                                <label class="check-label" for="subcategory24"> &nbsp; IT </label>
                            </li>
                        </ul>
                    </div> <!--end of Intern-->
                    <div class="jobcateg" id="logistics">
                        <label class="categ-title"> &nbsp; Logistics / Warehousing </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory25" name="category">
                                <label class="check-label" for="subcategory25"> &nbsp; shdsfh </label>
                            </li>
                        </ul>
                    </div> <!--end of logistics-->
                    <div class="jobcateg" id="purchasing">
                        <label class="categ-title"> &nbsp; Purchasing / Buyer </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory26" name="category">
                                <label class="check-label" for="subcategory26"> &nbsp; ggjgu </label>
                            </li>
                        </ul>
                    </div> <!--end of purchasing-->
                    <div class="jobcateg" id="sports">
                        <label class="categ-title"> &nbsp; Sports / Athletics </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory27" name="category">
                                <label class="check-label" for="subcategory27"> &nbsp; Coach </label>
                            </li>
                        </ul>
                    </div> <!--end of sports-->
                </div> <!--end of Left-->

                
<!--Center-->   <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="jobcateg" id="admin">
                        <label class="categ-title"> &nbsp; Admin / Office / Clerical </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory28" name="category">
                                    <label class="check-label" for="subcategory28"> &nbsp; Operations </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory29" name="category">
                                    <label class="check-label" for="subcategory29"> &nbsp; Secretary / Receptionist </label>
                                </li>
                                <li class="active-check">
                                    <input type="checkbox" id="subcategory30" name="category">
                                    <label class="check-label" for="subcategory30"> &nbsp; Virtual / Home-based </label>
                                </li>
                            </ul>
                    </div>  <!--end of admin-->
                    <div class="jobcateg" id="arts">
                        <label class="categ-title"> &nbsp; Arts / Media / Design </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory31" name="category">
                                    <label class="check-label" for="subcategory31"> &nbsp; Interior Design </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory32" name="category">
                                    <label class="check-label" for="subcategory32"> &nbsp; Radio / Music </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory33" name="category">
                                    <label class="check-label" for="subcategory33"> &nbsp; Video / TV </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory34" name="category">
                                    <label class="check-label" for="subcategory34"> &nbsp; Virtual / Home-based </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory35" name="category">
                                    <label class="check-label" for="subcategory35"> &nbsp; Writers </label>
                                </li>
                            </ul>
                    </div> <!--end of arts-->
                    <div class="jobcateg" id="education">
                        <label class="categ-title"> &nbsp; Education / Schools </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory36" name="category">
                                <label class="check-label" for="subcategory36"> &nbsp; Teacher </label>
                            </li>
                        </ul>
                    </div> <!--end of education-->
                    <div class="jobcateg" id="foreign">
                        <label class="categ-title"> &nbsp; Foreign Language </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory37" name="category">
                                <label class="check-label" for="subcategory37"> &nbsp; Veterinarian </label>
                            </li>
                        </ul>
                    </div> <!--end of foreign-->
                    <div class="jobcateg" id="spa">
                        <label class="categ-title"> &nbsp; Hotel / Spa / Salon </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory38" name="category">
                                    <label class="check-label" for="subcategory38"> &nbsp; Hotel / Resort </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory39" name="category">
                                    <label class="check-label" for="subcategory39"> &nbsp; Salon </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory40" name="category">
                                    <label class="check-label" for="subcategory40"> &nbsp; Spa </label>
                                </li>
                            </ul>
                    </div> <!--end of spa-->
                    <div class="jobcateg" id="it">
                        <label class="categ-title"> &nbsp; IT / Computers </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory41" name="category">
                                    <label class="check-label" for="subcategory41"> &nbsp; mobile Development </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory42" name="category">
                                    <label class="check-label" for="subcategory42"> &nbsp; Network / System Administrator </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory43" name="category">
                                    <label class="check-label" for="subcategory43"> &nbsp; Operations / HR </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory44" name="category">
                                    <label class="check-label" for="subcategory44"> &nbsp; Programming / Development </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory45" name="category">
                                    <label class="check-label" for="subcategory45"> &nbsp; QA / Testing </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory46" name="category">
                                    <label class="check-label" for="subcategory46"> &nbsp; Sales </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory47" name="category">
                                    <label class="check-label" for="subcategory47"> &nbsp; SEO / Online Marketing </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory48" name="category">
                                    <label class="check-label" for="subcategory48"> &nbsp; Technical Support </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory49" name="category">
                                    <label class="check-label" for="subcategory49"> &nbsp; Technician </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="subcategory50" name="category">
                                    <label class="check-label" for="subcategory50"> &nbsp; Virtual / Home-based </label>
                                </li>
                            </ul>
                    </div> <!--end of it-->
                    <div class="jobcateg" id="maritime">
                        <label class="categ-title"> &nbsp; Maritime / Seabased </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory51" name="category">
                                    <label class="check-label" for="subcategory51"> &nbsp; Seaman </label>
                                </li>
                            </ul>
                    </div> <!--end of maritime-->
                    <div class="jobcateg" id="sales">
                        <label class="categ-title"> &nbsp; Sales / Marketing / Retail </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory52" name="category">
                                    <label class="check-label" for="subcategory52"> &nbsp; Sales Lady </label>
                                </li>
                            </ul>
                    </div> <!--end of sales-->
                </div> <!--end of Center-->

                
<!-- Right -->  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="jobcateg" id="agriculture">
                        <label class="categ-title"> &nbsp; Agriculture / Veterinary</label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory53" name="category">
                                    <label class="check-label" for="subcategory53"> &nbsp; hfghfgh </label>
                                </li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="callcenter">
                        <label class="categ-title"> &nbsp; Call Center / BPO </label>
                            <ul>
                                <li>
                                    <input type="checkbox" id="subcategory54" name="category">
                                    <label class="check-label" for="subcategory54"> &nbsp; njghghj </label>
                                </li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="engineering">
                        <label class="categ-title"> &nbsp; Engineering / Architecture </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory55" name="category">
                                <label class="check-label" for="subcategory55"> &nbsp; Chemical Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory56" name="category">
                                <label class="check-label" for="subcategory56"> &nbsp; Civil Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory57" name="category">
                                <label class="check-label" for="subcategory57"> &nbsp; ECE </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory58" name="category">
                                <label class="check-label" for="subcategory58"> &nbsp; Electrical Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory59" name="category">
                                <label class="check-label" for="subcategory59"> &nbsp; Industrial Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory60" name="category">
                                <label class="check-label" for="subcategory60"> &nbsp; Interior Design </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory61" name="category">
                                <label class="check-label" for="subcategory61"> &nbsp; Maritime </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory62" name="category">
                                <label class="check-label" for="subcategory62"> &nbsp; Mechanical Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory63" name="category">
                                <label class="check-label" for="subcategory63"> &nbsp; QA / QC </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory64" name="category">
                                <label class="check-label" for="subcategory64"> &nbsp; Safety </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory65" name="category">
                                <label class="check-label" for="subcategory65"> &nbsp; Sales Engineering </label>
                            </li>
                            <li>
                                <input type="checkbox" id="subcategory66" name="category">
                                <label class="check-label" for="subcategory66"> &nbsp; Virtual / Home-based </label>
                            </li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="government">
                        <label class="categ-title"> &nbsp; Government / Non-profit </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory67" name="category">
                                <label class="check-label" for="subcategory67"> &nbsp; Auditor </label>
                            </li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="hr-rec-training">
                        <label class="categ-title"> &nbsp; HR / Recruitment / Training</label>
                            <ul>
                                <li>
                                <input type="checkbox" id="subcategory68" name="category">
                                <label class="check-label" for="subcategory68"> &nbsp; asdfrdsry </label>
                            </li>
                            </ul>
                    </div>
                    <div class="jobcateg" id="legal-doc">
                        <label class="categ-title"> &nbsp; Legal / Documentation </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory69" name="category">
                                <label class="check-label" for="subcategory69"> &nbsp; gfdfujty </label>
                            </li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="prod-manufacturing">
                        <label class="categ-title"> &nbsp; Production / Manufacturing </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory70" name="category">
                                <label class="check-label" for="subcategory70"> &nbsp; dfgdfyh </label>
                            </li>
                        </ul>
                    </div>
                    <div class="jobcateg" id="skill-tech">
                        <label class="categ-title"> &nbsp; Skilled Work / Technical </label>
                        <ul>
                            <li>
                                <input type="checkbox" id="subcategory71" name="category">
                                <label class="check-label" for="subcategory71"> &nbsp; gjhfg </label>
                            </li>
                        </ul>
                    </div>
                </div> <!--end of Right-->
            </div> <!-- container -->
        </div> <!-- End of Row -->
    </div> <!-- cl-mcont -->
</form>
</div> <!-- container-fluid -->


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


function checkboxlimit(checkgroup, limit){
    var checkgroup=checkgroup
    var limit=limit
    for (var i=0; i<checkgroup.length; i++){
        checkgroup[i].onclick=function(){
        var checkedcount=0
        for (var i=0; i<checkgroup.length; i++)
            checkedcount+=(checkgroup[i].checked)? 1 : 0
        if (checkedcount>limit){
            alert("You can only select a maximum of "+limit+" checkboxes")
            this.checked=false
            }
        }
    }
}
//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.jobcateg.category, 6)
</script>