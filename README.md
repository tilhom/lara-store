# lara-store
course on creating an online store

1. Lavravel tizimini o'rnatish lara-store
2. Magazin shablonlarini o'rnatish html-template
3. Barcha html andoza fayllariga view -lar tayorlash
	about.html => about.blade.php
	add-to-wishlist.html => add-to-wishlist.blade.php
	blog.html => blog.blade.php
	cart.html => cart.blade.php
	checkout.html => checkout.blade.php
	contact.html => contact.blade.php
	index.html => index.blade.php
	order-complete.html => order.blade.php
	product-detail.html => product.blade.php
	shop.html => shop.blade.php 

	3.2. Buyruqlar satrida:
		touch about.blade.php add-to-wishlist.blade.php blog.blade.php cart.blade.php checkout.blade.php contact.blade.php index.blade.php order.blade.php product.blade.php shop.blade.php 

	3.3. index.html -ni index.blade.php -ga ko'chirish

	3.4. Yonalish qo'shish: Route::view('/', 'index');

	3.5. html asset -larni public papkaga ko'chirish (css,fonts,images,js,sass)

	3.6. index.blade.php ichini to'g'rilash

	3.7. partials papka va layout.blade.php faylini hosil qilish

	3.8. patials -da nav.blade.php va footer.blade.php larni hosil qilish

	3.9. qolgan view va ularni yo'nalishlarini tashkil qilish:
		about.blade.php, add-to-wishlist.blade.php, blog.blade.php, cart.blade.php, checkout.blade.php, contact.blade.php, order.blade.php, product.blade.php, shop.blade.php 
		Route::view('/', 'index');
		Route::view('/about', 'about');
		Route::view('/add-to-wishlist', 'add-to-wishlist');
		Route::view('/blog', 'blog');
		Route::view('/cart', 'cart');
		Route::view('/checkout', 'checkout');
		Route::view('/contact', 'contact');
		Route::view('/order', 'order');
		Route::view('/product-detail', 'product-detail');
		Route::view('/shop', 'shop');
		


