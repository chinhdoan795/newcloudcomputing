<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<br><br>
<center>
    <!-- nếu form có upload ảnh thì cần chèn thuộc tính 'enctype' -->
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset style="background-color: #FFFFCC">
            <legend>Profile</legend>
            Name: <input type="text" name="name" required maxlength="50" size="33">
            Product Image:
            <!-- accept="image/*" : chỉ cho phép upload file ảnh -->
            <input type="file" name="image" accept="images/*" required>
            <br><br>
            Facebook: <input type="text" name="facebook" required maxlength="250" size="33">
            <br><br>
            <input type="submit" value="ADD" name="add">
        </fieldset>
    </form>
</center>

</body>
</html>