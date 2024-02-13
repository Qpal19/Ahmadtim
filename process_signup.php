<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة داخل الموقع</title>
</head>
<body>
  <h2>مرحبًا بك في صفحتك داخل الموقع!</h2>

  <!-- نموذج لنشر الصورة -->
  <form action="process_content_post.php" method="post" enctype="multipart/form-data">
    <label for="image">اختر صورة:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br>

    <!-- حقل نصي لنشر الكتابة -->
    <label for="post">أكتب شيئًا:</label>
    <textarea id="post" name="post" rows="4" required></textarea><br>

    <input type="submit" value="نشر">
  </form>
</body>
</html>
