<html>
<head>
</head>
<body>
<?php
if(file_exists("upload/".htmlspecialchars($_GET["img"])))
	{
	echo "<img src='upload/".htmlspecialchars($_GET["img"])."' />";
	$desc = htmlspecialchars($_GET[img]);
	require('sqlconnect1.php');
	$script = mysql_query("SELECT * FROM Images
	WHERE imageNAME='$desc'");
	while($tion = mysql_fetch_array($script))
		{
			echo"<br /> Uploaded by: ".$tion['who'];
			echo "<br />".$tion['description'];
		}
	mysql_close($connect);
	}
else
	{
	echo "File not found";
	}
?>
<br />
<div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'tuss4dzigns'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        <br />
<a href="galleryv1.php">Return to gallery.</a>
</body>
</html>