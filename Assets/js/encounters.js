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
Next1.onclick = function () {
    Form1.style.left = "-800px";
    Form2.style.left = "40px";
    progress.style.width = "400px";
}
Back1.onclick = function () {
    Form1.style.left = "40px";
    Form2.style.left = "800px";
    progress.style.width = "200px";
}
Next2.onclick = function () {
    Form2.style.left = "-800px";
    Form3.style.left = "40px";
    progress.style.width = "600px";
}
Back2.onclick = function () {
    Form2.style.left = "40px";
    Form3.style.left = "800px";
    progress.style.width = "400px";
}
Next3.onclick = function () {
    Form3.style.left = "-800px";
    Form4.style.left = "40px";
    progress.style.width = "800px";
}
Back3.onclick = function () {
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

        reader.onload = function (e) {
            avatarSpan.style.backgroundImage = "url('" + e.target.result + "')";
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
$('#img_file').on("change", function () {
    var file = $(this)[0].files[0];
    var form = new FormData();
    form.append('image', file);
    $.ajax({
        url: "/Action/encounters_process.php",
        type: 'post',
        processData: false, // tell jQuery not to process the data
        contentType: false,
        enctype: "multipart/form-data",
        data: form,
        success: function (response) {
            alert("THành Công")
        },
        error: function () {

        }
    });
});

function Click_S() {
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
    $.ajax({
        url: '/Action/encounters_process.php',
        type: 'post',
        processData: false, // tell jQuery not to process the data
        contentType: false,
        enctype: "multipart/form-data",
        data: {
            height: height,
            ethnicity: ethnicity,
            body_type: body_type,
            hair_color: hair_color,
            relationship_status: relationship_status,
            religion: religion,
            drink: drink,
            nature: nature,
            smoke: smoke,
            work_status: work_status,
            about_me: about_me,
        },
        success: function (response) {

        },
        error: function () {

        }
    });
}