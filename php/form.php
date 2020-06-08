<!DOCTYPE html>
<html>
<head>
<?php include "connection.php";?>
<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap_form.css">
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
	
<style>
	.sec1_class_a{
	
	}
	
	.sign_up{
		color: #FFFFFF;
		text-align: center;
		padding-bottom: 20px;
		padding-top: 20px;
		font-size: 25px;
	}
	
	.intro {
		background-color: #FFC208;
	}
	
	.btn_control_1 {
		padding-right: 0px !important;
	}
	
	.btn_control_1a {
		background-color: #26A743;
		color: #FFFFFF;
	}
	
	.btn_control_2 {
		padding-left: 0px !important;
	}
	
	.btn_control_2a {
		background-color: #2F3A45;
		color: #FFFFFF;
	}
</style>
	
</head>


<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
echo $target_file;
?>



<?php 
//echo "abc";
if(isset($_POST['submit'])) {
	$f_name = $_POST["f_name"];
	$u_name = $_POST["u_name"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$country = $_POST["country"];
	$u_pass = $_POST["u_pass"];
	$u_cpass = $_POST["u_cpass"];
	$o_detail = $_POST["o_detail"];
	$file = $target_file;
	echo $query = "INSERT INTO signup_form(f_name, u_name, email, gender, country, u_pass, u_cpass, o_detail, file) VALUES ('$f_name', '$u_name', '$email', '$gender', '$country', '$u_pass', '$u_cpass' '$o_detail', '$file')";
	$result = mysqli_query($link, $query);
	//header("Location:index.html");
}



?>

<body>
	<div class="row">
		<div class="col-md-3 sec1_class_a">
			
		</div>
		<div class="col-md-6 sec2_class_a intro">
			<div class="col-md-12 sign_up"><b>SIGNUP FORM</b></div>
			<form action="" name="signup_form" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" id="full_name" name="f_name" placeholder="Full Name*" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="user_name" name="u_name" placeholder="Username*" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="e_mail" name="email" placeholder="Email*" required>
				</div>
				<div class="checkbox" required>
					<label><b>Gender:*</b></label>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
				</div>
				<div class="form-group">
					<select id="cars" class="form-control" name="country" required>
						<option value="Select_one">Select Country*</option>
						<option value="Afganistan">Afghanistan</option>
					   <option value="Albania">Albania</option>
					   <option value="Algeria">Algeria</option>
					   <option value="American Samoa">American Samoa</option>
					   <option value="Andorra">Andorra</option>
					   <option value="Angola">Angola</option>
					   <option value="Anguilla">Anguilla</option>
					   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
					   <option value="Argentina">Argentina</option>
					   <option value="Armenia">Armenia</option>
					   <option value="Aruba">Aruba</option>
					   <option value="Australia">Australia</option>
					   <option value="Austria">Austria</option>
					   <option value="Azerbaijan">Azerbaijan</option>
					   <option value="Bahamas">Bahamas</option>
					   <option value="Bahrain">Bahrain</option>
					   <option value="Bangladesh">Bangladesh</option>
					   <option value="Barbados">Barbados</option>
					   <option value="Belarus">Belarus</option>
					   <option value="Belgium">Belgium</option>
					   <option value="Belize">Belize</option>
					   <option value="Benin">Benin</option>
					   <option value="Bermuda">Bermuda</option>
					   <option value="Bhutan">Bhutan</option>
					   <option value="Bolivia">Bolivia</option>
					   <option value="Bonaire">Bonaire</option>
					   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
					   <option value="Botswana">Botswana</option>
					   <option value="Brazil">Brazil</option>
					   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
					   <option value="Brunei">Brunei</option>
					   <option value="Bulgaria">Bulgaria</option>
					   <option value="Burkina Faso">Burkina Faso</option>
					   <option value="Burundi">Burundi</option>
					   <option value="Cambodia">Cambodia</option>
					   <option value="Cameroon">Cameroon</option>
					   <option value="Canada">Canada</option>
					   <option value="Canary Islands">Canary Islands</option>
					   <option value="Cape Verde">Cape Verde</option>
					   <option value="Cayman Islands">Cayman Islands</option>
					   <option value="Central African Republic">Central African Republic</option>
					   <option value="Chad">Chad</option>
					   <option value="Channel Islands">Channel Islands</option>
					   <option value="Chile">Chile</option>
					   <option value="China">China</option>
					   <option value="Christmas Island">Christmas Island</option>
					   <option value="Cocos Island">Cocos Island</option>
					   <option value="Colombia">Colombia</option>
					   <option value="Comoros">Comoros</option>
					   <option value="Congo">Congo</option>
					   <option value="Cook Islands">Cook Islands</option>
					   <option value="Costa Rica">Costa Rica</option>
					   <option value="Cote DIvoire">Cote DIvoire</option>
					   <option value="Croatia">Croatia</option>
					   <option value="Cuba">Cuba</option>
					   <option value="Curaco">Curacao</option>
					   <option value="Cyprus">Cyprus</option>
					   <option value="Czech Republic">Czech Republic</option>
					   <option value="Denmark">Denmark</option>
					   <option value="Djibouti">Djibouti</option>
					   <option value="Dominica">Dominica</option>
					   <option value="Dominican Republic">Dominican Republic</option>
					   <option value="East Timor">East Timor</option>
					   <option value="Ecuador">Ecuador</option>
					   <option value="Egypt">Egypt</option>
					   <option value="El Salvador">El Salvador</option>
					   <option value="Equatorial Guinea">Equatorial Guinea</option>
					   <option value="Eritrea">Eritrea</option>
					   <option value="Estonia">Estonia</option>
					   <option value="Ethiopia">Ethiopia</option>
					   <option value="Falkland Islands">Falkland Islands</option>
					   <option value="Faroe Islands">Faroe Islands</option>
					   <option value="Fiji">Fiji</option>
					   <option value="Finland">Finland</option>
					   <option value="France">France</option>
					   <option value="French Guiana">French Guiana</option>
					   <option value="French Polynesia">French Polynesia</option>
					   <option value="French Southern Ter">French Southern Ter</option>
					   <option value="Gabon">Gabon</option>
					   <option value="Gambia">Gambia</option>
					   <option value="Georgia">Georgia</option>
					   <option value="Germany">Germany</option>
					   <option value="Ghana">Ghana</option>
					   <option value="Gibraltar">Gibraltar</option>
					   <option value="Great Britain">Great Britain</option>
					   <option value="Greece">Greece</option>
					   <option value="Greenland">Greenland</option>
					   <option value="Grenada">Grenada</option>
					   <option value="Guadeloupe">Guadeloupe</option>
					   <option value="Guam">Guam</option>
					   <option value="Guatemala">Guatemala</option>
					   <option value="Guinea">Guinea</option>
					   <option value="Guyana">Guyana</option>
					   <option value="Haiti">Haiti</option>
					   <option value="Hawaii">Hawaii</option>
					   <option value="Honduras">Honduras</option>
					   <option value="Hong Kong">Hong Kong</option>
					   <option value="Hungary">Hungary</option>
					   <option value="Iceland">Iceland</option>
					   <option value="Indonesia">Indonesia</option>
					   <option value="India">India</option>
					   <option value="Iran">Iran</option>
					   <option value="Iraq">Iraq</option>
					   <option value="Ireland">Ireland</option>
					   <option value="Isle of Man">Isle of Man</option>
					   <option value="Israel">Israel</option>
					   <option value="Italy">Italy</option>
					   <option value="Jamaica">Jamaica</option>
					   <option value="Japan">Japan</option>
					   <option value="Jordan">Jordan</option>
					   <option value="Kazakhstan">Kazakhstan</option>
					   <option value="Kenya">Kenya</option>
					   <option value="Kiribati">Kiribati</option>
					   <option value="Korea North">Korea North</option>
					   <option value="Korea Sout">Korea South</option>
					   <option value="Kuwait">Kuwait</option>
					   <option value="Kyrgyzstan">Kyrgyzstan</option>
					   <option value="Laos">Laos</option>
					   <option value="Latvia">Latvia</option>
					   <option value="Lebanon">Lebanon</option>
					   <option value="Lesotho">Lesotho</option>
					   <option value="Liberia">Liberia</option>
					   <option value="Libya">Libya</option>
					   <option value="Liechtenstein">Liechtenstein</option>
					   <option value="Lithuania">Lithuania</option>
					   <option value="Luxembourg">Luxembourg</option>
					   <option value="Macau">Macau</option>
					   <option value="Macedonia">Macedonia</option>
					   <option value="Madagascar">Madagascar</option>
					   <option value="Malaysia">Malaysia</option>
					   <option value="Malawi">Malawi</option>
					   <option value="Maldives">Maldives</option>
					   <option value="Mali">Mali</option>
					   <option value="Malta">Malta</option>
					   <option value="Marshall Islands">Marshall Islands</option>
					   <option value="Martinique">Martinique</option>
					   <option value="Mauritania">Mauritania</option>
					   <option value="Mauritius">Mauritius</option>
					   <option value="Mayotte">Mayotte</option>
					   <option value="Mexico">Mexico</option>
					   <option value="Midway Islands">Midway Islands</option>
					   <option value="Moldova">Moldova</option>
					   <option value="Monaco">Monaco</option>
					   <option value="Mongolia">Mongolia</option>
					   <option value="Montserrat">Montserrat</option>
					   <option value="Morocco">Morocco</option>
					   <option value="Mozambique">Mozambique</option>
					   <option value="Myanmar">Myanmar</option>
					   <option value="Nambia">Nambia</option>
					   <option value="Nauru">Nauru</option>
					   <option value="Nepal">Nepal</option>
					   <option value="Netherland Antilles">Netherland Antilles</option>
					   <option value="Netherlands">Netherlands (Holland, Europe)</option>
					   <option value="Nevis">Nevis</option>
					   <option value="New Caledonia">New Caledonia</option>
					   <option value="New Zealand">New Zealand</option>
					   <option value="Nicaragua">Nicaragua</option>
					   <option value="Niger">Niger</option>
					   <option value="Nigeria">Nigeria</option>
					   <option value="Niue">Niue</option>
					   <option value="Norfolk Island">Norfolk Island</option>
					   <option value="Norway">Norway</option>
					   <option value="Oman">Oman</option>
					   <option value="Pakistan">Pakistan</option>
					   <option value="Palau Island">Palau Island</option>
					   <option value="Palestine">Palestine</option>
					   <option value="Panama">Panama</option>
					   <option value="Papua New Guinea">Papua New Guinea</option>
					   <option value="Paraguay">Paraguay</option>
					   <option value="Peru">Peru</option>
					   <option value="Phillipines">Philippines</option>
					   <option value="Pitcairn Island">Pitcairn Island</option>
					   <option value="Poland">Poland</option>
					   <option value="Portugal">Portugal</option>
					   <option value="Puerto Rico">Puerto Rico</option>
					   <option value="Qatar">Qatar</option>
					   <option value="Republic of Montenegro">Republic of Montenegro</option>
					   <option value="Republic of Serbia">Republic of Serbia</option>
					   <option value="Reunion">Reunion</option>
					   <option value="Romania">Romania</option>
					   <option value="Russia">Russia</option>
					   <option value="Rwanda">Rwanda</option>
					   <option value="St Barthelemy">St Barthelemy</option>
					   <option value="St Eustatius">St Eustatius</option>
					   <option value="St Helena">St Helena</option>
					   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
					   <option value="St Lucia">St Lucia</option>
					   <option value="St Maarten">St Maarten</option>
					   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
					   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
					   <option value="Saipan">Saipan</option>
					   <option value="Samoa">Samoa</option>
					   <option value="Samoa American">Samoa American</option>
					   <option value="San Marino">San Marino</option>
					   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
					   <option value="Saudi Arabia">Saudi Arabia</option>
					   <option value="Senegal">Senegal</option>
					   <option value="Seychelles">Seychelles</option>
					   <option value="Sierra Leone">Sierra Leone</option>
					   <option value="Singapore">Singapore</option>
					   <option value="Slovakia">Slovakia</option>
					   <option value="Slovenia">Slovenia</option>
					   <option value="Solomon Islands">Solomon Islands</option>
					   <option value="Somalia">Somalia</option>
					   <option value="South Africa">South Africa</option>
					   <option value="Spain">Spain</option>
					   <option value="Sri Lanka">Sri Lanka</option>
					   <option value="Sudan">Sudan</option>
					   <option value="Suriname">Suriname</option>
					   <option value="Swaziland">Swaziland</option>
					   <option value="Sweden">Sweden</option>
					   <option value="Switzerland">Switzerland</option>
					   <option value="Syria">Syria</option>
					   <option value="Tahiti">Tahiti</option>
					   <option value="Taiwan">Taiwan</option>
					   <option value="Tajikistan">Tajikistan</option>
					   <option value="Tanzania">Tanzania</option>
					   <option value="Thailand">Thailand</option>
					   <option value="Togo">Togo</option>
					   <option value="Tokelau">Tokelau</option>
					   <option value="Tonga">Tonga</option>
					   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
					   <option value="Tunisia">Tunisia</option>
					   <option value="Turkey">Turkey</option>
					   <option value="Turkmenistan">Turkmenistan</option>
					   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
					   <option value="Tuvalu">Tuvalu</option>
					   <option value="Uganda">Uganda</option>
					   <option value="United Kingdom">United Kingdom</option>
					   <option value="Ukraine">Ukraine</option>
					   <option value="United Arab Erimates">United Arab Emirates</option>
					   <option value="United States of America">United States of America</option>
					   <option value="Uraguay">Uruguay</option>
					   <option value="Uzbekistan">Uzbekistan</option>
					   <option value="Vanuatu">Vanuatu</option>
					   <option value="Vatican City State">Vatican City State</option>
					   <option value="Venezuela">Venezuela</option>
					   <option value="Vietnam">Vietnam</option>
					   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
					   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
					   <option value="Wake Island">Wake Island</option>
					   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
					   <option value="Yemen">Yemen</option>
					   <option value="Zaire">Zaire</option>
					   <option value="Zambia">Zambia</option>
					   <option value="Zimbabwe">Zimbabwe</option>
					</select>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="pass" name="u_pass" placeholder="Password*" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="c_pass" name="u_cpass" placeholder="Confirm Password*" required>
				</div>
				<div class="form-group">
					<textarea type="text" class="form-control" id="other_detail" name="o_detail" placeholder="Other Details"></textarea>
				</div>
				<div class="form-group" required>
					<label><b>PICTURE*</b></label><br>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				<div class="form-group row">
					<div class="col-md-6 btn_control_1">
						<button type="submit" class="btn btn-default col-md-12 btn_control_1a" name="submit" value="submit">Submit</button>
					</div>
					<div class="col-md-6 btn_control_2">
						<button type="button" class="btn btn-default col-md-12 btn_control_2a" >Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
	
	
	<script>
		$(function() {
		  $("form[name='signup_form']").validate({
			rules: {
			  f_name: {
				required: true,
				color: #FF0000,
			  }
			  u_name: "required",
			  email: {
				required: true,
				email: true
			  },
			  u_pass: {
				required: true,
				minlength: 5
			  },
			  u_cpass: {
				required: true,
				minlength: 5
			  },
			  gender: "required",
			  country: "required",
			  fileToUpload: "required",
			},
			messages: {
			  f_name: "Please enter your correct Full Name",
			  u_name: "Please enter your correct Username",
			  pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			  },
			  c_pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			  },
			  email: "Please enter a valid email address"
			},
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		});
	</script>
	
	
</body>
</html>