<?php include "config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
	<title>All About Purwokerto - Home</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="asset/img/icon.png" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="asset/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css">
	<!-- CSS Document -->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style_more.css">
</head>
<body>
	<div class='topbar'>
		<div class='left'>
      <p>Selamat datang di Web All About Purwokerto!</p>
    </div>
    <div class="right">
      <i class="fa fa-phone"></i>+628293949494
      <i class="fa fa-envelope"></i>admin@aap.com
    </div>
	</div>
<!-- Header -->
	<div class="header">
		<img src="asset/img/logo.png" alt="header">
	</div>
<!-- Navigation -->
	<nav id='gvmenu'>
			<ul>
				<li class="nav <?php $pg = $_GET ['page']; if($pg == "") {echo "active";} else {echo "noactive";} ?>"><a href='../aap/'><i class="fa fa-home"></i> Home</a></li>
				<li class="nav <?php $pg = $_GET ['page']; if($pg == "wisata") {echo "active";} else {echo "noactive";} ?>"><a href='?page=wisata'>Wisata</a></li>
				<li class="nav <?php $pg = $_GET ['page']; if($pg == "kuliner") {echo "active";} else {echo "noactive";} ?>"><a href='?page=kuliner'>Kuliner</a></li>
				<li class="nav <?php $pg = $_GET ['page']; if($pg == "about") {echo "active";} else {echo "noactive";} ?>"><a href='?page=about'>About Us</a></li>
			</ul>

				<div class="search-container">
				<form autocomplete="off" action="?page=search" method="post" enctype="multipart/form-data">
					<div class="autocomplete">
						<input id="myInput" type="text" placeholder="Search.." name="search">
					</div>
					<button type="submit" name="cari"><i class="fa fa-search"></i></button>
				</form>
			</div>
			
			</nav>	


<!-- Wrapper -->

<div id="main-wrapper">

	<?php
        error_reporting(0);
        switch($_GET ['page']) {
            case 'wisata' : include "view/wisata.php"; break;
            case 'kuliner' : include "view/kuliner.php"; break;
            case 'about' : include "view/about.php"; break;
            case 'more' : include "view/more.php"; break;
            case 'search' : include "view/search.php"; break;
            case 'pemerintahan' : include "view/pemerintahan.php"; break;
            case 'tempat-ibadah' : include "view/tempat-ibadah.php"; break;
            case 'spbu' : include "view/spbu.php"; break;
            case 'komentar_act' : include "controller/komentar_act.php"; break;
            
                
            default : include "view/home.php";
        }
    ?>
</div>

  <div id="footer-wrapper">
    <div class="footer">
      <div class="column">
        <h2><i class="fa fa-user"></i> About</h2>
        <p>All About Purwokerto merupakan suatu web yang berdiri di bidang... <div id='button'><a href="?page=about">Read More</a></div>
</p>
      </div>
      <div class="column">
        <h2><i class="fa fa-address-card"></i> Contact</h2>
        <ul>
          <li><i class="fa fa-fw fa-envelope"></i>admin@aap.com</li>
          <li><i class="fa fa-fw fa-phone"></i>+628293949494</li>
          <li><i class="fa fa-fw fa-map-marker"></i>Purwokerto, Central Java, ID</li>
        </ul>
      </div>
      <div class="column">
        <h2><i class="fa fa-fw fa-plus-circle"></i> Fitur</h2>
        <ul>
          <li><i class="fa fa-fw fa-arrow-circle-right"></i>Easy Searching (Autocomplete)</li>
          <li><i class="fa fa-fw fa-arrow-circle-right"></i>Easy Publishing &amp; Editing</li>
          <li><i class="fa fa-fw fa-arrow-circle-right"></i>Modern Content Slider (Cat.)</li>
        </ul>
      </div>
      <div class="column">
        <h2><i class="fa fa-fw fa-user-circle-o"></i> Meta</h2>
        <ul>
          <li><li><a href="/aap/auth/"><i class="fa fa-fw fa-arrow-circle-right"></i>Login</a></li>
        </ul>
      </div>
    </div>

    <div class='scrolltop'>
      <div class='scroll icon' title="Back to Top"><i class="fa fa-fw fa-arrow-circle-up"></i></div>
  </div>
  
<!-- Footer Wrapper Started -->
	<div id="footer-wrapper2">
			<div class="footer2">
				<p>Copyright &copy; 2018 All About Purwokerto.</p>
			</div>
		</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="asset/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="asset/assets/js/vendor/popper.min.js"></script>
    <script src="asset/dist/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>

    <script type="text/javascript">
	    	$(window).scroll(function() {
	    if ($(this).scrollTop() > 50 ) {
	        $('.scrolltop:hidden').stop(true, true).fadeIn();
	    } else {
	        $('.scrolltop').stop(true, true).fadeOut();
	    }
	});
	$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".topbar").offset().top},"1000");return false})})
    </script>



<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the posting names in the website:*/

var searching = ["Small World", "Small World Purwokerto", "Baturraden Adventure Forest", "The Village", "The Village Purwokerto", "Kebun Raya Baturraden", "Wisata Pancuran 3", "Wisata Pancuran 7", "Telaga Sunyi", "Curug Telu", "Curug Bayan", "Curug Gomblang", "Curug Ceheng", "Curug Cipendok", "Bukit Tranggulasih", "Bukit Pandang Munggang", "Bukit Watu Meja", "Mendoan", "Purwokerto", "Banyumas", "Baturraden", "Alun-Alun Purwokerto", "Warunk Upnormal Purwokerto", "Waroeng Ora Umum Purwokerto"];


/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), searching);
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>