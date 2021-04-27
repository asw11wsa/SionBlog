<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $.ajax({
        async: true,
        url:"/study/s_blog_proc.php",
        type : "POST",
        data:{
            functionName:"list",
            table: "blogs"
        },
        complete : function(r){
            let res = r.responseText;
            // console.log(res);
            $("#list").empty();
            $("#list").append(res);
        }
    }
);
</script>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">번호</th>
            <th scope="col">제목</th>
            <th scope="col">생성날짜</th>
            <th scope="col">조회수</th>
        </tr>
        </thead>
        <tbody id="list"></tbody>
    </table>
</div>

