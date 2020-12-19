<!DOCTYPE html>
<html>
<head>
    <title>Instascan</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" "></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cit.vlute.edu.vn:8088/v1/lab/css/toast.min.css">
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="http://cit.vlute.edu.vn:8088/v1/lab/js/toast.min.js"></script>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Mã hồ sơ</label>
                    <b><p class="mhs">---</p></b>
                </div>
                <div class="col-md-6">
                    <label for="">Họ tên</label>
                    <input class="form-control ht" type="text">
                </div>
                <div class="col-md-6">
                    <label for="">CMND</label>
                    <input class="form-control cmnd" type="text">
                </div>
                <div class="col-md-6">
                    <label for="">Ngày sinh</label>
                    <input class="form-control ns" type="text">
                </div>
                <div class="col-md-6">
                    <label for="">Nơi sinh</label>
                    <input class="form-control nois" type="text">
                </div>
                <div class="col-md-6">
                    <label for="">Đối tượng</label>
                    <br>
                    <b><p class="dt">---</p></b>
                </div>
                <div class="col-md-6">
                    <label for="">Mã biên lai</label>
                    <input class="form-control bienlai" type="number">
                </div>
                <button style="margin-left: 10px;" class="btn btn-success">Lưu thông tin</button>
            </div>
        </div>
        <div class="col-6">
            <video style="width: 100%" id="preview"></video>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/soundmanager2/V2.97a.20170601/script/soundmanager2-jsmin.js"></script>


<script type="text/javascript">

    $(document).ready(function (){
        var mySound = soundManager.createSound({
            url: 'beep-07.mp3'
        });

        $('.bienlai').blur(function (){
            if(isNaN( $('.mhs').text()) == true)
                return;



            $.ajax({
                url: 'http://cit.vlute.edu.vn:8088/v2/api/app/bien-lai/luu',
                type: "POST",
                data: {
                    'id_dang_ky_thi_online_chi_tiet':  $('.mhs').text(),
                    'sobienlai': $('.bienlai').val(),
                },
                success: function (result) {
                    result = JSON.parse(result);
                    if (result.status === 200) {
                        toastr.success(result.message, "Thao tác thành công");
                        $('.ht').val('');
                        $('.mhs').text('---');
                        $('.cmnd').val('');
                        $('.ns').val('');
                        $('.nois').val('');
                        $('.dt').text("---");
                        $('.bienlai').val('');
                    } else {
                        toastr.error(result.message, "Thao tác thất bại");
                    }
                    console.log(result);
                },
                error: function (error) {
                    toastr.error(error, "Thao tác thất bại");
                }
            });
        });

        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

        scanner.addListener('scan', function (content) {

            if($('.mhs').text().trim() === content){
                return ;
            }

            mySound.play();


            $.ajax({
                url: 'http://cit.vlute.edu.vn:8088/v2/api/app/bien-lai/chi-tiet',
                type: "POST",
                data: {
                    'id_dang_ky_thi_online_chi_tiet': content,
                },
                success: function (result) {
                    $('.ht').val(result.ho_ten);
                    $('.mhs').text(content);
                    $('.cmnd').val(result.cmnd);
                    $('.ns').val(result.ngay_sinh);
                    $('.nois').val(result.noi_sinh);
                    $('.dt').text(result.loai_thi_sinh == "0" ? "Tự do" : "Trung tâm");
                    $('.bienlai').val(result.sobienlai);
                    console.log(result);
                },
                error: function (error) {
                    toastr.error(error, "Thao tác thất bại");
                }
            });
            console.log(content);
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[1]);
            } else {
                alert("Không tìm thấy Camera");
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });

    });



</script>
</body>
</html>
