function search_player() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let table = document.getElementById('playersTable');
    let rows = table.getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) {  // începând de la 1 pentru a evita antetul tabelului
        let cells = rows[i].getElementsByTagName('td');
        let match = false;

        for (let j = 0; j < cells.length - 1; j++) {  // ignorăm ultima celulă care conține acțiunile
            if (cells[j].innerHTML.toLowerCase().includes(input)) {
                match = true;
                break;
            }
        }

        if (match) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}