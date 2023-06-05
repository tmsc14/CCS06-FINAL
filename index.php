<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="landingpage.css" />
		<script src="https://cdn.jsdelivr.net/npm/circular-revealer@0.0.8/dist/index.iife.js"></script>
</head>
<body>
  
<!-- navigation -->
<!-- navigation -->

<!-- landing page -->
		<header>
			<div>
				<button class="header__button nav-btn-js" type="button"></button>
				<nav class="header__nav nav-js" data-active="false">
					<ul class="header__menu">
						<li class="header__menu-item"><a href="login/login_form.php">Log in</a></li>
						<li class="header__menu-item"><a href="#">About</a></li>
						<li class="header__menu-item"><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<img id='starbeans' src="img/starbeans.png" position = "absolute" width = "500" height = "300">

		<script>
			document.addEventListener("DOMContentLoaded", () => {
				const revealerNav = window.revealer({
					revealElementSelector: ".nav-js",
					options: {
						anchorSelector: ".nav-btn-js",
					},
				});

				const actionBtn = document.querySelector(".nav-btn-js");
				actionBtn.addEventListener("click", () => {
					if (!revealerNav.isRevealed()) {
						revealerNav.reveal();
						actionBtn.setAttribute("data-open", true);
					} else {
						revealerNav.hide();
						actionBtn.setAttribute("data-open", false);
					}
				});
			});
		</script>
<!-- landing page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>