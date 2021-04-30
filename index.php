<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/header.php"; ?>
<script>

    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"list",
                table: "csss",
                searchType: '',
                searchKey: '',
                limit: 1
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                $("#list1").empty();
                $("#list1").append(res);
            }
        }
    );
    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"list",
                table: "htmls",
                searchType: '',
                searchKey: '',
                limit: 1
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                $("#list2").empty();
                $("#list2").append(res);
            }
        }
    );
    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"list",
                table: "javascripts",
                searchType: '',
                searchKey: '',
                limit: 1
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                $("#list3").empty();
                $("#list3").append(res);
            }
        }
    );
    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"list",
                table: "phps",
                searchType: '',
                searchKey: '',
                limit: 1
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                $("#list4").empty();
                $("#list4").append(res);
            }
        }
    );
    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"list",
                table: "vues",
                searchType: '',
                searchKey: '',
                limit: 1
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                $("#list5").empty();
                $("#list5").append(res);
            }
        }
    );

</script>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Sion Blog</span></h1>
        <h2>I am studying PHP and BOOTSTRAP</h2>
        <div class="d-none">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section>
<section id="new_list" class="container d-flex justify-content-center flex-wrap">
    <h3 class="mt-3 text-center"><span class="badge bg-danger">NEW</span> <span class="d-inline-block h-100">CSS</span></h3>
    <div id="list1" class="container d-flex justify-content-center flex-wrap"></div>
    <h3 class="mt-3"><span class="badge bg-danger">NEW</span> HTML</h3>
    <div id="list2" class="container d-flex justify-content-center flex-wrap"></div>
    <h3 class="mt-3"><span class="badge bg-danger">NEW</span> JAVASCRIPT</h3>
    <div id="list3" class="container d-flex justify-content-center flex-wrap"></div>
    <h3 class="mt-3"><span class="badge bg-danger">NEW</span> PHP</h3>
    <div id="list4" class="container d-flex justify-content-center flex-wrap"></div>
    <h3 class="mt-3"><span class="badge bg-danger">NEW</span> VUE</h3>
    <div id="list5" class="container d-flex justify-content-center flex-wrap"></div>
</section>
<!-- End Hero -->

<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/footer.php"; ?>