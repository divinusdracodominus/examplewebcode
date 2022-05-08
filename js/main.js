$(document).ready(function(){
    $("#m_button").click(function(){
        $("#mobilemenu").slideToggle();
	$("#middlediv").slideToggle();
    });
});
function hint(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				document.getElementById("hint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
}
function links() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("login").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "functions.php?q=links", true);
        xmlhttp.send();
}
function runcode(str){
    if (str.length == 0) { 
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("file").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "functions.php?q=loadfile&file=" + str, true);
        xmlhttp.send();
    }
}
$(document).ready(function() {
  $("button").click(function() {
    $("#content").toggleClass("active");
  });
});
function logout() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
		window.alert("you are now logged out");
		location.replace("/login");
            }
        };
        xmlhttp.open("GET", "functions.php?q=logout", true);
        xmlhttp.send();
}
function terminal() {
var str = document.getElementById("command").value;
    if (str.length == 0) { 
        document.getElementById("output").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTMLthis.responseText;
            }
        };
        xmlhttp.open("GET", "terminal.php?command=" + str, true);
        xmlhttp.send();
    }
}
$(document).ready(function(){
    var width = screen.width;
	if(width < 700){
    $("#dropdown1").click(function(){
        $("#dropdown-content1").slideToggle();
		$("#dropdown-content2").slideUp();
		$("#dropdown-content3").slideUp();
		$("#dropdown-content4").slideUp();
    });
    }else{
    $("#dropdown1").hover(function(){
    $("#dropdown-content1").toggle();
    });
    }
});
$(document).ready(function(){
    var width = screen.width;
	if(width < 700){
    $("#dropdown2").click(function(){
        $("#dropdown-content2").slideToggle();
		$("#dropdown-content3").slideUp();
		$("#dropdown-content1").slideUp();
		$("#dropdown-content4").slideUp();
    });
    }else{
    $("#dropdown2").hover(function(){
    $("#dropdown-content2").toggle();
    });
    }
});
$(document).ready(function(){
	var width = screen.width;
	if(width < 700){
    $("#dropdown3").click(function(){
        $("#dropdown-content3").slideToggle();
		$("#dropdown-content2").slideUp();
		$("#dropdown-content1").slideUp();
		$("#dropdown-content4").slideUp();
    });
    }else{
    $("#dropdown3").hover(function(){
    $("#dropdown-content3").toggle();
    });
    }
});
$(document).ready(function(){
    $("#content").click(function(){
        $("#dropdown-content2").slideUp();
	$("#dropdown-content1").slideUp();
	$("#dropdown-content3").slideUp();
	$("#dropdown-content4").slideUp();
    });
});
$(document).ready(function(){
    var width = screen.width;
	if(width < 700){
    $("#dropdown4").click(function(){
        $("#dropdown-content4").slideToggle();
		$("#dropdown-content2").slideUp();
		$("#dropdown-content1").slideUp();
		$("#dropdown-content3").slideUp();
    });
    }else{
    $("#dropdown4").hover(function(){
    $("#dropdown-content4").toggle();
    });
    }
});
function check() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == "false"){
			location.replace("/login");
		}
            }
        };
        xmlhttp.open("GET", "functions.php?q=check", true);
        xmlhttp.send();
}
$(document).ready(function(){
	$("#lca").click(function(){
		$("#leftadd").hide();
	});
});
$(document).ready(function(){
	$("#rca").click(function(){
		$("#rightadd").hide();
	});
});
/*function changeimage(){
	var images = ["spring.jpg", "island.jpg", "fall.jpg", "forest.jpg"];
	var i = 0;
	setInterval(function() {
      document.body.style.backgroundImage = "url(" + images[i] + ")";
      i = i + 1;
      if (i == images.length) {
        i =  0;
      }
}, 10000);
}*/
function changeimage(){
var images = ["spring.jpg", "island.jpg", "fall.jpg", "forest.jpg", "darkforest.jpg", "galaxy.jpg", "mountain.jpg", "ocean.png", "castle.jpg", "ruins.jpg", "bamboo.jpeg"];
	var i = Math.round(Math.random() * 1000) % 10;
	document.body.style.backgroundImage = "url(images/" + images[i] + ")";
}
/*
<div id="header">
			<center>
			<div id="menu">
				<div class="dropdown" id="dropdown1">
				<span>Home</span>
  						<div class="dropdown-content" id="dropdown-content1">
    					<a href="/index.html" class="item">Home</a>
    					<a href="/structure" class="item">structure</a>
    					<a href="/goal" class="item">goal</a>
  					</div>
				</div>
				<div class="dropdown" id="dropdown2">
				<span>Community</span>
  						<div class="dropdown-content" id="dropdown-content2">
    					<a href="/clubs" class="item">clubs</a>
    					<a href="/unions" class="item">unions</a>
  					</div>
				</div>
				<div class="dropdown" id="dropdown3">
				<span>Projects</span>
  						<div class="dropdown-content" id="dropdown-content3">
    					<a href="/arkproject" class="item">Ark Project</a>
    					<a href="/education" class="item">Encourageing Education</a>
  					</div>
				</div>
				<div class="dropdown" id="dropdown4">
				<span>Dashboard</span>
  						<div class="dropdown-content" id="dropdown-content4">
    					<a href="/loggedin" class="item">My Account</a>
    					<a href="/login" class="item">Login</a>
    					<a href="/createaccount" class="item">Create Account</a>
  					</div>
				</div>
				<div class="dropdown">
    					<form action="php/proccess.php" method="post">	
						<input type="text" id="searchfield" placeholder="search" name="term"/>
						<input type="submit" class="search" value=" ">
				</form></div>	
			</div>
			</div>
			</center>
		</div>
*/