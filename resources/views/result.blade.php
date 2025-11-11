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
        .download-btn {
            text-align: center;
            margin: 20px 0;
        }
        .btn {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="download-btn">
    <a href="{{ route('result.download', $student->roll_no) }}" class="btn">
        <i class="fas fa-download"></i> Download PDF
    </a>
    <a href="/" class="btn" style="background: #6c757d;">
        <i class="fas fa-home"></i> Back to Home
    </a>
</div>

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
        [Student Photo]
    </div>  

    <div class="barcode">
        <p>Diploma of Associate Engineer</p>
        <p>is awarded at Lahore on the <b>{{ $student->award_date->format('F d, Y') }}</b></p>
        [Barcode Image]
    </div>

    <div class="seal">
        [Official Seal]
    </div>

    <div class="signature">
        [Signature]
        <p>Secretary</p>
    </div>

    <div class="bottom">
        <p>This Diploma is issued without alteration or erasure</p>
        <p>Printed on: <b>{{ $student->printed_date->format('F d, Y') }}</b></p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>