function ajouterAuPanier(nom, image, prix) {
  let panier = JSON.parse(localStorage.getItem("panier")) || [];

  // Cherche si le produit est déjà dans le panier
  const index = panier.findIndex(item => item.nom === nom);
  if (index > -1) {
    panier[index].quantite += 1;
  } else {
    panier.push({ nom, image, prix, quantite: 1 });
  }

  localStorage.setItem("panier", JSON.stringify(panier));
  alert("Produit ajouté au panier !");
}

function afficherPanier() {
  const panier = JSON.parse(localStorage.getItem("panier")) || [];
  const container = document.querySelector(".panier-items");
  const totalSpan = document.querySelector(".total-price");
  let total = 0;

  container.innerHTML = "";

  panier.forEach((item, i) => {
    total += item.prix * item.quantite;

    const div = document.createElement("div");
    div.className = "panier-item";
    div.innerHTML = `
      <img src="${item.image}" class="item-img" />
      <div class="item-details">
        <h2 class="item-name">${item.nom}</h2>
        <p class="item-quantity">Quantité : ${item.quantite}</p>
        <p class="item-price">Prix : ${item.prix * item.quantite}€</p>
      </div>
      <button class="item-remove" onclick="retirerDuPanier(${i})">Supprimer</button>
    `;
    container.appendChild(div);
  });

  totalSpan.textContent = total + "€";
}

function retirerDuPanier(index) {
  let panier = JSON.parse(localStorage.getItem("panier")) || [];
  panier.splice(index, 1);
  localStorage.setItem("panier", JSON.stringify(panier));
  afficherPanier();
}
