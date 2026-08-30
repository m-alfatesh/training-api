# Docker Logs & Troubleshooting

## 1. ما هي Docker Logs؟

Docker Logs هي السجلات التي تعرض ما يحدث داخل الـ Containers، مثل طلبات التطبيق، الأخطاء، ورسائل تشغيل الخدمات.

يمكن عرض Logs الخاصة بـ Laravel باستخدام:

docker-compose logs laravel

ويمكن عرض Logs الخاصة بـ MySQL باستخدام:

docker-compose logs mysql

كما يمكن عرض عدد محدد من الأسطر باستخدام:

docker-compose logs --tail=30 laravel

ولمتابعة Logs بشكل مباشر:

docker-compose logs -f laravel

## 2. لماذا نستخدم Logs؟

نستخدم Logs لمعرفة ما يحدث داخل الـ Container وتشخيص المشاكل.

تساعدنا Logs في معرفة الأخطاء ومصدر المشكلة، مثل مشاكل الاتصال بقاعدة البيانات أو أخطاء التطبيق.

## 3. كيف عرفت أن مشكلة DB_HOST كانت من الاتصال بقاعدة البيانات؟

تم تغيير قيمة DB_HOST إلى قيمة غير صحيحة:

DB_HOST=wrong-host

بعد إعادة تشغيل Laravel وتجربة:

GET /api/products

ظهر خطأ HTTP 500.

ومن Laravel Logs ظهر خطأ متعلق بالاتصال بقاعدة البيانات:

php_network_getaddresses: getaddrinfo for mysql failed
Temporary failure in name resolution

وهذا يعني أن Laravel حاول الاتصال باسم MySQL ولم يتمكن من الوصول إليه بسبب قيمة DB_HOST غير الصحيحة.

بعد إعادة DB_HOST إلى:

DB_HOST=mysql

وإعادة تشغيل Laravel، عادت API للعمل وأصبح الطلب يرجع 200 OK.

## 4. ماذا حدث عندما توقف MySQL Container؟

تم إيقاف MySQL باستخدام:

docker-compose stop mysql

وأصبح MySQL في حالة Exit 0، بينما بقي Laravel في حالة Up.

عند محاولة استخدام API المنتجات، فشل الاتصال بقاعدة البيانات وظهر خطأ HTTP 500.

بعد تشغيل MySQL مرة أخرى باستخدام:

docker-compose start mysql

عاد MySQL للعمل، وعادت API إلى العمل بشكل طبيعي.

## 5. ما أول شيء سأفحصه إذا توقف التطبيق مستقبلًا؟

أول شيء سأفحص حالة الـ Containers باستخدام:

docker-compose ps

ثم سأفحص Logs الخاصة بالـ Container الذي توجد فيه المشكلة:

docker-compose logs --tail=50 laravel

أو:

docker-compose logs --tail=50 mysql

بعد ذلك أتحقق من إعدادات البيئة مثل .env، وأتأكد من أن الخدمات المطلوبة تعمل وأن الاتصال بينها صحيح.
