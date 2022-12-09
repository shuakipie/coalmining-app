<html>
	<head>
		<title>GINO'S SMALL SCALE COAL MINING</title>
		<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #E57B13;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
                background:#FBF5CC;
			}
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border:none;
    background:white;
}

				.container2 {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content2 {
				text-align: center;
				display: inline-block;
			}


			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
                  .code{
              font-size:36px;
              background-color:#383838;
              border-radius:10px;
              padding:5px;
            }

            .btn{
              border-radius:10px;
              border:2px solid white;
              padding:10px;
              color:#E57B13;
              text-decoration:none;
              font-size:20px;
              font-family:arial;
            }
           .btn2{
           background:#E57B13;
              color:white;
              font-weight:bold;
            }
            .btn3{
             border-radius:10px;
              padding:10px;
              background:white;
              color:#333333;
              text-decoration:none;
              font-size:20px;
              font-family:arial;
            }

            /* The Overlay (background) */
.overlay {
    /* Height & width depends on how you want to reveal the overlay (see JS below) */    
    height: 100%;
    width: 0;
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    background-color: rgb(0,0,0); /* Black fallback color */
    background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
    overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
    position: relative;
    margin-left: 100px;
    top: 25%; /* 25% from the top */
    width: 100%; /* 100% width */
    text-align: center; /* Centered text/links */
    margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
    font-family: Arial;
}

/* The navigation links inside the overlay */
.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 26px;
    color: #818181;
    display: block; /* Display block instead of inline */
    transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}
.error-box{
  border-bottom:2px solid red;
  width:70%;
  color:red;
  text-align: right;
  float:right;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
    }
}



		</style>
		<script type="text/javascript">
		/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
	</head>
	<body>


		<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
<div class="overlay-content">
<div class="container2">
			<div class="content2">
					<h2>Employee Login</h2>
			        
			          <br />
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="email" name="email" placeholder="employee@admin.com" value="employee@admin.com" autocomplete="off">
                <input type="password" class="form-control" name="password" placeholder="password" value="654321" autocomplete="off">
                <button type="submit" class="btn3">Login</button> &nbsp; 
				<a href="javascript:void(0)" class="btn1" onclick="closeNav()">Cancel</a>            </form>
			</div>
		</div>

                      

</div>
</div>


		<div class="container">
			<div class="content">
     
        @if (count($errors) > 0)
        <div class="error-box">
        @foreach ($errors->all() as $error)
        <h3>{{ $error }}</h3>
        <br />
        @endforeach
        </div>
        @endif
                            

				<div class="title">
					<img style ="width: 300px;" alt="Smart HRM" src="{{ asset('images/LOGOGINOS.png') }}">
				</div>
    			
           
               <!-- <a href="#" class='btn btn2 btn-lg' onclick="openNav()">Employee Login</a> -->
                 <a style ="    background: #e57b13;    color: white;    font-weight: bold;" href="{{ URL('/auth/login/') }}" class='btn btn2 btn-lg'>ADMIN LOGIN</a>
                 <br /><br />
              
               <br /><br />
			</div>
		</div>
	</body>
</html>
