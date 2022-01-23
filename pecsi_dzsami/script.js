function randomRgbColor(){
    let red = Math.floor(Math.random() * 255);
    let green = Math.floor(Math.random() * 255);
    let blue = Math.floor(Math.random() * 255);
    document.getElementById("elsobekezdes").style.color = `rgb(${red},${green},${blue})`;
}
function whiteRgbColour(){
    let red = 9999;
    let green = 9999;
    let blue = 9999;
    document.getElementById("forras").style.color = `rgb(${red},${green},${blue})`;
}