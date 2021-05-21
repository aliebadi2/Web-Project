
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
</head>
<title> Ali Ebadi </title>
<body>
<center>
<h1>Ali Ebadi</h1>

<h2>About Me</h2>
<p>I am Ali Ebadi, a young inspiring computer engineering major at <a href="https://english.semnan.ac.ir/">Semnan University</a>. <br>
My abilities include, but are not limited to: 
<ul>
<li>Understanding of C++ </li>
<li>Proficient in Adobe Photoshop</li>
<li>Knowledge of Adobe After Effects </li>
<li>Experienced with computer hardware </li>
<li>Fluent in English</li>
<li>Adequate in French</li>
</ul>

And here is a photo of me for reference.<br>
<img src="images/AliEbadi.jpg" alt="Ali Ebadi" class="profile">
</p>

<h3>Contacts</h3>
<p class="p2">Email:AliEbadiEnIr@gmail.com <br> 
 <a href="https://instagram.com/aliebadiczm?igshid=5tkxrg6q6nxu"> <img src="images/instagram.png" alt="instagram" class="image1"> </a>
  <a href="https://t.me/crazzzi4u/"> <img src="images/telegram.png" alt="telegram" class="image1"> </a>
 <br>
Please leave your thoughts and opinions in the section below:

  <form class="blogdesire-form" method="post">
      <input type="text" name="Name" placeholder="Name" > <br>
      <input type="text" name="Email" placeholder="Email"> <br>
	  <input type="text" name="opinion" placeholder="Opinion"> <br>
      <input type="submit" name="submit" value="Submit" class="blogdesire-submit">
    </form>
	</p>
	
</center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$Name = "Name:".$_POST['Name']."
";
$Email = "Email:".$_POST['Email']."
";
$opinion = "Opinion:".$_POST['opinion']."
";
$file=fopen("data.txt", "a");
fwrite($file, $Name);
fwrite($file, $Email);
fwrite($file, $opinion);

fclose($file);
}
?>