<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inflorescence</title>
    <link rel="stylesheet" href="style.css">
   <style>
/* Chat-knop */
        #chatToggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007bff;
            color: white;
            border: none;
            padding: 15px 18px;
            border-radius: 50%;
            cursor: pointer;
            font-weight: bold;
            z-index: 9999;
        }

        /* Chat iframe container */
        #chatbox {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 400px;
            height: 500px;
            border: 1px solid #333;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            border-radius: 10px;

            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
            z-index: 9998;
        }

        #chatbox.visible {
            opacity: 1;
            pointer-events: auto;
        }
    </style>    
    
    
</head>
<body>
<table class="center" style="width:800px;" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td colspan="2"><img src="banner.jpg"></td>
</tr>
<tr class="layout-row">
    <td class="menu" width="20%" valign="top" align="left">
        <br>
        Menu<br>
        <a href="index.php">Home</a><br>
        <a href="credits.php">Credits</a><br>
        <a href="links.php">Links</a><br><br>
        Webdesign<br>
        <a href="avatars.php">Avatars</a><br>
        <br>
        Gallery<br>
        <a href="photography.php">Photography</a><br>
        <br>
        Interactive<br>
        <a href="guestbook.php">Guestbook</a><br><br>
    </td>

    <td class="content-area" width="80%" valign="top">
        <br>
