var title = document.getElementById("title");
var content = document.getElementById("content");
var btn = document.getElementById("btn");
var list = document.getElementById("list");

btn.addEventListener("click",function () {
    console.log(title.value);
    console.log(content.value);
    list.innerHTML = list.innerHTML + `
    <div class="left">
        <h2>${title.value}</h2>
        <p>${content.value}</p>
        <hr/>
    </div>
    `;
})