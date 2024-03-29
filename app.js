ReactDOM.render(
    <h1>Hello, world!</h1>,
    document.getElementById('root')
  );

document.addEventListener('DOMContentLoaded', fetchProducts)

function fetchProducts() {

    fetch('db-connect.php')
        .then(res => res.json())
        .then(json => {

            document
                .querySelector('#productsContainer')
                .innerHTML = json.map(products => `<li> ${products.name} : €${products.price} </li>`).join('')

        });

        

}