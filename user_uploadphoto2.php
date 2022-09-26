<?php
session_start();

$id = $_GET['id'];
?>

<h1> Upload User Photo </h1>

<?php
if (isset($_SESSION['pic_errormsg'])){
?>
    <h3> <?= $_SESSION['pic_errormsg'] ?> </h3>    
<?php
}
unset($_SESSION['pic_errormsg']);
?>

<form method = "post" action = "user_uploadphoto_proc2.php?id=<?=$id?>" enctype="multipart/form-data">
    <p style = "margin-top:24px;">
    Please choose a file from your computer and then press 'Upload'.
    </p>
    <label> File input </label>
    <input name = "fileToUpload" type = "file" required>
    <br><br><br>
    <button type = "submit"> Upload </button>

    <button>
        <a href="home_photo.php" value = "Cancel">
            Cancel
    </a>
    </button>
</form>