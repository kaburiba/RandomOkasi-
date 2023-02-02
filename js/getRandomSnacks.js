const getRandomSnacks = async (url = '') => {
    const res = await fetch(url, {
        method: 'POST',
        headers: {'Context-Type': 'application/json;'},
        body: JSON.stringify(param[""])
    })
        .then((response) => response.json() )
        .then((data) => {
            console.log('Success:', data.status);
            const json = JSON.parse(data)

            return json
        })
        .catch((error) => {
            console.log('Error:', error);
        });
    return res
}


const setItem = async () => {
    const url = "http://localhost/RandomOkasi-/function/getRandomSnack.php";
    const items = await getRandomSnacks(url)
    console.log(items["item"])
    const itemContainer = document.getElementById("item-container");
    items["item"].forEach(i => {
        const insertItem = `
        <div class="box">
            <img class="snack_img" src=${i.image} alt=${i.name}>
            <h4 class="goods">${i.name}</h4>
            <p class="maker">${i.maker}</p>
            <p class="price">${i.price}円</p>
        </div>
        `;
        itemContainer.insertAdjacentHTML('beforeend', insertItem);
    })
}

window.addEventListener('DOMContentLoaded', () => {
    setItem();
})