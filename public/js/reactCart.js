import React from 'react';

function ProductList() {
  const produits = JSON.parse(document.getElementById('root').getAttribute('data-produits'));

  const productItems = produits.map((produit) => (
    <li key={produit.id}>
      {produit.nom} - {produit.prix}
    </li>
  ));

  return <ul>{productItems}</ul>;
}

export default ProductList;
