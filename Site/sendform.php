<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<meta http-equiv="Content-Language" content="en-us" />
<title>Open Editor - The Open Source XHTML Editor</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<table width="700" cellpadding="0" id="MainTable" align="center">
  <tr>
    <td width="100%">
    <a name="top"></a>
    <img border="0" src="images/header.jpg" alt="Open Editor" width="700" height="120" /></td>
  </tr>
  <tr>
    <td width="100%">
    <img border="0" src="images/bar.jpg" alt="" width="546" height="28" /><a href="download.html"><img border="0" src="images/bar_dl.jpg"  alt="Download Open Editor" width="154" height="28" /></a></td>
  </tr>
  <tr class="mainbg">
    <td width="100%">
    <table cellpadding="0" width="100%" id="ContentTable" class="content">
      <tr>
        <td width="133">
        <img border="0" src="images/nav_top.jpg" alt="" width="133" height="15" /><p>
        <a href="index.html">
        <img border="0" src="images/nav_home.jpg" alt="" width="133" height="20" /></a></p>
        <p><a href="contact.html">
        <img border="0" src="images/nav_contact.jpg" alt="" width="133" height="20" /></a></p>
        <p>
        <a href="features.html">
        <img border="0" src="images/nav_features.jpg" alt="" width="133" height="20" /></a></p>
        <p><a href="order.html">
        <img border="0" src="images/nav_purchase.jpg" alt="" width="133" height="20" /></a></p>
        <p>
        <a href="download.html">
        <img border="0" src="images/nav_downloads.jpg" alt="" width="133" height="20" /></a></p>
        <p><a href="faq.html"><img border="0" src="images/nav_faq.jpg" alt="" width="133" height="20" /></a></p>
        <p><a href="support.html">
        <img border="0" src="images/nav_support.jpg" alt="" width="133" height="20" /></a></p>
        <p><img border="0" src="images/nav_bot.jpg" alt="" width="133" height="18" /></p></td>
        <td>
          <table align="center" cellpadding="0" width="95%" id="AutoNumber1">
            <tr>
              <td width="100%">
              <p class="sectionname">Thanks for Contacting Us</p></td>
            </tr>
            <tr>
              <td width="100%">&nbsp;</td>
            </tr>
            <tr>
              <td width="100%">
              
<?

// OpenEditor Submit Contact Form Script

if(mail($to,"OpenEditor: ".$subject,$message,"From: ".$name."<".$email.">")){
	echo "Mail Successfully Sent.<br />";
	echo "<br /><br />Thank you for contacting us here at Open Editor. 
              We are very busy with the Development of our software and it may 
              take several business days for us to reply. Please be patient and 
              we will respond to your email ASAP.<p>&nbsp;</p>
              <p>OpenEditor Development Team";
} else {
	echo "<font color=red>Could Not Send E-Mail to $to!</font><br>
	Please Try Again Later or Send the Email Using your own Email Software";
}

?>
              
              </td>
            </tr>
            <tr>
              <td width="100%">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="100%">
    <map name="FPMap0">
    <area href="#top" shape="rect" coords="490, 15, 534, 27" alt="Go To the Top of Page" />
    </map>
    <img border="0" src="images/footer.jpg" alt="" usemap="#FPMap0" width="700" height="48" /></td>
  </tr>
</table>

</body>

</html>