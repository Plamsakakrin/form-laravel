<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgForm_1</title>

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
                <label class="text-header"><i style="color:#DB681D" class="fa fa-newspaper-o pr-1" aria-hidden="true"></i> แบบ อก.1</label>
            </div>
            <div style="text-align: end;">
                <a href="{{route('orgform2')}}" class="btn btn-link"> แบบ อก.2 </a>
                <a href="{{route('orgform3')}}" class="btn btn-link"> แบบ อก.3 </a>
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
        <!-- <div style="text-align: end;">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="" class="col-form-label">วันที่ยื่นเอกสาร:</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="" class="form-control" aria-describedby="passwordHelpInline" value="3/5/2564">
                </div>

            </div>
        </div> -->
        <form action="">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">

                                <div class="card-header p-1">
                                    <label class="text-normal font-weight-normal pl-2">
                                        1. ชีวประวัติ
                                    </label>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label class="form-label"> 1.1 </label>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="=" class="form-label">คำนำหน้า: </label>
                                            <select id="=" name="=" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> นาง </option>
                                                <option value=""> นางสาว </option>
                                                <option value=""> นาย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นาม: </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div><br>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามสกุล: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">เชื้อชาติ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> ไทย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">สัญชาติ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> ไทย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">ศาสนา: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> พุทธ </option>
                                            </select><br>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label class="form-label"> 1.2 </label>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label class="form-label">วัน/เดือน/ปีเกิด: </label>
                                            <input type="text" class="form-control" id="datepicker-th-2" name="date1" />
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">จังหวัด: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> กรุงเทพมหานคร </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">ประเทศ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> ไทย </option>
                                            </select><br>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <label class="form-label"> 1.3 </label>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="=" class="form-label">คำนำหน้า: </label>
                                            <select id="=" name="=" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> นาง </option>
                                                <option value=""> นางสาว </option>
                                                <option value=""> นาย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามบิดา: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามสกุล: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="=" class="form-label">คำนำหน้า: </label>
                                            <select id="=" name="=" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> นาง </option>
                                                <option value=""> นางสาว </option>
                                                <option value=""> นาย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามมารดา: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามสกุล: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <label class="form-label"> 1.4 </label>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="=" class="form-label">คำนำหน้า: </label>
                                            <select id="=" name="=" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> นาง </option>
                                                <option value=""> นางสาว </option>
                                                <option value=""> นาย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามสามี/ภรรยา: </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">นามสกุล: </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">จำนวนบุตร (คน) : </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">บุตรชาย (คน) : </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                        <div class="col-md-2">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">บุตรหญิง (คน) : </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">

                                <div class="card-header p-1">
                                    <label class="text-normal font-weight-normal pl-2">
                                        1. ชีวประวัติ
                                    </label>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label class="form-label"> 1.5 </label>

                                        <div class="col-md-5">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ตำแหน่งหน้าที่ทางศาสนา ในองค์การศาสนาที่ท่านสังกัดอยู่ คือ: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label"> 1.6 </label>
                                        <div class="col-md-9">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ชื่อองค์การศาสนาที่สังกัด: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ชื่อย่อ(ถ้ามี): </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-12">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ตั้งอยู่เลขที่: </label>
                                            <textarea class="form-control" placeholder="" id="" style="height: 130px"></textarea>
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ถนน: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">แขวง/ตำบล: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">เขต/อำเภอ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">จังหวัด: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-12">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">สังกัดองค์การใหญ่ชื่อ: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>

                                        <div class="col-md-12">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ตั้งอยู่เลขที่: </label>
                                            <textarea class="form-control" placeholder="" id="" style="height: 130px"></textarea>
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ถนน: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">แขวง/ตำบล: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">เขต/อำเภอ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">จังหวัด: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label"> 1.7 </label>
                                        <div class="col-md-4">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ถือหนังสือเดินทางเลขที่: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-5">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ออกให้โดย: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">ประเภท: </label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="" id="" value="" checked>
                                                <label class="form-check-label" for="inlineRadio1">คนอยู่ชั่วคราว</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="" id="" value="">
                                                <label class="form-check-label" for="inlineRadio2">คนอยู่ถาวร</label>
                                            </div>
                                            <br>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label"> 1.8 </label>
                                        <div class="col-md-5">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">เดินทางเข้ามาใประเทศโดยคำแนะนำของ: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-7">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">เพื่อความมุ่งหมาย: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label"> 1.9 </label>
                                        <div class="col-md-12">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ระหว่างพำนักในไทยใช้จ่ายทุนของ: </label>
                                            <textarea class="form-control" placeholder="" id="" style="height: 70px"></textarea>
                                            <br>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <label for="" class="form-label"> 1.10 </label>
                                        <div class="col-md-12">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ขณะพำนักอยู่ในประเทศไทย พักอยู่ที่: </label>
                                            <textarea class="form-control" placeholder="" id="" style="height: 70px"></textarea>
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ถนน: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">แขวง/ตำบล: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">เขต/อำเภอ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">จังหวัด: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> 1 </option>
                                                <option value=""> 2 </option>
                                            </select><br>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                                <div class="card-header p-1">
                                    <label class="text-normal font-weight-normal pl-2">
                                        2. การศึกษา
                                    </label>
                                </div>
                                <form action="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label style="color:red">*</label>
                                                <label for="" class="form-label">พ.ศ.: </label>
                                                <input type="text" class="form-control" name="" value="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label style="color:red">*</label>
                                                <label for="" class="form-label">สถานศึกษา: </label>
                                                <input type="text" class="form-control" name="" value="">
                                                <br>
                                            </div>
                                            <div class="col-md-2">
                                                <label style="color:red">*</label>
                                                <label for="" class="form-label">ระยะเวลา: </label>
                                                <input type="text" class="form-control" name="" value="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label style="color:red">*</label>
                                                <label for="" class="form-label">ปริญญาหรือประกาศนียบัตร: </label>
                                                <input type="text" class="form-control" name="" value="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label style="color:red">*</label>
                                                <label for="" class="form-label">หมายเหตุ: </label>
                                                <input type="text" class="form-control" name="" value="">
                                                <br>
                                            </div>
                                        </div>
                                        <center>
                                            <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                                <i class="fas fa-plus"></i>เพิ่ม</button>
                                        </center>

                                </form><br>

                                <table class="table table" width="100%">
                                    <thead>
                                        <tr style="background: #DB681D; color:white;">
                                            <th>พ.ศ.</th>
                                            <th>สถานศึกษา</th>
                                            <th>ระยะเวลา</th>
                                            <th>ปริญญาหรือประกาศนียบัตร</th>
                                            <th>หมายเหตุ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr id="orangi"> -->
                                        <tr style="background-color: #e9fbf2; color:black;">
                                            <td>2564</td>
                                            <td>กรุงเทพมหานคร</td>
                                            <td>10.00</td>
                                            <td>ปริญญา</td>
                                            <td>อื่นๆ</td>
                                            <td>
                                                <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                                <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <tr style="background-color: #e9fbf2; color:black;">
                                            <td>2564</td>
                                            <td>นนทบุรี</td>
                                            <td>11.00</td>
                                            <td>ประกาศนียบัตร</td>
                                            <td>อื่นๆ</td>
                                            <td>
                                                <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                                <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="card-header p-1">
                                <label class="text-normal font-weight-normal pl-2">
                                    3. การปฏิบัติงาน
                                </label>
                            </div>
                            <form action="">
                                <div class="card-body">
                                    <div class="row">

                                        <label class="form-label"> 3.1 ประวัติการทำงาน </label>
                                        <div class="row">
                                            <label for="" class="form-label">3.1.1 เริ่มทำงานครั้งแรก เมื่อวันที่:</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">วันที่: </label>
                                            <input type="text" class="form-control" name="" value=""><br>
                                        </div>
                                        <div class="col-md-2">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">เดือน: </label>
                                            <input type="text" class="form-control" name="" value=""><br>
                                        </div>
                                        <div class="col-md-1">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">พ.ศ. </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <!-- </div> -->
                                        <!-- <div class="row"> -->
                                        <div class="col-md-3">
                                            <label for="" class="form-label">ประเทศ: </label>
                                            <select id="" name="" class="form-select">
                                                <option value="" selected>== กรุณาเลือก ==</option>
                                                <option value=""> ไทย </option>
                                            </select><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="color:red">*</label>
                                            <label for="" class="form-label">ตำแหน่งหน้าที่: </label>
                                            <input type="text" class="form-control" name="" value="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label">3.1.2 </label>
                                        <div class="col-md-5">
                                            <label for="" class="form-label">อาชีพครั้งสุดท้ายก่อนทำหน้าที่ผู้เผยแพร่ศาสนา: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <!-- <div class="row g-3 align-items-center"></div> -->
                                        <label for="" class="form-label">3.1.3 </label>
                                        <div class="col-md-5">
                                            <label for="" class="form-label">ก่อนเดินทางเข้ามาในประเทศ เคยทำงานอยู่ที่ประเทศ: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- <label style="color:red">*</label> -->
                                            <label for="" class="form-label">ตำแหน่งหน้าที่: </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- <label style="color:red">*</label> -->
                                            <label for="" class="form-label">ระยะเวลา (ปี) : </label>
                                            <input type="text" class="form-control" name="" value="" placeholder="">
                                            <br>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="" class="form-label">3.2 </label>
                                        <div class="col-md-12">
                                            <!-- <label style="color:red">*</label> -->
                                            <label for="" class="form-label">ระยะเวลาที่เข้ามาปฏิบัติงานในไทย: </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">เข้ามาเมื่อวันที่ เดือน พ.ศ. </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">ถึงวันที่ เดือน พ.ศ. </label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">ปฏิบัติงานเกี่ยวข้อง:</label>
                                            <input type="text" class="form-control" name="" value="">
                                            <br>
                                        </div>
                                    </div>
                                    <center>
                                        <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                            <i class="fas fa-plus"></i>เพิ่ม</button>
                                    </center>

                            </form><br>

                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ครั้งที่</th>
                                        <th>เข้ามาเมื่อวันที่ เดือน พ.ศ.</th>
                                        <th>ถึงวันที่ เดือน พ.ศ.</th>
                                        <th>ปฏิบัติงานเกี่ยวข้อง</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td>3/8/2563</td>
                                        <td>30/8/2573</td>
                                        <td> คริสต์</td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>



                    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-three-four">

                        <div class="card-header p-1">
                            <label class="text-normal font-weight-normal pl-2">
                                3. การปฏิบัติงาน
                            </label>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">

                                    <label for="" class="form-label"> 3.3 </label>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">การขอให้กรมการศาสนาออกหนังสือรับรองเพื่อต่ออยุหนังสือเดินทางครั้งนี้เป็นครั้งที่: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">ครั้งที่:</label>
                                        <input type="text" class="form-control" name="" value="">
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">วันที่:</label>
                                        <input type="text" class="form-control" name="" value="">
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">เดือน:</label>
                                        <input type="text" class="form-control" name="" value="">
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">พ.ศ.</label>
                                        <input type="text" class="form-control" name="" value="">
                                        <br>
                                    </div>
                                    <center>
                                        <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                            <i class="fas fa-plus"></i>เพิ่ม</button>
                                    </center>
                                </div>
                        </form><br>
                        <table class="table table" width="100%">
                            <thead>
                                <tr style="background: #DB681D; color:white;">
                                    <th>ครั้งที่</th>
                                    <th>เมื่อวันที่</th>
                                    <th>เดือน</th>
                                    <th>พ.ศ.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr id="orangi"> -->
                                <tr style="background-color: #e9fbf2; color:black;">
                                    <td>1</td>
                                    <td>31</td>
                                    <td>สิงหาคม</td>
                                    <td>2563</td>
                                    <td>
                                        <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                        <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <hr>

                        <form action="">
                            <div class="row">
                                <label for="" class="form-label"> 3.4 </label>
                                <div class="col-md-12">
                                    <label for="" class="form-label">วัตถุประสงค์ที่ขอเข้ามาปฏิบัติงานในประเทศไทย ดังนี้: </label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i>เพิ่ม</button>
                            </center><br>
                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>วัตถุประสงค์</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <hr>

                        <form action="">
                            <div class="row">
                                <label for="" class="form-label"> 3.5 </label>
                                <div class="col-md-12">
                                    <label for="" class="form-label">แผนปฏิบัติงานในปีที่ขอต่อวีซ่า (ระบุงานหรือโครงการ): </label>
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">ประเภท: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">แผนปฏิบัติงาน: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i>เพิ่ม</button>
                            </center><br>
                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>ประเภท</th>
                                        <th>แผนปฏิบัติงาน</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <hr>

                        <form action="">
                            <div class="row">
                                <label for="" class="form-label"> 3.6 </label>
                                <div class="col-md-12">
                                    <label for="" class="form-label">สถานที่ปฏิบัติงานและเขตพื้นที่ที่จะปฏิบัติงาน: </label>
                                    <br>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">3.6.2 </label>
                                    <br>
                                    <label for="" class="form-label">ขอเข้ามาปฏิบัติงาน: </label>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">ตำบล: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">อำเภอ: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">จังหวัด: </label>
                                    <input type="text" class="form-control" name=""  disabled="" value="กรุงเทพมหานคร">
                                    <br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i>เพิ่ม</button>
                            </center><br>
                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>ตำบล</th>
                                        <th>อำเภอ</th>
                                        <th>จังหวัด</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form><hr>
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="form-label">3.6.2 </label>
                                    <br>
                                    <label for="" class="form-label">มีเขตพื้นที่ที่จะปฏิบัติงาน: </label>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">ตำบล: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">อำเภอ: </label>
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">จังหวัด: </label>
                                    <input type="text" class="form-control" name=""  disabled="" value="กรุงเทพมหานคร">
                                    <br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i>เพิ่ม</button>
                            </center><br>
                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>ตำบล</th>
                                        <th>อำเภอ</th>
                                        <th>จังหวัด</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <hr>
                        <div class="row">
                            <label for="" class="form-label"> 3.7 </label>
                            <div class="col-md-12">
                                <!-- <label style="color:red">*</label> -->
                                <!-- <label for="" class="form-label">ระยะเวลาที่เข้ามาปฏิบัติงานในประเทศไทย: </label> -->
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="" class="col-form-label">ระยะเวลาที่เข้ามาปฏิบัติงานในประเทศไทย:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                    <div class="col-auto">
                                        <label for="" class="col-form-label">ปี</label>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <hr>

                        <form action="">
                            <div class="row">

                                <label for="" class="form-label"> 3.8 </label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="" value="องค์การใหญ่"> <br>
                                    <!-- <label for="" class="form-label" style="color: blue;">องค์การใหญ่</label> -->
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">เหตุผลและความจำเป็นที่: </label>
                                    <!-- <label for="" class="form-label" style="color: blue;" >องค์การย่อย </label> -->
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="" value="">
                                    <br>
                                </div>
                            </div>
                            <center>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i>เพิ่ม</button>
                            </center><br>
                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>เหตุผล</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td></td>
                                        <td>
                                            <a href="#"><i style="color: black;" class="fa fa-pencil-square-o"></i></a>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <hr>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <label for="" class="form-label">ลงนาม </label>
                                    <br>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <label for="=" class="form-label">ระบุชื่อผู้ลงนาม: </label>
                                    <select id="=" name="=" class="form-select">
                                        <option value=""> สมชาย ทดสอบ </option>
                                        <option value=""> สมพงษ์ ทดสอบ </option>
                                    </select>
                                </div><br>
                                <div class="col-md-6 offset-md-3">
                                    <div class="row g-3 align-items-center">

                                        <div class="col-md-3">
                                            <label for="" class="col-form-label">คุณ:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="" class="form-control" aria-describedby="passwordHelpInline" disabled="" value="สมชาย ทดสอบ">
                                        </div>
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">ตำแหน่ง:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="" class="form-control" aria-describedby="passwordHelpInline">
                                        </div>

                                    </div>
                                </div><br>
                            </div>
                            <div class="col-auto">
                                <div class="card">
                                    <div class="card-header" style="background-color:#DB681D; color:white;"><i class="fa fa-file-image-o" aria-hidden="true"></i> อัพโหลดรูปภาพ</div>
                                    <!-- <div class="card-body"> --><br>
                                    <input type="file" class="form-control" name="picIcon" id="picIcon">
                                    <div class="image-preview" id="imagePreview">
                                        <img src="" alt="Image Preview" class="image-preview__image">
                                        <img class="image-preview__default-text" src="https://cdn.icon-icons.com/icons2/1879/PNG/512/iconfinder-8-avatar-2754583_120515.png" width="180px" height="150px"></img>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>





                    </div>
                </div>






                <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-three-five">
                    <div class="card-header p-1">
                        <label class="text-normal font-weight-normal pl-2">
                            เลือกไฟล์เอกสารแนบ
                        </label>
                    </div>

                    <div class="card-body">

                        <form action="">
                            <div class="col-md-12">
                                <label style="color:red">*</label>
                                <label for="" class="form-label">เลือกไฟล์เอกสารแนบ: </label>
                                <br>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="file" class="form-control" name="" id="">
                                </div>
                            </div>
                            <center><br>
                                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;">
                                    <i class="fas fa-plus"></i> อัพโหลด</button>
                            </center><br>

                            <table class="table table" width="100%">
                                <thead>
                                    <tr style="background: #DB681D; color:white;">
                                        <th>ลำดับ</th>
                                        <th>ชื่อเอกสาร</th>
                                        <th>ชื่อไฟล์</th>
                                        <th>ขนาดไฟล์</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr id="orangi"> -->
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>1</td>
                                        <td>สำเนาหนังสือเดินทาง 1 ชุด</td>
                                        <td style="color: blue;">test1.pdf</td>
                                        <td>220 KB.</td>
                                        <td>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>2</td>
                                        <td>สำเนาใบอนุญาตทำงาน 1 ชุด</td>
                                        <td style="color: blue;">test2.pdf</td>
                                        <td>340 KB.</td>
                                        <td>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr style="background-color: #e9fbf2; color:black;">
                                        <td>3</td>
                                        <td>สำเนารายขื่อมิชชันนารี 1 ชุด</td>
                                        <td style="color: blue;">test3.pdf</td>
                                        <td>450 KB.</td>
                                        <td>
                                            <a href="#"><i style="color: red;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </form>
                    </div>




                </div>



            </div>


            <hr>

            <ul class="nav nav-pills justify-content-center" id="topnav-centered pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab" aria-controls="pills-one" aria-selected="true">ส่วนที่ 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab" aria-controls="pills-two" aria-selected="false">ส่วนที่ 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab" aria-controls="pills-three" aria-selected="false">ส่วนที่ 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-four" role="tab" aria-controls="pills-four" aria-selected="false">ส่วนที่ 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-five-tab" data-toggle="pill" href="#pills-five" role="tab" aria-controls="pills-five" aria-selected="false">ส่วนอัพโหลดไฟล์เอกสารแนบ</a>
                </li>
            </ul><br>

            <center>
                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;"><i class="fa fa-floppy-o"></i> บันทึก</button>
                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;"><i class="fa fa-arrow-up"></i> ส่งข้อมูล</button>
                <button type="submit" name="submit" class="btn" style="background: #20a2aa; color:white;"><i class="fa fa-print"></i> พิมพ์</button>
                <a href="{{route('homeorg')}}" class="btn btn-secondary text-normal">
                    <label class="txtv3 p-0 m-0"><i class="fa fa-times" aria-hidden="true" style="color: white;"></i> ปิด</label>
                </a>
            </center><br>
    </div>
    </div>

    </div>
    </form>
    </div>



    </div>



    <!-- Bootstrap 4 -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Bootstrap 5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <script src="{{asset('asset/js/jquery-1.4.4.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-ui-1.8.10.offset.datepicker.min.js')}}"></script>
    <script>
        $(function() {
            var d = new Date();
            var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543);


            $("#datepicker-th-2").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                isBuddhist: true,
                defaultDate: toDay,
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
                monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
            });
        });
    </script>
    <script>
        const picIcon = document.getElementById("picIcon");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image-preview__image");
        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
        picIcon.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader()
                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function() {
                    console.log(this);
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            } else {
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute("src", "");
            }
        });

        // $("#pills-one-tab").click(function() {
        //     $("html, body").animate({
        //         scrollTop: 0
        //     });
        //     return false;
        // });
    </script>
</body>

</html>