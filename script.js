


/* ==== ADD & Edit === */

function addIngredient() {
  const div = document.createElement("div");
  div.className = "row";
  div.innerHTML = `
    <input type="text" placeholder="Enter ingredient">
    <input type="text" placeholder="Enter quantity">
  `;
  document.getElementById("ingredients").appendChild(div);
}

let stepCounter = 1;

function addStep() {
  stepCounter++;

  const input = document.createElement("input");
  input.type = "text";
  input.placeholder = "Step " + stepCounter + ": Enter instructions";
  input.style.marginBottom = "10px";

  document.getElementById("steps").appendChild(input);
}

function goToMyRecipes() {
  window.location.href = "my-recipes.html";
}


/* ====  END === ADD & Edit === */
