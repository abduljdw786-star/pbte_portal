<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBTE Result - {{ $student->roll_no }}</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background: #fff;
            color: #000;
            margin: 50px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 40px;
            position: relative;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }
        .header h1 {
            font-family: 'Times New Roman', serif;
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 0;
        }
        .sub-heading {
            text-align: center;
            font-size: 18px;
            margin-top: 5px;
        }
        .info {
            margin-top: 30px;
            line-height: 1.8;
            font-size: 18px;
        }
        .photo {
            position: absolute;
            right: 50px;
            top: 335px;
            border: 1px solid #000;
            width: 100px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .seal {
            text-align: left;
            margin-top: 60px;
        }
        .signature {
            text-align: right;
            margin-top: -100px;
        }
        .barcode {
            text-align: center;
            margin: 40px 0;
        }
        .bottom {
            text-align: center;
            font-size: 14px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <p style="float: right;">Roll No. <b>{{ $student->roll_no }}</b></p>
        <p>S.No. <b>{{ $student->serial_no }}</b></p>
        <h1>Punjab Board of Technical Education Lahore</h1>
        <div class="sub-heading">First Annual Examination, 2001</div>
    </div>

    <div class="info">
        Certified that <b>{{ $student->student_name }}</b><br>
        Son of <b>{{ $student->father_name }}</b><br>
        Registration No. <b>{{ $student->registration_no }}</b><br>
        of the <b>{{ $student->college_name }}</b><br>
        has satisfactorily completed the <b>{{ $student->program_duration }}</b> Programme of Instructions in <b>{{ $student->program_name }}</b>.<br>
        and has passed the Examination as a whole securing <b>{{ $student->obtained_marks }}</b> marks out of <b>{{ $student->total_marks }}</b> and has been placed in <b>"{{ $student->grade }}"</b> Grade.
    </div>

    <div class="photo">
        Student Photo
    </div>  

    <div class="barcode">
        <p>Diploma of Associate Engineer</p>
        <p>is awarded at Lahore on the <b>{{ $student->award_date->format('F d, Y') }}</b></p>
    </div>

    <div class="seal">
        <div style="width: 120px; height: 120px; border: 2px solid #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-align: center;">
            OFFICIAL SEAL
        </div>
    </div>

    <div class="signature">
        <div style="width: 150px; height: 80px; border-bottom: 1px solid #000; margin-bottom: 5px;"></div>
        <p>Secretary</p>
    </div>

    <div class="bottom">
        <p>This Diploma is issued without alteration or erasure</p>
        <p>Printed on: <b>{{ $student->printed_date->format('F d, Y') }}</b></p>
    </div>
</div>
</body>
</html>