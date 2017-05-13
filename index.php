<!DOCTYPE html>
<html>
<head>
<title>Secured download file using JQuery and PHP code</title>
</head>
<body>
<a href="Link to your file" download>Filename</a>

<!-- Start Script -->
<script type="text/javascript">
		function direct(filepath) {
            requestUrl = "download.php?file="+ filepath;
			window.location= requestUrl;
		} 
	
		jQuery(document).ready(function(){			
			jQuery('a[download]').hover(function(){
				link= jQuery(this).attr('href');
				console.log(link);
				if(link != 'javascript:void(0)'){
					if(link != '#' || link != ''){
						jQuery(this).attr('onclick',"direct('"+link+"')").attr('href',"javascript:void(0)");  
					}
				}				
			});	
		});
</script>
<!-- #end Script -->
</body>
</html>