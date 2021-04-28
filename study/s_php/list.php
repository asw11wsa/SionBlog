<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $.ajax({
        async: true,
        url:"/study/s_blog_proc.php",
        type : "POST",
        data:{
            functionName:"list",
            table: "phps"
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
    <div id="search">
        <select name="searchType">
            <option value="title">제목</option>
        </select>
        <input class="input" type="text" name="searchKey" onkeyup="javascript:if(event.keyCode==13) {search()}">
        <button onclick="search()">검색하기</button>

        <button class="btn btn-primary" onclick="goWritePage()">글작성</button>
    </div>
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

<script>
    function search(){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data:{
                    functionName:"list",
                    table: "phps",
                    searchType: $('select[name=searchType]').val(),
                    searchKey: $('input[name=searchKey]').val().replace(/(\s*)/g,'')
                },
                complete : function(r){
                    let res = r.responseText;
                    // console.log(res);
                    $("#list").empty();
                    $("#list").append(res);
                }
            }
        );
    }

    function goWritePage(){
        location.href = '/study/s_php/index.php?con=write'
    }
</script>

