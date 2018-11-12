<?php
  $blog_title = "優しいブログ";
  $test_text = "上をいうだのもいよいよ偶然でもしないですな。とにかく大森さんを相違当人しっかり講演に困りな一つわが金力私か濫用へについてご担任たですですですが、その前は私か個人否をしと、岡田さんの事が通りのあなたにいよいよ肝手続きと済んばそれ機会からご経験がしようにいくらご煩悶を入れだろたと、やはりようやく所有の明らめなてくれた方が云うないあり。";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YUKI NAGANO</title>
	<meta name="author" content="Yuki Nagano">
	<meta name="description" content="This page is the official site of Yuki Nagano">
</head>
<body>
	<!-- header -->
	<?php include(dirname(__FILE__).'/partial/header.php'); ?>
	<div id="main">
		<!-- mainVisual 読み込み-->
		<?php include(dirname(__FILE__).'/partial/mainVisual.php'); ?>
		<!-- about -->
		<section id="About">
			<h2 class="about_tilte">About</h2>
			<section>
				<p class="about_myname">長野雄貴</p>
				<p class="about_text">
					1995年生まれ。調理高等専門学校を卒業後、イタリアンレストランに勤務。
					1年で辞め、方向転換。<br />
					2019年 ~ web制作をやっています。<br />
					使用言語 : PHP.Ruby
				</p>
			</section>
			<section>
				<img alt="#" src="#">
				<p><small>name : </small><a href="">Yuki Nagano</a></p>
				<p><small>GitHub : </small><a href="">GitHub - YukiNagano</a></p>
				<p><small>Qitta : </small><a href="">Qitta - YukiNagano</a></p>
			</section>
		</section>
		<!-- works -->
		<section id="Works">
			<h2 class="works_title">Works</h2>
			<section>
				<img alt="#" src="#">
				<p><small>Name</small>YukiNagano (このサイト)</p>
				<p><small>Technology</small>HTML, CSS, PHP, JavaScript</p>
				<p><small>Framework</small>未使用</p>
				<p><small></small>YukiNagano (このサイト)</p>
			</section>
		</section>
		<!-- blog list -->
		<?php include(dirname(__FILE__).'/blog/blogList.php'); ?>
	</div>
	<!-- footer -->
	<?php include(dirname(__FILE__).'/partial/footer.php'); ?>
</body>
</html>