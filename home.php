<?php

$courses = [
    ["image" => "1.jpg", "title" => "مقدمة في الأمن السيبراني", "description" => "تعلم أساسيات الأمن السيبراني وكيفية حماية بياناتك الشخصية.", "category" => "أساسيات", "rating" => 4.5, "level" => "مبتدئ"],
    ["image" => "2.jpg", "title" => "اختبار الاختراق الأخلاقي", "description" => "استكشف تقنيات اختبار الاختراق وأدواته المختلفة.", "category" => "اختبار الاختراق", "rating" => 4.7, "level" => "متقدم"],
    ["image" => "3.jpg", "title" => "التحليل الجنائي الرقمي", "description" => "تعرف على كيفية التحقيق في الجرائم الإلكترونية.", "category" => "التحقيق الجنائي", "rating" => 4.3, "level" => "متوسط"],
    ["image" => "4.jpg", "title" => "مكافحة التصيد الاحتيالي", "description" => "كيفية التعرف على رسائل التصيد وتجنبها.", "category" => "أساسيات", "rating" => 4.6, "level" => "مبتدئ"],
    ["image" => "5.jpg", "title" => "أمن الشبكات اللاسلكية", "description" => "تأمين شبكات Wi-Fi المنزلية والمكتبية.", "category" => "أمن الشبكات", "rating" => 4.4, "level" => "متوسط"],
    ["image" => "6.jpg", "title" => "حماية البيانات الشخصية", "description" => "إدارة كلمات المرور، تفعيل المصادقة الثنائية، والتحكم في الخصوصية.", "category" => "الخصوصية والأمان", "rating" => 4.8, "level" => "مبتدئ"],
    ["image" => "17.jpg", "title" => "أساسيات التشفير", "description" => "مقدمة في التشفير وأنواعه واستخداماته.", "category" => "التشفير", "rating" => 4.2, "level" => "مبتدئ"],
    ["image" => "8.jpg", "title" => "أمن تطبيقات الويب", "description" => "المشاكل الأمنية الشائعة في تطبيقات الويب وأفضل الممارسات.", "category" => "أمن التطبيقات", "rating" => 4.9, "level" => "متقدم"],
    ["image" => "9.jpg", "title" => "أمن أنظمة التشغيل", "description" => "تأمين أنظمة Windows, macOS, Linux وإدارة المستخدمين.", "category" => "أمن الأنظمة", "rating" => 4.5, "level" => "متوسط"],
    ["image" => "17.jpg", "title" => "الحوسبة السحابية الآمنة", "description" => "فهم المخاطر الأمنية في السحابة وأفضل الممارسات لتأمين البيانات.", "category" => "الحوسبة السحابية", "rating" => 4.7, "level" => "متقدم"],
    ["image" => "10.jpg", "title" => "قانون الأمن السيبراني", "description" => "نظرة عامة على القوانين المتعلقة بالأمن السيبراني والجرائم الإلكترونية.", "category" => "القانون والتشريع", "rating" => 4.3, "level" => "متوسط"],
    ["image" => "15.jpg", "title" => "الذكاء الاصطناعي والأمن", "description" => "استخدام الذكاء الاصطناعي في الأمن والمخاطر الأمنية الناشئة عنه.", "category" => "الذكاء الاصطناعي", "rating" => 4.6, "level" => "متقدم"],
    ["image" => "16.jpg", "title" => "تحليل الثغرات الأمنية", "description" => "البحث عن الثغرات الأمنية في البرامج والأنظمة وكتابة التقارير.", "category" => "تحليل الثغرات", "rating" => 4.8, "level" => "متقدم"],
    ["image" => "11.jpg", "title" => "مراقبة الشبكات الأمنية", "description" => "مراقبة الشبكات واكتشاف التهديدات.", "category" => "أمن الشبكات", "rating" => 4.4, "level" => "متوسط"],
    ["image" => "12.jpg", "title" => "الاستجابة للحوادث الأمنية", "description" => "كيفية التعامل مع الاختراقات والهجمات الإلكترونية.", "category" => "الاستجابة للحوادث", "rating" => 4.9, "level" => "متقدم"],
    ["image" => "13.jpg", "title" => "مكافحة برامج الفدية", "description" => "كيفية الوقاية من برامج الفدية واستعادة البيانات المشفرة.", "category" => "البرامج الضارة", "rating" => 4.5, "level" => "متوسط"],
    ["image" => "14.jpg", "title" => "أمن إنترنت الأشياء", "description" => "تأمين الأجهزة المتصلة بالإنترنت.", "category" => "إنترنت الأشياء", "rating" => 4.7, "level" => "متوسط"]
];

$categories = array_unique(array_column($courses, 'category'));

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cyber code</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            direction: rtl;
            color: #333;
        }

        header {
            background-color: #2c3e50; 
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .course-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 300px;
            height: 480px; 
            display: flex;
            flex-direction: column;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-content {
            padding: 15px;
            flex-grow: 1;
        }

        .course-content h3 {
            margin-top: 0;
            color: #2c3e50;
        }

        .course-content p {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
        }

        .rating {
            color: #f39c12;
            margin-bottom: 10px;
        }

        .level {
            font-size: 14px;
            color: #3498db;
            margin-bottom: 10px;
        }

        .category-filter {
            text-align: center;
            margin-bottom: 30px;
        }

        .category-filter button {
            background-color: #3498db; 
            color: white;
            border: none;
            padding: 12px 24px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .category-filter button:hover {
            background-color: #2980b9;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #34495e;
            color: white;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>استثمر في مستقبلك مع دورات الأمن السيبراني</h1>
        <p>طور مهاراتك وحافظ على أمان العالم الرقمي</p>
    </header>

    <div class="category-filter">
        <button data-category="all">الكل</button>
        <?php foreach ($categories as $category): ?>
            <button data-category="<?= $category; ?>"><?= $category; ?></button>
        <?php endforeach; ?>
    </div>

    <div class="container">
        <?php foreach ($courses as $course): ?>
            <div class="course-card" data-category="<?= $course['category']; ?>">
                <img src="<?= $course['image']; ?>" alt="<?= $course['title']; ?>">
                <div class="course-content">
                    <h3><?= $course['title']; ?></h3>
                    <div class="rating">التقييم: <?= $course['rating']; ?> ⭐</div>
                    <div class="level">المستوى: <?= $course['level']; ?></div>
                    <p><?= $course['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <footer> جميع الحقوق محفوظة © 2024 - منصة ساير كود </footer>

    <script>
        const categoryButtons = document.querySelectorAll('.category-filter button');
        const courseCards = document.querySelectorAll('.course-card');

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;

                courseCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</html>