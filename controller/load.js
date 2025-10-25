document.addEventListener("DOMContentLoaded", () => {
  const tabla = document.getElementById("table-form");
  const registros = JSON.parse(localStorage.getItem("form-data")) || [];

  if (registros.length === 0) {
    tabla.innerHTML = `<tr><td colspan="3">No hay registros</td></tr>`;
    return;
  }

  registros.forEach(({ name, email, confirmation }, index) => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
        <td>${index + 1}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td>${confirmation == 1 ? "Sí" : "No"}</td>
    `;
    tabla.appendChild(fila);
  });
});
