<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuFrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CuisinierController;
use App\Http\Middleware\SuperAdminMiddleware;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserCreated;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PersonnelController;
use App\Http\Middleware\ServeurMiddleware;
use App\Http\Middleware\PolyvalentsMiddleware;
use App\Http\Middleware\CuisinierMiddleware;
use App\Models\Commande;
use App\Models\Reservation;
use App\Http\Middleware\GerantMiddleware;
use App\Http\Controllers\GerantController;
use App\Http\Middleware\CaissierMiddleware;
use App\Http\Controllers\CaissierController;

Route::get('/', function () {
    return view('welcome');
});

// Routes accessibles à tous les utilisateurs authentifiés
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            if (Auth::user()->hasRole('superadmin')) {
                return redirect()->route('superadmin.users.index');
            }
            elseif (Auth::user()->hasRole('serveur')) {
                return redirect()->route('serveur.calendrier');
            }
            elseif (Auth::user()->hasRole('polyvalents')) {
                return redirect()->route('admin.plats.index');
            }
            elseif (Auth::user()->hasRole('cuisiniers')) {
                return redirect()->route('cuisinier.plats.index');
            }
            elseif (Auth::user()->hasRole('gérant')) {
                return redirect()->route('gerant.commandes.index');
            }
            elseif (Auth::user()->hasRole('caissier')) {
                return redirect()->route('caissier.commandes.index');
            }


            // Calculer les statuts des commandes pour le restaurant de l'utilisateur connecté
            $restaurantId = Auth::user()->restaurant_id;

            $statuts = [
                'En cours' => Commande::where('restaurant_id', $restaurantId)->where('statut', 'en_cours')->count(),
                'Terminée' => Commande::where('restaurant_id', $restaurantId)->where('statut', 'terminee')->count(),
                'Annulée' => Commande::where('restaurant_id', $restaurantId)->where('statut', 'annulee')->count(),
            ];

            $commandesEnCours = Commande::where('restaurant_id', $restaurantId)->where('statut', 'en_cours')->get();
            $commandesTerminees = Commande::where('restaurant_id', $restaurantId)->where('statut', 'terminee')->get();
            $commandesAnnulees = Commande::where('restaurant_id', $restaurantId)->where('statut', 'annulee')->get();

            $totalPrices = [
                'En cours' => $commandesEnCours->sum(function ($commande) {
                    return $commande->details->sum(function ($detail) {
                        return $detail->quantite * $detail->plat->price;
                    });
                }),
                'Terminée' => $commandesTerminees->sum(function ($commande) {
                    return $commande->details->sum(function ($detail) {
                        return $detail->quantite * $detail->plat->price;
                    });
                }),
                'Annulée' => $commandesAnnulees->sum(function ($commande) {
                    return $commande->details->sum(function ($detail) {
                        return $detail->quantite * $detail->plat->price;
                    });
                }),
            ];

            // Calculer le nombre total de commandes
            $totalOrders = Commande::where('restaurant_id', $restaurantId)->count();
            $totalReservations = Reservation::where('restaurant_id', $restaurantId)->count();

            return view('dashboard', compact('statuts', 'totalPrices', 'totalOrders', 'totalReservations'));
        })->name('dashboard');


        Route::middleware([PolyvalentsMiddleware::class])->group(function () {
            Route::get('admin/plats', [PlatController::class, 'index'])->name('admin.plats.index');
        });

        Route::middleware([CuisinierMiddleware::class])->group(function () {
            Route::get('cuisinier/plats/index', [CuisinierController::class, 'index'])->name('cuisinier.plats.index');

        });
        Route::middleware([GerantMiddleware::class])->group(function () {
            Route::get('gerant/commandes/index', [GerantController::class, 'index'])->name('gerant.commandes.index');
        });

        Route::middleware([CaissierMiddleware::class])->group(function () {
            Route::get('caissier/commandes/index', [CaissierController::class, 'index'])->name('caissier.commandes.index');
            Route::get('caissier/commandes/{id}', [OrderController::class, 'show'])->name('caissier.commandes.show');

        });

    Route::middleware([ServeurMiddleware::class])->group(function () {

// Page pour créer une commande
Route::get('/serveur/commandes/create', [OrderController::class, 'create'])->name('serveur.commandes.create');


Route::get('/serveur/commandes/select-table', [OrderController::class, 'selectTable'])->name('serveur.commandes.select-table');
Route::post('/serveur/commandes/store-table-selection', [OrderController::class, 'storeTableSelection'])->name('serveur.commandes.store-table-selection');
Route::get('/serveur/commandes/add-dishes', [OrderController::class, 'addDishes'])->name('serveur.commandes.add-dishes');
Route::post('/serveur/commandes/store-dishes', [OrderController::class, 'storeDishes'])->name('serveur.commandes.store-dishes');
Route::get('/serveur/commandes/add-client-info', [OrderController::class, 'addClientInfo'])->name('serveur.commandes.add-client-info');
Route::post('/serveur/commandes/store-client-info', [OrderController::class, 'storeClientInfo'])->name('serveur.commandes.store-client-info');
Route::post('/serveur/commandes/confirm-order', [OrderController::class, 'confirmOrder'])->name('serveur.commandes.confirm-order');
Route::get('/serveur/commandes/create', [OrderController::class, 'create'])->name('serveur.commandes.create');
Route::post('/serveur/commandes/store', [OrderController::class, 'store'])->name('serveur.commandes.store');




Route::get('/serveur/calendrier', function () {
            // Récupérer l'identifiant du restaurant de l'utilisateur connecté
            $restaurantId = auth()->user()->restaurant_id;

            // Récupérer les réservations futures pour ce restaurant
            $reservations = Reservation::where('restaurant_id', $restaurantId)
                ->where('date_time', '>=', now())
                ->get();

            // Transformez les réservations en une structure JSON-compatible
            $reservationEvents = $reservations->map(function ($reservation) {
                return [
                    'title' => 'Réservation de ' . $reservation->client_name,
                    'start' => $reservation->date_time,
                    'description' => 'Nouvelle réservation',
                    'backgroundColor' => '#ff0000',
                    'borderColor' => '#ff0000',
                    'textColor' => '#ffffff'
                ];
            });

            return view('serveur.calendrier', ['reservationEvents' => $reservationEvents]);
        })->name('serveur.calendrier');

        Route::get('/admin/commandes/create', [OrderController::class, 'create'])->name('admin.commandes.create');
        Route::post('/admin/commandes/store', [OrderController::class, 'store'])->name('admin.commandes.store');


    });


    });

    // Routes pour les serveurs protégées par le middleware 'serveur'

    Route::middleware([SuperAdminMiddleware::class])->group(function () {
        // Placez ici les routes du SuperAdmin
        Route::get('superadmin/index', [SuperAdminController::class, 'index'])->name('superadmin.index');
        Route::get('superadmin/restaurants/create', [RestaurantController::class, 'create'])->name('superadmin.restaurants.create');
        Route::post('admin/restaurants', [RestaurantController::class, 'store'])->name('admin.restaurants.store');
        Route::get('superadmin/restaurants/index', [RestaurantController::class, 'index'])->name('superadmin.restaurants.index');
        Route::get('superadmin/users/index', [AdminController::class, 'index'])->name('superadmin.users.index');
        Route::get('/superadmin/users/create', [AdminController::class, 'create'])->name('superadmin.users.create');
        Route::post('/superadmin/users', [AdminController::class, 'store'])->name('superadmin.users.store');
        Route::get('/superadmin/restaurants/create', [RestaurantController::class, 'create'])->name('superadmin.restaurants.create');
        Route::post('/superadmin/restaurants', [RestaurantController::class, 'store'])->name('superadmin.restaurants.store');
        Route::get('superadmin/users/{id}/edit', [AdminController::class, 'edit'])->name('superadmin.users.edit');
        Route::put('superadmin/users/{id}', [AdminController::class, 'update'])->name('superadmin.users.update');
        Route::delete('superadmin/users/{id}', [AdminController::class, 'destroy'])->name('superadmin.users.destroy');
        Route::get('superadmin/restaurants/{id}/edit', [RestaurantController::class, 'edit'])->name('superadmin.restaurants.edit');
        Route::put('superadmin/restaurants/{id}', [RestaurantController::class, 'update'])->name('superadmin.restaurants.update');
        Route::delete('superadmin/restaurants/{id}', [RestaurantController::class, 'destroy'])->name('superadmin.restaurants.destroy');
        Route::get('/errors/error-403', function () {
            return view('errors.error-403');
        })->name('errors.error-403');
    });



    // Routes de l'Admin
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('/notifications/unread', [NotificationController::class, 'getUnreadNotifications'])->name('notifications.unread');
        Route::get('/notifications/read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');



        Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('admin/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        Route::get('admin/plats', [PlatController::class, 'index'])->name('admin.plats.index');
        Route::get('admin/plats/create', [PlatController::class, 'create'])->name('admin.plats.create');
        Route::post('admin/plats', [PlatController::class, 'store'])->name('admin.plats.store');
        Route::get('admin/plats/{plat}/edit', [PlatController::class, 'edit'])->name('admin.plats.edit');
        Route::put('admin/plats/{plat}', [PlatController::class, 'update'])->name('admin.plats.update');
        Route::delete('admin/plats/{plat}', [PlatController::class, 'destroy'])->name('admin.plats.destroy');
        Route::get('admin/menus', [MenuController::class, 'index'])->name('admin.menus.index');
        Route::get('admin/menus/create', [MenuController::class, 'create'])->name('admin.menus.create');
        Route::post('admin/menus', [MenuController::class, 'store'])->name('admin.menus.store');
        Route::get('admin/menus/{id}/pdf', [MenuController::class, 'generatePdf'])->name('admin.menus.pdf');

        Route::get('admin/menus/{menu}/edit', [MenuController::class, 'edit'])->name('admin.menus.edit');
        Route::put('admin/menus/{menu}', [MenuController::class, 'update'])->name('admin.menus.update');
        Route::delete('admin/menus/{menu}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');
        Route::get('admin/plats/trier', [PlatController::class, 'trierPlats'])->name('admin.plats.trier');
        Route::get('admin/reservations', [ReservationController::class, 'showReservations'])->name('admin.reservations');
        Route::get('admin/reservation', [ReservationController::class, 'index'])->name('admin.reservation.index');
        Route::get('/admin/tables', [TableController::class, 'index'])->name('admin.tables.index');
        Route::get('/admin/tables/create', [TableController::class, 'create'])->name('admin.tables.create');
        Route::post('/admin/tables', [TableController::class, 'store'])->name('admin.tables.store');
        Route::get('/admin/tables/{table}/edit', [TableController::class, 'edit'])->name('admin.tables.edit');
        Route::put('/admin/tables/{table}', [TableController::class, 'update'])->name('admin.tables.update');
        Route::delete('/admin/tables/{table}', [TableController::class, 'destroy'])->name('admin.tables.destroy');

        Route::get('/admin/reservation/create', [ReservationController::class, 'createReservation'])->name('admin.reservation.create');
        Route::post('/admin/reservation', [ReservationController::class, 'storeReservation'])->name('admin.reservation.store');
        Route::post('/admin/reservation/confirm/{id}', [ReservationController::class, 'confirm'])->name('admin.reservation.confirm');

        Route::post('/admin/reservation/confirm/{id}', [ReservationController::class, 'confirmReservation']);
        Route::post('/admin/reservation/send-email', [ReservationController::class, 'sendEmail']);
        Route::post('/admin/reservation/confirm-and-send/{id}', [ReservationController::class, 'confirmAndSendEmail'])->name('admin.reservation.confirm-and-send');


        Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
        Route::get('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
        Route::get('admin/reservations/{page?}/{reservationId?}', [ReservationController::class, 'index'])->name('admin.reservations');
        Route::get('admin/notification/{id}', [NotificationController::class, 'markAsRead'])->name('admin.notification.show');
        Route::get('admin/commandes/{id}', [OrderController::class, 'show'])->name('admin.commandes.show');
        Route::post('/admin/commandes/encaisser/{id}', [OrderController::class, 'encaisserCommande'])->name('admin.commandes.encaisser');
        Route::get('/admin/commandes/create', [OrderController::class, 'create'])->name('admin.commandes.create');
        Route::post('/admin/commandes/store', [OrderController::class, 'store'])->name('admin.commandes.store');
        Route::delete('/commandes/{id}', [OrderController::class, 'destroy'])->name('commandes.destroy');



        Route::get('/commandes/ajout', [OrderController::class, 'ajout'])->name('admin.commandes.ajout');
        Route::post('/commandes/add', [OrderController::class, 'add'])->name('admin.commandes.add');
        Route::post('/serveur/commandes/store', [OrderController::class, 'store'])->name('serveur.commandes.store');



        Route::get('/personnel', [PersonnelController::class, 'index'])->name('personnel.index');
        Route::get('/personnel/create', [PersonnelController::class, 'create'])->name('personnel.create');
        Route::post('/personnel', [PersonnelController::class, 'store'])->name('personnel.store');
        Route::get('/personnel/{id}/edit', [PersonnelController::class, 'edit'])->name('personnel.edit');
        Route::put('/personnel/{id}', [PersonnelController::class, 'update'])->name('personnel.update');
        Route::delete('/personnel/{id}', [PersonnelController::class, 'destroy'])->name('personnel.destroy');



        Route::get('/config', [ConfigController::class, 'index'])->name('config.index');
        Route::post('/config', [ConfigController::class, 'update'])->name('config.update');

        // Route::get('/front-menu', function () {
        //     return view('front-menu');
        // });
        // Route::get('/front-menu', [MenuFrontController::class, 'showMenu']);

        Route::get('/menu', [MenuController::class, 'showMenu'])->name('client.menu');
        Route::post('/menu/add-to-cart/{plat}', [OrderController::class, 'addToCart'])->name('client.add-to-cart');

        Route::post('/admin/reservation/confirm/{id}', [ReservationController::class, 'confirmReservation'])->name('admin.reservation.confirm');
        Route::post('/admin/reservation/send-email', [ReservationController::class, 'sendEmail'])->name('admin.reservation.send-email');
        Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');

        Route::get('/errors/error-403', function () {
            return view('errors.error-403');
        })->name('errors.error-403');



        Route::get('serveurs', [AdminController::class, 'indexServeurs'])->name('serveurs.index');
        Route::get('serveurs/create', [AdminController::class, 'createServeur'])->name('serveurs.create');
        Route::post('serveurs', [AdminController::class, 'storeServeur'])->name('serveurs.store');
        Route::get('serveurs/{serveur}', [AdminController::class, 'showServeur'])->name('serveurs.show');
        Route::get('serveurs/{serveur}/edit', [AdminController::class, 'editServeur'])->name('serveurs.edit');
        Route::put('serveurs/{serveur}', [AdminController::class, 'updateServeur'])->name('serveurs.update');
        Route::delete('serveurs/{serveur}', [AdminController::class, 'destroyServeur'])->name('serveurs.destroy');

        Route::get('cuisinier', [AdminController::class, 'indexCuisiniers'])->name('cuisinier.index');
        Route::get('cuisinier/create', [AdminController::class, 'createCuisinier'])->name('cuisinier.create');
        Route::post('cuisinier', [AdminController::class, 'storeCuisinier'])->name('cuisinier.store');
        Route::get('cuisinier/{cuisinier}', [AdminController::class, 'showCuisinier'])->name('cuisinier.show');
        Route::get('cuisinier/{cuisinier}/edit', [AdminController::class, 'editCuisinier'])->name('cuisinier.edit');
        Route::put('cuisinier/{cuisinier}', [AdminController::class, 'updateCuisinier'])->name('cuisinier.update');
        Route::delete('cuisinier/{cuisinier}', [AdminController::class, 'destroyCuisinier'])->name('cuisinier.destroy');
    });
    Route::get('/reservation', [ReservationController::class, 'showReservationsForm'])->name('client.reservation.form');
    Route::get('/admin/commandes', [OrderController::class, 'showOrders'])->name('admin.commandes.index');
    Route::get('admin/commandes/{commande}', [OrderController::class, 'show'])->name('admin.commandes.show');
    Route::get('admin/commandes/{id}/download-pdf', [OrderController::class, 'downloadPDF'])->name('admin.commandes.downloadPDF');
    Route::post('/change-status/{id}/{status}', [OrderController::class, 'changeStatus'])->name('order.changeStatus');
});

