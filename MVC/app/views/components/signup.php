
<script src="https://cdn.tailwindcss.com"></script>
<form id="form" class="p-5 m-5 h-full flex flex-col   border border-cadethh" method="post">
    <h1 class="capitalize font-bold text-2xl">creer un compte</h1>
    <?php if (!empty($errors)) { ?>
        <div id="errors" class="bg-red-200 py-3 px-2 ">
            <?= implode("<br>", $errors) ?>
        </div>
    <?php } ?>

    <div id="form_inputs" class="md:flex my-6 ">
        <div class="flex flex-col container mx-auto md:w-1/3  ">
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">nom :
                </label>
                <input class=" focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="nom" id="nom" value="<?php if (!empty($data['nom'])) echo $data['nom']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">prenom :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="prenom" id="prenom" value="<?php if (!empty($data['prenom'])) echo $data['prenom']; ?>">
            </div>
            <!-- here -->
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">adresse :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="adresse" id="adresse" value="<?php if (!empty($data['adresse'])) echo $data['adresse']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">numero tel :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="numero_tel" id="numero_tel" value="<?php if (!empty($data['numero_tel'])) echo $data['numero_tel']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">ville :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="ville" value="<?php if (!empty($data['ville'])) echo $data['ville']; ?>">
            </div>
        </div>
        <div class="flex flex-col  container mx-auto md:w-1/3 ">
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">e-mail :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="email" id="email" value="<?php if (!empty($data['email'])) echo $data['email']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">mot de passe :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="password" id="password" name="password">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">confirmation mot de passe :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="password" id="password_2" name="password_2">
            </div>
            <div class="mt-2 flex flex-col">
                <h1 id="password_check" class="py-3 hidden text-center"></h1>
            </div>
        </div>
    </div>

    <div class="lg:w-1/3 mx-auto">
        <div id="terms_error" class="hidden ">
        <h1 class="transition-all duration-1000 bg-red-200 py-3 text-center">merci d'eccepter les termes d'utilisation</h1>
        </div>
        <div class="flex items-center">
            <input class="text-cadeth focus:ring-transparent border-cadethh" type="checkbox" name="terms" id="terms">
            <p class="ml-3">By creating an account, you agree to our Conditions of Use and Privacy Notice.</p>
        </div>
        <p class="mt-6 pt-4 border-t">vous avez deja un compte? login <a class="text-indigo-400 hover:font-bold">ici</a></p>
        <button id="submit" class="capitalize w-full font-bold btn-primary mt-3 mb-6">submit</button>
    </div>
</form>
<script src="<?= ROOT ?>assets/js/signup.js"></script>