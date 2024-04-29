function loadPage(url) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content').innerHTML = data;
            history.pushState({}, '', url);
        })
        .catch(error => console.error('Error:', error));
}
loadPage('books.php');