Route::get('/front-menu/{id}', [MenuFrontController::class, 'showMenuById'])->name('front-menu.showById');
Route::get('/Shop/{id}', [CartController::class, 'seeShop'])->name('Shop.showById');
Route::get('/get-cart', [CartController::class, 'getCart'])->name('cart.get');
Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart']);
Route::post('/update-cart-quantity', [CartController::class, 'updateCartQuantity'])->name('update.cart.quantity');


Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');

Route::get('/confirmation', 'OrderController@confirmation')->name('confirmation');

Route::get('/shop-detail/{id}', [ShopController::class, 'show'])->name('shop-detail');



Route::get('/client/restaurant/{id}', [ReservationController::class, 'showReservationForm'])->name('client.restaurant');
Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');
Route::get('restaurant/{id}/reservation', [ReservationController::class, 'showReservationForm'])->name('client.reservation.form');
Route::post('restaurant/reservation', [ReservationController::class, 'makeReservation'])->name('client.reservation.submit');
Route::get('/restaurant/{id}', [MenuFrontController::class, 'showeMenuParId'])->name('restaurant.showById');
Route::get('/get-cart', [App\Http\Controllers\CartController::class, 'getCartContent'])->name('get-cart');
Route::get('/get-cart', [CartController::class, 'getCartDetails'])->name('get-cart');


Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::delete('/delete-cart-item', [CartController::class, 'deleteCartItem'])->name('delete.cart.item');
Route::get('/cart/{restaurantId}', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/update-cart-quantity', [CartController::class, 'updateCartQuantity'])->name('update.cart.quantity');
Route::get('/checkout/{restaurant_id}', [CartController::class, 'checkout'])->name('checkout');


Route::post('/commander', [OrderController::class, 'commander'])->name('commander');
Route::post('/checkout/initiate', [CartController::class, 'initiateOrder'])->name('checkout.initiate');


Route::get('/webmaster-resto', [RestaurantController::class, 'showAllRestaurants'])->name('webmaster-resto');
Route::get('/restaurant/{id}', [RestaurantController::class, 'showeMenuParId'])->name('restaurant.showById');
Route::get('/restaurants/{id}/menu/pdf', [RestaurantController::class, 'generatePdfMenu'])->name('restaurant.menu.pdf');




