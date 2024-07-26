<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <title>register - Student</title>
</head>

<body>
    <form name="form1" id="f1" action="Register.php" method="post">

        <div class="header">Admission Process</div>
        <br>
        <div class="page">
            <strong>
                <label>FULL NAME (As per LC/Marksheet)<span style="color:red;">*</label>
                <label style="margin-left :248px; ">ADDRESS<span style="color:red ;">*</label>
            </strong>
            <br>
            <input type="text" name="sname" placeholder="Enter Name" />
            <input type="text" name="saddress" placeholder="Enter Address" style="margin-left:5px" />
            <br><br>
            <strong>
                <label style="padding-top:30px;">MOBILE NUMBER<span style="color:red;">*</label>
                <label style="margin-left:374px;">EMAIL ADDRESS</label>
            </strong>
            <br>
            <input type="number" name="smobileno" placeholder="Enter Mobile Number"/>
            <input type="text" name="semail" placeholder="Enter Email" style="margin-left:5px" />
            <br><br>
            <strong>
                <div style="width:100%;">
                    <div style="width:31% ; float:left;">
                        <label>BIRTH DATE<span style="color:red;">*</label>
                    </div>
                    <div style="width:34% ; float:left;">
                        <label>GENDER<span style="color:red;">*</label>
                    </div>
                    <div style="width:32px ; float:left;">
                        <lable>CATEGORY<span style="color:red;">*</lable>
                    </div>

                </div>
            </strong>
            <br>

            <input name="sbirthdate" placeholder="Ex.(DD/MM/YYYY)" class="input" />
            <select name="sgender">
                <option value="---Select Gender---">---Select Gender---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

            </select>
            <select name="catagory">

                <option value="---Select Catagory---">---Select Catagory---</option>
                <option>GENERAl</option>
                <option>ST</option>
                <option>SC</option>
                <option>OBC</option>
                <option>EWS</option>
            </select>

            <p id="p"><strong>Please select the standard/course for admission process.<span style="color: red;"> *</span></strong></p>
            <br>
            <div>
                <input type="radio" value="pre-primary" name="standard" />Pre-Primary
                <input type="radio" value="primary" name="standard" />Primary
                <input type="radio" value="secondary" name="standard" />Secondary
                <input type="radio" value="higher seconadry" name="standard" />Higher Secondary
            </div>
            <br>
            <div>
                <input type="radio" value="B.A" name="standard" />B.A
                <input type="radio" value="B.Com" name="standard" />B.Com.(eng)
                <input type="radio" value="B.Sc" name="standard" />B.Sc
                <input type="radio" value="B.C.A." name="standard" />B.C.A.
                <input type="radio" value="I.T.I." name="standard" />I.T.I.
                <input type="radio" value="DHTM" name="standard" />DHTM (Hotel Managemant)


            </div>

            <br>
            <p id="p"><strong> HSC / SSC / GRADUATION Marksheet Details: (Please enter details if you received marksheet otherwise leave it blank)</strong></p>
            <br>
            <table class="table1" class="td" style="float:left; ">
                <tr>
                    <th style="font-size:10px;">
                        PASSING MONTH & YEAR
                    </th>

                    <th style="font-size:10px;">
                        SEAT NO.
                    </th>

                </tr>
                <tr>
                    <td>
                        <input type="text" name="spass" placeholder="Ex.(March-2020)" />
                    </td>
                    <td>
                        <input type="text" name="spass" placeholder=" Ex.(G-250250) " />
                    </td>

                </tr>
            </table>
            <table class="table1">
                <tr>
                    <th style="font-size:10px;">
                        OBTAIN MARK / OUT OF MARKS
                    </th>

                    <th style="font-size:10px;">
                        PERCENTAGE
                    </th>

                </tr>
                <tr>
                    <td>
                        <input type="text" name="smarks" placeholder="650/700" />
                    </td>
                    <td>
                        <input type="number" name="sperc" placeholder=" 85.56 " step="0.01" autocomplete="off" />
                    </td>

                </tr>
            </table>
            <br><br>
            <div style="width: 100%;">
                <div style="width:33%;float:left;line-height:1.8"  >
                <strong>
                    <lable>UPLOAD LC/BIRTH CERTIFICATE:</lable>
                    <br>
                    <label>(Max.. 1 MB Size)</label>
                    <br>
                    <input type="file" name=slc value="choose file" />
                </strong>    
                </div>
                <div style="width:33%; float:left;line-height:1.8">
                <strong>
                    <lable>UPLOAD MARKSHEET:</lable>
                    <br>
                    <label>(Max.. 1 MB Size)</label>
                    <br>
                    <input type="file" name=slc value="choose file"/>
                </strong>    
                </div>
                <div style="width:33%; float:left;line-height:1.8">
                <strong>
                    <lable>UPLOAD PHOTO:</lable>
                    <br>
                    <label>(Max.. 1 MB Size)</label>
                    <br>
                    <input type="file" name=slc value="choose file"/>
                </strong>    
                </div>
            </div>
            <br>
            <h5 style="padding-top: 80px;"><span style="color: red;">Important:</span> It is mandatory to upload graduation marksheet for UPSC, GPSC course.</h5>
            <br>
            <input type="submit" name="submit" value="Submit" />
            <br>

            <h6><span style="color:red">Note:</span> Please note that the students/parents contact number provided above in form details will be used in case of emergency only, Any<br>updates related to institution will be shared on the individual email ID of students which will be provided by the institution on commencement<br>ademic year.</h6>
            <br>
            <div>
            <table class="enquiries">
                <tr>
                    <th>Please contact us for further enquiries:</th>
                </tr>
                <tr>
                    <td> Mo. 91069 71088 (Pre-Primary & Primary: English Medium)</td>
                </tr>
                <tr>
                    <td>Mo. 94289 44556 (Secondary & Higher Secondary: General & Science Stream (English Medium)</td>
                </tr>
                <tr>
                    <td>Mo. 96247 42440 (Higher Secondary: General Stream- Gujarati Medium)</td>
                </tr>
                <tr>
                    <td>Mo. 97149 50429 (Higher Secondary: Science Stream- Gujarati)</td>
                </tr>
                <tr>
                    <td>Mo. 98243 41049 (B.A. & B.Com.)</td>
                </tr>
                <tr>
                    <td>Mo. 94276 78429 (B.Sc.)</td>
                </tr>
                <tr>
                    <td>Mo. 99987 39943 (B.C.A.)</td>
                </tr>
                <tr>
                    <td>Mo. 74870 68199 (I.T.I.)</td>
                </tr>
                <tr>
                    <td>Mo. 8200398200 / 8347322524 (UPSC, GPSC Coaching Class)</td>
                </tr>
                <tr>
                    <td>Mo. 7698527292 / 9825051682 (Hotel Management)</td>
                </tr>
            </table>
            </div>
            <?php

            include "connection.php";

            if (isset($_REQUEST['submit'])) {

                $name = $_REQUEST['sname'];
                $address = $_REQUEST['saddress'];
                $mobileno = $_REQUEST['smobileno'];
                $email = $_REQUEST['semail'];
                $sql = "insert into register values('$name','$address','$mobileno','$email')";
                $result = mysqli_query($conn, $sql);
            }

            ?>
    </form>
</body>

</html>