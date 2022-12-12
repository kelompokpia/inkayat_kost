Aplikasi Inkayat Kost

Install Node Js https://nodejs.org/en/download/
ketikkan satu persatu di terminal vscode
sesuai urutan
-composer require laravel/ui
-php artisan ui bootstrap
-npm install
-npm run dev

ikuti sampai npm install saja
https://codingrakitan.blogspot.com/2020/08/cara-membuat-project-baru-node-js.html

composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

buat folder analytics di folder storage/app
pindahkan file service-account-credentials.json ke folder storage/app/analytics
@if ($errors->any())
      <div class="pt-3">
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{$item }} </li>
@endforeach
</ul>
</div>
</div>
