

<h3>設定檔選擇</h3>
<button type="button" class="btn btn-primary" id="0">常開</button>
<button type="button" class="btn btn-success" id="1">正常設定</button>
<button type="button" class="btn btn-danger" id="2">常閉</button>


<script>
$(function(){
    $("button").on("click",function(){
        // download('http://valve.foso.tw/down_json/'+$(this).attr('id'), $(this).attr('id')+'.json');
        window.open('http://valve.foso.tw/down_json/'+$(this).attr('id'));
    })
})
</script>