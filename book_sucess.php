<?php include_once('header.php'); ?>
<?php 
	if(isset($_SESSION['booking_last_id'])){
		$booking_last_id = $_SESSION['booking_last_id'];
		
		$sql = "SELECT b.booking_id,b.vehicle_id,b.area_id,b.entrydate,b.exitdate,b.entrytime,b.exittime,b.vehicle_no,b.slot_details_id,b.slot_capacity_id,b.user_id,vt.vehicle_id,vt.vehicle_name,a.area_id,a.area_name,r.registration_id,r.fname,r.lname,r.address,r.emailid,r.phnno,sd.slot_details_id,sd.slot_details_name,sc.slot_capacity_id,sc.slot_capacity_name FROM booking b LEFT JOIN vehicletype vt ON b.vehicle_id= vt.vehicle_id LEFT JOIN area a ON b.area_id=a.area_id  LEFT JOIN resigtration r ON b.user_id =r.registration_id LEFT JOIN slot_details sd ON b.slot_details_id =sd.slot_details_id LEFT JOIN slot_capacity sc ON b.slot_capacity_id = sc.slot_capacity_id  WHERE b.booking_id=".$booking_last_id;
		  

	}else{

	}
?>
<section class="banner--section">
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                <div class="banner--item bg--overlay" style="background-image: url(s1.jpg);height: 100%; 
                background-position: center;background-repeat: no-repeat;background-size: cover;">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Welcome to</h1>
                                                <h2 class="h1"><strong>Intelligent Parking System</strong></h2> </div>
                                            <div class="desc">
                                                <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                            </div>
                                            <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner--item bg--overlay" style="background-image: url(s2.jpg);
                height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Welcome to</h1>
                                                <h2 class="h1"><strong>Intelligent Parking System</strong></h2> </div>
                                            <div class="desc">
                                                <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                            </div>
                                            <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner--item bg--overlay" style="background-image: url(b.jpg);height: 100%; 
                background-position: center;background-repeat: no-repeat; background-size: cover;">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Welcome to</h1>
                                                <h2 class="h1"><strong>Intelligent Parking System</strong></h2> </div>
                                            <div class="desc">
                                                <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                                    </div>
                                            <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <section class="domain-search--section pt--70 pb--70"  >
            <div class="container">
                <div class="section--title pb--30 text-center">
                    <h2 class="h1 text-uppercase">Search Your Nearby places Here</h2>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        </div>
                    </div>
                </div>
                <div class="domain-search--form">
                    <form action="http://billing.ywhmcs.com/domainchecker.php?systpl=CloudSky" method="post" data-form="validate">
                        <div class="row gutter--0">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-group">
                                    <input type="text" name="domain" placeholder=" Type Your Nearby places Here" class="form-control" required>
                                    <div class="input-group-addon">
                                      <!--  <select name="ext" class="btn-default active">
                                            <option value=".com" selected>.com</option>
                                            <option value=".net">.net</option>
                                            <option value=".org">.org</option>
                                        </select> -->
                                      <button type="submit" class="btn btn-default active">Search<i class="ml--8 fa fa-search"></i></button>
                                    </div>
                                </div>
                                <div class="extras">
                                   <!-- <ul class="nav">
                                        <li><span data-scroll-reveal="bottom">Instant Activation</span></li>
                                        <li><span data-scroll-reveal="bottom">Complete DNS Control</span></li>
                                        <li><span data-scroll-reveal="bottom">No Hidden Cost</span></li>
                                    </ul>  -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<?php include_once('footer.php'); ?>