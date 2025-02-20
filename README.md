## شرح المشروع 
**المحتوى** : php  html python text

```python:
import turtl
import random
import time

# إعداد الشاشة
screen = turtle.Screen()
screen.bgcolor("black")

# إنشاء السلحفاة
pen = turtle.Turtle()
pen.speed(3)
pen.width(2)
pen.color("white")

def draw_face():
    # رسم الرأس (دائرة تمثل الوجه)
    pen.penup()
    pen.goto(0, 50)
    pen.pendown()
    pen.circle(50)
    
    # رسم العينين
    pen.penup()
    pen.goto(-20, 90)
    pen.pendown()
    pen.dot(10)
    
    pen.penup()
    pen.goto(20, 90)
    pen.pendown()
    pen.dot(10)
    
    # رسم الفم (منحنى يعبر عن الحزن)
    pen.penup()
    pen.goto(-20, 70)
    pen.pendown()
    pen.setheading(-60)
    pen.circle(20, 120)

```
## القناه
```
---
```url
sudo apt update
sudo apt install bettercap aircrack-ng iw python3-pip
pip3 install termcolor
```
---
## screenshots
![الصور](Screenshots/1.jpg)
![الصور](Screenshots/2.jpg)
---
## موقع التواصل
- [قناه اليوتيوب](https://www.youtube.com/@cyber_code1)
- [قناه التلجرام](https://www.youtube.com/@cyber_code1)
---