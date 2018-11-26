'use strict';

var BasketSession = function()
{
    // Contenu du panier.
    this.items = null;

    this.load();

};


BasketSession.prototype.add = function(mealId, name, quantity, salePrice, pict)
{

	mealId    = parseInt(mealId);
    quantity  = parseInt(quantity);
    salePrice = parseFloat(salePrice);

    for(var index = 0; index < this.items.length; index++)
    {
        if(this.items[index].mealId == mealId)
        {
            // L'aliment spécifié a été trouvé, mise à jour de la quantité commandée.
            this.items[index].quantity += quantity;

            saveDataToDomStorage('panier', this.items);

            return;
        }
    }

    this.items.push(
    {
        mealId    : mealId,
        name      : name,
        quantity  : quantity,
        salePrice : salePrice,
        pict      : pict
    });

    saveDataToDomStorage('panier', this.items);
    this.load();
}


BasketSession.prototype.load = function()
{
    // Chargement du panier depuis le DOM storage.
    this.items = loadDataFromDomStorage('panier');

    if(this.items == null)
    {
        this.items = new Array();
    }

    console.log('la', this.items);

    var table = $('<table class="generic-table">');

    table.append('<td class="number"><strong>Quantité</strong></td><td><strong>Produit</strong></td><td><strong>Prix Unitaire</strong></td><td><strong>Prix Total</strong></td>');

    for (var i = 0; i < this.items.length; i++) {
    	var tr = $('<tr>');
    	tr.append('<td class="number">'+this.items[i].quantity+'</td><td><strong>'+this.items[i].name+'</strong></td><td class="number">'+this.items[i].salePrice.toFixed(2)+' €</td><td class="number">'+(this.items[i].salePrice*this.items[i].quantity).toFixed(2)+' €</td><td><button class="button button-cancel small" data-mealId="'+this.items[i].mealId+'"><i class="fa fa-trash"></i></button></td')
    	table.append(tr);
    }

    $('#order-summary').html(table);


};


BasketSession.prototype.remove = function(mealId)
{
	var index;

    // Recherche de l'aliment spécifié.
    for(index = 0; index < this.items.length; index++)
    {
        if(this.items[index].mealId == mealId)
        {
            // L'aliment spécifié a été trouvé, suppression.
            this.items.splice(index, 1);

            console.log('cut', this.items);

            saveDataToDomStorage('panier', this.items);

            this.load();

            return true;
        }
    }

    return false;

}

