<html lang = en>
<head>
    <title>DRIVING LICENSE</title>

    <style>

        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background: url("lice.jpg ")no-repeat;
            background-position: center;
            background-size: cover;

        }

        body section{
            background-color: rgba(0,0,0,0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width:100%;





        }
        .form-box{
            position: center;
            width:100%;
            height: 850px;
            background: transparent;
            display: flex;

            align-items: center;

        }
        .form-value{
            padding-left: 300px;
        }
        body{
            font-family: Arial, sans-serif;
        }



        h2 {
            font-size: 5em;
            position: center;
            font-weight: 500;
            text-align: center;
            color: #ffffff;
            padding-bottom: 40px;

        }
        .inputbox{
            position: relative;
            margin: 15px 0;
            width:310px;
            border-bottom: 2px solid #ffffff;
            justify-content: space-between;

        }
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            justify-content: space-between;
            color: #ffffff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;

        }
        input:focus~ label,
        input:valid~ label{
            top: -5px;
        }
        .left{
            width:50%;
            padding:0;
            float:left;
            align-content: space-between;

        }
        .right{

            width: 50%;

            padding-left: 500px;



        }
        .inputbox input{
            width: 100%;
            height: 50px;
            background:transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #ffffff;
        }
        input{


            width: 100%;
            height: 40px;
            margin: 15px;
            border-radius: 20px;
            background : transparent;
            border: 2px solid rgba(0,0,0,0.5)

            cursor: pointer;
            font-size: 2em;
            font-weight: 600;

        }
    </style>

</head>
<body>
<section>
    <div class ="form-box">
        <div class = "form-value">
            <form action="create_pro.php" method="post">
                <h2>DRIVING LICENSE</h2>


                <div class = left>

                <div class = "inputbox">
                    <input type="text" name="Name" id = "name"required>
                    <label for = "name">Name</label>

                </div>
                <div class = "inputbox">
                    <input type="text" name="Trainer_Name" id = "t_name" required >
                    <label for ="t_name">Trainer Name</label>

                </div>
                <div class = "inputbox">
                    <input type="number" name="Contact_number" id = "num" required >
                    <label for ="num">Contact number</label>


                </div>
                <div class = "inputbox">
                    <input type="email" name="3Email" id="mail" required>
                    <label for="mail">Email</label>

                </div>
                <div class="inputbox ">
                        <input type="text" name="Blood_Group" id = " bg" required>
                        <label for = "bg"> Blood Group</label>
                    </div>
                </div>


                <div class = right>
                    <div class="inputbox ">
                        <input type="text" name="Citizenship_issued_district" id = "c_dist" required>
                        <label for="c_dist">Citizenship issued district</label>
                    </div>


                    <div class = "inputbox ">
                        <input type="text" name="Citizenship_Number" id = "c_num" required >
                        <label for="c_num">Citizenship Number</label>
                    </div>
                    <div class  = "inputbox ">
                        <input type="text" name="Passport_issued_country" id = "p_count" required >
                        <label for="p_count">Passport issued country</label>
                    </div>
                    <div class = "inputbox ">
                        <input type="number" name="Passport_Number" id ="p_num" required>
                        <label for="p_count">Passport Number</label>


                    </div>
                    <div class = "inputbox ">
                        <input type="text" name="Identity_Mark" id = " i_mark" required>
                        <label for="i_mark">Identity Mark</label>
                    </div>

                </div>


                    <input type="submit" name="submit"> </input>




            </form>


        </div>


    </div>

    </section>

</body>
</html>