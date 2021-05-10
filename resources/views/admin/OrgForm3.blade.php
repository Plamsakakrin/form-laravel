<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgForm_3</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">

    <!-- ajax -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap 5-->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- cssstlye -->
    <link rel="stylesheet" href="{{asset ('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('asset/css/ui-lightness/jquery-ui-1.8.10.custom.css')}}">

    <!-- fa-fa-font -->

    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>

<body>
    <div class="container">
        <div class="row mb-2">
            <div class="col-6">
                <label class="text-header"><i style="color:#DB681D" class="fa fa-newspaper-o pr-1" aria-hidden="true"></i> แบบ อก.3</label>
            </div>
            <div style="text-align: end;">
                <a href="{{route('orgform1')}}" class="btn btn-link"> แบบ อก.1 </a>
                <a href="{{route('orgform2')}}" class="btn btn-link"> แบบ อก.2 </a>
                <a href="{{route('orgform4')}}" class="btn btn-link"> แบบ อก.4 </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col align-self-start">
                <label for="">เลขที่แบบอก.1: 64-05-0005</label>
            </div>
            <div class="col-auto">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="" class="col-form-label">วันที่ยื่นเอกสาร:</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="" class="form-control" aria-describedby="passwordHelpInline" value="3/5/2564">
                    </div>
                </div>
            </div>
        </div><br>

        <form action="">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header p-1">
                            <label class="text-normal font-weight-normal pl-2">
                                1. ชีวประวัติ
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="row">

                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>





</body>

</html>