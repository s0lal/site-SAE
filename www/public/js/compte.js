// Bascule entre Connexion et Inscription
document.getElementById("show-register").addEventListener("click", function (e) {
  e.preventDefault();
  document.querySelector(".form-container").classList.add("hidden");
  document.getElementById("register-container").classList.remove("hidden");
});

document.getElementById("show-login").addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("register-container").classList.add("hidden");
  document.querySelector(".form-container").classList.remove("hidden");
});

// Fonction pour afficher l'aperçu de la boutique
function afficherApercuBoutique(username) {
  const previewDiv = document.createElement("div");
  previewDiv.className = "boutique-preview";
  previewDiv.innerHTML = `
    <div class="boutique-box">
      <p>Explorez nos produits exclusifs et nos nouveautés !</p>
      <a href="index.php?route=boutique" class="boutique-button">Visitez notre boutique</a>
    </div>
  `;

  if (!document.querySelector(".form-container").classList.contains("hidden")) {
    document.querySelector(".form-container").appendChild(previewDiv);
  } else {
    document.getElementById("register-container").appendChild(previewDiv);
  }
}

// Connexion
document.querySelector(".form-login").addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("login-name").value;
  sessionStorage.setItem("username", name);

  const message = document.createElement("p");
  message.className = "confirmation-message";
  message.textContent = `Merci de vous être connecté. Bon retour chez Nova, ${name} !`;

  this.parentElement.appendChild(message);
  this.style.display = "none";

  const toggleMessage = this.parentElement.querySelector(".toggle-message");
  if (toggleMessage) toggleMessage.remove();

  afficherApercuBoutique(name);
});

// Inscription
document.querySelector(".form-register").addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("register-name").value;
  sessionStorage.setItem("username", name);

  const message = document.createElement("p");
  message.className = "confirmation-message";
  message.textContent = `Merci de vous être inscrit chez Nova, ${name}.`;

  this.parentElement.appendChild(message);
  this.style.display = "none";

  const toggleMessage = this.parentElement.querySelector(".toggle-message");
  if (toggleMessage) toggleMessage.remove();

  afficherApercuBoutique(name);
});

// Si déjà connecté (session active)
window.addEventListener("DOMContentLoaded", function () {
  const username = sessionStorage.getItem("username");
  if (username) {
    const loginForm = document.querySelector(".form-login");
    const registerForm = document.querySelector(".form-register");

    loginForm.style.display = "none";
    registerForm.style.display = "none";

    const loginToggle = loginForm.parentElement.querySelector(".toggle-message");
    const registerToggle = registerForm.parentElement.querySelector(".toggle-message");
    if (loginToggle) loginToggle.remove();
    if (registerToggle) registerToggle.remove();

    const message = document.createElement("p");
    message.className = "confirmation-message";
    message.textContent = `Vous êtes déjà connecté. Bon retour chez Nova, ${username} !`;

    if (!document.querySelector(".form-container").classList.contains("hidden")) {
      document.querySelector(".form-container").appendChild(message);
    } else {
      document.getElementById("register-container").appendChild(message);
    }

    afficherApercuBoutique(username);
  }
});
