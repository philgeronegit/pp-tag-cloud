import { createApp } from "vue";
import MyButton from "./components/MyButton";
import "./style.css";

const myButton = document.getElementById("mon-bouton");
if (myButton) {
  console.log("Mounting <MyButton> component");
  createApp(MyButton, {
    label: myButton.dataset.label || "Bouton par défaut",
    onClick: () => console.log("Button was clicked")
  }).mount("#mon-bouton");
}
