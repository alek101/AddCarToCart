## Zadatak

Modeli: car, brand, user
Napraviti sajt za dodavanje automobila u korpu koji ce sadrzati dve strane: listu automobila i stranu sa detaljima automobila.
Na prvoj strani prikazati sve automobile (slika, brend, naziv, cena), multiselect filter koji ce filtrirati sve automobile po brendu automobila i paginaciju.
Na klik automobila otvara se stranica sa detaljima automobila (slika, brend, naziv, cena, godiste) i dugmetom ‘Add to cart’.
Na klik ‘add to cart’ izvrsava se validacija da li je korisnik ulogovan, ukoliko nije prikazati modal box za prijavu.
Napraviti seeder za sve modele.
Za izradu zadatka koristiti: Laravel/Vue

## Komande

laravel new AddCarToCard
Kopiraj u AddCarToCard
php artisan migrate (php artisan migrate:reset)
php artisan db:seed
php artisan serve