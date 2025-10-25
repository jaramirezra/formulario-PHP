document.getElementById("formulario").addEventListener("submit", (e) => {
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const confirmation = document.getElementById("confirmation").value;

  if (!name || !email || !confirmation) {
    alert("Por favor completa todos los campos");
    return;
  }

  // Guardar en localStorage
  const registros = JSON.parse(localStorage.getItem("form-data")) || [];
  registros.push({ name, email, confirmation });
  localStorage.setItem("form-data", JSON.stringify(registros));

  Swal.fire({
    title: "Registro guardado correctamente",
    icon: "success",
    confirmButtonText: "Ver lista",
    draggable: true,
  }).then(() => {
    window.location.href = "views/list.html";
  });

  e.target.reset();
});
