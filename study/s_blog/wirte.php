<div class="container">
<form method="post">
    <input type="text" name="title" value=""><br>
    <input type="text" name="content">
    <button type="submit" onclick="writeCss()">글작성</button>
</form>
</div>

<script>
    function writeCss(){
        $.ajax({
                async: true,
                url:"/study/s_blog_proc.php",
                type : "POST",
                data : {
                    functionName: "write",
                    table: "blogs",
                    title: $('input[name=title]').val(),
                    content: $('input[name=content]').val()
                },
                complete : function(){
                    //console.log(<?//=$_GET['id']?>//);
                    location.href="/study/s_blog/index.php?con=";
                }
            }
        );
    }
</script>
