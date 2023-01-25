<?php include "../Includes/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Card</title>
    <style><?php include "../Css/style.css" ?></style>
</head>
<body>
    <div class="MotherCardMainDiv">
        <div class="SectionNameDiv">
            <h3>Section A</h3>
        </div>
        <div class="MotherCardButtons">
            <button class="PrintBtn">Print</button>
            <button class="BackBtn">Back</button>
            <button class="NextBtn">Next</button>
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="ClinicDetailsDetailsTitle"><h3>Clinic Care</h3></div>
                        <div class="ClinicDetailsDetails">
                            <table class="MotherCardTables">
                                <tr>
                                    <td>Date of Visit</td>
                                    <td>2022/2/4</td>
                                </tr>
                                <tr>
                                    <td>POA</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="PersonalInfomationTitle">
                                <h3>Personal Information</h3>
                            </div>
                            <div class="PersonalInformation">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td></td>
                                        <td>Wife</td>
                                        <td>Husband</td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td>27</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Highest level of education:</td>
                                        <td>Degree</td>
                                        <td>Degree</td>
                                    </tr>
                                    <tr>
                                        <td>Occupation</td>
                                        <td>Teacher</td>
                                        <td>Teacher</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="PersonalInfomationTitle">
                                <h3>Family History</h3>
                            </div>
                            <div class="PersonalInformation">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Diabetes mellitus:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Hypertension:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Haematological diseases:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Twin / multiple pregnancies:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Any other (specify):</td>
                                        <td>Nothing</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="MedicalHistoryTitle">
                                <h3>Medical / Surgical History</h3>
                            </div>
                            <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Diabetes:</td>
                                        <td>Negative</td>
                                        <td>Haematologies:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Hypertension:</td>
                                        <td>Negative</td>
                                        <td>Thyroid diseases:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Cardiac diseases:</td>
                                        <td>Negative</td>
                                        <td>Bronchial asthma:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Renal diseases:</td>
                                        <td>Negative</td>
                                        <td>Tuberculosis:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Hepatic diseases:</td>
                                        <td>Nothing</td>
                                        <td>Previous DVT:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Psychiatric illnesses:</td>
                                        <td>Nothing</td>
                                        <td>Surgeries other than LSCS:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Epilepsy:</td>
                                        <td>Nothing</td>
                                        <td>Other (specify):</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Malignancies:</td>
                                        <td>Nothing</td>
                                        <td>Social Z score:</td>
                                        <td>Negative</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="ObstericHistoryTitle">
                                <h3>Present Obsteric History</h3>
                            </div>
                            <div class="ObstericHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Gravidity:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>Age of the youngest child::</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>LRMP:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>EED:</td>
                                        <td>Negative</td>
                                    </tr>
                                    <tr>
                                        <td>US corrected EED (To be filled by VOG/MO):</td>
                                        <td>Nothing</td>
                                    </tr>
                                    <tr>
                                        <td>POA at dating scan: :</td>
                                        <td>Nothing</td>
                                    </tr>
                                    <tr>
                                        <td>Date of quickening:</td>
                                        <td>Nothing</td>
                                    </tr>
                                    <tr>
                                        <td>POA at registration: :</td>
                                        <td>Nothing</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="PregnancyHistoryTitle">
                            <h3>Pregnancy History</h3>
                        </div>
                        <div class="PregnancyHistory">
                            <table class="MotherCardTables">
                                <tr>
                                    <th>Pregnancy</th>
                                    <th>Antenatal complications</th>
                                    <th>Place & mode of delivery</th>
                                    <th>Outcome</th>
                                    <th>Birth weight</th>
                                    <th>Postal complications(specify)</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>Negative</td>
                                    <td>Colombo 15</td>
                                    <td>Normal</td>
                                    <td>Birth weight</td>
                                    <td>Negative</td>
                                    <td>Male</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>Negative</td>
                                    <td>Colombo 15</td>
                                    <td>Normal</td>
                                    <td>Birth weight</td>
                                    <td>Negative</td>
                                    <td>Male</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>Negative</td>
                                    <td>Colombo 15</td>
                                    <td>Normal</td>
                                    <td>Birth weight</td>
                                    <td>Negative</td>
                                    <td>Female</td>
                                    <td>3</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "../Includes/footer.php"; ?>