<style>
    ul{
        list-style-type: none;
    }
    .list li{
        background-color: #EE6E73;
        box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);
        padding-left: 20px;
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
    }
    .job-desc-sm, a.job-desc-sm:visited, a.job-desc-sm:hover{
        color: white;
    }
    span.job-title{
        font-size: 40px;
    }
    .job{
        font-size: 13px;
        margin-bottom: 20px;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .job, .job:active, .job:visited{
        color:white;
    }

</style>
<div id="pcont" class="container-fluid ">
    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12 headline">
                <h2><span class="navbar-brand save-header">Job Categories</span></h2>
            </div>

            <div class="col-lg-12 hidden-xs">
                <ul class="list">
                    <a href="#" class="jobcateg">
                        <li>
                            <input type= checkbox>
                            <div class="job"> <input type= checkbox> asdf</div>
                        </li>
                    </a>
                    <a href="#" class="jobcateg">
                        <li>
                            <div class="job"> <input type= checkbox> asdf </div>
                        </li>
                    </a>
                    <a href="#" class="jobcateg">
                        <li>
                            <div class="job"> <input type= checkbox> asdf </div>
                        </li>
                    </a>
                    <a href="#" class="jobcateg">
                        <li>
                            <div class="job"> <input type= checkbox> asdf </div>
                        </li>
                    </a>
                    <a href="#" class="jobcateg">
                         <li>
                             <div class="job"> <input type= checkbox> asdf </div>
                         </li>
                     </a>
                </ul>
            </div>
        </div>
    </div>
</div>

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


$("#category-link").click(function(){
            $("#page-wrapper").html(json);
            $("#left .block-content").html($("#left .block-content").html()+content[0]);
            $("#center .block-content").html(content[1]);
            $("#right .block-content").html($("#right .block-content").html()+content[2]);
            $("#picked").text(8-checked+" Categories to Pick");
            $("input",$(".block-content")).each(function(){
                if($(this).prop("tagName")=="INPUT")
                {
                    var id=$(this).attr("id");
                    if(id!=undefined||id!=void 0)
                    {
                        if(id.indexOf("subcategory")>-1)
                        {
                            id=id.replace("subcategory","");
                            for(var counter=0;counter<desired.length;counter++)
                            {
                                if(parseInt(desired[counter]["sub_category_id"])==parseInt(id))
                                {
                                    $(this).prop("checked",true);
                                    $(this).parent().addClass("active-check");
                                }
                            }
                        }
                        else if(id.indexOf("category")>-1)
                        {
                            id=id.replace("category","");
                            for(var counter=0;counter<desired.length;counter++)
                            {
                                if(parseInt(desired[counter]["category_id"])==parseInt(id))
                                    $(this).prop("checked",true);
                            }
                        }
                    }
                }
            });
            $(".block-content").click(function(){
                checked=0;
                 $("input",$(".block-content")).each(function(){
                    if($(this).is(":checked"))
                        checked++;
                     $("#picked").text(8-checked+" Categories to Pick");
                 });
                if(checked==8&&!flag)
                {
                    $("input",$(".block-content")).each(function(){
                        if($(this).not(":checked")&&$(this).attr("id")!="update-category"&&$(this).attr("id")!="update-category-2")
                            $(this).prop("disabled",true);
                    });
                }
                else
                {
                    if(checked==7)
                    {
                        $("input",$(".block-content")).each(function(){
                            if($(this).not(":checked"))
                            {
                                if($(this).parent().prop("tagName")=="LI"||$(this).hasClass("nosub"))
                                    $(this).prop("disabled",false);
                            }
                        });
                    }
                }

                $(".block-content ul li").click(function(event){
                    event.preventDefault();
                    if(!$(this).hasClass("nosub"))
                    {
                        if(item.checked)
                            $(this).addClass("active-check");
                        else
                            $(this).removeClass("active-check");
                    }
                });
            });
            $(".block-content").click();//this is needed do not remove.
            if(checked==8)
            {
                $("input",$(".block-content")).each(function(){
                    if($(this).not(":checked")&&$(this).attr("id")!="update-category"&&$(this).attr("id")!="update-category-2")
                        $(this).prop("disabled",true);
                });
            }
            var width=$(document).width();
            if(width<=750)
            $('html, body').animate({
                scrollTop: $("#category-content").offset().top
                }, 200);
            $("#update-category,#update-category-2").click(function(){
                var types=[];
                var ids=[];
                var c=0;
                var a=parseInt($("#page-wrapper").css("min-height").replace("px","")/2);
                var b=$("#update-loader").height()/2;
                $("#update-loader").css({'margin-top':''+a-b});
                $("#loader-modal").modal("show");
                $("input",$(".block-content")).each(function(){
                    if($(this).is(":checked"))
                    {
                        if($(this).attr("id").indexOf("subcategory")>-1)
                        {
                            types[c]=0;
                            ids[c]=parseInt($(this).attr("id").replace("subcategory",""));
                        }
                        else
                        {
                            ids[c]=parseInt($(this).attr("id").replace("category",""));
                            types[c]=1;
                        }
                        c++;
                    }
                 });
                //types: 0-subcategory, 1-category
                $.post("../handler.php",{request:"update-categories",types:JSON.stringify(types),ids:JSON.stringify(ids)},
                       function(data,status)
                       {
                            desired=data.desiredpos;
                            checked=desired.length;                        
                            setTimeout(function(){    
                                $("#loader-content div").addClass("hide");
                                $("#update-loader p").text("Success");
                                setTimeout(function(){
                                    $("#loader-modal").modal("hide");
                                    $("#update-loader p").empty();
                                },500);
                            },500);
                            $("#loader-content div").removeClass("hide");
                            $("#update-loader p").text("Updating Categories");
                       },
                       "json");
            });
        });




********************************************************************************************
$("#category-link").click(function(){
            $("#page-wrapper").html(json);
            $("#left .block-content").html($("#left .block-content").html()+content[0]);
            $("#center .block-content").html(content[1]);
            $("#right .block-content").html($("#right .block-content").html()+content[2]);
            $("#picked").text(8-checked+" Categories to Pick");
            $("input",$(".block-content")).each(function(){
                if($(this).prop("tagName")=="INPUT")
                {
                    var id=$(this).attr("id");
                    if(id!=undefined||id!=void 0)
                    {
                        if(id.indexOf("subcategory")>-1)
                        {
                            id=id.replace("subcategory","");
                            for(var counter=0;counter<desired.length;counter++)
                            {
                                if(parseInt(desired[counter]["sub_category_id"])==parseInt(id))
                                {
                                    $(this).prop("checked",true);
                                    $(this).parent().addClass("active-check");
                                }
                            }
                        }
                        else if(id.indexOf("category")>-1)
                        {
                            id=id.replace("category","");
                            for(var counter=0;counter<desired.length;counter++)
                            {
                                if(parseInt(desired[counter]["category_id"])==parseInt(id))
                                    $(this).prop("checked",true);
                            }
                        }
                    }
                }
            });
            $(".block-content").click(function(){
                checked=0;
                 $("input",$(".block-content")).each(function(){
                    if($(this).is(":checked"))
                        checked++;
                     $("#picked").text(8-checked+" Categories to Pick");
                 });
                if(checked==8&&!flag)
                {
                    $("input",$(".block-content")).each(function(){
                        if($(this).not(":checked")&&$(this).attr("id")!="update-category"&&$(this).attr("id")!="update-category-2")
                            $(this).prop("disabled",true);
                    });
                }
                else
                {
                    if(checked==7)
                    {
                        $("input",$(".block-content")).each(function(){
                            if($(this).not(":checked"))
                            {
                                if($(this).parent().prop("tagName")=="LI"||$(this).hasClass("nosub"))
                                    $(this).prop("disabled",false);
                            }
                        });
                    }
                }

                $(".block-content ul li").click(function(event){
                    event.preventDefault();
                    if(!$(this).hasClass("nosub"))
                    {
                        if(item.checked)
                            $(this).addClass("active-check");
                        else
                            $(this).removeClass("active-check");
                    }
                });
            });

            $(".block-content").click();//this is needed do not remove.
            if(checked==8)
            {
                $("input",$(".block-content")).each(function(){
                    if($(this).not(":checked")&&$(this).attr("id")!="update-category"&&$(this).attr("id")!="update-category-2")
                        $(this).prop("disabled",true);
                });
            }
            var width=$(document).width();
            if(width<=750)
            $('html, body').animate({
                scrollTop: $("#category-content").offset().top
                }, 200);
            $("#update-category,#update-category-2").click(function(){
                var types=[];
                var ids=[];
                var c=0;
                var a=parseInt($("#page-wrapper").css("min-height").replace("px","")/2);
                var b=$("#update-loader").height()/2;
                $("#update-loader").css({'margin-top':''+a-b});
                $("#loader-modal").modal("show");
                $("input",$(".block-content")).each(function(){
                    if($(this).is(":checked"))
                    {
                        if($(this).attr("id").indexOf("subcategory")>-1)
                        {
                            types[c]=0;
                            ids[c]=parseInt($(this).attr("id").replace("subcategory",""));
                        }
                        else
                        {
                            ids[c]=parseInt($(this).attr("id").replace("category",""));
                            types[c]=1;
                        }
                        c++;
                    }
                 });
                //types: 0-subcategory, 1-category
                $.post("../handler.php",{request:"update-categories",types:JSON.stringify(types),ids:JSON.stringify(ids)},
                       function(data,status)
                       {
                            desired=data.desiredpos;
                            checked=desired.length;                        
                            setTimeout(function(){    
                                $("#loader-content div").addClass("hide");
                                $("#update-loader p").text("Success");
                                setTimeout(function(){
                                    $("#loader-modal").modal("hide");
                                    $("#update-loader p").empty();
                                },500);
                            },500);
                            $("#loader-content div").removeClass("hide");
                            $("#update-loader p").text("Updating Categories");
                       },
                       "json");
            });
        });    
</script>