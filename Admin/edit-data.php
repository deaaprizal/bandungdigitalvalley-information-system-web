	<?php
include("koneksi.php");
include("ses.php");
session_start();
$role_session = $_SESSION['role'];
if($_SESSION['role']!="superuser"){
	?>
<script>document.location='index.php'</script>
<?php } ?>
<?php
$email = $_GET['email'];
$query = mysql_query("SELECT * FROM tb_user WHERE email='$email' ");
        $data = mysql_fetch_array($query);

            $nama = $data['nama'];
            $profesi = $data['profesi'];
            $perusahaan = $data['perusahaan'];
            //$mac_address = $data['MAC_ADDRESS'];
            //$waktu_login = $data['WAKTU_LOGIN'];
            $gender = $data['gender'];
            $tanggal_lahir = $data['tgl_lahir'];
            $kota = $data['kota'];
            $email = $data['email'];
            $pass = $data['pass'];
            $no_hp = $data['no_hp'];
            $bagian = $data['bagian'];
            $keahlian = $data['keahlian'];
            $linkedin = $data['linkedln'];
            $instagram = $data['instagram'];
            $facebook = $data['facebook'];
            $foto = $data['foto'];
						$join_date = $data['join_date'];
?>

<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>BDV Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="../themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">
<!-- /build -->

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/pmd-datetimepicker.css" />


