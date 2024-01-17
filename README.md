# Ön koşullar

Bu projeyi başlatmak için aşağıdaki önkoşulları karşılamalısınız:

Docker kurulu olmalıdır.

Kurulum

Bu projeyi Git ile klonlayın:

git clone https://github.com/yigitsilto/league.git Proje dizinine gidin:



## Kurulum

env klasöründe ki env dosyasının içeriği laravelde ki .env içine kopyalayın

proje dizinine gidin ve composer install çalıştırın. 

Projeyi ayağa kaldırmak için /vendor/bin/sail up komutunu çalıştırın

Frontendt vue 3 ile yazılmıştır docker ayağa kalktıktan sonra sırasıyla
 
npm install

npm run dev

komutları ile frontend ayağa kaldırılır. 

Simulasyonun başlaması için kuyruk çalışır durumda olmalıdır aksi takdirde simulasyon işi redise yazılır ancak başlamaz.  (php artisan queue:work)
