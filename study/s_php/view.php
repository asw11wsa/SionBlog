<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script>

    $.ajax({
            async: true,
            url:"/study/s_blog_proc.php",
            type : "POST",
            data : {
                functionName: "show",
                table: "phps",
                id : <?= $_GET['id']?>
            },
            complete : function(r){
                let res = r.responseText;
                console.log(res);
                $("#list").empty();
                $("#list").append(res);
            }
        }
    );
</script>

<div class="container">
    <div id="list"></div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        delete
    </button>

    <!--  Button to go update page  -->
    <button type="button" class="btn btn-primary" onclick="goUpdatePage(<?=$_GET['id']?>)">
        update
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    do you want to delete this contents?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-primary" onclick="deleteContents()">YES</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteContents(){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data : {
                    functionName: "delete",
                    table: "phps",
                    id: <?= $_GET['id']?>
                },
                complete : function(){
                    //console.log(<?//=$_GET['id']?>//);
                    location.href="/study/s_php/index.php?con=";
                }
            }
        );
    }
    function goUpdatePage(id){
        location.href=`/study/s_php/index.php?con=update&id=${id}`;
    }
</script>