//make form order
const container = document.querySelector('.container');
const form = document.createElement('div');
form.setAttribute("class", "form-order");
container.appendChild(form);

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
    price: 40000
  },
  {
    id: 5,
    name: 'Macbook pro',
    price: 50000
  },
];

const products = [...new Set(items.map((item) => { return item}))];
products.map((item) => card(item.name, item.price, item.id));
let ind = 0;

  const totalPrice = document.createElement('div');
  totalPrice.setAttribute('class', 'total-price');
  const price2 = document.createElement('p');
  const total = document.createElement('p');
  total.innerHTML = 'Total'
  form.appendChild(totalPrice);
  totalPrice.appendChild(total);
  totalPrice.appendChild(price2);
  price2.innerHTML = 0;

function card(n, p, i){
  const order = document.createElement('div');
  const nameItem = document.createElement('div');
  const price = document.createElement('div');
  const p1 = document.createElement('p');
  const p2 = document.createElement('p');
  order.setAttribute("class", "order");
  nameItem.setAttribute("class", "nameItem");
  price.setAttribute("class", "price");
  form.appendChild(order);
  order.appendChild(nameItem);
  order.appendChild(price);
  nameItem.appendChild(p1);
  price.appendChild(p2);
  p1.innerHTML = n;
  p2.innerHTML = p;

  order.addEventListener('click', () => {
    let tot = 0;
    if( order.classList.toggle('clicked')){
      cart.push({...products[i-1]});
      // displayTotal();
      const num = cart.map((items) => {
      const itemPrice = parseInt(items.price);
      tot = tot + itemPrice;
      price2.innerHTML = tot;
      console.log(cart.length, 'yang masuk : ', {...products[i-1]});
      })
    }else{
      cart.splice({...products[i-1]}, 1);
      console.log(cart.length, 'yang keluar : ', {...products[i-1]});
    }
   ;
  })
}

let cart = [];

function displayTotal(p){
  
  // if(cart.length === null){
  //   price2.innerHTML = '0';
  // }else{
    
  //   })
  // }
}

function add(a){
  // cart.push({...products[a]});
  // // displayTotal();
  // let tot = 0;
  // const num = cart.map((items) => {
  //   const itemPrice = parseInt(items.price);
  //   tot = tot + itemPrice;
  //   price2.innerHTML = tot;
  //   // console.log(cart);
  // })
  take(tot);
}


// for(let i = 0; i <= cart.length; i++){
//   add(i);
// }

// console.log(cart);
// let tot = 0;
// tot = tot + cart[0].price + cart[1].price;


// console.log(tot);

  
