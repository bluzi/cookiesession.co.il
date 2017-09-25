<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("alon-abadi")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->
		
		<!-- Page Edit -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("alon-abadi") ?></h4>
							<?= t("alon-abadi-description") ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<div class="right" style="margin-left: 20px;">
								<img src="/cookiesession.com/images/eliran.jpg" />
							</div>
							<h4 class="header"><?= t("eliran-peer") ?></h4>
								אלירן בן 22, מפתח תוכנה, יוצא יחידה טכנולוגית בחיל האוויר, בעל מעל 6 שנות ניסיון בפיתוח אפליציות Web ו- Desktop במגוון שפות ופלטפורמות.<br />
								נכון להיום, אלירן מועסק כמפתח .NET בסביבת WPF בחברה במרכז הארץ.<br />
								בין השאר, הניסיון של אלירן כולל את הטכנולוגיות הבאות:<br />
								C#, WPF, MVVM, NHeibernate, PHP, Oracle, MySQL SQL Server, HTML5, CSS3, jQuery, AngularJS ו- NodeJS.
								<br /><br />
								ניתן ליצור עימי קשר דרך המייל: <a href="mailto:eliran013@gmail.com">eliran013@gmail.com</a>, או דרך <a href="https://www.linkedin.com/profile/view?id=AAIAABNnbVgBf_8ORrEQchfRRkgOAkTf-fXzrNY&trk=nav_responsive_tab_profile_pic" target="_blank">פרופיל ה- LinkedIn שלי</a>.
								<br /><br />
								אשמח לשמוע מכם.
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Page Edit -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>