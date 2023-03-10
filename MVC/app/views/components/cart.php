<?php 
//show($data);
?>
<form action="<?= ROOT ?>checkout" id="checkout" method="POST">
    <div class="flex">
        <div class="capitalize container mx-auto lg:w-2/3">
            <div class="flex items-center justify-between text-3xl font-bold my-5 border border-P_navy p-5">
                <div class="flex flex-col">
                    <h1 class="">panier (<?= count($data); ?>)</h1>
                    <a href="">
                        <h1 class="text-xs pt-2 hover:text-red-500 hover:underline transition-all">vider le panier</h1>
                    </a>
                </div>

                <h1 class="text-lg">prix</h1>
            </div>
            <!-- cart product widget -->


            <?php if (!empty($data)) foreach ($data as $value) { ?>
                <div class="product_item flex gap-3 bg-cadethh p-3 my-5 hover:shadow-lg transition-all border border-cadethh hover:border-cadet scale-100 hover:scale-101 ">
                    <div class="h-[110px] bg-white">

                        <img class="h-auto w-[160px] max-h-[110px] my-auto" src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt="" srcset="">
                    </div>
                    <div class="flex flex-col justify-between w-full">
                        <div class="flex justify-between">
                            <h3><?= $value['libelle']; ?></h3>
                            <span class="product_price text-xl font-bold"><?= $value['prix_final']; ?> MAD</span>
                        </div>
                        <div class="flex justify-between items-end">
                            Quantite
                            <select class="mr-auto ml-3 py-1  text-black" name="<?= $value['id']; ?>" id="<?= $value['id']; ?>">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                            <a href="cart/delete/carte/<?= $value['id_cart_item']; ?>" class="btn-icon hover:bg-red-500">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- cart product widget -->
        </div>
        <!-- checkout widget -->
        <div class="sticky top-5 flex flex-col gap-3 w-80 h-fit border border-P_navy m-5 p-5 hover:shadow-lg transition-shadow">

            <p class="capitalize text-xl font-bold">Sommaire</p>

            <p class="capitalize flex justify-between ">Delivery <span class="font-bold">octobre 22 - 30</span></p>
            <p class="capitalize flex justify-between">nombre de pieces: <span id="total_pieces" class="font-bold">5</span></p>
            <div class="flex flex-col border-t border-b py-2">
                <p class="capitalize flex justify-between">prix total: <span id="prix_total" class=" font-medium ml-auto mr-3">799.99</span> MAD</p>
                <p class="capitalize flex justify-between ">frais livraison: <span id="livraison" class="font-medium ml-auto mr-3">15</span> MAD</p>
                <p class="capitalize flex justify-between hidden">coupon: <span class="font-medium ml-auto mr-3">- 35</span> MAD</p>
            </div>
            <p class="capitalize flex justify-between">montant a payer: <span id="montant_total" class="font-bold ml-auto mr-3">600.99</span> MAD</p>

            <button class="btn-primary ">Checkout</button>
        </div>
        <!-- checkout widget -->
    </div>
</form>

<script src="<?= ROOT ?>assets/js/cart.js"></script>