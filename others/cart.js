const items = [
  {
    id: 1,
    name: 'Lenovo Ideapad 3',
    price: 36000
  },
  {
    id: 2,
    name: 'Asus vivobook 15',
    price: 20000
  },
  {
    id: 3,
    name: 'Acer Nitro 5',
    price: 30000
  },
  {
    id: 4,
    name: 'Lenovo Legion',
    price: 30000
  },
  {
    id: 5,
    name: 'Macbook pro',
    price: 30000
  },
];

const brandName = document.getElementById('name');
const price = document.getElementById('price');
const container = document.querySelector('.card-container');

const card = (name, price) => {
  return `
  <div class="card">
    <p id="name">${name}</p>
    <p id="price">${price}</p>
  </div>
  `
}

const ctn = document.querySelectorAll('.card-container .card p');
console.log(ctn);
const products = [...new Set(items.map((item) => { return item}))];
products.map((item) => container.innerHTML += card(item.name, item.price));

function add(card){
  card.addEventListener('click', () => {
    console.log('halo');
  })
}