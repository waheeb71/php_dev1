<?php
session_start(); // بدء جلسة

// تعيين كوكي
setcookie("user", "أحمد", time() + 3600); // الكوكي سيكون صالحًا لمدة ساعة

// معالجة البيانات عند إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // عرض بيانات POST
    echo "<h3>بيانات النموذج:</h3>";
    echo "الاسم: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "العمر: " . htmlspecialchars($_POST['age']) . "<br>";

    // حفظ البيانات في الجلسة
    $_SESSION['user'] = $_POST['name'];

    // عرض بيانات الكوكي
    echo "الكوكي: " . htmlspecialchars($_COOKIE['user']) . "<br>";
}
// عرض بيانات GET إذا كانت موجودة
if (isset($_GET['action']) && $_GET['action'] == 'show') {
    echo "<h3>بيانات GET:</h3>";
    echo "الاسم: " . htmlspecialchars($_GET['name']) . "<br>";
}
// عرض بيانات الجلسة
if (isset($_SESSION['user'])) {
    echo "<h3>بيانات الجلسة:</h3>";
    echo "المستخدم: " . htmlspecialchars($_SESSION['user']) . "<br>";
}

// نموذج HTML لإدخال البيانات
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تجربة المصفوفات الفائقة في PHP</title>
</head>
<body>

<h2>إرسال بيانات</h2>
<form method="post" action="test.php">
    <label for="name">الاسم:</label>
    <input type="text" name="name" required>
    <br>
    <label for="age">العمر:</label>
    <input type="number" name="age" required>
    <br>
    <input type="submit" value="إرسال">
</form>

<h2>رابط GET</h2>
<a href="test.php?action=show&name=أحمد">عرض بيانات GET</a>

</body>
</html>