<!-- Select2 css-->
<!-- build:[href] components/select2/css/ -->
<link rel="stylesheet" type="text/css" href="../components/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="../components/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../components/select2/css/pmd-select2.css" />
<!-- /build -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">

				</div>


            </div> <!-- End notifications -->
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>
		  <a href="index.php" class="navbar-brand">
		  	BDV Administrator
		  </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">

		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="../themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">BDV Admin</div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</li><!-- End user info -->

		<li>
			<a class="pmd-ripple-effect" href="index.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body">Dashboard</span>
			</a>
		</li>


	<li>
		<a class="pmd-ripple-effect" href="data-wifi.php">
			<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
			<span class="media-body">Data WIFI</span>
			<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
		</a>

	</li>

		<li>
      <a class="pmd-ripple-effect" href="data-member.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Member</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>
		</li>
			<li>
			<a class="pmd-ripple-effect" href="data-memberlama.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Member Lama</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>

		<li>
			<a class="pmd-ripple-effect" href="data-absensi.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Absensi</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>

	        <?php
        if($role_session == "superuser"){ ?>
            <li>
                <a class="pmd-ripple-effect" href="data-privilege.php">
                    <i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
                    <span class="media-body">Data Privilege User</span>
                    <div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
                </a>

            </li>
        <?php } ?>



	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content inner-page">

	<!--tab start-->
	<div class="container-fluid full-width-container about">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Edit Data Member</span>
		</h1><!-- End Title -->

		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="data-member.php">Data Member</a></li>
		  <li class="active">Edit Data Member</li>
		</ol><!--breadcrum end-->

		<div class="page-content profile-edit dashboard">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">
					<div class="row">
			<form class="form-horizontal" method="POST" action="admin_update_userP.php" enctype="multipart/form-data">
						<div class="col-lg-2 custom-col-2">
						<div data-provides="fileinput" class="fileinput fileinput-new col-lg-3">
							<div data-trigger="fileinput" class="fileinput-preview thumbnail img-circle img-responsive">

							<?php
							//if else jika ada user yang belum upload foto
							if(empty($foto)){
							?>
								<img src="../themes/images/upload.jpg" alt="Kosong">
							<?php
							}else{
							?>
								<img src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="Belum Ada Foto">
							<?php
							}
							?>

							</div>
							<div class="action-button">
								<span class="btn btn-default btn-raised btn-file ripple-effect">
									<span class="fileinput-new"><i class="material-icons md-light pmd-xs">add</i></span>
									<span class="fileinput-exists"><i class="material-icons md-light pmd-xs">mode_edit</i></span>
									<input type="file" name="foto">
								</span>
								<a data-dismiss="fileinput" class="btn btn-default btn-raised btn-file ripple-effect fileinput-exists" href="javascript:void(0);"><i class="material-icons md-light pmd-xs">close</i></a>
							</div>
						</div>
					</div>
						<div class="col-lg-5 custom-col-5">
							<h3 class="heading">Personal Information</h3>
							<div class="row">


										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="nama">Nama</label>
										  <div class="col-sm-9">
											<input type="text" name="nama" class="form-control empty" id="nama" placeholder="" value="<?php echo $nama;?>">
										  </div>
										</div>



                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Profesi</label>
										  <div class="col-sm-9">
											<select class="select-simple form-control pmd-select2" style="width: 100%;" name="profesi" id="profesi" required>
					                        <?php
					                            if($profesi=="student")
					                            {
					                        ?>
					                        <option value="student" selected=""><?php echo ucwords($profesi);?></option>
					                        <option value="startup">Startup</option>
					                        <option value="freelance">Freelance</option>
					                        <option value="employee">Employee</option>
					                        <?php
					                            }
					                            elseif($profesi=="startup")
					                            {
					                        ?>
					                        <option value="startup" selected=""><?php echo ucwords($profesi);?></option>
					                        <option value="student">Student</option>
					                        <option value="freelance">Freelance</option>
					                        <option value="employee">Employee</option>
					                        <?php
					                            }
					                            elseif($profesi=="freelance")
					                            {
					                        ?>
					                        <option value="freelance" selected=""><?php echo ucwords($profesi);?></option>
					                        <option value="student">Student</option>
					                        <option value="startup">Startup</option>
					                        <option value="employee">Employee</option>
					                        <?php
					                            }else
					                            {
					                        ?>
					                        <option value="<?php echo $profesi;?>"><?php echo $profesi;?></option>
					                        <option value="student">Student</option>
					                        <option value="startup">Startup</option>
					                        <option value="freelance">Freelance</option>
					                        <?php
					                            }
					                        ?>
					                    </select>
										  </div>
										</div>


										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Bagian</label>
										  <div class="col-sm-9">
											<select class="select-simple form-control pmd-select2" style="width: 100%;" name="bagian" required>

											<?php if($bagian == "hustler"){
												?>
													 <option value="hustler" selected>Hustler</option>
					                        <option value="hacker">Hacker</option>
					                        <option value="hipster">Hipster</option>
					                        <option value="other">Other</option>
					                        <?php
											}else if($bagian == "hacker"){
													?>
											<option value="hustler">Hustler</option>
					                        <option value="hacker" selected>Hacker</option>
					                        <option value="hipster">Hipster</option>
					                        <option value="other">Other</option>
					                        <?php
											}else if($bagian == "hipster"){
														?>
											<option value="hustler">Hustler</option>
					                        <option value="hacker">Hacker</option>
					                        <option value="hipster" selected>Hipster</option>
					                        <option value="other">Other</option>
					                        <?php
											}else{
													?>
											<option value="hustler">Hustler</option>
					                        <option value="hacker">Hacker</option>
					                        <option value="hipster">Hipster</option>
					                        <option value="other" selected>Other</option>
					                        <?php
											}?>
					                       
					                    </select>
					                </div>
					            </div>

                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="perusahaan">Perusahaan</label>
										  <div class="col-sm-9">
											<input type="text" name="perusahaan" class="form-control empty" id="perusahaan" placeholder="" value="<?php echo $perusahaan;?>">
										  </div>
										</div>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Gender</label>
										  <div class="col-sm-9">
											<p class="form-control-static"><strong><?php echo $gender;?></strong></p>
										  </div>
										</div>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Tanggal Lahir</label>
										  <div class="col-sm-9">
											<input type="text" name="tanggal_lahir" id="datetimepicker-date" class="form-control" value="<?php echo $tanggal_lahir;?>">
										  </div>
										</div>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="kota">Kota</label>
										  <div class="col-sm-9">
											<input type="text" name="kota" class="form-control empty" id="kota" placeholder="" value="<?php echo $kota;?>">
										  </div>
										</div>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="nama">Email</label>
										  <div class="col-sm-9">
											<input type="text" name="email" class="form-control empty" id="email" placeholder="" value="<?php echo $email;?>" readonly>
										  </div>
										</div>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="nama">No. Handphone</label>
										  <div class="col-sm-9">
											<input type="text" name="no_hp" class="form-control empty" id="noHp" placeholder="" value="<?php echo $no_hp;?>">
										  </div>
										</div>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Keahlian</label>
										  <div class="col-sm-9">
											<select class="select-simple form-control pmd-select2" style="width: 100%;" name="keahlian" id="profesi" onchange="if
                          (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};" name="keahlian" id="keahlian" required>
                          <?php
                              if($bagian=="hustler")
                              {
                          ?>
                        <option value="management_business">Management Business</option>
									<option value="finance">Finance</option>
									<option value="marketing">Marketing</option>
									<option value="digital_marketing">Digital Marketing</option>
									<option value="human_resource">Human Resource</option>
									<option value="content_writer">Content Writer</option>
									<?php
                              }
                              elseif ($bagian=="hacker")
                              {
                          ?>
                              <option value="web_developer">Web Developer</option>
                  <option value="frontend_developer">FrontEnd Developer</option>
                  <option value="backend_developer">Back End Developer</option>
                  <option value="android_developer">Android Developer</option>
                  <option value="ios_developer">Ios Developer</option>
                  <option value="internet_of_things">Internet Of Things</option>
                  <option value="game_developer">Game Developer</option>
                  <option value="seo_specialist">SEO Specialist</option>
                  <option value="it_networking">IT Networking</option>
                  <option value="it_security">IT Security</option>
                          <?php
                              }elseif ($bagian=="hipster")
                              {
                          ?>
                          <option value="ui_designer">UI Designer</option>
                  <option value="ux_designer">UX Designer</option>
                  <option value="graphic_designer">Graphic Designer</option>
                  <option value="video_editor">Video Editor</option>
                  <option value="animator">Animator</option>
                          <?php
                              }elseif ($bagian=="other")
                              {
                          ?>
                           <option value="management_business">Management Business</option>
									<option value="finance">Finance</option>
									<option value="marketing">Marketing</option>
									<option value="digital_marketing">Digital Marketing</option>
									<option value="human_resource">Human Resource</option>
									<option value="content_writer">Content Writer</option>
                         		
                                    <option value="web_developer">Web Developer</option>
                  <option value="frontend_developer">FrontEnd Developer</option>
                  <option value="backend_developer">Back End Developer</option>
                  <option value="android_developer">Android Developer</option>
                  <option value="ios_developer">Ios Developer</option>
                  <option value="internet_of_things">Internet Of Things</option>
                  <option value="game_developer">Game Developer</option>
                  <option value="seo_specialist">SEO Specialist</option>
                  <option value="it_networking">IT Networking</option>
                  <option value="it_security">IT Security</option>
                         		 <option value="ui_designer">UI Designer</option>
                  <option value="ux_designer">UX Designer</option>
                  <option value="graphic_designer">Graphic Designer</option>
                  <option value="video_editor">Video Editor</option>
                  <option value="animator">Animator</option>


                          <?php
                              }
                          ?>

                          </select>
                          <input type="text" name="other" class="form-control" style="visibility:hidden;" placeholder="Keahlian Lainnya ..">
										  </div>
										</div>

							</div>
						</div>
						<div class="col-lg-5 custom-col-5">
							<h3 class="heading">Sosial Media</h3>
							<div class="row">
								  <form class="form-horizontal">
								  <fieldset>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="linkedln">Likedln</label>
										  <div class="col-sm-9">
											<input type="text" name="linkedin" class="form-control empty" id="linkedln" placeholder="" value="<?php echo $linkedin;?>">
										  </div>
										</div>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="instagram">Instagram</label>
										  <div class="col-sm-9">
											<input type="text" name="instagram" class="form-control empty" id="instagram" placeholder="" value="<?php echo $instagram;?>">
										  </div>
										</div>

                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="facebook">Facebook</label>
										  <div class="col-sm-9">
											<input type="text" name="facebook" class="form-control empty" id="facebook" placeholder="" value="<?php echo $facebook;?>">
										  </div>
										</div>

								  </fieldset>
							</div>
						</div>

						<div class="col-lg-5 custom-col-5">
							<h3 class="heading">Data</h3>
							<div class="row">
								  <form class="form-horizontal">
								  <fieldset>
                    <div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="linkedln">Join Date</label>
										  <div class="col-sm-9">
											<input type="text" name="linkedin" class="form-control empty" id="linkedln" placeholder="" value="<?php echo $join_date;?>" disabled>
										  </div>
										</div>
								  </fieldset>
							</div>
						</div>

					</div>
					<div class="row">
							<div class="col-sm-12" align="center">
							<button type="submit" class="btn btn-primary pmd-ripple-effect">Update</button>
							<a href="delete-member.php?permission=true&mailid=<?php echo $email?>" class="btn btn-danger btn-link pmd-ripple-effect" onclick="return confirm('Yakin delete user ini?')">Delete</a>
							<a href="data-member.php" class="btn btn-default btn-link pmd-ripple-effect">Back</a>
							</div>
						</div>
          	</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- tab end -->

