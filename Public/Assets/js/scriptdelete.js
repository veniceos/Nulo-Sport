var competitorIdToDelete = null;

function openModal(competitorId) {
    competitorIdToDelete = competitorId;
    document.getElementById('confirmModal').style.display = 'block';
}

document.getElementById('confirmBtn').onclick = function() {
    // Se o usuário confirmar, redireciona para a URL de exclusão
    window.location.href = '/competitor/delete/' + competitorIdToDelete;
};

document.getElementById('cancelBtn').onclick = function() {
    // Fecha o modal se o usuário clicar em "Não"
    document.getElementById('confirmModal').style.display = 'none';
};
