<!-- 
Note: Make sure you place the xbMarquee.js file into the same directory that you run your code from. If you do place it into a different directory, make sure you update src="xbMarquee.js" to reflect the new location. Also, you only need to download xbMarquee.js once (regardless of how many scrolling marquees you have on your page).
And thanks for visiting Quackit.com!
-->
<script type="text/javascript" src="/javascript/codes/xbMarquee.js"></script>
<script type="text/javascript">
<!--
	//set the marquee parameters
	function init() { fast_marquee.start(); }
	var fast_marquee_Text = 'JavaScript scrolling text';
	var fast_marquee_Direction = 'right';
	var fast_marquee_Contents='<span style="font-family:Comic Sans MS;font-size:12pt;white-space:nowrap;">' + fast_marquee_Text + '</span>';
	fast_marquee = new xbMarquee('fast_marquee', '19px', '90%', 6, 10, fast_marquee_Direction, 'scroll', fast_marquee_Contents);
	window.setTimeout( init, 200);
-->
</script>