# Basic Monitoring

## 1. ما فائدة docker stats؟

يستخدم الأمر `docker stats` لمراقبة استهلاك موارد الـ Containers بشكل مباشر، مثل CPU وMemory وNetwork وDisk I/O.

## 2. ماذا تعني CPU Usage؟

CPU Usage توضح نسبة استخدام الـ Container لمعالج السيرفر أثناء تشغيله.

## 3. ماذا تعني Memory Usage؟

Memory Usage توضح مقدار ذاكرة RAM التي يستخدمها الـ Container مقارنة بالذاكرة المتاحة له.

## 4. لماذا يجب مراقبة مساحة التخزين؟

مراقبة مساحة التخزين مهمة للتأكد من وجود مساحة كافية للسيرفر والـ Containers والـ Docker Images والـVolumes. امتلاء مساحة التخزين قد يؤدي إلى مشاكل في تشغيل الخدمات.

## 5. كيف تعرف أن Container متوقف؟

يمكن استخدام:

```bash
docker-compose ps
