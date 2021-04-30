<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>
    let count = 0;

    $.ajax({
        async: true,
        url:"/study/s_blog_proc.php",
        type : "POST",
        data:{
            functionName:"list",
            table: "blogs",
            searchType: '',
            searchKey: '',
            limit: 5
        },
        complete : function(r){
            let res = r.responseText;
            // console.log(res);
            $("#list").empty();
            $("#list").append(res);
        }
    }
);

    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data:{
                functionName:"count",
                table: "blogs",
                searchType: '',
                searchKey: ''
            },
            complete : function(r){
                let res = r.responseText;
                // console.log(res);
                count = Number(res);
                // console.log(count);
                // $("#count").empty();
                // $("#count").append(res);
            }
        }
    );

</script>
<div class="container d-flex justify-content-center flex-wrap">
    <div id="search" class="input-group mt-2 mb-1 d-xl-flex w-50">
        <select name="searchType" class="form-select w-25" id="inputGroupSelect03" aria-label="Example select with button addon">
            <option value="title">제목</option>
        </select>
        <input class="input-group-text w-50" type="text" name="searchKey" onkeyup="javascript:if(event.keyCode==13) {search()}">
        <button class="btn btn-outline-secondary w-25" onclick="search()">검색</button>
    </div>

    <div id="list" class="container d-flex justify-content-center flex-wrap">
    </div>

    <button id="more" class="btn btn-primary my-3" onclick="showMore()">더보기</button>
</div>

<script>
    let limit = 5;
    let currentSearchType = '';
    let currentSearchKey = '';

    function limitCheck(){
        if(currentSearchType && currentSearchKey){
            limit += 5;
        }else{
            limit = 5;
        }
    }
    function search(){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data:{
                    functionName:"list",
                    table: "blogs",
                    searchType: $('select[name=searchType]').val(),
                    searchKey: $('input[name=searchKey]').val().replace(/(\s*)/g,''),
                    limit:5
                },
                complete : function(r){
                    let res = r.responseText;
                    currentSearchKey = $('input[name=searchKey]').val().replace(/(\s*)/g,'');
                    currentSearchType = $('select[name=searchType]').val();
                    limit = 5;
                    // console.log(res);
                    $("#list").empty();
                    $("#list").append(res);
                    if(count > limit){
                        $("#more").removeClass('d-none');
                    }
                }
            }
        );
    }

    function showMore(){
        if(currentSearchType && currentSearchKey){
            $.ajax({
                    async: true,
                    url:"/study/s_blog_proc.php",
                    type : "POST",
                    data:{
                        functionName:"list",
                        table: "blogs",
                        searchType: currentSearchType,
                        searchKey: currentSearchKey,
                        limit: limit + 5
                    },
                    complete : function(r){
                        let res = r.responseText;
                        limit += 5;
                        console.log(limit);
                        $("#list").empty();
                        $("#list").append(res);
                        if(count < limit){
                            $("#more").addClass('d-none');
                        }
                    }
                }
            );
        }else{
            $.ajax({
                    async: true,
                    url:"/study/s_blog_proc.php",
                    type : "POST",
                    data:{
                        functionName:"list",
                        table: "blogs",
                        searchType: '',
                        searchKey: '',
                        limit: limit + 5
                    },
                    complete : function(r){
                        let res = r.responseText;
                        limit += 5;
                        console.log(limit);
                        $("#list").empty();
                        $("#list").append(res);
                        if(count < limit){
                            $("#more").addClass('d-none');
                        }
                    }
                }
            );
        }
    }
</script>
