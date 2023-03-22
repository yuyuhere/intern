<!DOCTYPE html>
<html>
    <head>
        <title>Account registration form</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <style>
            html, body {
                min-height: 100%;
            }

            body, div, form, input, select, p {
                padding: 0;
                margin: 0;
                outline: none;
                font-family: Roboto, Arial, sans-serif;
                font-size: 14px;
                color: #666;
            }

            h1 {
                margin: 0;
                font-weight: 400;
            }

            h3 {
                margin: 12px 0;
                color: #8ebf42;
            }

            .main-block {
                display: flex;
                justify-content: center;
                align-items: center;
                background: #fff;
            }

            form {
                width: 100%;
                padding: 20px;
            }

            fieldset {
                border: none;
                border-top: 1px solid #8ebf42;
            }

            .account-details, .personal-details {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .account-details >div, .personal-details >div >div {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .account-details >div, .personal-details >div, input, label {
                width: 100%;
            }

            label {
                padding: 0 5px;
                text-align: right;
                vertical-align: middle;
            }

            input {
                padding: 5px;
                vertical-align: middle;
            }

            .checkbox {
                margin-bottom: 10px;
            }

            select, .children, .gender, .bdate-block {
                width: calc(100% + 26px);
                padding: 5px 0;
            }

            select {
                background: transparent;
            }

            .gender input {
                width: auto;
            }

            .gender label {
                padding: 0 5px 0 0;
            }

            .bdate-block {
                display: flex;
                justify-content: space-between;
            }

            .birthdate select.day {
                width: 35px;
            }

            .birthdate select.mounth {
                width: calc(100% - 94px);
            }

            .birthdate input {
                width: 38px;
                vertical-align: unset;
            }

            .checkbox input, .children input {
                width: auto;
                margin: -2px 10px 0 0;
            }

            .checkbox a {
                color: #8ebf42;
            }

            .checkbox a:hover {
                color: #82b534;
            }

            button {
                width: 100%;
                padding: 10px 0;
                margin: 10px auto;
                border-radius: 5px;
                border: none;
                background: #8ebf42;
                font-size: 14px;
                font-weight: 600;
                color: #fff;
            }

            button:hover {
                background: #82b534;
            }

            @media (min-width: 568px) {
                .account-details >div, .personal-details >div {
                    width: 50%;
                }

                label {
                    width: 40%;
                }

                input {
                    width: 60%;
                }

                select, .children, .gender, .bdate-block {
                    width: calc(60% + 16px);
                }
            }
        </style>
    </head>

    <body>
        <div class="main-block">
            <form action="/">
            <h1>ILP MARANG REGISTRATION</h1>

            <fieldset>
                <legend>
                <h3>Personal Details</h3>
                </legend>
                <div class="account-details">
                <div><label>FULL NAME*</label><input type="text" id="name" name="name" required></div>
                <div><label>IC*</label><input type="text" id="ic" name="ic" required></div>
                <div><label>Phone*</label><input type="text" id="phone" name="phone" required></div>

                <div>
                    <label>RELIGION*</label>
                    <select>
                    <option value="sp">SILA PILIH</option>
                    <option value="i">ISLAM</option>
                    <option value="k">KRISTIAN</option>
                    <option value="b">BUDDHA</option>
                    <option value="h">HINDU</option>
                    </select>
                </div>
                <div>
                    <label>RACE*</label>
                    <select>
                    <option value="s">SILA PILIH</option>
                    <option value="m">MELAYU</option>
                    <option value="c">CINA</option>
                    <option value="i">INDIA</option>
                    <option value="i">IBAN</option>
                    </select>
                </div>
                <div>
                    <label>PROGRAM*</label>
                    <select>
                    <option value="s">SILA PILIH</option>
                    <option value="p">PLASTIK</option>
                    <option value="a">AUTO</option>
                    <option value="o">ONG</option>
                    <option value="m">MEKA</option>
                    </select>
                </div>
                <div><label>Address*</label><input type="text" name="address" required></div>
                </div>
            </fieldset>

            <!-- second sections -->
            <fieldset>
                <legend>
                <h3>Father Details</h3>
                </legend>
                <div class="account-details">
                    <div><label>NAME</label><input type="text" id="fName" name="fName"></div>
                    <div><label>IC</label><input type="text" id="fIc" name="fIc"></div>
                    <div><label>Phone</label><input type="text" id="fPhone" name="fPhone"></div>

                    <div>
                        <label>RELIGION</label>
                        <select>
                        <option value="SILA PILIH">SILA PILIH</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="KRISTIAN">KRISTIAN</option>
                        <option value="BUDDHA">BUDDHA</option>
                        <option value="HINDU">HINDU</option>
                        </select>
                    </div>
                    <div>
                        <label>RACE</label>
                        <select>
                        <option value="SILA PILIH">SILA PILIH</option>
                        <option value="MELAYU">MELAYU</option>
                        <option value="CINA">CINA</option>
                        <option value="INDIA">INDIA</option>
                        <option value="IBAN">IBAN</option>
                        </select>
                    </div>
                    <div><label>Address</label><input type="text" name="fAddress"></div>
                    <div><label>Occupation</label><input type="text" name="fOccupation"></div>
                    <div><label>SALARY</label><input type="text" name="fSalary"></div>
                    <div><label>OFFICE ADDRESS</label><input type="text" name="fOfficeAddress"></div>
                </div>
            </fieldset>

            <!-- Third sections -->
            <fieldset>
                <legend>
                <h3>Mother Details</h3>
                </legend>
                <div class="account-details">
                    <div><label>NAME</label><input type="text" name="mName"></div>
                    <div><label>IC</label><input type="text" name="mIc"></div>
                    <div><label>Phone</label><input type="text" name="mPhone"></div>

                    <div>
                        <label>RELIGION</label>
                        <select>
                        <option value="SILA PILIH">SILA PILIH</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="KRISTIAN">KRISTIAN</option>
                        <option value="BUDDHA">BUDDHA</option>
                        <option value="HINDU">HINDU</option>
                        </select>
                    </div>
                    <div>
                        <label>RACE</label>
                        <select>
                        <option value="SILA PILIH">SILA PILIH</option>
                        <option value="MELAYU">MELAYU</option>
                        <option value="CINA">CINA</option>
                        <option value="INDIA">INDIA</option>
                        <option value="IBAN">IBAN</option>
                        </select>
                    </div>
                    <div><label>Address</label><input type="text" name="mAddress"></div>
                    <div><label>Occupation</label><input type="text" name="mOccupation"></div>
                    <div><label>SALARY</label><input type="text" name="mSalary"></div>
                    <div><label>OFFICE ADDRESS</label><input type="text" name="mOfficeAddress"></div>
                </div>
            </fieldset>

            <!-- Uploading sections -->
            <fieldset>
                <legend>
                    <h3>Uploading Documents</h3>
                </legend>
            </fieldset>


            <!-- Term and mailing sections -->
            <fieldset>
                <legend>
                    <h3>Terms and Mailing</h3>
                </legend>

            <div class="terms-mailing">
                <div class="checkbox">
                    <input type="checkbox" name="checkbox"><span>I accept the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for W3Docs.</a></span>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="checkbox"><span>I want to recelve personallzed offers by your site</span>
                </div>
            </div>
            </fieldset>

            <button type="submit" name="insert" href="/">Submit</button>
            </form>
        </div>
    </body>
</html>

<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'registrationilp');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $ic = $_POST['ic'];
    $phone = $_POST['phone'];
    $religion = $_POST['religion'];
    $race = $_POST['race'];
    $address = $_POST['address'];
    $program = $_POST['program'];

    $query = "INSERT INTO 'personal' ('name', 'ic', 'phone', 'religion', 'race', 'address', 'program') VALUES ('$name', '$ic', '$phone', '$religion', '$race', '$address', '$program')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script  type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
        echo '<script  type="text/javascript"> alert ("Data Not Saved") </script>';
    }
}
?>