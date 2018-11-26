'use strict';


var OrderForm = function()
{
    this.form          = $('#order-form');
    this.meal          = $('#meal');
    this.mealDetails   = $('#meal-details');
    this.orderSummary  = $('#order-summary');
    this.addMeal         = $('#order-form button');
    this.validateOrder = $('#validate-order');

   this.basketSession = new BasketSession();
};


OrderForm.prototype.onChangeMeal = function()
{
    var mealId;

    // Récupération de l'id de l'aliment sélectionné dans la liste déroulante.
    mealId = this.meal.val();

    /*
     * Exécution d'une requête HTTP GET AJAJ (Asynchronous JavaScript And JSON)
     * pour récupérer les informations de l'aliment sélectionné dans la liste déroulante.
     */
    $.getJSON
    (
        getRequestUrl() + '/meal?id=' + mealId, // URL vers un contrôleur PHP
        this.onAjaxChangeMeal.bind(this)        // Méthode appelée au retour de la réponse HTTP
    );
};


OrderForm.prototype.onAjaxChangeMeal = function(meal)
{
    console.log(meal);

    // Construction de l'URL absolue vers la photo du produit alimentaire.
    var imageUrl = getWwwUrl() + '/images/meals/' + meal.Photo;

    // Mise à jour de l'affichage.
    this.mealDetails.children('p').text(meal.Description);
    this.mealDetails.find('strong').text(formatMoneyAmount(meal.SalePrice));
    this.mealDetails.children('img').attr('src', imageUrl);

    // Enregistrement du prix dans un champ de formulaire caché.
    this.form.find('input[name=salePrice]').val(meal.SalePrice);
};


//2eme partie
OrderForm.prototype.onSubmitForm = function(event) {
    event.preventDefault();

    console.log($('#meal-details img').attr('src'));



    this.basketSession.add(
        this.meal.val(),

        // Nom sélectionné dans la liste déroulante des produits alimentaires
        this.meal.find('option:selected').text(),

        // Saisie de la quantité par l'utilisateur
        this.form.find('input[name=quantity]').val(),

        // Champ de formulaire caché contenant le prix
        this.form.find('input[name=salePrice]').val(),

        $('#meal-details img').attr('src')
    );

    this.basketSession.load();
}

OrderForm.prototype.onClickTrash = function(event) {
    event.preventDefault();
    var mealId  = event.currentTarget.dataset.mealid;
    console.log(mealId);
    this.basketSession.remove(mealId);
}



OrderForm.prototype.run = function()
{
	this.onChangeMeal();
    this.meal.on('change', this.onChangeMeal.bind(this));
   //2eme partie

    $('#order-form button').on('click', this.onSubmitForm.bind(this) );
    $(document).on('click', '.button-cancel', this.onClickTrash.bind(this));
};