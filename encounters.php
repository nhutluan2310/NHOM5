<?php ob_start();
session_start();
require './Config/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Update Profile</title>
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="Assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="Assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/encounters.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        body {
            background-image: url('./Assets/images/banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        .container {
            width: 800px;
            height: 750px;
            margin: 8% auto;
            background: #ffffff;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        h2 {
            font-size: 30px;
            margin-bottom: 40px;
            color: #777;
        }

        p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #777;
        }

        .container form {
            width: 700px;
            position: absolute;
            top: 40px;
            left: 40px;
            transition: 0.5s;
        }

        .btn-box {
            width: 100%;
            margin: 70px auto;
            text-align: center;
        }

        form button {
            width: 120px;
            height: 40px;
            margin: 0 10px;
            font-size: 20px;
            background: linear-gradient(to right, #ff10bb, #b806ff);
            border-radius: 30px;
            border: 0;
            outline: none;
            color: #fff;
            cursor: pointer;
        }

        #form2 {
            left: 800px;
        }

        #form3 {
            left: 800px;
        }

        #form4 {
            left: 800px;
        }

        .step-row {
            width: 800px;
            height: 30px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 -1px 5px -1px #000;
            position: relative;
        }

        .step-col {
            width: 800px;
            text-align: center;
            font-size: 20px;
            color: white;
            position: relative;
        }

        #progress {
            position: absolute;
            height: 100%;
            width: 200px;
            background: linear-gradient(to right, #ff10bb, #b806ff);
            transition: 1s;
        }

        #progress::after {
            content: '';
            height: 0;
            width: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            position: absolute;
            right: -20px;
            top: 0;

        }

        .choose-photo {
            margin-top: 40px;
            text-align: center;
        }

        .choose-photo .dt_selct_avatar {
            width: 186px;
            display: table;
            height: 186px;
            overflow: hidden;
            color: white;
            background: #fff;
            margin: auto;
            position: relative;
            cursor: pointer;
            border-radius: 12px;
            border: 4px solid white;
            outline: 2px solid gainsboro;
            background-image: url('./Assets/images/d-avatar.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .btn-image {
            width: 130px;
            font-size: 16px;
            margin-top: 25px;
            text-align: center;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form action="" id="form1" method="post" class="form" enctype="multipart/form-data">
                <div class="form-group mb-4 d-flex justify-content-end align-items-end text-end">
                    <input type="submit" class="btn btn-outline-info text-center me-3" name="logout" value="Logout">
                </div>
                <div class="choose-photo">

                    <h2 class="bold fs-5 fs-md-6 fs-lg-3 col-12">Hi <?php echo $_SESSION['user-login'] ?>! People want to see what you look like!</h2>
                    <p class="fs-6 fs-md-6 fs-lg-4">Upload photos to set your profile picture.</p>
                    <label for="avatar_img" class="dt_selct_avatar" id="avatar_span">
                        <input type="file" id="img_file" class="hide" accept="image/x-png, image/gif, image/jpeg" name="image" onchange="updateAvatarImage();checkFile();">
                    </label>
                    <button class="btn-image" onclick="document.getElementById('img_file').click(); return false">Browse Image</button>

                </div>

                <div class="btn-box">
                    <button type="button" id="next1" disabled class="btn btn-primary">Next</button>
                </div>

            </form>
            <form action="" id="form2" method="post" class="form">
                <div class="row">
                    <div class="form-group mb-4 d-flex justify-content-end align-items-end text-end">
                        <input type="submit" class="btn btn-outline-info text-center me-3" name="logout" value="Logout">
                    </div>
                    <div class="form-group mb-4 text-center">
                        <h2>Hi <?php echo $_SESSION['user-login'] ?>! Let people know how you look like.</h2>
                        <p>Fill in all your information so people know more about you.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Height:</label> <!--Chìu cao!-->
                            <select name="height" id="height" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Height</option>
                                <option value="139">
                                    139 cm </option>
                                <option value="140">
                                    140 cm (4' 7″) </option>
                                <option value="141">
                                    141 cm </option>
                                <option value="142">
                                    142 cm (4' 8″) </option>
                                <option value="143">
                                    143 cm </option>
                                <option value="144">
                                    144 cm </option>
                                <option value="145">
                                    145 cm (4' 9″) </option>
                                <option value="146">
                                    146 cm </option>
                                <option value="147">
                                    147 cm (4' 10″) </option>
                                <option value="148">
                                    148 cm </option>
                                <option value="149">
                                    149 cm </option>
                                <option value="150">
                                    150 cm (4' 11″) </option>
                                <option value="151">
                                    151 cm </option>
                                <option value="152">
                                    152 cm (5' 0″) </option>
                                <option value="153">
                                    153 cm </option>
                                <option value="154">
                                    154 cm </option>
                                <option value="155">
                                    155 cm (5' 1″) </option>
                                <option value="156">
                                    156 cm </option>
                                <option value="157">
                                    157 cm (5' 2″) </option>
                                <option value="158">
                                    158 cm </option>
                                <option value="159">
                                    159 cm </option>
                                <option value="160">
                                    160 cm (5' 3″) </option>
                                <option value="161">
                                    161 cm </option>
                                <option value="162">
                                    162 cm </option>
                                <option value="163">
                                    163 cm (5' 4″) </option>
                                <option value="164">
                                    164 cm </option>
                                <option value="165">
                                    165 cm (5' 5″) </option>
                                <option value="166">
                                    166 cm </option>
                                <option value="167">
                                    167 cm </option>
                                <option value="168">
                                    168 cm (5' 6″) </option>
                                <option value="169">
                                    169 cm </option>
                                <option value="170">
                                    170 cm (5' 7″) </option>
                                <option value="171">
                                    171 cm </option>
                                <option value="172">
                                    172 cm </option>
                                <option value="173">
                                    173 cm (5' 8″) </option>
                                <option value="174">
                                    174 cm </option>
                                <option value="175">
                                    175 cm (5' 9″) </option>
                                <option value="176">
                                    176 cm </option>
                                <option value="177">
                                    177 cm </option>
                                <option value="178">
                                    178 cm (5' 10″) </option>
                                <option value="179">
                                    179 cm </option>
                                <option value="180">
                                    180 cm (5' 11″) </option>
                                <option value="181">
                                    181 cm </option>
                                <option value="182">
                                    182 cm </option>
                                <option value="183">
                                    183 cm (6' 0″) </option>
                                <option value="184">
                                    184 cm </option>
                                <option value="185">
                                    185 cm (6' 1″) </option>
                                <option value="186">
                                    186 cm </option>
                                <option value="187">
                                    187 cm </option>
                                <option value="188">
                                    188 cm (6' 2″) </option>
                                <option value="189">
                                    189 cm </option>
                                <option value="190">
                                    190 cm </option>
                                <option value="191">
                                    191 cm (6' 3″) </option>
                                <option value="192">
                                    192 cm </option>
                                <option value="193">
                                    193 cm (6' 4″) </option>
                                <option value="194">
                                    194 cm </option>
                                <option value="195">
                                    195 cm </option>
                                <option value="196">
                                    196 cm (6' 5″) </option>
                                <option value="197">
                                    197 cm </option>
                                <option value="198">
                                    198 cm (6' 6″) </option>
                                <option value="199">
                                    199 cm </option>
                                <option value="200">
                                    200 cm </option>
                                <option value="201">
                                    201 cm (6' 7″) </option>
                                <option value="202">
                                    202 cm </option>
                                <option value="203">
                                    203 cm (6' 8″) </option>
                                <option value="204">
                                    204 cm </option>
                                <option value="205">
                                    205 cm </option>
                                <option value="206">
                                    206 cm (6' 9″) </option>
                                <option value="207">
                                    207 cm </option>
                                <option value="208">
                                    208 cm (6' 10″) </option>
                                <option value="209">
                                    209 cm </option>
                                <option value="210">
                                    210 cm </option>
                                <option value="211">
                                    211 cm (6' 11″) </option>
                                <option value="212">
                                    212 cm </option>
                                <option value="213">
                                    213 cm (7' 0″) </option>
                                <option value="214">
                                    214 cm </option>
                                <option value="215">
                                    215 cm </option>
                                <option value="216">
                                    216 cm (7' 1″) </option>
                                <option value="217">
                                    217 cm </option>
                                <option value="218">
                                    218 cm </option>
                                <option value="220">
                                    220 cm (7' 3″) </option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Ethnicity:</label> <!--Dân tộc!-->
                            <select name="ethnicity" id="ethnicity" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Ethnicity</option>
                                <option value="Kinh">
                                    Kinh </option>
                                <option value="Mường">
                                    Mường </option>
                                <option value="Tày">
                                    Tày </option>
                                <option value="Chăm">
                                    Chăm </option>
                                <option value="Rắc-lây">
                                    Rắc-lây </option>
                                <option value="other">
                                    Other </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Body Type:</label> <!--Hình thể!-->
                            <select name="body_type" id="body_type" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Body Type</option>
                                <option value="slim">
                                    Slim </option>
                                <option value="sporty">
                                    Sporty </option>
                                <option value="curvy">
                                    Curvy </option>
                                <option value="round">
                                    Round </option>
                                <option value="supermodel">
                                    Supermodel </option>
                                <option value="average">
                                    Average </option>
                                <option value="other">
                                    Other </option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Hair color:</label> <!--Màu tóc!-->
                            <select name="hair_color" id="hair_color" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Hair Color</option>
                                <option value="brown">
                                    Brown </option>
                                <option value="black">
                                    Black </option>
                                <option value="white">
                                    White </option>
                                <option value="sandy">
                                    Sandy </option>
                                <option value="blond/strawberry">
                                    Blond/Strawberry </option>
                                <option value="orange">
                                    Orange </option>
                                <option value="pink">
                                    Pink </option>
                                <option value="purple">
                                    Purple </option>
                                <option value="other">
                                    Other </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="btn-box">
                            <button type="button" id="back1" class="btn btn-secondary">Back</button>
                            <button type="button" id="next2" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" id="form3" method="post" class="form">
                <div class="row">
                    <div class="form-group mb-4 d-flex justify-content-end align-items-end text-end">
                        <input type="submit" class="btn btn-outline-info text-center me-3" name="logout" value="Logout">
                    </div>
                    <div class="form-group mb-4 text-center">
                        <h2>Hi <?php echo $_SESSION['user-login'] ?>! Let people know more about you.</h2>
                        <p>Fill in all your information below.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Relationship:</label> <!--Chìu cao!-->
                            <select name="relationship_status" class="form-control custom-select" id="relationship_status">
                                <option value="0" selected="" disabled="">Choose your Relationship Status</option>
                                <option value="Single">Single</option>
                                <option value="Devorced">Divorced</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Region:</label> <!--Tôn giáo!-->
                            <select name="religion" id="religion" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Religion</option>
                                <option value="Đạo">
                                    Đạo </option>
                                <option value="Phật">
                                    Phật </option>
                                <option value="other">
                                    Other </option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Drink:</label> <!--Màu tóc!-->
                            <select name="drink" id="drink" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Drink</option>
                                <option value="never">
                                    Never </option>
                                <option value="I_drink_sometimes">
                                    I Drink Sometimes </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Character:</label> <!--Tính cách!-->
                            <select name="nature" id="nature" class="form-control custom-select valid" aria-invalid="false">
                                <option value="" selected="" disabled="">Choose Nature</option>
                                <option value="accommodating">
                                    Accommodating </option>
                                <option value="adventurous">
                                    Adventurous </option>
                                <option value="calm">
                                    Calm </option>
                                <option value="careless">
                                    Careless </option>
                                <option value="cheerful">
                                    Cheerful </option>
                                <option value="demanding">
                                    Demanding </option>
                                <option value="extroverted">
                                    Extroverted </option>
                                <option value="honest">
                                    Honest </option>
                                <option value="generous">
                                    Generous </option>
                                <option value="humorous">
                                    Humorous </option>
                                <option value="introverted">
                                    Introverted </option>
                                <option value="liberal">
                                    Liberal </option>
                                <option value="lively">
                                    Lively </option>
                                <option value="loner">
                                    Loner </option>
                                <option value="nervous">
                                    Nervous </option>
                                <option value="possessive">
                                    Possessive </option>
                                <option value="quiet">
                                    Quiet </option>
                                <option value="reserved" selected="">
                                    Reserved </option>
                                <option value="sensitive">
                                    Sensitive </option>
                                <option value="shy">
                                    Shy </option>
                                <option value="social">
                                    Social </option>
                                <option value="spontaneous">
                                    Spontaneous </option>
                                <option value="stubborn">
                                    Stubborn </option>
                                <option value="suspicious">
                                    Suspicious </option>
                                <option value="thoughtful">
                                    Thoughtful </option>
                                <option value="proud">
                                    Proud </option>
                                <option value="considerate">
                                    Considerate </option>
                                <option value="friendly">
                                    Friendly </option>
                                <option value="polite">
                                    Polite </option>
                                <option value="reliable">
                                    Reliable </option>
                                <option value="careful">
                                    Careful </option>
                                <option value="helpful">
                                    Helpful </option>
                                <option value="patient">
                                    Patient </option>
                                <option value="optimistic">
                                    Optimistic </option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Smoke:</label> <!--Màu tóc!-->
                            <select name="smoke" id="smoke" class="form-control custom-select">
                                <option value="" selected="" disabled="">Choose Smoke</option>
                                <option value="never">
                                    Never </option>
                                <option value="I_some_sometimes">
                                    I Smoke Sometimes </option>
                                <option value="chain_smoker">
                                    Chain Smoker </option>
                            </select>
                        </div>
                        <div class="form-group mb-4 ">
                            <label for="">Working startus:</label> <!--Màu tóc!-->
                            <select name="work_status" class="form-control custom-select" id="work_status">
                                <option value="0" selected="" disabled="">Choose your work status</option>
                                <option value="Studying">Studying</option>
                                <option value="Working">Working</option>
                                <option value="Looking for work">Looking for work</option>
                                <option value="Retired">Retired</option>
                                <option value="Self-Employed">Self-Employed</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 text-center">
                        <div class="btn-box">
                            <button type="button" id="back2" class="btn btn-secondary">Back</button>
                            <button type="button" id="next3" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" id="form4" method="post" class="form">
                <div class="form-group mb-4 d-flex justify-content-end align-items-end text-end">
                    <input type="submit" class="btn btn-outline-info text-center me-3" name="logout" value="Logout">
                </div>
                <div class="row text-center">
                    <div class="form-group mb-4 text-center">

                        <h2>Hi <?php echo $_SESSION['user-login'] ?>! Tell more about you.</h2>
                        <p>Fill your information so people know more about you.</p>
                    </div>
                    <div class="form-group mb-4 text-center">
                        <label for="" class="bold" style="font-size: 20px;">About you</label> <!--!-->
                        <div class="tex-center">
                            <textarea class="form-control" name="about_me" id="about_me" col="370" rows="5" placeholder="Say something about yourself." _mstplaceholder="691912"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 text-center">
                        <div class="btn-box">
                            <button type="button" id="back3" class="btn btn-secondary">Back</button>
                            <button type="button" id="submit" name="submit" onclick="Click_S()" class="btn btn-primary">Complete</button>
                        </div>
                    </div>
            </form>

        </div>
        <div class="col-12 col-md-12">
            <div class="step-row">
                <div id="progress" class="bg-primary"></div>
                <div class="step-col"><small>Step 1</small></div>
                <div class="step-col"><small>Step 2</small></div>
                <div class="step-col"><small>Step 3</small></div>
                <div class="step-col"><small>Step 4</small></div>
            </div>
        </div>
    </div>
    <script>
        var Form1 = document.getElementById("form1");
        var Form2 = document.getElementById("form2");
        var Form3 = document.getElementById("form3");
        var Form4 = document.getElementById("form4");

        var Next1 = document.getElementById("next1");
        var Next2 = document.getElementById("next2");
        var Next3 = document.getElementById("next3");
        var Back1 = document.getElementById("back1");
        var Back2 = document.getElementById("back2");
        var Back3 = document.getElementById("back3");

        var progress = document.getElementById("progress");
        Next1.onclick = function() {
            Form1.style.left = "-800px";
            Form2.style.left = "40px";
            progress.style.width = "400px";
        }
        Back1.onclick = function() {
            Form1.style.left = "40px";
            Form2.style.left = "800px";
            progress.style.width = "200px";
        }
        Next2.onclick = function() {
            Form2.style.left = "-800px";
            Form3.style.left = "40px";
            progress.style.width = "600px";
        }
        Back2.onclick = function() {
            Form2.style.left = "40px";
            Form3.style.left = "800px";
            progress.style.width = "400px";
        }
        Next3.onclick = function() {
            Form3.style.left = "-800px";
            Form4.style.left = "40px";
            progress.style.width = "800px";
        }
        Back3.onclick = function() {
            Form3.style.left = "40px";
            Form4.style.left = "800px";
            progress.style.width = "600px";
        }

        function checkFile() {
            var fileInput = document.getElementById('img_file');
            var nextButton = document.getElementById('next1');

            if (fileInput.files.length > 0) {
                nextButton.removeAttribute('disabled');
            } else {
                nextButton.setAttribute('disabled', 'disabled');
            }
        }

        function updateAvatarImage() {
            var avatarSpan = document.getElementById('avatar_span');
            var fileInput = document.getElementById('img_file');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    avatarSpan.style.backgroundImage = "url('" + e.target.result + "')";
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
        $('#img_file').on("change", function() {
            var file = $(this)[0].files[0];
            var form = new FormData();
            form.append('image', file);
            $.ajax({
                url: "Action/uploads.php",
                type: 'post',
                processData: false, // tell jQuery not to process the data
                contentType: false,
                enctype: "multipart/form-data",
                data: form,
            });
        });

        function Click_S() {
            var form1 = new FormData();
            var height = $('#height').val();
            var ethnicity = $('#ethnicity').val();
            var body_type = $('#body_type').val();
            var hair_color = $('#hair_color').val();
            var relationship_status = $('#relationship_status').val();
            var religion = $('#religion').val();
            var drink = $('#drink').val();
            var nature = $('#nature').val();
            var smoke = $('#smoke').val();
            var work_status = $('#work_status').val();
            var about_me = $('#about_me').val();
            form1.append('height', height);
            form1.append('ethnicity', ethnicity);
            form1.append('body_type', body_type);
            form1.append('hair_color', hair_color);
            form1.append('relationship_status', relationship_status);
            form1.append('religion', religion);
            form1.append('drink', drink);
            form1.append('nature', nature);
            form1.append('smoke', smoke);
            form1.append('work_status', work_status);
            form1.append('about_me', about_me);
            $.ajax({
                url: 'Action/encounters_process.php',
                type: 'post',
                processData: false, // tell jQuery not to process the data
                contentType: false,
                enctype: "multipart/form-data",
                data: form1,
                success: function(response) {
                  
                },
                error: function() {

                }
            });
            window.location.href = "<?php echo SITEURL; ?>home.php"
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    if (!isset($_SESSION['user-login'])) {
        header("Location:" . SITEURL . "login.php");
    }
    if (isset($_POST['logout'])) {
        $user_id = $_SESSION['user_id'];
        header("Location:" . SITEURL . "/Action/logout.php?logout_id={$user_id}");
    }
    ?>

</body>

</html>
<?php ob_end_flush(); ?>