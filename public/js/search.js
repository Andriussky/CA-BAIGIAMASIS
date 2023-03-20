const searchForm = document.getElementById('searchForm');
const searchInput = document.getElementById('searchInput');
const shelfContentRows = document.querySelectorAll('.shelf-content-row');

searchForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const searchQuery = searchInput.value.toLowerCase();

    shelfContentRows.forEach((row) => {
        const nameCell = row.querySelector('td:nth-child(2)');

        if (nameCell.innerText.toLowerCase().includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';

        }
        const nameCell2 = row.querySelector('td:nth-child(1)');

        if (nameCell2.innerText.toLowerCase().includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

