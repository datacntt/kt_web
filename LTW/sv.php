
<h1>Quản lý SV</h1>
<p>Họ tên</p>
<input type="text" id="hoten">

<p>MSSV</p>
<input type="text" id="mssv">
<button onclick="them()">Thêm</button>
<button id="htds">Hiển thi danh sách</button>
<div id="kq"></div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function them(){
        var ht = document.getElementById('hoten').value;
        var mssv = document.getElementById('mssv').value;
        // goi ajax
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 alert(this.responseText);
            }
        };
        xhttp.open("GET", "them.php?hoten="+ht+"&mssv=" + mssv, true);
        xhttp.send();
    }

    $('#htds').click(function (){
        $.ajax({
            url: "ds.php",
            type: "GET",
            data: {},
            success: function (abcxyz){
               $('#kq').html(abcxyz);
            },
            error: function (){
            }
        });
    });

</script>
