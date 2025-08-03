const input = document.querySelector("input");
input.addEventListener("keydown", goPage);

function goPage(e) {
    if (e.keyCode==13){
        var pages = parseInt($('#pages-number')[0].innerText);
        var page = parseInt($('#page-number').val());
        var location = page + 2;
        if(page <= pages)
            $('.magazine').turn('page', location);
    }  
}