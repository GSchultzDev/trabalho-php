var menuItem = document.querySelectorAll('.item-menu')

function selectLink(){
    menuItem.forEach((item)=> 
    item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item) =>
    item.addEventListener('click', selectLink)
)


// menu lateral

var btn = document.querySelector('#btn-exp')
var nav = document.querySelector('.menu-lateral')

btn.addEventListener('click', function(){
    nav.classList.toggle('expandir')
})

// modal

document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("myModal");
    const modalBody = document.getElementById("modal-body");
    const span = document.getElementsByClassName("close")[0];

    // Função para abrir a modal
    function openModal(fileName) {
        fetch(fileName)
            .then(response => response.text())
            .then(data => {
                // Adiciona o conteúdo carregado
                modalBody.innerHTML = data;
    
                // Verifica se o CSS já foi adicionado
                if (!document.querySelector("#modal-css")) {
                    const link = document.createElement("link");
                    link.id = "modal-css"; // ID para evitar duplicação
                    link.rel = "stylesheet";
                    link.href = "../css/index.css"; // caminho para o CSS
                    document.head.appendChild(link);
                }
                
                // Exibe a modal
                modal.style.display = "block";
            })
            .catch(error => console.error('Erro ao carregar o arquivo:', error));
    }
    
    
    

    // Event listener para fechar a modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }

    // Adiciona o evento de clique para cada .content
    document.querySelectorAll('.content').forEach(content => {
        content.addEventListener('click', function () {
            const fileName = this.getAttribute('data-file');
            openModal(fileName);
        });
    });
});
