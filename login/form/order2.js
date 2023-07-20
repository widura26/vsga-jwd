  const container = document.querySelector('.container');
  const form = document.createElement('div');
  form.setAttribute("class", "form-order");
  container.appendChild(form);

  const items = [
    {
      id: 1,
      name: 'Lenovo Ideapad 3',
      price: 7000000
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
  
  items.forEach((item) => card(item.name, item.price, item.id));

  let allItem = [];

  const totalPrice = document.createElement('div');
  totalPrice.setAttribute('class', 'total-price');
  const price2 = document.createElement('p');
  const total = document.createElement('p');
  totalPrice.appendChild(total);
  totalPrice.appendChild(price2);
  total.innerHTML = 'Total (Rp)'
  form.appendChild(totalPrice);
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
    p2.innerHTML = `Rp. ${p}`

    order.addEventListener('click', () => {
      order.classList.toggle('clicked') ? add(i) : remove(i);
    })
  }

  function add(id){
    let total = 0;
    allItem.push(items[id-1]);
    for(let item of allItem){
      const price = parseInt(item.price);
      total = total + price;
      price2.innerHTML = total;
    }
  }

  function remove(id){
    let itemId = id;
    const indexItem = allItem.findIndex(function(item) {
      return item.id === itemId;
    });
    allItem.splice(indexItem, 1);
    let total = allItem.reduce(function(acc, item) {
      return acc + item.price;
    }, 0);

    price2.innerHTML = total;
    // console.log(allItem);
  }