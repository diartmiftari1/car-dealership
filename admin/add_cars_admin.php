<?php
include '../db_connection.php';

include 'sidebar.php';
// Include the database configuration file
// ADD NEW POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileUpload'])) {
        //  $postname = $_SESSION['user_id'];
        $postname = $_POST['postname'];
        $marke = $_POST['marke'];
        $model = $_POST['sub_select'];
        $price = $_POST['price'];
        $year = $_POST['year'];
        $transission = $_POST['transission'];
        $displacement = $_POST['displacement'];
        $body_style = $_POST['body_style'];
        $mileage = $_POST['mileage'];
        $fuel_type = $_POST['fuel_type'];
        $file_names = array();

        foreach ($_FILES['fileUpload']['tmp_name'] as $key => $tmp_name) {
            // get the file name
            $file_name = $_FILES['fileUpload']['name'][$key];
            // move the file to the desired location
            move_uploaded_file($tmp_name, "./upload/$file_name");
            // add the file name to the array
            array_push($file_names, $file_name);
        }
        // convert the array of file names to a JSON string
        $file_names_json = json_encode($file_names);
        var_dump($file_names_json);
        // insert the JSON string into the database



        $query = mysqli_query($conn, "INSERT INTO posts (postname, marke, model, price, year, transission, displacement, body_style, mileage, fuel_type, file_name) 
VALUES ('$postname', '$marke', '$model','$price','$year','$transission','$displacement','$body_style',' $mileage','$fuel_type','$file_names_json')");

       
    }
    
}


?>

<div id="success-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSuccessModal()">&times;</span>
       <p> <?php 
             if ($query) {
                echo 'Post created successfully!' . '<br>';
            } else {
                echo 'There is somethin wrong. Post failed!' . '<br>';
            }
        ?></p>

    </div>
</div>

<div class="add_cars_admin">
    <div class="wrapper">
        <div class="add_cars_admin_wrapper">

            <div class="title">
                <h2>Add Cars Here</h2>
            </div>

            <form action="" method="post" id="form" name="form" enctype="multipart/form-data">

                <input type="hidden" name="id">
                <input type="text" name="postname" placeholder="Post name">
                <!-- <input type="text" name="marke" placeholder="Car Marke"> -->
                <!-- <label for="marke">Select a category:</label> -->
                <select id="marke" name="marke">
                    <option value="">-- Car Marke --</option>
                    <option value="MercedesBenz">Mercedes-Benz</option>
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Volvo">Volvo</option>
                </select>
                <div id="sub_select_container"></div>
                <!-- <input type="text" name="model" placeholder="Car Model"> -->
                <input type="number" name="price" placeholder="Price">
                <input type="date" name="year" placeholder="Year of Production">

                <select id="transission" name="transission">
                    <option value="">-- Transission --</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                </select>

                <input type="text" name="displacement" placeholder="Displacement">
                <input type="text" name="body_style" placeholder="Body Style">
                <input type="number" name="mileage" placeholder="Mileage">
                <input type="text" name="fuel_type" placeholder="Fuel Type">
                <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->

                <input type="file" name="fileUpload[]" multiple>

                <input type="submit" onclick="openSuccessModal()" class="submit_button" name="upload" value="Post">
            </form>
    </div>
    </div>
</div>


<script>
    var mainSelect = document.getElementById("marke");

    // Listen for changes to the main select element
    mainSelect.addEventListener("change", function() {
        // Get the selected value
        var selectedValue = mainSelect.options[mainSelect.selectedIndex].value;

        // Define the options for the sub select element
        var subSelectOptions = {
            MercedesBenz: [{
                    value: "E63",
                    text: "E63 AMG"
                },
                {
                    value: "C63",
                    text: "C63 AMG"
                },
                {
                    value: "S63",
                    text: "S63 AMG Coupe"
                },
                {
                    value: "G63",
                    text: "G63 AMG 6X6"
                }
            ],
            Audi: [{
                    value: "tts",
                    text: "TTS"
                },
                {
                    value: "r8",
                    text: "R8"
                },
                {
                    value: "rs6",
                    text: "RS6"
                },
                {
                    value: "rsq8",
                    text: "RSQ8"
                }
            ],
            BMW: [{
                    value: "m4",
                    text: "M4"
                },
                {
                    value: "335i",
                    text: "335i"
                },
                {
                    value: "m6",
                    text: "M6"
                },
                {
                    value: "435i",
                    text: "435i"
                }
            ],
            Volkswagen: [{
                    value: "golf1",
                    text: "Golf MK1"
                },
                {
                    value: "golf8",
                    text: "Golf MK8"
                },
                {
                    value: "touran",
                    text: "Touran"
                },
                {
                    value: "trock",
                    text: "T-Rock"
                }
            ],
            Volvo: [{
                    value: "xc90",
                    text: "XC 90"
                },
                {
                    value: "xc60",
                    text: "XC 60"
                },
                {
                    value: "v60",
                    text: "V 60"
                },
                {
                    value: "v90",
                    text: "V 90 Country Cross"
                }
            ]
        };

        // Get the sub select container
        var subSelectContainer = document.getElementById("sub_select_container");

        // Clear the existing sub select element
        subSelectContainer.innerHTML = "";

        // Check if there are options for the selected value
        if (subSelectOptions.hasOwnProperty(selectedValue)) {
            // Create the sub select element
            var subSelect = document.createElement("select");
            subSelect.id = "sub_select";
            subSelect.name = "sub_select";

            // Create the default option for the sub select element
            var defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "-- Car Model --";
            subSelect.appendChild(defaultOption);

            // Loop through the options for the selected value
            for (var i = 0; i < subSelectOptions[selectedValue].length; i++) {
                var option = document.createElement("option");
                option.value = subSelectOptions[selectedValue][i].value;
                option.text = subSelectOptions[selectedValue][i].text;
                subSelect.appendChild(option);
            }

            // Add the sub select element to the container
            subSelectContainer.appendChild(subSelect);
        }
    });


    function openSuccessModal() {
        document.getElementById("success-modal").style.display = "block";
    }

    function closeSuccessModal() {
        document.getElementById("success-modal").style.display = "none";
    }
    var form = document.getElementById("form");



$( "#form" ).submit(function( event ) {
  event.preventDefault();
}); 


// Parse the JSON string containing the file names
var file_names = JSON.parse('<?php echo $file_names_json ?>');

// Get the container element where the thumbnails will be displayed
var container = $('#thumbnails-container');

// Loop through the file names and create an <img> element for each
for (var i = 0; i < file_names.length; i++) {
  var img = $('<img>').attr('src', './upload/' + file_names[i]).addClass('thumbnail');
  container.append(img);
}

</script>