const js = document.getElementById("produtos")
 
// Função para adicionar itens ao carrinho

function adicionarAoCarrinho(preco) {

   var cart = document.getElementById('cart');
   var li = document.createElement('li');
   li.innerHTML =  "<li class='list-group-item'>" + preco + "</li>"
   cart.appendChild(li);
}