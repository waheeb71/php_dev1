<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كورسات سايبر كود</title>
    <style>
        body {
            font-family: 'Tajawal', Arial, sans-serif; 
            direction: rtl;
            text-align: center;
            background-color: rgb(177, 240, 149);
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50; 
            margin-bottom: 20px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .product {
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 8px; 
            padding: 15px;
            width: 280px;
            min-height: 300px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; 
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
        }
        .product:hover {
            transform: translateY(-10px); 
        }
        .product h3 {
            margin: 0;
            font-size: 1.2em;
            color: #2980b9; 
            text-align: right; 
        }
        .product p {
            margin: 5px 0;
            font-size: 0.9em;
            text-align: right;
            line-height: 1.4; 
            overflow: hidden; /* لمنع النصوص الطويلة من الخروج عن الحدود */
            text-overflow: ellipsis; /* إضافة علامة ... عند تجاوز النص */
            display: -webkit-box;
            -webkit-line-clamp: 3; /* عدد الأسطر المرئية فقط */
            -webkit-box-orient: vertical;
        }
        .product p strong {
            color: #555; 
        }
        .buttons {
            margin-top: 15px;
            text-align: center;
        }
        .buttons button {
            padding: 8px 15px;
            width: 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.3s ease; 
        }
        .buy {
            background-color: rgb(243, 231, 5); 
            color: white;
        }
        .buy:hover {
            background-color: #219653; 
        }
        .delete {
            background-color: rgb(239, 40, 18); 
            color: white;
        }
        .delete:hover {
            background-color: #c0392b; 
        }
    </style>
</head>
<body>
<h1>الكورسات</h1>
<div class="product-container">
<?php
$products = [
    [
        'id' => 1,
        'name' => 'كورس أساسيات الأمن السيبراني',
        'price' => 300,
        'description' => 'هذا الكورس يقدم مقدمة شاملة عن مفاهيم الأمن السيبراني الأساسية والتهديدات الشائعة.'
    ],
    [
        'id' => 2,
        'name' => 'كورس اختبار الاختراق (Penetration Testing)',
        'price' => 500,
        'description' => 'تعلم كيفية اختبار الأنظمة لاكتشاف الثغرات الأمنية وحمايتها من الهجمات.'
    ],
    [
        'id' => 3,
        'name' => 'كورس التشفير وحماية البيانات',
        'price' => 400,
        'description' => 'اكتشف تقنيات التشفير الحديثة لحماية البيانات الحساسة من الوصول غير المصرح به.'
    ],
    [
        'id' => 3,
        'name' => 'كورس التماية البيانات',
        'price' => 400,
        'description' => 'اكتشف تقنيات التشفير الحديثة لحماية البيانات الحساسة من الوصول غير المصرح به.'
    ],
    [
        'id' => 3,
        'name' => 'كورس التماية البيانات',
        'price' => 400,
        'description' => 'اكتشف تقنيات التشفير الحديثة لحماية البيانات الحساسة من الوصول غير المصرح به.'
    ],
    [
        'id' => 3,
        'name' => 'كورس التماية البيانات',
        'price' => 400,
        'description' => 'اكتشف تقنيات التشفير الحديثة لحماية البيانات الحساسة من الوصول غير المصرح به.'
    ],
    [
        'id' => 4,
        'name' => 'كورس إدارة الحوادث الأمنية',
        'price' => 450,
        'description' => 'تعلم كيفية الاستجابة للحوادث الأمنية وإدارة الأزمات بشكل فعال.'
    ],
    [
        'id' => 5,
        'name' => 'كورس حماية الشبكات اللاسلكية',
        'price' => 350,
        'description' => 'تعرف على كيفية تأمين الشبكات اللاسلكية ضد الهجمات والاختراقات.'
    ],
    [
        'id' => 6,
        'name' => 'كورس الذكاء الاصطناعي في الأمن السيبراني',
        'price' => 600,
        'description' => 'استكشف كيف يمكن استخدام الذكاء الاصطناعي لتحسين كشف التهديدات السيبرانية.'
    ],
    [
        'id' => 7,
        'name' => 'كورس أمن التطبيقات والبرمجيات',
        'price' => 400,
        'description' => 'تعلم كيفية تطوير تطبيقات آمنة وخالية من الثغرات البرمجية.'
    ],
    [
        'id' => 8,
        'name' => 'كورس أمن السحابة الإلكترونية',
        'price' => 550,
        'description' => 'اكتشف أفضل الممارسات لتأمين البيانات والتطبيقات في البيئات السحابية.'
    ],
    [
        'id' => 9,
        'name' => 'كورس أمن أنظمة التشغيل',
        'price' => 380,
        'description' => 'تعلم كيفية تأمين أنظمة التشغيل المختلفة ضد الهجمات السيبرانية.'
    ],
    [
        'id' => 10,
        'name' => 'كورس التحليل الجنائي الرقمي',
        'price' => 500,
        'description' => 'اكتشف تقنيات التحليل الجنائي الرقمي لتحديد مصدر الهجمات السيبرانية.'
    ]
];
foreach ($products as $product) {
    echo '<div class="product">';
    echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
    echo '<p><strong>السعر:</strong> ' . $product['price'] . ' ريال</p>';
    echo '<p><strong>الوصف:</strong> ' . $product['description'] . '</p>';
    echo '<div class="buttons">';
    echo '<button class="delete">حذف</button>';
    echo '<button class="buy">شراء</button>';
    echo '</div>';
    echo '</div>';
}
?>
</div>
</body>
</html>