</div><!-- content area end -->

<!-- Scripts Starts -->
<script src="../assets/js/jquery-1.12.2.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});
</script>
<script type="text/javascript">
(function() {
  "use strict";
  var toggles = document.querySelectorAll(".c-hamburger");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
</script>

<script src="../assets/js/propeller.min.js"></script>

<!-- Javascript for revenue progressbar animation effect-->
<script>
	function progress(percent, $element) {
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	}

	progress(50, $('.cash-progressbar'));
	progress(30, $('.card-progressbar'));
	progress(60, $('.wallet-progressbar'));
	progress(40, $('.credit-progressbar'));
	progress(10, $('.other-progressbar'));
</script>
<!-- Javascript for revenue progressbar animation effect-->


<!--circle chart-->
<script src="../themes/js/circles.min.js"></script>
<script>
  <!-- javascript for total sales chart-->
		var colors = [
			['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
		], circles = [];
		for (var i = 1; i <= 3; i++) {
			var child = document.getElementById('gender-' + i),
			percentage = child.val;

			circles.push(Circles.create({
				id:         child.id,
				value:		percentage,
				radius:     50,
				width:      7,
				colors:     colors[i - 1],
 				textClass:           'gender-text',
  				styleText:           true
			}));
		}
  <!-- javascript for total sales chart-->
	</script>

	<script>
	  <!-- javascript for total sales chart-->
			var colors = [
				['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
			], circles = [];
			for (var i = 1; i <= 3; i++) {
				var child = document.getElementById('profesi-' + i),
				percentage = child.val;

				circles.push(Circles.create({
					id:         child.id,
					value:		percentage,
					radius:     50,
					width:      7,
					colors:     colors[i - 1],
	 				textClass:           'profesi-text',
	  				styleText:           true
				}));
			}
	  <!-- javascript for total sales chart-->
		</script>

		<script>
		  <!-- javascript for total sales chart-->
				var colors = [
					['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
				], circles = [];
				for (var i = 1; i <= 4; i++) {
					var child = document.getElementById('usia-' + i),
					percentage = child.val;

					circles.push(Circles.create({
						id:         child.id,
						value:		percentage,
						radius:     50,
						width:      7,
						colors:     colors[i - 1],
		 				textClass:           'usia-text',
		  				styleText:           true
					}));
				}
		  <!-- javascript for total sales chart-->
			</script>

<!--staked column chart for payment-->
<script src="../themes/js/highcharts.js"></script>
<script src="../themes/js/highcharts-more.js"></script>

<!-- Payment chart js-->
<script>
$(function paymentChart(){
    $('#payment-chart').highcharts({
        chart: {
            type: 'column'
        },
		colors: "#00719d,#2ab7ee".split(","),
        title: {
            text: 'Last 10 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: {
            categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7', '18-7']
        },
        yAxis: {
            min: 0,
			title: {
					text: "Amount"
			},
			stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
					}
				}
			},
        legend: {
            enabled: !0,
            align: "right",
            layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}',
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
		 credits: {
            enabled: false,
        },
        series: [{
            name: 'Card',
            data: [25000, 50000, 75000, 75000, 60000, 70000, 10000, 2500, 5000, 25000]
        }, {
            name: 'Wallet',
            data: [75000, 50000, 25000, 25000, 30000, 30000, 90000, 25000, 3000, 50000]
        }]

    });
});
</script>

<!--staked column chart for sms details-->
<script>
$( function smsChart() {
    $('#sms-chart').highcharts({
        chart: {
            zoomType: 'none'
        },
		colors: "#e75c5c,#9159b8".split(","),
         title: {
            text: 'Last 7 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: [{
            categories: ['3-7', '4-7', '5-7', '6-7', '7-7', '8-7', '9-7']
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'User Count',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Total Days',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
		legend: {
            enabled: !0,
            align: "right",
			layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute",
                width: "12px",
                height: "12px"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },

        tooltip: {
            shared: true,
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
		 credits: {
            enabled: false,
        },

        series: [{
            name: 'Total Days',
            type: 'spline',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: '
            }
        }, {
            name: 'Total Days error',
            type: 'errorbar',
            yAxis: 1,
            data: [[48, 51], [68, 73], [92, 110], [128, 136], [140, 150], [171, 179], [135, 143]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }, {
            name: 'User Count',
            type: 'column',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}</b> '
            }
        }, {
            name: 'User Count error',
            type: 'errorbar',
            data: [[6, 8], [5.9, 7.6], [9.4, 10.4], [14.1, 15.9], [18.0, 20.1], [21.0, 24.0], [23.2, 25.3]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }]
    });
});
</script>
<!-- Scripts Ends -->
<!-- Javascript for Datepicker -->
<script type="text/javascript" language="javascript" src="../components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="../components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script>
	// Linked date and time picker
	// start date date and time picker
	$('#datepicker-default').datetimepicker();
	$(".auto-update-year").html(new Date().getFullYear());
  $('#datetimepicker-date').datetimepicker({
     format: 'YYYY-MM-DD'
   });
</script>

</script>

<!-- Select2 js-->
<!-- build:[src] components/select2/js/ -->
<script type="text/javascript" src="../components/select2/js/select2.full.js"></script>
<!-- /build -->

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {
		<!-- Simple Selectbox -->
		$(".select-simple").select2({
			theme: "bootstrap",
			minimumResultsForSearch: Infinity,
		});
		<!-- Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		<!-- Select Multiple Tags -->
		$(".select-tags").select2({
			tags: false,
			theme: "bootstrap",
		});
		<!-- Select & Add Multiple Tags -->
		$(".select-add-tags").select2({
			tags: true,
			theme: "bootstrap",
		});
	});
</script>
<!-- build:[src] components/select2/js/ -->
<script type="text/javascript" src="../components/select2/js/pmd-select2.js"></script>
<!-- /build -->

</body>
</html>
