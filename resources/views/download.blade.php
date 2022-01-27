@extends('user.layout')
@section('content')
<html>
    <head>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  display: inline;
  height: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>
    </head>
   <body style="padding: 100px">

    <div class="card">
        <p><strong>Freshmen Notice</strong></p>
        <a href="/file/Freshmen Guide.pdf" download><button type="button">Freshmen Guide</button></a><br>
        <a href="/file/Rules and Regulations of Student Societies.pdf" download><button type="button">Rules and Regulations of Student Societies</button></a><br>
        <a href="/file/SUC Intro 2021" download><button type="button">SUC Intro 2021</button></a><br><hr>
        <p><strong>Fee</strong></p>
        <a href="/file/International Student Program Fees & Procedures vAugust.pdf" download><button type="button">International Fees Structure</button></a><br><hr>
        <p><strong>PTPTN</strong></p>
        <a href="/file/The Process of PTPTN Application.pdf" download><button type="button">The Process of PTPTN Application</button></a><hr>
        <p><strong>Faculty Details</strong></p>
        <a href="/file/FAD- Faculty of Art and Design.pdf" download><button type="button">FAD- Faculty of Art and Design</button></a><br>
        <a href="/file/FBM- Faculty of Business Administation- Diploma Programme VERSION 2.pdf" download><button type="button">FBM- Faculty of Business Administation- Diploma Programme</button></a><br>
        <a href="/file/FBM- Faculty of Business Administation- Undergraduate Programme VERSION 2.pdf" download><button type="button">FBM- Faculty of Business Administation- Undergraduate Programme</button></a><br>
        <a href="/file/FCM- Faculty of Chinese Medicine.pdf" download><button type="button">FCM- Faculty of Chinese Medicine </button></a><br>
        <a href="/file/FEIT- Faculty of Engineering and Information Technology VERSION 2.pdf" download><button type="button">FEIT- Faculty of Engineering and Information Technology</button></a><br>
        <a href="/file/FEP -Faculty of Education & Psychology 2021 v5.pdf" download><button type="button">FEP- Faculty of Education & Psychology 2021</button></a><br>
        <a href="/file/FHSS- Faculty of Humanities and Social Sciences Version 2.pdf" download><button type="button">FHSS- Faculty of Humanities and Social Sciences</button></a><br>
        <a href="/file/postgraduate brochures 2021 VERSION 2.pdf" download><button type="button">postgraduate brochures 2021</button></a><br>
        <a href="/file/SFS- School of Foundation Studies.pdf" download><button type="button">SFS-School of Foundation Studies</button></a><br><hr>
        
        <p><strong>General Q&A</strong></p>
        <a href="/file/General Q&A.pdf" download><button type="button">General Q&A</button></a><br>
        <p><strong>Scholarship Application Form</strong></p>
        <a href="/file/Scholarship Application Form.pdf" download><button type="button">Scholarship Application Form</button></a><br><hr>
        <p><strong>Student Hostel</strong></p>
        <a href="/file/hostel.pdf" download><button type="button">Hostel</button></a><br>
        <a href="/file/Student Residence Application Form.pdf" download><button type="button">Student Residence Application Form</button></a><br><hr>
        <p><strong>Multi-purpose Hall Application Form</strong></p>
        <a href="/file/Multi-Purpose Hall Application Form.pdf" download><button type="button">Multi-Purpose Hall Application Form</button></a><br><hr>

    </body>
</html>
@endsection
