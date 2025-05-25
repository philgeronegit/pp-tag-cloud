import { createApp } from "vue";
import MyButton from "./components/MyButton";
import MyTag from "./components/MyTag";
import "./style.css";

const myButton = document.getElementById("mon-bouton");
if (myButton) {
  console.log("Mounting <MyButton> component");
  createApp(MyButton, {
    label: myButton.dataset.label || "Bouton par défaut",
    onClick: () => console.log("Button was clicked")
  }).mount("#mon-bouton");
}

const myTags = document.querySelectorAll(".mon-tag");
if (myTags.length > 0) {
  console.log("Mounting <MyTag> component");
  myTags.forEach((tag) => {
    const label = tag.innerText;
    createApp(MyTag, {
      label: label || "Tag par défaut",
      color: tag.dataset.color
    }).mount(tag);
  });
}
