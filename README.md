# Hizmet Tanıtım Sayfası

Laravel 12 ve PHP ile hazırlanan hizmet tanıtım web projesi. Web arayüzü ve Laravel uygulama altyapısını bir araya getirir.

## Teknolojiler

PHP 8.2+, Laravel 12, HTML, CSS, JavaScript, Vite, Composer, PHPUnit.

## Yerel kurulum

```bash
git clone https://github.com/ebrudi/hizmet-landing-page.git
cd hizmet-landing-page
composer install
npm install
```

`.env.example` dosyasını `.env` olarak kopyalayın ve veritabanı ayarlarını yerel ortamınıza göre düzenleyin.

```bash
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

Tarayıcıda http://127.0.0.1:8000 adresini açın.

## Testler

```bash
php artisan test
```

Testlerin güncel sonucu yerel ortamda doğrulanmalıdır. Proje geliştirme ve portföy amaçlıdır.
