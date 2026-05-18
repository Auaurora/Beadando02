const api = "api.php";
document.getElementById("filmform").addEventListener("submit", addKepzes);
window.onload = function() {
    fetchKepzes();
};
function fetchKepzes() {
    fetch(api)
        .then(res => res.json())
        .then(data => {
            let rows = "";
data.readData.forEach( film => {
    // const filmJson = JSON.stringify(film).replace(/"/g, '&quot;');

    rows += `
    <tr>
        <td>${film.id}</td>
        <td>${film.cim}</td>
        <td>${film.gyartas}</td>
        <td>${film.hossz}</td>
        <td>${film.bemutato}</td>
        <td>${film.youtube}</td>
        <td>
          <button onclick='editUser(${JSON.stringify(film)})'>Edit</button>
                        <button onclick='deleteUser(${film.id})'>Delete</button>
        </td>
    </tr>`;
});
            document.getElementById("filmlista").innerHTML = rows;
        });
}
function addKepzes(e) {
    e.preventDefault();
    const id = document.getElementById("id").value;
    const cim = document.getElementById("cim").value;
    const gyartas = document.getElementById("gyartas").value;
    const hossz = document.getElementById("hossz").value;
    const bemutato = document.getElementById("bemutato").value;
    const youtube = document.getElementById("youtube").value;
    const data = {
        id: id,
        cim: cim,
        gyartas: gyartas,
        hossz: hossz,
        bemutato: bemutato,
        youtube: youtube
    };
    const $method = id ? "PUT" : "POST";
    fetch(api, {
        method: $method,
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => {
        e.target.reset();
        document.getElementById("message").innerText = data.status;
        document.getElementById("id").value = "";
        fetchKepzes();
    });
}

function editKepzes(film) {
    document.getElementById("id").value = film.id;
    document.getElementById("cim").value = film.cim;
    document.getElementById("gyartas").value = film.gyartas;
    document.getElementById("hossz").value = film.hossz;
    document.getElementById("bemutato").value = film.bemutato;
    document.getElementById("youtube").value = film.youtube;
}

function deleteKepzes(id) {
    if (!confirm("Biztosan törölni kívánja??")) return;
    fetch(api, {
        method: "DELETE",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({id})
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("message").innerText = data.status;
        fetchKepzes();
    });
}
