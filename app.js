function sendData() {
    const ign = document.getElementById('ign').value;
    const disc = document.getElementById('disc').value;
    const note = document.getElementById('note').value;

    fetch('save-info.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `ign=${encodeURIComponent(ign)}&disc=${encodeURIComponent(disc)}&note=${encodeURIComponent(note)}`
    })
    .then(response => response.text())
    .then(data => alert(data));
}