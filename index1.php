<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Javascript test</title>
</head>

<body>

This page will be printed automatically

<h1>A title</h1>
  
<script type="text/javascript">
	try {
		this.print();
	}
	catch(e) {
		window.onload = window.print;
	}
</script>

</body>
</html>