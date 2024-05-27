const checkbox = document.getElementById("checkbox");
const menu = document.getElementById("menu");
const menuText = document.querySelectorAll(".menuText");

checkbox.addEventListener("change", (e) => {
    if (checkbox.checked) {
        menu.classList.add("open");
        menuText.forEach(function (text, index) {
            setTimeout(() => {
                text.classList.add("open2");
            }, index * 50);
        });
    } else {
        menu.classList.remove("open");
        menuText.forEach(function (text, index) {
            setTimeout(() => {
                text.classList.remove("open2");
            }, index * 50);
        });
    }
});

// Evitar la propagación del evento de clic en el menú para que no se cierre al hacer clic en él
menu.addEventListener("click", (e) => {
    e.stopPropagation();
});

// Cerrar el menú cuando se haga clic en el checkbox
checkbox.addEventListener("click", (e) => {
  menu.classList.remove("open");
  menuText.forEach(function (text, index) {
      setTimeout(() => {
          text.classList.remove("open2");
      }, index * 50);
  });
});

// dark light mode

const dayNight = document.querySelector("#themeChangeBtn");

dayNight.addEventListener("click", () => {
  // Cambiar clase "dark" en el body
  document.body.classList.toggle("dark");

  // Cambiar clase "dark" en otros elementos relevantes
  const dashboardContent = document.querySelector(".dashboard-content");
  dashboardContent.classList.toggle("dark");

  // Guardar el estado del tema en el almacenamiento local
  if (document.body.classList.contains("dark")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }

  // Actualizar el ícono de cambio de tema
  updateIcon();
});

function themeMode() {
  // Aplicar el tema guardado en el almacenamiento local
  if (localStorage.getItem("theme") !== null) {
    if (localStorage.getItem("theme") === "light") {
      document.body.classList.remove("dark");
      const dashboardContent = document.querySelector(".dashboard-content");
      dashboardContent.classList.remove("dark");
    } else {
      document.body.classList.add("dark");
      const dashboardContent = document.querySelector(".dashboard-content");
      dashboardContent.classList.add("dark");
    }
  }
  updateIcon();
}

themeMode();

function updateIcon() {
  // Actualizar el ícono de acuerdo al estado del tema
  const icon = dayNight.querySelector("i");
  if (document.body.classList.contains("dark")) {
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
  } else {
    icon.classList.remove("fa-sun");
    icon.classList.add("fa-moon");
  }
}

