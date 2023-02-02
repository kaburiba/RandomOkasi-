const getSearchSnacks = async (url = '', keyword) => {
    const res = await fetch(url, {
        method: 'POST',
        headers: {'Context-Type': 'application/json;'},
        body: JSON.stringify({ 'keyword': keyword })
    })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success:', data.status);
            const json = JSON.parse(data);
            return json
        })
        .catch((error) => {
            console.log('Error:', error);
        });
    return res
}

const updateItems = async () => {
    try {
        const url = "http://localhost/RandomOkasi-/function/getSearchSnacks.php";
        const keyword = document.getElementById("keyword").value
        const items = await getSearchSnacks(url, keyword)
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
    } catch (e) {
        console.log(e)
    }
}

window.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById("search_button");
    searchBtn.addEventListener('click', updateItems);
})